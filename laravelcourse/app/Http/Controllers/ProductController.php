<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    // Static array of products to simulate a database for now
    public static $products = [
        ["id" => "1", "name" => "TV", "description" => "Best TV", "price" => "3500000"],
        ["id" => "2", "name" => "iPhone", "description" => "Best iPhone", "price" => "7000000"],
        ["id" => "3", "name" => "Chromecast", "description" => "Best Chromecast", "price" => "50000"],
        ["id" => "4", "name" => "Glasses", "description" => "Best Glasses", "price" => "500000"]
    ];

    /**
     * Display a listing of the products.
     *
     * @return View
     */
    public function index(): View
    {
        $viewData = [];
        // Set the view title
        $viewData["title"] = "Products - Online Store";
        // Set the view subtitle
        $viewData["subtitle"] = "List of products";
        // Pass the static products array to the view
        $viewData["products"] = ProductController::$products;

        // Return the product index view with the data
        return view('product.index')->with("viewData", $viewData);
    }

    /**
     * Display the specified product.
     *
     * @param string $id
     * @return View|\Illuminate\Http\RedirectResponse
     */
    public function show(string $id): View | \Illuminate\Http\RedirectResponse
    {
        // Check if the product ID is valid
        if ($id < 1 || $id > count(ProductController::$products)) {
            // Redirect to home index if product does not exist with an error message
            return redirect()->route('home.index')
                ->with('error', 'That product does not exist. Please select a valid product.');
        }

        $viewData = [];
        // Get the specific product from the static array (index is ID - 1)
        $product = ProductController::$products[$id - 1];
        $viewData["title"] = $product["name"] . " - Online Store";
        $viewData["subtitle"] = $product["name"] . " - Product information";
        $viewData["product"] = $product;
        
        // Return the product show view with the data
        return view('product.show')->with("viewData", $viewData);
    }

    /**
     * Show the form for creating a new product.
     *
     * @return View
     */
    public function create(): View
    {
        $viewData = []; // Data to be sent to the view
        $viewData["title"] = "Create product";

        // Return the view to create a product
        return view('product.create')->with("viewData", $viewData);
    }

    /**
     * Store a newly created product in storage.
     *
     * @param Request $request
     */
    public function save(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            "name" => "required",
            "price" => "required|gt:0"
        ]);

        // Return a success view after validation
        return view('product.success');

        // Here we would typically create a new product instance and save it to the database
        //dd($request->all());
        // here will be the code to call the model and save it to the database
    }

}
