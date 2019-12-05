<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Function for displaying view content
     * @return view new
     */
    public function new()
    {
        return view('new');
    }
}
