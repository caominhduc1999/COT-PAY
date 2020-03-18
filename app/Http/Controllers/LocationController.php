<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LocationController extends Controller
{
    public function index()
    {
        $cities = DB::table('city')->where('type', 0)->get();

        return view('city', compact('cities'));
    }

    public function getLocation(Request $request){
        $parentID = $request->parent;
        if ($parentID)
        {
            $location = DB::table('city')->where('parent_id',$parentID)->get();

            return response(['data' =>  $location]);
        }
    }
}
