@php
    $prices = \App\Models\Price::all();
@endphp
@extends('layouts.app')
@section('content')
    <section class="breadcrumb-area text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>মূল্য তালিকা</h2>
                    <ul class="list-unstyled list-inline">
                        <li class="list-inline-item"><a href="{{ route('home') }}">হোম</a></li>
                        <li class="list-inline-item"><i class="fa fa-long-arrow-right"></i>মূল্য তালিকা</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="page mt-40 mb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table table-price table-bordered table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th width="20%">প্যাকেজ<br><span>(সদস্য অনুযায়ী)</span></th>
                                    <th width="20%">সফ্টওয়্যার মূল্য<br><span>(ইনস্টলের সময়)</span></th>
                                    <th width="30%">সার্ভার ফি এবং সার্ভিস চার্জ<br><span>(বাৎসরিক প্যাকেজ)</span></th>
                                    <th width="30%">সার্ভার ফি এবং সার্ভিস চার্জ<br><span>(মাসিক প্যাকেজ)</span></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($prices as $price)
                                    <tr>
                                        <td class="text-center">{{ $price->package_name }}</td>
                                        <td class="text-right">{{ $price->software_price }}</td>
                                        <td style="text-align:right;">{{ $price->annual_server_fee }}</td>
                                        <td style="text-align:right;">{{ $price->monthly_server_fee }}</td>
                                    </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                    <p style="text-align: center;margin-top: 20px;font-size: 20px;font-weight: 600;color: #0951a2;">* ১০০০০
                        + সদস্য হলে আলোচনা সাপেক্ষে মূল্য নির্ধারণ করা হবে। </p>
                    <p style="text-align: center;margin-top: 20px;font-size: 15px;font-weight: 600;color: red;">আপনি সবচেয়ে
                        ছোট প্যাকেজ নিয়ে শুরু করতে পারেন। পরবর্তীতে যেকোন প্যাকেজে আপগ্রেড করতে পারবেন আপনার সব ডাটা ঠিক
                        রেখেই।</p>

                    <p style="text-align: center;margin-top: 20px;font-size: 15px;font-weight: 600;">সার্ভার ফি কেন দিতে
                        হবে?</p>
                    <p style="text-align: center;margin-top: 10px;font-size: 15px;">অনলাইনে কোন কিছুই ফ্রি নয়। আপনার
                        সফ্টওয়্যার এবং তার ডাটা একটা সুরক্ষিত সার্ভারে সংরক্ষণ হয়, আর এই সার্ভারগুলোর রেন্টাল ফি রয়েছে,
                        অর্থাৎ আপনি অনলাইনে কিছুটা ডিস্ক স্পেস কিনেছেন এবং সেটা যতদিন আপনি ব্যবহার করবেন ততদিন আপনাকে
                        পেমেন্ট করে যেতে হবে।</p>
                </div>
            </div>
        </div>
    </section>
@endsection;
