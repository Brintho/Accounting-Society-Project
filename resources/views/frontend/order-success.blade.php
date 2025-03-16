@extends('layouts.app')
@section('content')
    <section class="breadcrumb-area text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>অর্ডার সম্পন্ন হয়েছে</h2>
                    <ul class="list-unstyled list-inline">
                        <li class="list-inline-item"><a href="https://samityhisab.com/">হোম</a></li>
                        <li class="list-inline-item"><i class="fa fa-long-arrow-right"></i>অর্ডার সম্পন্ন</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="page mt-40 mb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="alert alert-success">
                        <h4>আপনার অর্ডার সফলভাবে সম্পন্ন হয়েছে!</h4>
                        <p>আমরা শীঘ্রই আপনার সাথে যোগাযোগ করব।</p>
                    </div>
                    <a href="{{ route('home') }}" class="btn btn-primary mt-3">হোম পেজে ফিরে যান</a>
                </div>
            </div>
        </div>
    </section>
@endsection
