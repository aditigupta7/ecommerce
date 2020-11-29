@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/products" enctype="multipart/form-data" method="post">
        @csrf

        <div class="row">
            <div class="col-8 offset-2">

                <div class="row">
                    <h1>Add New Product</h1>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label">Product Name</label>

                    <input id="name"
                           type="text"
                           class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                           name="name"
                           value="{{ old('name') }}"
                           autocomplete="" autofocus>

                    @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group row">
                    <label for="description" class="col-md-4 col-form-label">Product Description</label>

                    <textarea id="description"
                           type="text"
                           class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}"
                           name="description"
                           value="{{ old('description') }}"
                           autocomplete="description" autofocus></textarea>

                    @if ($errors->has('description'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('description') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group row">
                    <label for="price" class="col-md-4 col-form-label">Product Price</label>

                    <input id="price"
                           type="text"
                           class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}"
                           name="price"
                           value="{{ old('price') }}"
                           autocomplete="price" autofocus>

                    @if ($errors->has('price'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('price') }}</strong>
                        </span>
                    @endif
                </div>


                <div class="form-group row">
                    <label for="image" class="col-md-4 col-form-label">Product Image</label>

                    <input type="file" class="form-control-file" id="image" name="image">

                    @if ($errors->has('image'))
                        <strong>{{ $errors->first('image') }}</strong>
                    @endif
                </div>


                <div class="row pt-4">
                    <button class="btn btn-primary">Add New Product</button>
                </div>

            </div>
        </div>
    </form>
</div>
@endsection
