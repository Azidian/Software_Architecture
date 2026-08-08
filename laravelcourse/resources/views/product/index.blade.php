{{-- Extend the main application layout --}}
@extends('layouts.app')

{{-- Define the page title from view data --}}
@section('title', $viewData["title"])

{{-- Define the page subtitle from view data --}}
@section('subtitle', $viewData["subtitle"])

{{-- Define the main content section --}}
@section('content')
    <div class="row">
        {{-- Loop through each product and display a card --}}
        @foreach ($viewData["products"] as $product)
            <div class="col-md-4 col-lg-3 mb-2">
                <div class="card">
                    <img src="https://laravel.com/img/logotype.min.svg" class="card-img-top img-card">

                    <div class="card-body text-center">
                        <a href="{{ route('product.show', ['id' => $product["id"]]) }}"
                           class="btn bg-primary text-white">
                            {{ $product["name"] }}
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
