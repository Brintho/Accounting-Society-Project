@extends('layouts.admin')
@section('main-content')
    <div class="container">
        <h2>প্রতিষ্ঠানের ধরন সম্পাদনা করুন</h2>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form action="{{ route('organization.update', $orgType->id) }}" method="POST">
            @csrf
            <label for="name">প্রতিষ্ঠানের ধরন</label>
            <input type="text" name="name" class="form-control" value="{{ $orgType->name }}" required>
            <button type="submit" class="btn btn-success mt-2">আপডেট করুন</button>
        </form>

        <a href="{{ route('organization.index') }}" class="btn btn-secondary mt-2">পেছনে যান</a>
    </div>
@endsection
