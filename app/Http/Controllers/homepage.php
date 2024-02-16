<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homepage extends Controller
{
    public function home(){
        return view('homepage');
    }
}
