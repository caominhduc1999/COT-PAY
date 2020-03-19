<?php

namespace App\Http\Controllers\Backend\Shop;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Shop\StoreShopRequest;
use App\Http\Requests\Backend\Shop\UpdateShopRequest;
use App\Repositories\Shop\ShopRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{
    private $shopRepository;

    public function __construct(ShopRepositoryInterface $shopRepository)
    {
        $this->shopRepository = $shopRepository;
    }

    public function index()
    {
        $data = $this->shopRepository->list();
        dd($data);
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
        $shop = $this->shopRepository->show($id);
        return view('backend.shop.thong-tin-tai-khoan', compact('shop'));
    }

    public function update(Request $request, $id)
    {

    }



    public function destroy($id)
    {

    }

    public function updateAccount(Request $request, $id, UpdateShopRequest $updateShopRequest)
    {
        $data = $request->validate($updateShopRequest->rules(), $updateShopRequest->messages());

        $this->shopRepository->update($id, $data);

        return redirect()->back()->with('notify', 'Cập nhật thành công');
    }


}
