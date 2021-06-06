<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdStore extends Controller
{
    //
    function index(){
        return view('layouts.store');
    }
}
