<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class homepage extends Controller
{
    public function home(){
        return view('homepage');
    }

   public function settingsProfile(){
    return view('user.setting');
   }

   public function verifyEmail(){
    return view('user.verify-email');
   }
}
