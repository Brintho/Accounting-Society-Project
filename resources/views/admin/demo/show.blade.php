@extends('layouts.admin')
@section('main-content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">ডেমো রিকোয়েস্ট বিস্তারিত</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">ড্যাশবোর্ড</a></li>
                <li class="breadcrumb-item"><a href="{{ route('demo.list') }}">ডেমো রিকোয়েস্ট</a></li>
                <li class="breadcrumb-item active">বিস্তারিত</li>
            </ol>

            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-info-circle me-1"></i>
                    ডেমো রিকোয়েস্ট তথ্য
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <table class="table table-bordered">
                                <tr>
                                    <th>আপনার নাম</th>
                                    <td>{{ $demoRequest->your_name }}</td>
                                </tr>
                                <tr>
                                    <th>প্রতিষ্ঠানের ধরন</th>
                                    <td>{{ $demoRequest->organizationType->name }}</td>
                                </tr>
                                <tr>
                                    <th>প্রতিষ্ঠানের নাম</th>
                                    <td>{{ $demoRequest->organization_name }}</td>
                                </tr>
                                <tr>
                                    <th>ঠিকানা</th>
                                    <td>{{ $demoRequest->address }}</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <table class="table table-bordered">
                                <tr>
                                    <th>বর্তমান সদস্য সংখ্যা</th>
                                    <td>{{ $demoRequest->present_member }}</td>
                                </tr>
                                <tr>
                                    <th>মোবাইল নং</th>
                                    <td>{{ $demoRequest->mobile_no }}</td>
                                </tr>
                                <tr>
                                    <th>ইমেইল</th>
                                    <td>{{ $demoRequest->email }}</td>
                                </tr>
                                <tr>
                                    <th>মন্তব্য</th>
                                    <td>{{ $demoRequest->comment ?? 'কোন মন্তব্য নেই' }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class="mt-3">
                        <a href="{{ route('demo.edit', $demoRequest->id) }}" class="btn btn-primary">
                            <i class="fas fa-edit"></i> সম্পাদনা করুন
                        </a>
                        <a href="{{ route('demo.list') }}" class="btn btn-secondary">
                            <i class="fas fa-arrow-left"></i> ফিরে যান
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
