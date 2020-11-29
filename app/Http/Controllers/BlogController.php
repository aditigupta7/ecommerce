<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class BlogController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $blogs = Blog::all();

        return view('blogs.index',compact('blogs'));

    }

    public function create()
    {
        $this->authorize('create', Blog::class);

        return view('blogs.create');
    }

    public function store()
    {
        $this->authorize('create', Blog::class);

        $blog = Blog::create($this->validateRequest());

        $this->storeImage($blog);

        return redirect('/blogs');
    }


    public function show(Blog $blog)
    {
         return view('blogs.show',compact('blog'));
    }

    public function edit(Blog $blog)
    {
        $this->authorize('update', $blog);

        return view('blogs.edit', compact('blog'));
    }

    public function update(Blog $blog)
    {


        $blog->update($this->validateRequest());

        $this->storeImage($blog);

        return redirect('/blogs');

    }


    public function destroy(Blog $blog)
    {
        $this->authorize('delete', $blog);

        $blog->delete();

        return redirect('/blogs');
    }

    private function validateRequest(){

        return tap( request()->validate([
            'title' => 'required | min:3',
            'description' => 'required' ,
            'author'=> '',
            'slug' => 'required'

        ]), function(){

            if (request()->hasFile('image')){
                request()->validate([
                    'image' => 'file|image',
                ]);
            }
        });
    }

    public function storeImage($blog)
    {
        if (request()->has('image')){
            $blog->update([
                'image'=> request()->image->store('blogs','public'),
            ]);
        }

    }


}
