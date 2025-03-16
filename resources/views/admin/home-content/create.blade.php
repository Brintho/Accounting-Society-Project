@extends('layouts.admin')
@section('main-content')
    <div class="container">
        <h1>Add Home Content</h1>
        <form action="{{ route('home.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- হোমপেজের ছবি -->
            <div class="form-group mt-2">
                <label for="image">Home Image</label>
                <input type="file" name="image" class="form-control">
            </div>

            <!-- আইফ্রেম লিংক -->
            <div class="form-group mt-2">
                <label for="iframe_link">Iframe Link</label>
                <input type="url" name="iframe_link" class="form-control">
            </div>

            <!-- সফটওয়্যার সুবিধাগুলি -->
            <div class="form-group mt-2">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" required>
            </div>
            <div class="form-group mt-2">
                <label for="description">Description</label>
                <textarea name="description" class="form-control" rows="3"></textarea>
            </div>
            <div class="form-group mt-2">
                <label for="features">Features </label>
                <textarea name="features" class="form-control" rows="5"></textarea>
                <small class="form-text text-muted">প্রতিটি সুবিধা আলাদা লাইনে লিখুন।</small>
            </div>

            <button type="submit" class="btn btn-primary mt-2">Submit</button>
        </form>
    </div>
@endsection
