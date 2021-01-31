@extends('master')
@section("content")

    <div class=" custom-product">
        <div  class="trending-wrapper">
            <h3> Total item results </h3>
            @foreach($product as $item)
                <div class="searched-item">
                    <a href="detail/{{$item['id']}}}">
                        <img class="trending-image" src="{{$item['Gallery']}}" ->
                        <div class="">
                            <h2>   {{$item['Name']}} </h2>
                            <h5>   {{$item['Description']}} </h5>
                        </div>
                    </a>
                </div>

            @endforeach
        </div>
    </div>
@endsection
