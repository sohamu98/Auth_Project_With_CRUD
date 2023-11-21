@extends('products.layout')

@section('content')
    
<br>
<div class="row">
    <div class="col align-self-start">
      <a class="btn btn-primary" href="{{route('products.index')}}">All products</a>
    </div>
   
  </div>
  <br>

  <div class="container p-5">



        <div class="mb-3">
          
          <h3> Name : {{$product->name}}</h3>
        </div>

        <div class="mb-3">
            <label for="" class="form-label"><h3>Details :</h3></label>
            
               <p>{{$product->details}}</p>
          </div>
          <img src="/images/{{$product->image}}" width="300px">
          <div class="mb-3">
          </div>
   </div>

@endsection