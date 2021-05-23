@extends('master')
@section("content")
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img class="detail-img" src="{{$product['gallery']}}" alt="">
        </div>
        <div class="col-sm-6">
            <a href="/">Go Back</a>
            <h2>{{$product['name']}}</h2>
            <h3>Price : {{$product['price']}}</h3>
            <h4>Category : {{$product['category']}}</h4>
            <br></br>
            <button class="btn btn-primary">Add to Cart</button>
            <br></br>
            <button class="btn btn-success">Buy Now</button>
            <br></br>
        </div>
    </div>
    <br></br>
<div style="clear:both" class="panel panel-default">
  <div class="panel-body">
  Product description:<br>
  {{$product['description']}}
  </div>
</div>
</div>
@endsection