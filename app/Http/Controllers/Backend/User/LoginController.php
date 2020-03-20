<?php

namespace App\Http\Controllers\Backend\User;

use App\Http\Requests\Backend\User\LoginUserRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function getLogin()
    {
        return view('frontend.User.login_user');
    }
    public function postLogin(LoginUserRequest $request)
    {
        $phone = $request->phone;
        $password = $request->password;
        if(Auth::attempt(['phone' => $phone, 'password' => $password], $request->remember))
        {
            return redirect(route('customer.index'));
        }else
        {
            return redirect()->back()->with('danger', 'Tài khoản mật khẩu không chính xác !')->withInput();
        }
    }
}
