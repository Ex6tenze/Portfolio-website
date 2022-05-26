<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faq;

class FAQController extends Controller
{
    /*
     * Function to show the faq view.
     */
    public function index()
    {
        return view('faq.index', ['faqs' => Faq::all()]);
    }

    public function create()
    {
        return view('faq.create');
    }

    public function store()
    {
        $faq = new Faq();

        $faq->question = request('question');
        $faq->answer = request('answer');

        $faq->save();

        return redirect('/faq');
    }

    public function edit($id)
    {
        return view('faq.edit', ['faqs' => Faq::find($id)]);
    }

    public function update($id)
    {
        $faq = Faq::find($id);

        $faq->question = request('question');
        $faq->answer = request('answer');

        $faq->save();

        return redirect('/faq');
    }

    public function destroy($id)
    {
        $faq = Faq::find($id);
        $faq->delete();

        return redirect('/faq');
    }
}
