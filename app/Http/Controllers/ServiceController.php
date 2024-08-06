<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Show the service page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('services.index');
    }
}
