<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreationController extends Controller
{
    /**
     * Show the creation page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('creation.index');
    }
}
