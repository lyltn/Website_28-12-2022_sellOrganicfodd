<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Session;
use App\Http\Requests;

use Illuminate\Support\Facades\Redirect;
session_start();

class HomeControllertt extends Controller
{
    public function index(){
        return view('index');
    }
    public function shoping_cart(){
        return view('fontend.shoping_cart');
    }
}
