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
       // return view('product',compact('data'));
    }
        function detail($id){

            $data = Product::find($id);
            return view('detail',['product'=>$data]);

        }
        function search(Request $req){
         $data=Product::where('name','like','%'.$req->input('query').'%')->get();
            return view('search',['product'=>$data]);
        }
}
