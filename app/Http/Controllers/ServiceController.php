<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    // Page principale des services
    public function index()
    {
        return view('services.index');
    }

    // Page pour le service de Consultation
    public function consultation()
    {
        return view('services.consultation');
    }

    // Page pour le service de Support
    public function support()
    {
        return view('services.support');
    }

    // Page pour le service de Formation
    public function formation()
    {
        return view('services.formation');
    }

    // Page pour le service de Développement
    public function developpement()
    {
        return view('services.developpement');
    }
}