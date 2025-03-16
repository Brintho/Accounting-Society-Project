@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">অর্ডার সম্পাদনা</h3>
                        <div class="card-tools">
                            <a href="{{ route('orders.index') }}" class="btn btn-primary btn-sm">
                                <i class="fas fa-arrow-left"></i> তালিকায় ফিরে যান
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('orders.update', $order) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>প্রতিষ্ঠানের ধরন</label>
                                        <select name="org_type_id" class="form-control" required>
                                            @foreach ($orgTypes as $type)
                                                <option value="{{ $type->id }}"
                                                    {{ $order->org_type_id == $type->id ? 'selected' : '' }}>
                                                    {{ $type->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>প্রতিষ্ঠানের নাম</label>
                                        <input type="text" name="organization_name" class="form-control"
                                            value="{{ old('organization_name', $order->organization_name) }}" required>
                                    </div>

                                    <div class="form-group">
                                        <label>ঠিকানা</label>
                                        <textarea name="address" class="form-control" required>{{ old('address', $order->address) }}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label>মোবাইল নং</label>
                                        <input type="text" name="mobile_no" class="form-control"
                                            value="{{ old('mobile_no', $order->mobile_no) }}" required>
                                    </div>

                                    <div class="form-group">
                                        <label>প্রতিষ্ঠান প্রধানের নাম</label>
                                        <input type="text" name="organization_head_name" class="form-control"
                                            value="{{ old('organization_head_name', $order->organization_head_name) }}"
                                            required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>জাতীয় পরিচয় পত্র নাম্বার</label>
                                        <input type="text" name="national_id" class="form-control"
                                            value="{{ old('national_id', $order->national_id) }}">
                                    </div>

                                    <div class="form-group">
                                        <label>ইমেইল</label>
                                        <input type="email" name="email" class="form-control"
                                            value="{{ old('email', $order->email) }}">
                                    </div>

                                    <div class="form-group">
                                        <label>প্যাকেজ</label>
                                        <select name="package_id" class="form-control" required>
                                            @foreach ($packages as $package)
                                                <option value="{{ $package->id }}"
                                                    {{ $order->package_id == $package->id ? 'selected' : '' }}>
                                                    {{ $package->package_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>স্ট্যাটাস</label>
                                        <select name="status" class="form-control" required>
                                            <option value="pending" {{ $order->status == 'pending' ? 'selected' : '' }}>
                                                Pending</option>
                                            <option value="approved" {{ $order->status == 'approved' ? 'selected' : '' }}>
                                                Approved</option>
                                            <option value="rejected" {{ $order->status == 'rejected' ? 'selected' : '' }}>
                                                Rejected</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>প্রতিষ্ঠানের লোগো</label>
                                        <input type="file" name="image" class="form-control-file">
                                        @if ($order->image)
                                            <div class="mt-2">
                                                <img src="{{ asset('uploads/organization-logos/' . $order->image) }}"
                                                    alt="Current Logo" class="img-thumbnail" style="max-height: 100px;">
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mt-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save"></i> আপডেট করুন
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
