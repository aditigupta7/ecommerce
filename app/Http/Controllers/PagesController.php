<?php

namespace App\Http\Controllers;
use App\Product;
use App\Blog;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }
    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function policy()
    {
        return view('pages.private-policy');
    }

    public function productList()
    {

        $products = Product::all();

        return view('pages.product-list' , compact('products'));

    }

    public function productPage($productId)
    {
        $product = Product::find($productId);

        return view('pages.product-page',compact('product'));

    }


    public function blogList()
    {
        $blogs = Blog::all();

        return view('pages.blog-list' , compact('blogs'));
    }

    public function singleBlog($blogId)
    {
        $blog = Blog::find($blogId);

        return view('pages.single-blog',compact('blog'));

    }

}
