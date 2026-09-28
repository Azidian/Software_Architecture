@extends('layouts.app')

@section('title', 'Home - Humans Management')
@section('subtitle', 'Control Panel - Year 2050')

@section('content')
<div class="text-center py-4">
    <h3 class="mb-4">Welcome to the aura farming system</h3>

    @if (session('error'))
        <div class="alert alert-danger mx-auto col-md-6 mb-4">
            {{ session('error') }}
        </div>
    @endif

    @if (session('success'))
        <div class="alert alert-success mx-auto col-md-6 mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="d-flex justify-content-center gap-3">
        <a href="{{ route('human.create') }}" class="btn btn-primary btn-lg">Register humans</a>
        <a href="{{ route('human.index') }}" class="btn btn-success btn-lg">List humans</a>
        <a href="{{ route('human.battle') }}" class="btn btn-danger btn-lg">Human battle</a>
    </div>
</div>
@endsection