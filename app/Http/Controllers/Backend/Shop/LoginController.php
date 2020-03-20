<?php

namespace App\Http\Controllers\Backend\Shop;

use App\Http\Controllers\Controller;
use App\Models\Backend\Shop\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{

    public function getLogin(){

        if (Auth::guard('shops')->check())
        {
            return redirect(route('shop.index'));
        }
        return view('frontend.shop.login_shop');
    }

    public function postLogin(){
        $phone = \request()->phone;
        $password = \request()->password;

        if (Auth::guard('shops')->attempt(['phone'=>$phone, 'password'=>$password], \request()->remember)){
            return redirect(route('shop.index'));
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
