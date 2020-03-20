<?php

namespace App\Http\Controllers\Backend\Shop;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Shop\ChangePasswordRequest;
use App\Http\Requests\Backend\Shop\UpdateShopAccountRequest;
use App\Models\Backend\Shop\Shop;
use App\Repositories\Shop\ShopRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ShopController extends Controller
{
    private $shopRepository;

    public function __construct(ShopRepositoryInterface $shopRepository)
    {
        $this->shopRepository = $shopRepository;
    }

    public function index()
    {
        return view('backend.shop.index-shop');
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
        $shop = $this->shopRepository->show(Auth::guard('shops')->user()->id);
        return view('backend.shop.account_info', compact('shop'));
    }

    public function postUpdateAccount(UpdateShopAccountRequest $request)
    {
        $data = $request->all();
        $this->shopRepository->update(Auth::guard('shops')->user()->id, $data);

        return redirect()->back()->with('notify', 'Cập nhật thành công');
    }

    public function getChangePassword()
    {
        return view('backend.shop.change_password');
    }

    public function postChangePassword(ChangePasswordRequest $request)
    {
//        dd(Hash::check($request->password_old, Auth::guard('shops')->user()->password)  );
        if (! Hash::check(Auth::guard('shops')->user()->password,$request->password_old))
        {
            return redirect()->back()->with('notify','Sai mật khẩu cũ. Vui lòng thử lại');
        }
        else
        {
            $data = $request->all();
            $data['password'] = bcrypt($request->password);

            $this->shopRepository->update(Auth::guard('shops')->user()->id, $data);

            return redirect()->back()->with('notify', 'Cập nhật thành công');
        }
    }

    public function logout()
    {
        Auth::guard('shops')->logout();
        return redirect(route('login.shop.get'));
    }
}
