<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Zip_code;
use App\Http\Resources\ZipCode;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Resources\Json\JsonResource;

class ApiController extends Controller
{

    public function index($zc) : JsonResource
    {
        //buscamos en la base de datos para que le sean enviados los datos al Resources
        $zip = DB::table('zip_codes')->where('d_codigo',$zc)->get();
        if (empty($zip)){
            abort(404);
        }

    $zip_code = new ZipCode(json_decode($zip->toArray())->data);
        return json_decode($zip_code)    ;

    }
}
