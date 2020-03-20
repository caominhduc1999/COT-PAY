<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Business\StoreBusinessAccountRequest;
use App\Http\Requests\Backend\Shop\StoreShopAccountRequest;
use App\Http\Requests\Backend\User\StoreUserAccountRequest;
use App\Repositories\Business\BusinessRepository;
use App\Repositories\Shop\ShopRepository;
use App\Repositories\User\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PageController extends Controller
{
    private $cities;
    private $shopRepository;
    private $userRepository;
    private $businessRepository;


    public function __construct(ShopRepository $shopRepository, UserRepository $userRepository, BusinessRepository $businessRepository)
    {
        $this->cities = DB::table('city')->where('type', 0)->get();
        $this->shopRepository = $shopRepository;
        $this->userRepository = $userRepository;
        $this->businessRepository = $businessRepository;
    }

    public function createShopAccount(){
        return view('frontend.shop.create_account_shop', ['cities'=>$this->cities]);
    }

    public function storeShopAccount(StoreShopAccountRequest $request){
        $data = $request->all();
        $data['code'] = 'S'.mt_rand(10000000,99999999);
        $this->shopRepository->store($data);

        return redirect()->back()->with('notify', 'Thêm thành công tài khoản shop');
    }

    public function createUserAccount(){
        return view('frontend.user.create_account_user',['cities' => $this->cities]);
    }

    public function storeUserAccount(StoreUserAccountRequest $request){
        $data = $request->all();
        $data['code'] = 'U'.mt_rand(10000000,99999999);
        $this->userRepository->store($data);

        return redirect()->back()->with('notify', 'Thêm thành công tài khoản người dùng');
    }

    public function createBusinessAccount(){
        return view('frontend.business.create_account_business',['cities' => $this->cities]);
    }

    public function storeBusinessAccount(StoreBusinessAccountRequest $request){
        $data = $request->all();
        $data['code'] = 'B'.mt_rand(10000000,99999999);
        $this->businessRepository->store($data);

        return redirect()->back()->with('notify', 'Thêm thành công tài khoản doanh nghiệp');
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
