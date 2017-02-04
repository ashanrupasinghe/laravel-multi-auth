<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\User;
use App\Customer;
use App\Admin;

class LoginController extends Controller {
	public function showLoginForm() {
		return view ( 'login' );
	}
	public function login(Request $request) {
		$email=$request->get('email');
		$password=$request->get('password');
		
		$user=User::select(DB::Raw('COUNT(id) as usercount'))->where('email','=',$email)->first();		
		$customer=Customer::select(DB::Raw('COUNT(id) as usercount'))->where('email','=',$email)->first();
		$admin=Admin::select(DB::Raw('COUNT(id) as usercount'))->where('email','=',$email)->first();
		//echo $user->usercount.'<br>'.$customer->usercount.'<br>'.$admin->usercount;
		
		//dd($user);
		if($user->usercount>0){
			return redirect()->route('loginuser');
		}elseif($customer->usercount>0){
			return redirect()->route('logincustomer');
		}elseif($admin->usercount>0){
			return redirect()->route('loginadmin');
		}else{
			return back()->withInput();
		}
	}
}
