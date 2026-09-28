@extends('layouts.app')

@section('title', 'Welcome - Online Store')
@section('subtitle', 'Welcome')

@section('content')
<div class="text-center">
    <h1>Welcome to the Online Store</h1>
    <p class="lead">Browse our product catalog or create a new product.</p>
    <a href="{{ route('product.index') }}" class="btn btn-primary me-2">View Products</a>
    <a href="{{ route('product.create') }}" class="btn btn-secondary">Create Product</a>
</div>
@endsection
