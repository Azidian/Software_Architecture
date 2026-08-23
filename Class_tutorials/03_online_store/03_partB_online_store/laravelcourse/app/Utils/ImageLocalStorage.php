<?php

namespace App\Utils;

use App\Interfaces\ImageStorage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

/**
 * Handles local filesystem storage for uploaded images.
 */
class ImageLocalStorage implements ImageStorage
{
    /**
     * Store the uploaded profile image locally in the public disk.
     */
    public function store(Request $request): void
    {
        if ($request->hasFile('profile_image')) {
            Storage::disk('public')->put(
                'test.png',
                file_get_contents($request->file('profile_image')->getRealPath())
            );
        }
    }
}