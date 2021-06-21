<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index() {
        $landingPage = true;
        return view('landing', compact('landingPage'));
    }
}
