@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('ADMIN Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <li class="nav-item">
                        <a class="nav-link" href="/products">Products</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/blogs">Blogs</a>
                    </li>

                    {{ __('You are logged in as ADMIN!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
