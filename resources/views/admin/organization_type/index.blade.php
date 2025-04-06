@extends('layouts.admin')
@section('main-content')
    <div class="container my-3">
        <h2>প্রতিষ্ঠানের ধরন সমূহ</h2>

        <!-- Success Message -->
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <!-- নতুন Organization Type যোগ করার ফর্ম -->
        <form action="{{ route('organization.store') }}" method="POST" class="mt-3">
            @csrf
            <input type="text" name="name" class="form-control" placeholder="নতুন প্রতিষ্ঠানের ধরন লিখুন" required>
            <button type="submit" class="btn btn-success mt-3">সংরক্ষণ করুন</button>
        </form>

        <hr>

        <!-- Organization Type এর তালিকা -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>নাম</th>
                    <th>অ্যাকশন</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orgTypes as $orgType)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $orgType->name }}</td>
                        <td>
                            <a href="{{ route('organization.edit', $orgType->id) }}"
                                class="btn btn-primary btn-sm">সম্পাদনা</a>
                            <form action="{{ route('organization.destroy', $orgType->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">মুছে ফেলুন</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
