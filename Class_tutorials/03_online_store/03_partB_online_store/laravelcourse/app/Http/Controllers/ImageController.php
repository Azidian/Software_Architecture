<?php

namespace App\Http\Controllers;

use App\Interfaces\ImageStorage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

/**
 * Controller handling image upload using Dependency Inversion.
 */
class ImageController extends Controller
{
    /**
     * Display the image upload form view.
     */
    public function index(): View
    {
        return view('image.index');
    }

    /**
     * Resolve the storage interface from the IoC container and store the image.
     */
    public function save(Request $request): RedirectResponse
    {
        $storeInterface = app(ImageStorage::class);
        $storeInterface->store($request);

        return back();
    }
}
