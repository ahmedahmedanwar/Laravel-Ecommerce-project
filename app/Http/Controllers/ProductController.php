<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prouduct;
class ProductController extends Controller
{
    //
    function index(){
        $data = Prouduct::all();
        return view('product',['product'=>$data]);
    }
}
