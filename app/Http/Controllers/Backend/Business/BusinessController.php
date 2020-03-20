<?php

namespace App\Http\Controllers\Backend\Business;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Business\UpdateBusinessAccountRequest;
use App\Repositories\Business\BusinessRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Backend\ChangePasswordRequest;
use Illuminate\Support\Facades\Hash;

class BusinessController extends Controller
{
    private $businessRepository;

    public function __construct(BusinessRepositoryInterface $businessRepository)
    {
        $this->businessRepository = $businessRepository;
    }

    public function index()
    {
        return view('backend.business.index-shop');
    }


    public function create()
    {

    }


    public function store()
    {

    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {

    }


    public function destroy($id)
    {

    }

    public function getUpdateAccount()
    {
        $business = $this->businessRepository->show(Auth::guard('business')->user()->id);
        return view('backend.business.account_info', compact('business'));
    }

    public function postUpdateAccount(UpdateBusinessAccountRequest $request)
    {
        $data = $request->all();
        $this->businessRepository->update(Auth::guard('shops')->user()->id, $data);

        return redirect()->back()->with('notify', 'Cập nhật thành công');
    }

    public function getChangePassword()
    {
        return view('backend.shop.change_password');
    }

    public function postChangePassword(ChangePasswordRequest $request)
    {
        if (! Hash::check(Auth::guard('business')->user()->password,$request->password_old))
        {
            return redirect()->back()->with('notify','Sai mật khẩu cũ. Vui lòng thử lại');
        }
        else
        {
            $data = $request->all();
            $data['password'] = bcrypt($request->password);

            $this->businessRepository->update(Auth::guard('business')->user()->id, $data);

            return redirect()->back()->with('notify', 'Cập nhật thành công');
        }
    }

    public function logout()
    {
        Auth::guard('business')->logout();
        return redirect(route('login.business.get'));
    }
}
