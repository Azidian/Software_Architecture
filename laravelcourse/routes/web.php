<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HumanController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ImageNotDIController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Route variables and concatenation
$homeRoute = '/';
$aboutRoute = '/about';
$contactRoute = '/contact';
$productRoute = '/products';
$cartRoute = '/cart';
$imageRoute = '/image';
$imageNotDiRoute = '/image-not-di';
$humanRoute = '/humans';

// Home and About routes
Route::get($homeRoute, [HomeController::class, 'index'])->name('home.index');
Route::get($aboutRoute, [HomeController::class, 'about'])->name('home.about');

// Contact route
Route::get($contactRoute, [ContactController::class, 'index'])->name('home.contact');

// Product routes
Route::get($productRoute, [ProductController::class, 'index'])->name('product.index');
Route::get($productRoute.'/create', [ProductController::class, 'create'])->name('product.create');
Route::post($productRoute.'/save', [ProductController::class, 'save'])->name('product.save');
Route::get($productRoute.'/{id}', [ProductController::class, 'show'])->name('product.show');

// Cart routes
Route::get($cartRoute, [CartController::class, 'index'])->name('cart.index');
Route::get($cartRoute.'/add/{id}', [CartController::class, 'add'])->name('cart.add');
Route::get($cartRoute.'/removeAll', [CartController::class, 'removeAll'])->name('cart.removeAll');

// Image storage routes (Dependency Inversion)
Route::get($imageRoute, [ImageController::class, 'index'])->name('image.index');
Route::post($imageRoute.'/save', [ImageController::class, 'save'])->name('image.save');

// Image storage routes (Without Dependency Inversion)
Route::get($imageNotDiRoute, [ImageNotDIController::class, 'index'])->name('imagenotdi.index');
Route::post($imageNotDiRoute.'/save', [ImageNotDIController::class, 'save'])->name('imagenotdi.save');

// Human routes
Route::get($humanRoute.'/create', [HumanController::class, 'create'])->name('human.create');
Route::post($humanRoute.'/save', [HumanController::class, 'save'])->name('human.save');
Route::get($humanRoute.'/list', [HumanController::class, 'index'])->name('human.index');
Route::get($humanRoute.'/battle', [HumanController::class, 'battle'])->name('human.battle');
