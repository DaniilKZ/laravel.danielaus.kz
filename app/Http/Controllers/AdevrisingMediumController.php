<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdevrisingMediumController extends Controller
{
    function index(){
        $bilbords = DB::select('select * from admin_point_bilbords ');

        return view('advertisingmedium',  ['point' => $bilbords]);
    }

}
