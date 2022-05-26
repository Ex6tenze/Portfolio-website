<?php

namespace App\Http\Controllers;

use App\Models\Blogpost;
use Illuminate\Http\Request;

class BlogController extends Controller
{
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

    public function store()
    {
        $blogpost = new Blogpost();

        $blogpost->title = request('title');
        $blogpost->excerpt = request('excerpt');
        $blogpost->body = request('body');

        $blogpost->save();

        return redirect('/blog');
    }

    public function edit($id)
    {
        return view('blog.edit', ['posts' => Blogpost::find($id)]);
    }

    public function update($id)
    {
        $blogpost = Blogpost::find($id);

        $blogpost->title = request('title');
        $blogpost->excerpt = request('excerpt');
        $blogpost->body = request('body');

        $blogpost->save();

        return redirect('/blog/' . $blogpost->id);
    }

    public function destroy($id)
    {
        $blogpost = Blogpost::find($id);
        $blogpost->delete();

        return redirect('/blog');
    }
}
