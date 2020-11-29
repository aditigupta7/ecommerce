@extends('layouts.main')
@section('content')

        <div class="container">
            <div class="row">
                    <div class="col-lg-10 offset-2">
                                <img style="width:400px:height:500px" class="img-fluid"
                                src="/storage/{{ $blog->image }}">
                    </div>
            </div>
                <div class="row">
                        <div class="col-lg-12">

                        <h3 class="display-3">{{ $blog->title}}</h3>
                        <p class="lead">{{ $blog->description }}</p>
                        </div>
                </div>

        </div>

@endsection