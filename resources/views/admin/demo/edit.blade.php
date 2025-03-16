@extends('layouts.admin')
@section('main-content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">ডেমো রিকোয়েস্ট সম্পাদনা</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">ড্যাশবোর্ড</a></li>
                <li class="breadcrumb-item"><a href="{{ route('demo.list') }}">ডেমো রিকোয়েস্ট</a></li>
                <li class="breadcrumb-item active">সম্পাদনা</li>
            </ol>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-edit me-1"></i>
                    ডেমো রিকোয়েস্ট তথ্য আপডেট করুন
                </div>
                <div class="card-body">
                    <form action="{{ route('demo.update', $demoRequest->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="your_name" class="form-label">আপনার নাম</label>
                                    <input type="text" class="form-control" id="your_name" name="your_name"
                                        value="{{ $demoRequest->your_name }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="org_type_id" class="form-label">প্রতিষ্ঠানের ধরন</label>
                                    <select class="form-control" id="org_type_id" name="org_type_id" required>
                                        <option value="">প্রতিষ্ঠানের ধরন বাছাই করুন</option>
                                        @foreach ($orgTypes as $orgType)
                                            <option value="{{ $orgType->id }}"
                                                {{ $demoRequest->org_type_id == $orgType->id ? 'selected' : '' }}>
                                                {{ $orgType->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="organization_name" class="form-label">প্রতিষ্ঠানের নাম</label>
                                    <input type="text" class="form-control" id="organization_name"
                                        name="organization_name" value="{{ $demoRequest->organization_name }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="address" class="form-label">ঠিকানা</label>
                                    <input type="text" class="form-control" id="address" name="address"
                                        value="{{ $demoRequest->address }}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="present_member" class="form-label">বর্তমান সদস্য সংখ্যা</label>
                                    <input type="number" class="form-control" id="present_member" name="present_member"
                                        value="{{ $demoRequest->present_member }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="mobile_no" class="form-label">মোবাইল নং</label>
                                    <input type="text" class="form-control" id="mobile_no" name="mobile_no"
                                        value="{{ $demoRequest->mobile_no }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">ইমেইল</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        value="{{ $demoRequest->email }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="comment" class="form-label">মন্তব্য</label>
                                    <textarea class="form-control" id="comment" name="comment" rows="3">{{ $demoRequest->comment }}</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="mt-3">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i> আপডেট করুন
                            </button>
                            <a href="{{ route('demo.list') }}" class="btn btn-secondary">
                                <i class="fas fa-times"></i> বাতিল করুন
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
