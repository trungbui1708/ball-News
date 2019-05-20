<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
class UserController extends Controller
{
    public function getList()
    {
    	$user = User::all();
    	return view('admin.User.List',['user'=>$user]);
    }
    public function getAdd()
    {
    	$user =User::all();
    	return view('admin.User.Add',['user'=>$user]);
    }
    public function postAdd(Request $request)
    {
    	$this -> validate($request,[
    		'first_name'=>'required|min:3',
    		'last_name'=>'required|min:3',
    		'user_name'=>'required|min:3|unique:users,user_name',
    		'email'=>'required|min:3|unique:users,email',
    		'password'=>'required|min:3',
    		'password'=>'required|same:password'
    		],[
    		'first_name.required'=>'vui lòng nhập vào họ',
    		'first_name.min'=>'Họ ít nhất 3 ký tự',
    		'last_name.required'=>'vui lòng nhập vào tên',
    		'last_name.min'=>'Tên ít nhất 3 ký tự',
    		'user_name.required'=>'vui lòng nhập vào tên đăng nhập',
    		'user_name.min'=>'Tên đăng nhập ít nhất 3 ký tự',
    		'user_name.unique'=>'Tên đăng nhập đã tồn tại',
    		'email.required'=>'vui lòng nhập vào email',
    		'email.min'=>'email ít nhất 3 ký tự',
    		'email.unique'=>'email đã tồn tại',
    		'password.required'=>'Vui lòng nhập mật khẩu',
    		'password.same'=>'Nhập khẩu nhập lại sai'
    		]);
    	$user = new User;
    	$user -> first_name = $request -> first_name;
    	$user-> last_name = $request -> last_name;
    	$user-> user_name = $request -> user_name;
    	$user-> email = $request -> email;
    	$user-> password = bcrypt($request -> password);
    	$user -> save();
    	return redirect ('admin/user/list') -> with('notifi','Add successfully');
    }

    public function getDelete ($id)
    {
        $user = User::find($id);
        $user -> delete();
        return redirect ('admin/user/list') -> with('notifi','Delete successfully');
    }

}
