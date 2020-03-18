<?php

namespace App\Http\Controllers\Backend\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function login(){
        return view('frontend.dang-nhap');
    }

    public function postLogin(){
        $phone = \request()->phone;
        $password = \request()->password;
        if (Auth::attempt(['phone'=>$phone, 'password'=>$password], \request()->remember)){
            return redirect('backend.shop.index-shop');
        }
        else{
            return redirect()->back()->with('Tài khoản hoặc mật khẩu không chính xác. Vui lòng thử lại !');
        }

    }
}
