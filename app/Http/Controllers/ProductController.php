<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
class ProductController extends Controller
{
    //
    function index(){
        $data = Product::all();
        return view('product',['product'=>$data]);
    }
}
