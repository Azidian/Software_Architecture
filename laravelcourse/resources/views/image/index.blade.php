@extends('layouts.app')
@section('title', 'Image Storage - DI')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">Upload image</div>
                <div class="card-body">
                    <form action="{{ route('image.save') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Image:</label>
                            <input type="file" name="profile_image" class="form-control" />
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    
                    <div class="mt-4 text-center">
                        <img src="{{ asset('storage/test.png') }}" class="img-fluid rounded shadow-sm" alt="Stored Image" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection