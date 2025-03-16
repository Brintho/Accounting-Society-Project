@extends('layouts.admin')
@section('main-content')
    <div class="container mt-5">
        <h2 class="text-center mb-4">মূল্য তালিকা ফর্ম</h2>
        <form action="{{ route('price.update', $price->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="package_name" class="form-label">প্যাকেজ (সদস্য অনুযায়ী)</label>
                    <input type="text" class="form-control" id="package_name" name="package_name"
                        value="{{ $price->package_name }}" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="software_price" class="form-label">সফ্টওয়্যার মূল্য (ইনস্টলের সময়)</label>
                    <input type="text" value="{{ $price->software_price }}" class="form-control" id="software_price"
                        name="software_price" required>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="annual_server_fee" class="form-label">সার্ভার ফি এবং সার্ভিস চার্জ (বাৎসরিক প্যাকেজ)</label>
                    <input type="text" value="{{ $price->annual_server_fee }}" class="form-control"
                        id="annual_server_fee" name="annual_server_fee" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="monthly_server_fee" class="form-label">সার্ভার ফি এবং সার্ভিস চার্জ (মাসিক প্যাকেজ)</label>
                    <input type="text" value="{{ $price->monthly_server_fee }}" class="form-control"
                        id="monthly_server_fee" name="monthly_server_fee" required>
                </div>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">জমা দিন</button>
            </div>
        </form>
    </div>
@endsection
