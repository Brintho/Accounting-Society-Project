@php
    $packages = \App\Models\Price::all();
    $orgTypes = \App\Models\OrganizationType::all();
@endphp

@extends('layouts.app')
@section('content')
    <section class="breadcrumb-area text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>অর্ডার করুন</h2>
                    <ul class="list-unstyled list-inline">
                        <li class="list-inline-item"><a href="https://samityhisab.com/">হোম</a></li>
                        <li class="list-inline-item"><i class="fa fa-long-arrow-right"></i>অর্ডার করুন</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="page mt-40 mb-40">
        <div class="container">
            <div class="row">
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="col-lg-12">
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label class="control-label">প্রতিষ্ঠানের ধরন<span class="required">*</span></label>
                                    <select name="org_type_id" class="form-control" required="">
                                        @foreach ($orgTypes as $orgType)
                                            <option value="{{ $orgType->id }}">{{ $orgType->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">প্রতিষ্ঠানের নাম<span class="required">*</span></label>
                                    <input type="text" name="organization_name" required="" class="form-control"
                                        value="">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">প্রতিষ্ঠানের ঠিকানা<span class="required">*</span></label>
                                    <input type="text" name="address" required="" class="form-control" value="">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">প্রতিষ্ঠানের লোগো<span class="required">*</span></label>
                                    <input type="file" name="image" required=""
                                        class="form-control form-control-file" accept="image/*">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">মোবাইল নং<span class="required">*</span></label>
                                    <input type="text" name="mobile_no" class="form-control" value="">
                                </div>

                                <div class="form-group">
                                    <label class="control-label">প্রতিষ্ঠান প্রধানের নাম<span
                                            class="required">*</span></label>
                                    <input type="text" name="organization_head_name" required="" class="form-control"
                                        value="">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">জাতীয় পরিচয় পত্র নাম্বার</label>
                                    <input type="text" name="national_id" class="form-control" value="">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">ইমেইল</label>
                                    <input type="text" name="email" class="form-control" value="">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">আপনার প্যাকেজ সিলেক্ট করুন<span
                                            class="required">*</span></label>
                                    <select name="package_id" class="form-control" required="">
                                        @foreach ($packages as $package)
                                            <option value="{{ $package->id }}">{{ $package->package_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Captcha<span class="required">*</span></label>
                                    <p><span
                                            style="font-size:18px;border: 1px solid #333333;padding: 3px 10px;line-height: 32px;">
                                            {{ session('captcha') }}
                                        </span></p>
                                    <input type="text" name="captcha_code" class="form-control" required
                                        placeholder="উপরের কোডটি লিখুন">
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="submit" class="btn btn-primary" value="সাবমিট">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
