<?php

namespace App\Http\Controllers;

use Illuminate\Http\Requests;

class Navbar extends Controller
{
    public function dosen() {
        return view('dosen');
    }

    public function news() {         
        return view('news'); 
    }

    public function profile() {         
        return view('profile'); 
    } 

    public function input() {         
        return view('input'); 
    } 

    public function inputdosen() {         
        return view('inputdosen'); 
    } 
}
