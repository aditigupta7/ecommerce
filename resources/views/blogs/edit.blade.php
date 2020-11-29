@extends('layouts.app')

@section('content')
<div class="container">
<form action="/blogs/{{ $blog->id }}" enctype="multipart/form-data" method="POST">
        @method('PATCH')
        @csrf

        <div class="row">
            <div class="col-8 offset-2">

                <div class="row">
                    <h1>Edit Blog</h1>
                </div>
                <div class="form-group row">
                    <label for="title" class="col-md-4 col-form-label">Blog Title</label>

                    <input id="title"
                           type="text"
                           class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}"
                           name="title"

                           value="{{ $blog->title }}"
                           autocomplete="off" autofocus>

                    @if ($errors->has('title'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('title') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group row">
                    <label for="description" class="col-md-4 col-form-label">Blog Description</label>

                    <input id="description"
                    type="text"
                    class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}"
                    name="description"

                    value="{{ $blog->description }}"
                    autocomplete="off" autofocus>

                    @if ($errors->has('description'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('description') }}</strong>
                        </span>
                    @endif
                </div>


                <div class="form-group row">
                    <label for="author" class="col-md-4 col-form-label">Blog Author</label>

                    <input id="author"
                    type="text"
                    class="form-control{{ $errors->has('author') ? ' is-invalid' : '' }}"
                    name="author"

                    value="{{ $blog->author }}"
                    autocomplete="off" autofocus>

                    @if ($errors->has('author'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('author') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group row">
                    <label for="slug" class="col-md-4 col-form-label">Blog Slug</label>

                    <input id="slug"
                    type="text"
                    class="form-control{{ $errors->has('slug') ? ' is-invalid' : '' }}"
                    name="slug"

                    value="{{ $blog->slug }}"
                    autocomplete="off" autofocus>

                    @if ($errors->has('slug'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('slug') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group row">
                    <label for="image" class="col-md-4 col-form-label">Blog Image</label>

                    <input type="file" class="form-control-file" id="image" name="image">

                    @if ($errors->has('image'))
                        <strong>{{ $errors->first('image') }}</strong>
                    @endif
                </div>


                <div class="row pt-4">
                    <button class="btn btn-primary">Update</button>
                </div>

            </div>
        </div>
    </form>
</div>
@endsection
