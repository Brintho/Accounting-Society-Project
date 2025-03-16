@extends('layouts.admin')

@section('main-content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">অর্ডার তালিকা</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">ড্যাশবোর্ড</a></li>
            <li class="breadcrumb-item active">অর্ডার তালিকা</li>
        </ol>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">অর্ডার তালিকা</h3>
                    </div>
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>আইডি</th>
                                        <th>প্রতিষ্ঠানের নাম</th>
                                        <th>প্রতিষ্ঠানের ধরন</th>
                                        <th>প্যাকেজ</th>
                                        <th>মোবাইল</th>
                                        <th>স্ট্যাটাস</th>
                                        <th>অ্যাকশন</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $order)
                                        <tr>
                                            <td>{{ $order->id }}</td>
                                            <td>{{ $order->organization_name }}</td>
                                            <td>{{ $order->organizationType->name }}</td>
                                            <td>{{ $order->package->package_name }}</td>
                                            <td>{{ $order->mobile_no }}</td>

                                            <td>
                                                <form action="{{ route('orders.status.update', $order) }}" method="POST"
                                                    class="d-inline">
                                                    @csrf
                                                    @method('PATCH')
                                                    <select name="status"
                                                        class="form-select form-select-sm d-inline-block w-auto"
                                                        onchange="this.form.submit()">
                                                        <option value="pending"
                                                            {{ $order->status == 'pending' ? 'selected' : '' }}>পেন্ডিং
                                                        </option>
                                                        <option value="approved"
                                                            {{ $order->status == 'approved' ? 'selected' : '' }}>অ্যাপ্রুভড
                                                        </option>
                                                        <option value="rejected"
                                                            {{ $order->status == 'rejected' ? 'selected' : '' }}>রিজেক্টেড
                                                        </option>
                                                    </select>
                                                </form>
                                            </td>

                                            <td>
                                                <a href="{{ route('orders.show', $order) }}" class="btn btn-info btn-sm">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a href="{{ route('orders.edit', $order) }}"
                                                    class="btn btn-primary btn-sm">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <form action="{{ route('orders.destroy', $order) }}" method="POST"
                                                    class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        onclick="return confirm('আপনি কি নিশ্চিত?')">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="mt-4">
                            {{ $orders->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
