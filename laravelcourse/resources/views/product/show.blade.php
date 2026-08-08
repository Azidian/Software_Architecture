{{-- Extend the main application layout --}}
@extends('layouts.app')

{{-- Set the title from view data --}}
@section('title', $viewData["title"])

{{-- Set the subtitle from view data --}}
@section('subtitle', $viewData["subtitle"])

{{-- Define the main content section --}}
@section('content')
    <div class="card mb-3">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="https://laravel.com/img/logotype.min.svg" class="img-fluid rounded-start">
            </div>

            <div class="col-md-8">
                <div class="card-body">
                    {{-- Highlight the product name if the price is greater than 100,000 --}}
                    @if ($viewData["product"]["price"] > 100000)
                        <h5 class="card-title text-danger">
                            {{ $viewData["product"]["name"] }}
                        </h5>
                    @else
                        <h5 class="card-title">
                            {{ $viewData["product"]["name"] }}
                        </h5>
                    @endif
                    <p class="card-text">Price: {{ $viewData["product"]["price"] }}</p>
                    <p class="card-text">{{ $viewData["product"]["description"] }}</p>

                </div>
            </div>
        </div>
    </div>

@endsection
