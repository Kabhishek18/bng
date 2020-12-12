<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class HomeController extends Controller
{
    public function index()
    {
        echo view('front/include/header');
        echo view('front/home');
        echo view('front/include/footer');

    }
    public function show()
    {


    }
}
