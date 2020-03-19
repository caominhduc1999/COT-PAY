<?php

namespace App\Http\Controllers\Backend\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{

    public function getLogin(){

        if (Auth::guard('shops')->check())
        {
            return view('backend.shop.index-shop');
        }
        return view('frontend.dang-nhap');
    }

    public function postLogin(){
        $phone = \request()->phone;
        $password = \request()->password;
        if (Auth::guard('shops')->attempt(['phone'=>$phone, 'password'=>$password], \request()->remember)){
            return view('backend.shop.index-shop');
        }
        else{
            return redirect()->back()->with('notify','Tài khoản hoặc mật khẩu không chính xác. Vui lòng thử lại !');
        }
    }

    public function logout(){
        Auth::guard('shops')->logout();
        return redirect(route('frontend.get.login'));
    }
}
