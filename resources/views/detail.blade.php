@extends('master')
@section("content")

    <div class=" custom-product">
       <div class="container">
           <div class="row">
               <div class="col-sm-6">
            <img class="details-img" src="{{$product['Gallery']}}"alt ="">
               </div>
               <div class="col-sm-6">
                <a href="/">Go back</a>
                <h2>{{$product['Name']}}</h2>
                   <h3> {{$product['Price']}}</h3>
                   <h4>{{$product['Description']}}</h4>
                   <h4>{{$product['Category']}}</h4>
                   <br><br>
                   <button class="btn btn-primary">Add to cart </button>
                   <br> <br>
                   <button class="btn btn-secondary">Order now </button>
                   <br><br>
               </div>
           </div>
       </div>

        </div>

@endsection
