@php
    $clients = \App\Models\DemoRequest::where('status', 'Active')->get();

@endphp
@extends('layouts.app')
@section('content')
    <section class="breadcrumb-area text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>গ্রাহক তালিকা</h2>
                    <ul class="list-unstyled list-inline">
                        <li class="list-inline-item"><a href="{{ route('home') }}">হোম</a></li>
                        <li class="list-inline-item"><i class="fa fa-long-arrow-right"></i>গ্রাহক তালিকা</li>
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
                        <table class="table table-bordered table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th width="50%">প্রতিষ্ঠানের নাম</th>
                                    <th width="50%">প্রতিষ্ঠানের ঠিকানা</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($clients as $client)
                                    <tr>
                                        <td>{{ $client->organization_name }}</td>
                                        <td>{{ $client->address }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
