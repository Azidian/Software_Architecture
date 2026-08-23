<?php

namespace App\Interfaces;

use Illuminate\Http\Request;

interface ImageStorage
{
    /**
     * Store an image from the incoming HTTP request.
     */
    public function store(Request $request): void;
}