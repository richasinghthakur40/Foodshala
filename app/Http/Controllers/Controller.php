<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Http\Back;
use DB;
use Redirect;
use isEmpty;
use Storage;
use Session;
use Artisaninweb\SoapWrapper\Facades\SoapWrapper;
use SoapClient;
use SoapHeader;
use DateTime;
use App\User;
use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
	public function login_page()	
	{
		return view('login_page');
	}
	public function regPage()	
	{
		return view('regPage');
	}
	public function custreg(Request $req)	
	{
		
    $name=$req->input('name');
    $email=$req->input('email');
    $password=$req->input('password');
    $preference=$req->input('preference');
	$type=$req->input('type');
    
    $data=array('name'=>$name,'email'=>$email,'password'=>$password,'preference'=>$preference,'type'=>$type);
   
    DB::table('register_customer')->insert($data);
	//dd($data);

	return redirect::to('login_page');
	}
	
	
	public function menu()	
	{
		return view('menu');
	}
	public function addmenu(Request $req)	
	{
		
    $dishname=$req->input('dishname');
    $amount=$req->input('amount');

    $data=array('menu_name'=>$dishname,'amount'=>$amount);
   
    DB::table('menu')->insert($data);
	//dd($data);

	return redirect::to('menu');
	}
	
	public function restaurant_page()	
	{
		return view('restaurant_page');
	}
	public function restaurantreg(Request $req)	
	{
	 $restaurant_name=$req->input('restaurant_name');   	
    $name=$req->input('name');
    $email=$req->input('email');
    $password=$req->input('password');
    $type=$req->input('type');
    
     $data=array('restaurant_name'=>$restaurant_name,'name'=>$name,'email'=>$email,'password'=>$password,'type'=>$type);
  
    DB::table('register_customer')->insert($data);
	//dd($data);

	return redirect::to('login_page');
	}
	
	public function welcome()	
	{
		return view('welcome');
	}
	
	public function login(Request $req)	
	{
		$email=$req->input('email');
		
		$password=$req->input('password');
		
		$type=$req->input('type');
    
		$data=DB::table('register_customer')->WHERE('email',$email)->first();
		if(Restaurant==$type)
		{
			if($email==$data->email && $password==$data->password)
			{
				return redirect::to('menu');
			}
			else
				return redirect::to('login_page');	
			
		}
		if(Customer==$type)
		{
			if($email==$data->email && $password==$data->password)
			{
				return redirect::to('getmenu');
			}
			else
				return redirect::to('login_page');	
			
		}
		
	}
	public function getmenu()	
	{
		return view('getmenu');
	}
	
	
}






