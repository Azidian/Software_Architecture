<?php

namespace App\Http\Controllers;

use App\Models\Product; // importation of the Product model and other necessary classes
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CartController extends Controller
{
    public function index(Request $request): View
    {
        $cartProducts = [];
        $cartProductData = $request->session()->get('cart_product_data', []);

        if (! empty($cartProductData)) {
            // Retrieve only the products stored in the session from the database
            $cartProducts = Product::findMany(array_keys($cartProductData));
        }

        $viewData = [];
        // Retrieve all available products from MySQL using Eloquent
        $viewData['products'] = Product::all();
        $viewData['cartProducts'] = $cartProducts;

        return view('cart.index')->with('viewData', $viewData);
    }

    public function add(string $id, Request $request): RedirectResponse
    {
        $cartProductData = $request->session()->get('cart_product_data', []);
        $cartProductData[$id] = $id;
        $request->session()->put('cart_product_data', $cartProductData);

        return back();
    }

    public function removeAll(Request $request): RedirectResponse
    {
        $request->session()->forget('cart_product_data');

        return back();
    }
}
