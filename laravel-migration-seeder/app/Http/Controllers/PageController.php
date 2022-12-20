<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function train()
    {
        return view('train');
    }
    public function about()
    {
        return view('about');
    }
}
