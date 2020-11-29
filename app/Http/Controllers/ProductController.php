<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Product;
use Session;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {

        $this->authorize('create', Product::class);

        $products = Product::all();

        return view('products.index' , compact('products'));

    }

    public function create()
    {
        $this->authorize('create', Product::class);

         return view ('products.create');

    }

    public function store()
    {
        $this->authorize('create', Product::class);

        $product = Product::create($this->validateRequest());

        $this->storeImage($product);

        return redirect('/products');
    }


    public function edit(Product $product)
    {
        $this->authorize('create', Product::class);

        return view('products.edit', compact('product'));

    }

    public function update(Product $product)
    {

        $product->update($this->validateRequest());

        $this->storeImage($product);

        return redirect('/products');

    }

    public function show(Product $product)
    {
        $this->authorize('view', $product);

        return view('products.show', compact('product'));
    }

    public function destroy(Product $product)
    {
        $this->authorize('delete', Product::class);

        $product->delete();

        return redirect('/products');
    }

    private function validateRequest(){

        return tap( request()->validate([
            'name' => 'required | min:3',
            'description' => 'required' ,
            'price' => 'required',

        ]), function(){

            if (request()->hasFile('image')){
                request()->validate([
                    'image' => 'file|image',
                ]);
            }
        });
    }

    public function storeImage($product)
    {
        if (request()->has('image')){
            $product->update([
                'image'=> request()->image->store('uploads','public'),
            ]);
        }

    }




}
