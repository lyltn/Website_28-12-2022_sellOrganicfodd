<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Social;
use Socialite;
use App\Login;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Validator;
use App\Rules\Captcha; 
use Mail;
class AdminController extends Controller
{


    public function forgetpass(){
        return view('pages.signup');
    }
    public function createnewpass(Request $request){
        $data = array();
        $data['email'] = $request->email;
      
       $email11 = $data['email'];
       Session::put('email11',$email11);
       $br = DB::table('tbl_customers')->select('customer_name')->where('customer_email',$email11)->first();
       $name ="";
       foreach($br as $key=>$val){
        $name = $val;
      
    }
       Mail::send('pages.forgotpass', compact('name'), function($email) use($name, $email11){
        $email->subject('forgot pass');
        $email->to($email11, $name);
        
       });
    return view('pages.maxn');

    }


    public function newpass(Request $request){
         $data = array();
        $em = Session::get('email11');
        $br = DB::table('tbl_customers')->select('customer_name')->where('customer_email',$em)->first();
        // retrun $br;
       $name ="";
       foreach($br as $key=>$val){
        $name = $val;
      
    }
       $result = DB::table('tbl_customers')->where('customer_email',$em)->where('customer_name',$name)->first();
        $data['customer_name'] = $result->customer_name;
        $data['customer_password'] = md5($request->pass);
        $data['customer_phone'] = $result->customer_phone;
        $data['customer_id'] = $result->customer_id;
        DB::table('tbl_customers')->where('customer_email',$em)->update($data);
        Session::put('customer_id',$result->customer_id);
            return Redirect::to('/checkout');
    }
    public function login_google(){
        return Socialite::driver('google')->redirect();
    }
    public function callback_google(){
            $users = Socialite::driver('google')->stateless()->user(); 
            $authUser = $this->findOrCreateUser($users,'google');
            $account_name = Login::where('admin_id',$authUser->user)->first();
            Session::put('admin_name',$account_name->admin_name);
            Session::put('admin_id',$account_name->admin_id);
            return redirect('/dashboard')->with('message', 'Đăng nhập Admin thành công');  
    }
    public function findOrCreateUser($users, $provider){
            $authUser = Social::where('provider_user_id', $users->id)->first();
            if($authUser){

                return $authUser;
            }
          
            $hieu = new Social([
                'provider_user_id' => $users->id,
                'provider' => strtoupper($provider)
            ]);

            $orang = Login::where('admin_email',$users->email)->first();

                if(!$orang){
                    $orang = Login::create([
                        'admin_name' => $users->name,
                        'admin_email' => $users->email,
                        'admin_password' => '',
                        'admin_phone' => '',
                        'admin_status' => 1
                        
                    ]);
                }

            $hieu->login()->associate($orang);
                
            $hieu->save();

            $account_name = Login::where('admin_id',$hieu->user)->first();
            Session::put('admin_name',$account_name->admin_name);
            Session::put('admin_id',$account_name->admin_id); 
          
            return redirect('/dashboard')->with('message', 'Đăng nhập Admin thành công');


    }


    public function login_facebook(){
        return Socialite::driver('facebook')->redirect();
    }

    public function callback_facebook(){
        $provider = Socialite::driver('facebook')->user();
        $account = Social::where('provider','facebook')->where('provider_user_id',$provider->getId())->first();
        if($account){
            //login in vao trang quan tri  
            $account_name = Login::where('admin_id',$account->user)->first();
            Session::put('admin_name',$account_name->admin_name);
            Session::put('admin_id',$account_name->admin_id);
            return redirect('/dashboard')->with('message', 'Đăng nhập Admin thành công');
        }else{

            $hieu = new Social([
                'provider_user_id' => $provider->getId(),
                'provider' => 'facebook'
            ]);

            $orang = Login::where('admin_email',$provider->getEmail())->first();

            if(!$orang){
                $orang = Login::create([
                    'admin_name' => $provider->getName(),
                    'admin_email' => $provider->getEmail(),
                    'admin_password' => '',
                    'admin_phone' => ''
                    
                ]);
            }
            $hieu->login()->associate($orang);
            $hieu->save();

            $account_name = Login::where('admin_id',$account->user)->first();
            Session::put('admin_name',$account_name->admin_name);
            Session::put('admin_id',$account_name->admin_id);
            return redirect('/dashboard')->with('message', 'Đăng nhập Admin thành công');
        } 
    }

    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin')->send();
        }
    }

    public function index(){
    	return view('admin_login');
    }
    public function show_dashboard(){
        $this->AuthLogin();
        $edit_product = DB::table('tbl_order')->select(DB::raw('COUNT(*) AS num'),DB::raw(' MONTH(created_at) month'))
                     ->groupBy('month')->orderby('month','asc')
                     ->get();
         $tien = DB::table('tbl_order_details')->join('tbl_order','tbl_order.order_code','=','tbl_order_details.order_code')->select(DB::raw('sum(product_price) AS num'),DB::raw(' MONTH(tbl_order.created_at) month'))
                     ->groupBy('month')->orderby('month','asc')
                     ->get(); 

        $user =  DB::table('tbl_customers')->select(DB::raw('COUNT(customer_id) AS n'))
                     ->get(); 
         $or =  DB::table('tbl_order')->select(DB::raw('COUNT(order_id) AS n'))
                     ->get();
         $sale =  DB::table('tbl_order_details')->select(DB::raw('sum(product_price) AS n'))
                     ->get();                                                 
        $manager_product  = view('admin.dashboard')->with('soluong',$edit_product)->with('tien',$tien)->with('user',$user)->with('order',$or)->with('sale',$sale);  
    	return view('admin_layout')->with('admin.dashboard', $manager_product);
    }
    public function dashboard(Request $request){
        //$data = $request->all();
        $data = $request->validate([
            //validation laravel 
            'admin_email' => 'required',
            'admin_password' => 'required',
            'g-recaptcha-response' => new Captcha(),    //dòng kiểm tra Captcha
        ]);

        $admin_email = $data['admin_email'];
        $admin_password = md5($data['admin_password']);
        $login = Login::where('admin_email',$admin_email)->where('admin_password',$admin_password)->first();
        if($login){
            $login_count = $login->count();
            if($login_count>0){
                Session::put('admin_name',$login->admin_name);
                Session::put('admin_id',$login->admin_id);
                return Redirect::to('/dashboard');
            }
        }else{
                Session::put('message','Mật khẩu hoặc tài khoản bị sai.Làm ơn nhập lại');
                return Redirect::to('/admin');
        }
       

    }
    public function logout(){
        $this->AuthLogin();
        Session::put('admin_name',null);
        Session::put('admin_id',null);
        return Redirect::to('/admin');
    }
     public function createpass(Request $request){
        $ma = $request->code;
        if($ma == Session::get('code')){
            Session::forget('code');
           return view('pages.newpass'); 
        }else{
            Session::put('mess','Mã xác nhận không đúng');
            return Redirect::to('/forgetpass');
        }
    }
}
