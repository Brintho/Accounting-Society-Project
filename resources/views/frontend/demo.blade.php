@php
    $orgTypes = \App\Models\OrganizationType::all();
@endphp

@extends('layouts.app')
@section('content')
    <section class="breadcrumb-area text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>ডেমো দেখুন</h2>
                    <ul class="list-unstyled list-inline">
                        <li class="list-inline-item"><a href="https://samityhisab.com/">হোম</a></li>
                        <li class="list-inline-item"><i class="fa fa-long-arrow-right"></i>ডেমো দেখুন</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
    </div>
    <section class="page mt-40 mb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
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
                        <form action="{{ route('demo.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label class="control-label">আপনার নাম<span class="required">*</span></label>
                                        <input type="text" name="your_name" required="" class="form-control"
                                            value="">
                                    </div>
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
                                        <label class="control-label">সম্পূর্ণ ঠিকানা<span class="required">*</span></label>
                                        <input type="text" name="address" required="" class="form-control"
                                            value="">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">বর্তমান সদস্য সংখ্যা<span
                                                class="required">*</span></label>
                                        <input type="text" name="present_member" required="" class="form-control"
                                            value="">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">মোবাইল নং<span class="required">*</span></label>
                                        <input type="text" name="mobile_no" required="" class="form-control"
                                            value="">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">ইমেইল<span class="required">*</span></label>
                                        <input type="text" name="email" required="" class="form-control"
                                            value="">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">মন্তব্য</label>
                                        <input type="text" name="comment" class="form-control" value="">
                                    </div>
                                    {{-- <div class="form-group">
                                        <label class="control-label">Captcha<span class="required">*</span></label>
                                        <p><span
                                                style="font-size:18px;border: 1px solid #333333;padding: 3px 10px;line-height: 32px;">2259</span>
                                        </p>
                                        <input type="text" name="captcha_code" class="form-control" value=""
                                            required="" placeholder="উপরের কোডটি লিখুন">
                                    </div> --}}

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
                                        <input type="submit" name="submit" class="btn btn-primary"
                                            value="ডেমোর জন্য আবেদন করুন">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </section>
@endsection
