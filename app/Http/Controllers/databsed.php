<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class databsed extends Controller
{
    //
    function index()
    {
        echo " Hello from databsed controller";
        // return DB::select("select * from users");
    }
}
