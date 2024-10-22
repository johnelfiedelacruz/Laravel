<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InfoController extends Controller
{
    public  function index()
    {
        $info = DB::Table("info")->first();
        return view("welcome", ["info"=> $info]);
    }
}
