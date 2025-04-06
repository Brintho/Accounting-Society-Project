@extends('layouts.admin')
@section('main-content')
    <div class="container">
        <h1>Add Home Content</h1>
        <form action="{{ route('home.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <div class="form-group mt-2">
                <label for="company_address">Company Address</label>
                <input type="text" name="company_address" class="form-control" required>
            </div>

            <div class="form-group mt-2">
                <label for="company_phone">Company Phone</label>
                <input type="tel" name="company_phone" class="form-control" required>
            </div>

            <div class="form-group mt-2">
                <label for="whatsapp_number">Whatsappn Number</label>
                <input type="text" name="whatsapp_number" class="form-control" required>
            </div>

            <div class="form-group mt-2">
                <label for="company_email">Company Email</label>
                <input type="email" name="company_email" class="form-control" required>
            </div>

            <div class="form-group mt-2">
                <label for="messenger">Messenger Link:</label>
                <input type="url" name="messenger" class="form-control" required>
            </div>

            <div class="form-group mt-2">
                <label for="facebook">Facebook Link:</label>
                <input type="url" name="facebook" class="form-control" required>
            </div>

            <div class="form-group mt-2">
                <label for="youtube_link">Youtube Link:</label>
                <input type="url" name="youtube_link" class="form-control" required>
            </div>
            <div class="form-group mt-2">
                <label for="website_link">Website Link:</label>
                <input type="url" name="website_link" class="form-control" required>
            </div>

            <div class="form-group mt-2">
                <label for="image">Home Image</label>
                <input type="file" name="image" class="form-control" required>
            </div>

            <div class="form-group mt-2">
                <label for="iframe_link">Iframe Link</label>
                <input type="url" name="iframe_link" class="form-control" required>
            </div>

            <div class="form-group mt-2">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" required>
            </div>

            <div class="form-group mt-2">
                <label for="software_features">Software Features</label>
                <input type="text" name="software_features" class="form-control" required>
            </div>

            <div class="form-group mt-2">
                <label for="description">Description</label>
                <textarea name="description" class="form-control" rows="3" required></textarea>
            </div>

            <div class="form-group mt-2">
                <label for="features">Features </label>
                <textarea name="features" class="form-control" rows="5" required></textarea>
                <small class="form-text text-muted">প্রতিটি সুবিধা আলাদা লাইনে লিখুন।</small>
            </div>
            <div class="form-group mt-2">
                <label for="software_tagline">Software Tagline</label>
                <textarea name="software_tagline" class="form-control" rows="3" required></textarea>
            </div>

            <button type="submit" value="Submit" class="btn btn-primary mt-2">Submit</button>
        </form>
    </div>
@endsection
