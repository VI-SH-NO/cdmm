<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function entreprise()
    {
        return view('entreprise');
    }
    public function support()
    {
        return view('index');
    }
    public function about()
    {
        return view('index');
    }
}
