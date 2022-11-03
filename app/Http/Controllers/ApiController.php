<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Zip_code;
use App\Http\Resources\ZipCode;
use Illuminate\Support\Facades\DB;


class ApiController extends Controller
{

    public function index($zc)
    {
        $zip = DB::table('zip_codes')->where('zip_code',$zc)->get();
        //$zip = zip_code::where('zip_code',$zc)->get();
        return new ZipCode($zip);

    }
}
