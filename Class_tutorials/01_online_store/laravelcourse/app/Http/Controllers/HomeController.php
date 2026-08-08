<?php

namespace App\Http\Controllers;
use Illuminate\View\View;

class HomeController extends Controller {
    
    /**
     * Display the home index view.
     *
     * @return View
     */
    public function index(): View {
        // Return the index view located in resources/views/home/index.blade.php
        return view('home.index');

    }

 }