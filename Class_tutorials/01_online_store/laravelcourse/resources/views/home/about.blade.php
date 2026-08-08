{{-- Extend the main application layout --}}
@extends('layouts.app')

{{-- Set the title section from variable --}}
@section('title', $title)

{{-- Set the subtitle section from variable --}}
@section('subtitle', $subtitle)

{{-- Define the main content section --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-4 ms-auto">
                <p class="lead">{{ $description }}</p>
            </div>

            <div class="col-lg-4 me-auto">
                <p class="lead">{{ $author }}</p>
            </div>
        </div>
    </div>
@endsection
