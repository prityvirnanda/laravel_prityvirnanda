<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function berita()
{
    return view('user.berita');
}

public function profile()
{
    return view('profile');
}

public function aktivitas()
{
    return view('aktivitas');
}
public function biodata ()
{
    return view('user.berita');
}
public function home()
{
    return view('home');
}
public function login()
{
    return view('auth.login');
}
public function inputberita()
{
    return view('inputberita');
}
}