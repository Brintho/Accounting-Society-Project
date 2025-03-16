@extends('layouts.app')
@section('title', 'Home')
@section('content')
    <!-- Slider Area -->
    @php
        $homeContent = \App\Models\HomeContent::first();
        $clients = \App\Models\Order::where('status', 'approved')->get();
    @endphp

    <section class="home-slider">
        <div class="container">
            @if ($homeContent && $homeContent->image)
                <div class="slider-wrapper owl-carousel owl-loaded owl-drag">
                    <div class="owl-stage-outer">
                        <div class="owl-stage" style="width: 1110px; transform: translate3d(0px, 0px, 0px);">
                            <div class="owl-item active" style="width: 1110px; height: 400px;">
                                <div class="slider-item slider12">
                                    <img style="width: auto; height: auto; max-width: 100%; object-fit: cover;"
                                        src="{{ asset('uploads/home/' . $homeContent->image) }}"
                                        alt="{{ $homeContent->title ?? '' }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <p>No image available</p>
            @endif
        </div>
    </section>

    <section class="counter-area happy-area mt-20 mb-15">
        <div class="container">
            <div class="row">
                <div class="offset-md-3 col-md-6">
                    @if ($homeContent && $homeContent->iframe_link)
                        <iframe width="100%" height="300" src="{{ $homeContent->iframe_link }}"
                            title="YouTube video player" frameborder="1"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <section class="counter-area happy-area mt-20 mb-15">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="happy-area-top2 area-title text-center">
                        <h4>কি কি আছে এই সফটওয়্যার এ?</h4>
                        <div class="elementor-divider">
                            <span class="elementor-divider-separator"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    @if ($homeContent && $homeContent->title)
                        <p>{{ $homeContent->title }}</p>
                    @endif
                    <p>এই সফটওয়্যার ব্যবহারে যেসব সুবিধা পাচ্ছেন -</p>
                    <ul style="list-style: circle;margin-bottom: 10px;margin-left: 25px;">
                        @if ($homeContent && $homeContent->features)
                            @foreach (json_decode($homeContent->features) as $feature)
                                <li>{{ $feature }}</li>
                            @endforeach
                        @endif
                    </ul>
                    <p>নিরাপদ, সুরক্ষিত ও ভাবনাহীন নির্ভুল হিসাব রাখুন সমিতি হিসাব অনলাইন সফটওয়্যার ব্যবহার করে।</p>
                </div>
            </div>
        </div>
    </section>

    <section class="customer-area mb-30">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="area-title text-center">
                        <h4>সাম্প্রতিক কিছু প্রতিষ্ঠান যারা আমাদের সফটওয়্যার ব্যবহার করছে</h4>
                        <div class="elementor-divider">
                            <span class="elementor-divider-separator"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($clients as $client)
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="client-box">
                            <div class="client-logo">
                                <img src="{{ asset('uploads/organization-logos/' . $client->image) }}"
                                    alt="{{ $client->organization_name }}">
                            </div>
                            <div class="client-details">
                                <p>{{ $client->organization_name }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- End Customer Area -->

    <!-- Home About Area -->
    <!-- End Home About Area -->

    <!-- pricipal Area -->
    <!-- End pricipal Area -->

    <!-- Specialist Area -->
    <!-- End Specialist Area -->

    <!-- Customers Area -->
    <!-- End Customers Area -->

    <!-- News & Events -->
    <!-- End News & Events -->

    <!-- Gallery Area -->
    <!-- End Gallery Area -->
@endsection
