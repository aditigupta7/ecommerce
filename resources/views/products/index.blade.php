@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row">
        <div class="col-4 offset-4">
            <h3>Products</h3>
        </div>
    </div>

    @can('create', App\Product::class)

    <div class="row">
        <div class="col-4 offset-4">
            <h3><strong><a href="/products/create">Add Products</a></strong></h3>
        </div>
    </div>

    @endcan

    @forelse ($products as $product)

        @if($product->image)
        <div class="row py-5">
            <div class="col-md-4 offset-4">
                <h1>{{  $product->name}}</h1>
                  <img  src="{{ asset('storage/' . $product->image) }}"  class="img-fluid" >
                  <p>{{$product->description}}</p>
                   <p>{{$product->price}}</p>

                @can('delete' , App\Product::class)
                <div class="d-flex justify-content-between">
                        <a class="btn btn-primary" href = "/products/{{$product->id}}/edit">EDIT</a>
                        <form action="/products/{{ $product->id }}" method="POST" >
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger">DELETE</button>
                        </form>
                </div>
                @endcan

            </div>
         </div>


    @endif
</div>

@empty
<p>No Products</P>
@endforelse
@endsection