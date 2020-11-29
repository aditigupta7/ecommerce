@extends('layouts.main')
@section('content')
 <!-- Page Add Section Begin -->
 <section class="page-add">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="page-breadcrumb">
                    <h2>Happy Shopping<span>.</span></h2>
                    <a href="#">Home</a>
                    <a href="#">Dresses</a>
                    <a class="active" href="#">Night Dresses</a>
                </div>
            </div>
            <div class="col-lg-8">
                <img src="{{ asset('img/add.jpg') }}" alt="">
            </div>
        </div>
    </div>
</section>
<!-- Page Add Section End -->
    <div class="container">
        <div class="row">

                @foreach ($products as $product)


                <div class="col-lg-6 col-md-6">
                    <div class="single-product-item">
                        <figure>

                        <a href="/product-page/{{$product->id}}">
                                <img src="{{ asset('storage/' . $product->image) }}" alt="">
                            </a>
                            <div class="p-status"></div>

                        </figure>

                        <div class="product-text">

                                <a href="#">
                                <h6>{{  $product->name }}</h6>
                                </a>
                                <p>${{ $product->price }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
    </div>
</div>
@endsection