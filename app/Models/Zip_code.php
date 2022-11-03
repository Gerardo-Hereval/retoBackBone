<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zip_code extends Model
{
    use HasFactory;


    protected $primaryKey= 'd_codigo';

    public function getRouteKeyName(){
    return 'd_codigo';
    }

    protected $table = 'd_codigo';

}
