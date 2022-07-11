<?php

namespace App\Http\Controllers;

use App\Models\Blogpost;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function __construct() {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    public function index()
    {
        return view('blog.index', ['posts' => Blogpost::latest()->get()]);
    }

    public function show($id)
    {
        return view('blog.show', ['posts' => Blogpost::find($id)]);
    }

    public function create()
    {
        return view('blog.create');
    }

    public function store(Request $request)
    {
       $validatedAttributes = $request->validate([
        'title' => 'required',
        'excerpt' => 'required',
        'body' => 'required'
       ]);

       Blogpost::create($validatedAttributes);

       return redirect('/blog');
    }

    public function edit($id)
    {
        return view('blog.edit', ['posts' => Blogpost::find($id)]);
    }

    public function update(id $id, Request $request)
    {
        $blogpost = Blogpost::find($id);

        $validatedAttributes = $request->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
           ]);

        $blogpost->update($validatedAttributes);

        return redirect('/blog/' . $blogpost->id);
    }

    public function destroy($id)
    {
        $blogpost = Blogpost::find($id);
        $blogpost->delete();

        return redirect('/blog');
    }
}
