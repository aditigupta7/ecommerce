@extends('layouts.main')
@section('content')
 <!-- Page Add Section Begin -->
 <section class="page-add">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="page-breadcrumb">
                    <h2>Blogs<span>.</span></h2>
                </div>
            </div>
            <div class="col-lg-8">
                <img src="{{ asset('img/add.jpg') }}" alt="">
            </div>
        </div>
    </div>
</section>
<div class="container">
        <div class="row">
            @foreach ($blogs as $blog)


                <div class="col-sm-12">
                <a href="/single-blog/{{$blog->id}}"> <img style="max-width:100%;height:700px" class="img-fluid" src="/storage/{{ $blog->image}}"></a>
                </div>
                <div class="col-lg-12">
                    <p class="lead">{{ $blog->title }}</p>
                </div>

            @endforeach
        </div>
</div>
@endsection