@extends('layouts.admin')
@section('main-content')
    <div class="container mt-5">
        <h2 class="mt-1">প্রতিষ্ঠানের ধরন সম্পাদনা করুন</h2>

        @if (session('success'))
            <div class="alert alert-success mt-5">{{ session('success') }}</div>
        @endif
        <form action="{{ route('organization.store') }}" method="POST">
            @csrf
            <label for="name" class="m-1">প্রতিষ্ঠানের ধরন</label>
            <input type="text" name="name" class="form-control mt-2" required>
            <button type="submit" class="btn btn-success mt-2">সাবমিট করুন</button>
        </form>

    </div>
@endsection
