@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row">
        <div class="col-4 offset-4">
            <h3>Blogs</h3>
            @can('update', App\Blog::class)
            <h3><strong><a href="/blogs/create">Add New Blog</a></strong></h3>
            @endcan
        </div>
    </div>
    @forelse ($blogs as $blog)

        @if( $blog->image )
        <div class="row py-5">
            <div class="col-md-4 offset-4">
                <h3>{{  $blog->title }}</h3>
                  <img  src="{{ asset('storage/' . $blog->image) }}"  class="img-fluid" >
                  <strong>Description: </strong>
                  <p>{{ $blog->description }}</p>
                  <strong>Slug: </strong>
                  <p>{{ $blog->slug }}</p>
                  <strong>Author: </strong>
                  <p>{{ $blog->author }}</p>
                @can('delete', App\Blog::class)
                <div class="d-flex justify-content-between">
                        <a class="btn btn-primary" href = "/blogs/{{ $blog->id }}/edit">EDIT</a>
                <form action="/blogs/{{ $blog->id }}" method="POST" >
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
<p>No Blogs</P>
@endforelse
@endsection