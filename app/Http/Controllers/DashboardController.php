<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /*
     * Function to show the dashboard view.
     */
    public function show()
    {
        return view('dashboard');
    }
}
