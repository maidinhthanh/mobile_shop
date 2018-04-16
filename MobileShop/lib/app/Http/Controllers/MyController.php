<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;

use Session;

use App\Http\Requests\LoginRequest;

use App\Http\Requests\AddUserRequest;

use App\Http\Requests\EditUserRequest;

use Auth;

use App\Models\LoginUser;

class MyController extends Controller
{
	//Login
    public function getLogin(){
    	return view('backend/login');
    }
    public function postLogin(LoginRequest $request)
    {
        $data = [
            'email'=>$request->email,
            'password'=>$request->password,
        ];
        if ($request->remember = 'Remember Me') {
            $remember = true;
        } else {
            $remember = false;
        }
        if (Auth::attempt($data, $remember)) {
            return redirect('backend/home');
        } else {
            return view('backend/login', ['message', 'Tài Khoản không tồn tại']);
        }
    }

    public function home()
    {
        $user = Auth::user();
        Session::put('user',$user->fullname);
        return view('backend/index');
    }
    
     public function logout()
    {
        Auth::logout();
        return redirect('backend/login');
    }

}
