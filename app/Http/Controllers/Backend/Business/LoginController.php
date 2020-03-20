<?php

namespace App\Http\Controllers\Backend\Business;

use App\Http\Requests\Backend\Business\LoginBusinessRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function getLogin()
    {
        return view('frontend.Business.login_business');
    }
    public function postLogin(LoginBusinessRequest $request)
    {
        
    }
}
