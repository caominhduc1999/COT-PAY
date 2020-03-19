<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Shop\StoreShopRequest;
use App\Repositories\Shop\ShopRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{

    private $shopRepository;

    public function __construct(ShopRepository $shopRepository)
    {

        $this->shopRepository = $shopRepository;
    }

    public function createShopAccount(){
        $cities = DB::table('city')->where('type', 0)->get();

        return view('frontend.tao-tai-khoan-shop', compact('cities'));
    }

    public function storeShopAccount(Request $request, StoreShopRequest $storeShopRequest){
        $data = $request->validate($storeShopRequest->rules(), $storeShopRequest->messages());

        $this->shopRepository->store($data);

        return redirect()->back()->with('notify', 'Thêm thành công');
    }







    // load quan huyen
    public function getLocation(Request $request){
        $parentID = $request->parent;
        if ($parentID)
        {
            $location = DB::table('city')->where('parent_id',$parentID)->get();

            return response(['data' =>  $location]);
        }
    }
}
