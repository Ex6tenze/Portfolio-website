<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadController extends Controller
{
    /*
     * Function to show the download view.
     */
    public function show()
    {
        return view('download');
    }
}
