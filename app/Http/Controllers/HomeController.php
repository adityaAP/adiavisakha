<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('konten.home');

    }

    public function konten(){

        return view('konten.konten');
    }
}
