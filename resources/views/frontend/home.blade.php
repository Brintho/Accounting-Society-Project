@extends('layouts.app')
@section('title', 'Home')
@section('content')

    <style>
        .custom-img {
            width: 100%;
            max-width: 100%;
            height: auto;
            object-fit: cover;
        }

        .owl-carousel .owl-item img {
            display: block;
            width: 100%;
            height: auto;
            max-height: 400px;
        }
    </style>
    <!-- Slider Area -->
    @php
        $homeContent = \App\Models\HomeContent::first();
        $clients = \App\Models\Order::where('status', 'Approved')->get();

    @endphp

    <section class="home-slider">
        <div class="container">
            @if ($homeContent && $homeContent->image)
                <div class="slider-wrapper owl-carousel">
                    <div class="slider-item">
                        <img class="img-fluid custom-img" src="{{ asset('uploads/home/' . $homeContent->image) }}"
                            alt="{{ $homeContent->title ?? '' }}">
                    </div>
                    <div class="slider-item">
                        <img class="img-fluid custom-img" src="{{ asset('uploads/home/' . $homeContent->image) }}"
                            alt="{{ $homeContent->title ?? '' }}">
                    </div>
                    <div class="slider-item">
                        <img class="img-fluid custom-img" src="{{ asset('uploads/home/' . $homeContent->image) }}"
                            alt="{{ $homeContent->title ?? '' }}">
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
                        <h4>{{ $homeContent->title }}</h4>
                        <div class="elementor-divider">
                            <span class="elementor-divider-separator"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    @if ($homeContent && $homeContent->software_features)
                        <p>{{ $homeContent->software_features }}</p>
                    @endif
                    <p>{{ $homeContent->description }}</p>
                    <ul style="list-style: circle;margin-bottom: 10px;margin-left: 25px;">
                        @if ($homeContent && $homeContent->features)
                            @foreach (json_decode($homeContent->features) as $feature)
                                <li>{{ $feature }}</li>
                            @endforeach
                        @endif
                    </ul>
                    <p>{{ $homeContent->software_tagline }}</p>
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
    <script>
        $(document).ready(function() {
            $(".owl-carousel").owlCarousel({
                loop: true,
                margin: 10,
                nav: false,
                dots: true,
                autoplay: true,
                // autoplayTimeout: 8000,
                responsive: {
                    0: {
                        items: 1
                    },
                    768: {
                        items: 1
                    },
                    1024: {
                        items: 1
                    },
                    1200: {
                        items: 1
                    }
                }
            });
        });
    </script>
@endsection
