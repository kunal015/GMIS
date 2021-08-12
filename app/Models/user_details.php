<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class user_details extends Model
{
    public static function insertData($data){
           DB::table('user_details')->insert($data);
     }
}
