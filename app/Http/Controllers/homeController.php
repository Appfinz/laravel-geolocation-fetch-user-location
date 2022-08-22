<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;
class homeController extends Controller
{
    public function index(Request $request)
    {
        //$ip = request()->ip();
        $ip = '103.226.226.86';

        $data = \Location::get($ip);  ;

        //dd($data);
        return view('welcome',compact('data'));
    }
}
