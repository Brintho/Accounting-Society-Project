@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">অর্ডার বিস্তারিত</h3>
                        <div class="card-tools">
                            <a href="{{ route('orders.index') }}" class="btn btn-primary btn-sm">
                                <i class="fas fa-arrow-left"></i> তালিকায় ফিরে যান
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <table class="table table-bordered">
                                    <tr>
                                        <th style="width: 200px;">প্রতিষ্ঠানের নাম</th>
                                        <td>{{ $order->organization_name }}</td>
                                    </tr>
                                    <tr>
                                        <th>প্রতিষ্ঠানের ধরন</th>
                                        <td>{{ $order->organizationType->name }}</td>
                                    </tr>
                                    <tr>
                                        <th>ঠিকানা</th>
                                        <td>{{ $order->address }}</td>
                                    </tr>
                                    <tr>
                                        <th>মোবাইল নং</th>
                                        <td>{{ $order->mobile_no }}</td>
                                    </tr>
                                    <tr>
                                        <th>প্রতিষ্ঠান প্রধানের নাম</th>
                                        <td>{{ $order->organization_head_name }}</td>
                                    </tr>
                                    <tr>
                                        <th>জাতীয় পরিচয় পত্র নাম্বার</th>
                                        <td>{{ $order->national_id ?: 'N/A' }}</td>
                                    </tr>
                                    <tr>
                                        <th>ইমেইল</th>
                                        <td>{{ $order->email ?: 'N/A' }}</td>
                                    </tr>
                                    <tr>
                                        <th>প্যাকেজ</th>
                                        <td>{{ $order->package->package_name }}</td>
                                    </tr>
                                    <tr>
                                        <th>স্ট্যাটাস</th>
                                        <td>
                                            <span
                                                class="badge badge-{{ $order->status === 'pending' ? 'warning' : ($order->status === 'approved' ? 'success' : 'danger') }}">
                                                {{ ucfirst($order->status) }}
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>অর্ডারের তারিখ</th>
                                        <td>{{ $order->created_at->format('d/m/Y H:i:s') }}</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">প্রতিষ্ঠানের লোগো</h4>
                                    </div>
                                    <div class="card-body">
                                        <img src="{{ asset('uploads/organization-logos/' . $order->image) }}"
                                            alt="Organization Logo" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('orders.edit', $order) }}" class="btn btn-primary">
                            <i class="fas fa-edit"></i> সম্পাদনা করুন
                        </a>
                        <form action="{{ route('orders.destroy', $order) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('আপনি কি নিশ্চিত?')">
                                <i class="fas fa-trash"></i> মুছে ফেলুন
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
