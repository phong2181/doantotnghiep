<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\authrequest;
use Illuminate\Support\Facades\Auth;

class UserAdmin extends Controller
{
    public function admin_login(){
        if(Auth::id() > 0){
            return redirect()->route('dashboard');
        }
        return view('AdminView.Login');
    }

    public function login(authrequest $request){
        $success = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if(Auth::attempt($success)){
            return redirect()->route('dashboard')->with('success','Đăng nhập thành công!');
        }else{
            return redirect()->route('admin_login')->with('error','Email hoặc mật khẩu không chính xác!');
        }
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin_login');
    }
}
