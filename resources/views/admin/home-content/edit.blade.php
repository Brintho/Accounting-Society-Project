@extends('layouts.admin')
@section('main-content')
    <div class="container">
        <div class="card shadow">
            <div class="card-header py-3">
                <h4 class="m-0 font-weight-bold text-primary">Edit Home Content</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('home.update', ['id' => $homeContent->id]) }}" method="POST"
                    enctype="multipart/form-data">

                    @csrf
                    @method('PATCH')

                    @if ($errors->any())
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="row">
                        <!-- Contact Information Section -->
                        <div class="col-md-6">
                            <div class="card mb-4">
                                <div class="card-header bg-primary text-white">
                                    <h5 class="mb-0">Contact Information</h5>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="company_address">Company Address</label>
                                        <input type="text" name="company_address"
                                            class="form-control @error('company_address') is-invalid @enderror"
                                            value="{{ old('company_address', $homeContent->company_address) }}" required>
                                        @error('company_address')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="company_phone">Company Phone</label>
                                        <input type="tel" name="company_phone"
                                            class="form-control @error('company_phone') is-invalid @enderror"
                                            value="{{ old('company_phone', $homeContent->company_phone) }}" required>
                                        @error('company_phone')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="whatsapp_number">WhatsApp Number</label>
                                        <input type="text" name="whatsapp_number"
                                            class="form-control @error('whatsapp_number') is-invalid @enderror"
                                            value="{{ old('whatsapp_number', $homeContent->whatsapp_number) }}" required>
                                        @error('whatsapp_number')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="company_email">Company Email</label>
                                        <input type="email" name="company_email"
                                            class="form-control @error('company_email') is-invalid @enderror"
                                            value="{{ old('company_email', $homeContent->company_email) }}" required>
                                        @error('company_email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Social Links Section -->
                        <div class="col-md-6">
                            <div class="card mb-4">
                                <div class="card-header bg-primary text-white">
                                    <h5 class="mb-0">Social Links</h5>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="messenger">Messenger Link</label>
                                        <input type="url" name="messenger"
                                            class="form-control @error('messenger') is-invalid @enderror"
                                            value="{{ old('messenger', $homeContent->messenger) }}" required>
                                        @error('messenger')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="facebook">Facebook Link</label>
                                        <input type="url" name="facebook"
                                            class="form-control @error('facebook') is-invalid @enderror"
                                            value="{{ old('facebook', $homeContent->facebook) }}" required>
                                        @error('facebook')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="youtube_link">YouTube Link</label>
                                        <input type="url" name="youtube_link"
                                            class="form-control @error('youtube_link') is-invalid @enderror"
                                            value="{{ old('youtube_link', $homeContent->youtube_link) }}" required>
                                        @error('youtube_link')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="website_link">Website Link</label>
                                        <input type="url" name="website_link"
                                            class="form-control @error('website_link') is-invalid @enderror"
                                            value="{{ old('website_link', $homeContent->website_link) }}" required>
                                        @error('website_link')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Section -->
                    <div class="card mb-4">
                        <div class="card-header bg-primary text-white">
                            <h5 class="mb-0">Content Information</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="image">Home Image</label>
                                        @if ($homeContent->image)
                                            <div class="mb-2">
                                                <img src="{{ asset('uploads/home/' . $homeContent->image) }}"
                                                    class="img-thumbnail" style="max-height: 150px;">
                                                <div class="form-check mt-2">
                                                    <input type="checkbox" name="remove_image" id="remove_image"
                                                        class="form-check-input">
                                                    <label for="remove_image" class="form-check-label">Remove current
                                                        image</label>
                                                </div>
                                            </div>
                                        @endif
                                        <input type="file" name="image"
                                            class="form-control-file @error('image') is-invalid @enderror">
                                        @error('image')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="iframe_link">Iframe Link</label>
                                        <input type="url" name="iframe_link"
                                            class="form-control @error('iframe_link') is-invalid @enderror"
                                            value="{{ old('iframe_link', $homeContent->iframe_link) }}">
                                        @error('iframe_link')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" name="title"
                                            class="form-control @error('title') is-invalid @enderror"
                                            value="{{ old('title', $homeContent->title) }}" required>
                                        @error('title')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="software_features">software_features</label>
                                        <input type="text" name="software_features"
                                            class="form-control @error('software_features') is-invalid @enderror"
                                            value="{{ old('software_features', $homeContent->software_features) }}"
                                            required>
                                        @error('software_features')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="software_tagline">Software Tagline</label>
                                        <textarea name="software_tagline" class="form-control @error('software_tagline') is-invalid @enderror"
                                            rows="3" required>{{ old('software_tagline', $homeContent->software_tagline) }}</textarea>
                                        @error('software_tagline')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea name="description" class="form-control @error('description') is-invalid @enderror" rows="3"
                                            required>{{ old('description', $homeContent->description) }}</textarea>
                                        @error('description')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="features">Features</label>
                                <textarea name="features" class="form-control @error('features') is-invalid @enderror" rows="5" required>{{ old('features', implode("\n", json_decode($homeContent->features))) }}</textarea>
                                <small class="form-text text-muted">Enter each feature on a new line (প্রতিটি সুবিধা আলাদা
                                    লাইনে লিখুন)</small>
                                @error('features')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary px-5">
                            <i class="fas fa-save"></i> Update
                        </button>
                        <a href="" class="btn btn-secondary px-5 ml-2">
                            <i class="fas fa-times"></i> Cancel
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
