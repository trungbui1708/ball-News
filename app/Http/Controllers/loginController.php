<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;

class loginController extends Controller
{
    public function getLogin()
    {
    	return view('admin.login.login');
    }
    public function postLogin(Request $request)
    {
    	$this -> validate($request,[
    		'email'=>'required',
    		'password'=>'required',
    		],[
    		'email.required'=>'vui lòng nhập vào email',
    		'password.required'=>'Vui lòng nhập mật khẩu',
    		]);
    	$login =['email'=>$request->email,'password'=>$request->password];
    	if(Auth::attempt($login))
    	{
    		return redirect('admin/user/list');
    	}
    	else 
    	{
    		return redirect()->back();
    	}

    }
}
