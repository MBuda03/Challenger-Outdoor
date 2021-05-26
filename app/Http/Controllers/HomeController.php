<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    function index()
    {

        $newProducts = Product::latest()->take(5)->get();
        $data = ['newProducts' => $newProducts];


        return view('home', ['data'=>$data]);

       //return $data;
    }
}
