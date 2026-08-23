@extends('layouts.app')

{{-- Static texts directly in the view, decoupled from the controller --}}
@section('title', 'Cart - Online Store')
@section('subtitle', 'Shopping Cart')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <h1>Available products</h1>
      <ul>
        @forelse($viewData["products"] as $product)
          <li>
            Id: {{ $product->getId() }} - 
            Name: {{ $product->getName() }} - 
            Price: ${{ $product->getPrice() }} - 
            <a href="{{ route('cart.add', ['id' => $product->getId()]) }}">Add to cart</a>
          </li>
        @empty
          <li>No products available in the store.</li>
        @endforelse
      </ul>
    </div>
  </div>

  <div class="row justify-content-center mt-4">
    <div class="col-md-12">
      <h1>Products in cart</h1>
      <ul>
        @forelse($viewData["cartProducts"] as $product)
          <li>
            Id: {{ $product->getId() }} - 
            Name: {{ $product->getName() }} - 
            Price: ${{ $product->getPrice() }}
          </li>
        @empty
          <li>Your cart is empty.</li>
        @endforelse
      </ul>
      <a href="{{ route('cart.removeAll') }}" class="btn btn-danger">Remove all products from cart</a>
    </div>
  </div>
</div>
@endsection