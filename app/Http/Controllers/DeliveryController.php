<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\City;
use App\Province;
use App\Wards;
use App\Feeship;
use Mail;




class DeliveryController extends Controller
{


	 public function index()
    {
        return view('email');
    }
    public function sendmail(Request $request)
    {
    	$data = array();
    	$data['name'] = $request->name;
        $data['mes11'] = $request->mes;
       $name = $data['name'];
       $mes11 = $data['mes11'];
      // view('email.demo')->with('mes', $mes)->with('name', $name);
       Mail::send('email.demo', compact('name'), function($email) use($name){
       	$email->subject('câu hỏi của khách hàng');
       	$email->to('lyltn.21it@vku.udn.vn', $name);
       });
       
        $url_canonical = $request->url();
        //--seo
        
        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get(); 
      

        return view('pages.contact')->with('category',$cate_product)->with('url_canonical',$url_canonical); //1
       
    }


    /////
	public function update_delivery(Request $request){
		$data = $request->all();
		$fee_ship = Feeship::find($data['feeship_id']);
		$fee_value = rtrim($data['fee_value'],'.');
		$fee_ship->fee_feeship = $fee_value;
		$fee_ship->save();
	}
	public function select_feeship(){
		$feeship = Feeship::orderby('fee_id','DESC')->get();
		$output = '';
		$output .= '<div class="table-responsive">  
			<table class="table table-bordered">
				<thread> 
					<tr>
						<th>Tên thành phố</th>
						<th>Tên quận huyện</th> 
						<th>Tên xã phường</th>
						<th>Phí ship</th>
					</tr>  
				</thread>
				<tbody>
				';

				foreach($feeship as $key => $fee){

				$output.='
					<tr>
						<td>'.$fee->city->name_city.'</td>
						<td>'.$fee->province->name_quanhuyen.'</td>
						<td>'.$fee->wards->name_xaphuong.'</td>
						<td contenteditable data-feeship_id="'.$fee->fee_id.'" class="fee_feeship_edit">'.number_format($fee->fee_feeship,0,',','.').'</td>
					</tr>
					';
				}

				$output.='		
				</tbody>
				</table></div>
				';

				echo $output;

		
	}
	public function insert_delivery(Request $request){
		$data = $request->all();
		$fee_ship = new Feeship();
		$fee_ship->fee_matp = $data['city'];
		$fee_ship->fee_maqh = $data['province'];
		$fee_ship->fee_xaid = $data['wards'];
		$fee_ship->fee_feeship = $data['fee_ship'];
		$fee_ship->save();
	}
    public function delivery(Request $request){

    	$city = City::orderby('matp','ASC')->get();

    	return view('admin.delivery.add_delivery')->with(compact('city'));
    }
    public function select_delivery(Request $request){
    	$data = $request->all();
    	if($data['action']){
    		$output = '';
    		if($data['action']=="city"){
    			$select_province = Province::where('matp',$data['ma_id'])->orderby('maqh','ASC')->get();
    				$output.='<option>---Chọn quận huyện---</option>';
    			foreach($select_province as $key => $province){
    				$output.='<option value="'.$province->maqh.'">'.$province->name_quanhuyen.'</option>';
    			}

    		}else{

    			$select_wards = Wards::where('maqh',$data['ma_id'])->orderby('xaid','ASC')->get();
    			$output.='<option>---Chọn xã phường---</option>';
    			foreach($select_wards as $key => $ward){
    				$output.='<option value="'.$ward->xaid.'">'.$ward->name_xaphuong.'</option>';
    			}
    		}
    		echo $output;
    	}
    	
    }
}
