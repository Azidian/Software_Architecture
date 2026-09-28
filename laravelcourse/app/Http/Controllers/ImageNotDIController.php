<?php

namespace App\Http\Controllers;

use App\Utils\ImageLocalStorage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

/**
 * Controller handling image upload WITHOUT Dependency Inversion (tightly coupled approach).
 */
class ImageNotDIController extends Controller
{
    /**
     * Display the image upload form view.
     */
    public function index(): View
    {
        return view('imagenotdi.index');
    }

    /**
     * Store the image using direct class instantiation.
     */
    public function save(Request $request): RedirectResponse
    {
        $storeImageLocal = new ImageLocalStorage;
        $storeImageLocal->store($request);

        return back();
    }
}
