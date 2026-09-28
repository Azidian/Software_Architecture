@extends('layouts.app')

@section('title', 'Register Human')
@section('subtitle', 'Form for a new aura farmer')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Register Human</h5>
            </div>
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('human.save') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="aura" class="form-label">Aura Amount:</label>
                        <input type="number" id="aura" name="aura" class="form-control" value="{{ old('aura') }}" required min="0">
                    </div>

                    <div class="mb-3">
                        <label for="hierarchy" class="form-label">Hierarchy:</label>
                        <select id="hierarchy" name="hierarchy" class="form-select" required>
                            <option value="common" {{ old('hierarchy') == 'common' ? 'selected' : '' }}>common</option>
                            <option value="moderate" {{ old('hierarchy') == 'moderate' ? 'selected' : '' }}>moderate</option>
                            <option value="legendary" {{ old('hierarchy') == 'legendary' ? 'selected' : '' }}>legendary</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-success w-100">Save Human</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection