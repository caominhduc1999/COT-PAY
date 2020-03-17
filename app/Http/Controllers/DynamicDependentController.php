<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DynamicDependentController extends Controller
{
    public function index()
    {
        $country_list = DB::table('data')->groupBy('name')->get();

        return view('index', compact('country_list'));
    }

    function fetch(Request $request)
    {
        if ($request->ajax()){
            $value = $request->get('value');

            $data = DB::table('data')
                ->where('name','=', $value)
                ->get();

            $output = '';
            foreach($data as $row)
            {
                $output .= '<option value="'.$row->districts.'">'.$row->districts.'</option>';
            }
            return $output;
        }

    }
}
