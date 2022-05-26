<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogpost;

class WelcomeController extends Controller
{
    /*
     * Function to show the initial view.
     */
    public function show()
    {
        return view('welcome', [
            'Posts' => Blogpost::take(3)->latest()->get()
        ]);
    }
}
