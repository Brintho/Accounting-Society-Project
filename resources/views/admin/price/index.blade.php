@extends('layouts.admin')
@section('main-content')
    <div class="container mt-5">
        <h3 class="mb-4 text-center">সদস্য প্যাকেজ মূল্য তালিকা</h3>
        <div class="table-responsive">
            <table class="table table-bordered table-striped text-center">
                <thead class="table-primary">
                    <tr>
                        <th>প্যাকেজ (সদস্য অনুযায়ী)</th>
                        <th>সফ্টওয়্যার মূল্য (ইনস্টলের সময়)</th>
                        <th>সার্ভার ফি এবং সার্ভিস চার্জ (বাৎসরিক প্যাকেজ)</th>
                        <th>সার্ভার ফি এবং সার্ভিস চার্জ (মাসিক প্যাকেজ)</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($prices as $price)
                        <tr>
                            <td>{{ $price->package_name }}</td>
                            <td>{{ $price->software_price }}</td>
                            <td>{{ $price->annual_server_fee }}</td>
                            <td>{{ $price->monthly_server_fee }}</td>
                            <td>
                                <div class="btn-group">
                                    <a class="btn btn-sm btn-warning" type="button"
                                        href="{{ route('price.edit', ['id' => $price->id]) }}">✏️ Edit</a>
                                    <a class="btn btn-sm btn-danger"
                                        href="{{ route('price.delete', ['id' => $price->id]) }}">🗑️ Delete</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
            </table>
        </div>
    </div>
@endsection
