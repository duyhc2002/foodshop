<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;
use Session;
class RegisterController extends Controller
{
	public function delete_customer($id){
    	Register::find($id)->delete();
    	return redirect()->back()->with('message', 'Deleted Successfully');
    }	
    public function customer_lists(){
    	$register = Register::all();
    	return view('admin.customers',compact('register'));
    }
    public function register_form(Request $req){
    	$data = $req->all();
    	$register = new Register();

		$register->username = $data['username'];
		$register->email = $data['email'];
		$register->password_not = $data['password'];
		$register->password = md5($data['password']);
		$register->phone = $data['phone'];
		$register->address = $data['address'];
		$register->save();
		 Session::put('customer_id',$register->id);
		 Session::put('customer_username',$data['username']);
		 return redirect()->to('/');

    }
     public function information_form($id,Request $req){
    	$data = $req->all();
    	$register = Register::find($id);

		$register->username = $data['username'];
		$register->email = $data['email'];
		$register->password_not = $data['password'];
		$register->password = md5($data['password']);
		$register->phone = $data['phone'];
		$register->address = $data['address'];
		$register->save();
		 Session::put('customer_id',$register->id);
		 Session::put('customer_username',$data['username']);
		 return redirect()->to('/');

    }
    public function information($id){
    	$req = Register::find($id);

    	return view('information',compact('req'));
    }
    public function login_form(Request $req){
    	$data = $req->all();
    	$register = Register::where('email',$data['email'])->where('password',md5($data['password']))->first();
    	if($register){
		 Session::put('login_customer',true);
		 Session::put('customer_username',$register->username);
		 Session::put('customer_id',$register->id);
		}

		 return redirect()->to('/');

    }
	public function login(){

        return view('Login');
    }
    public function logout(){

	     Session::put('customer_username',null);
	   
	    return redirect()->to('/');
    }
}
