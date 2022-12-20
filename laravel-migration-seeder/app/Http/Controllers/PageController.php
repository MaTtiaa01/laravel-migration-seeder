<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class PageController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function train()
    {
        // $trains = Train::all();
        // dd($trains);
        return view('train');
    }
    public function about()
    {
        return view('about');
    }
}
