<?php

namespace App\Http\Controllers;
use Illuminate\View\View;

class ContactController extends Controller
{
    /**
     * Display the contact view.
     *
     * @return View
     */
    public function index(): View
    {
        // Return the contact view located in resources/views/home/contact.blade.php
        return view('home.contact');
    }
}