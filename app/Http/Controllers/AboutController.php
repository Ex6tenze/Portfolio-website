<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    /*
     * Function to show the 'about' view.
     */
    public function show()
    {
        return view('about');
    }
}
