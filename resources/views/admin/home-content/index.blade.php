@php
    $homeContents = \App\Models\HomeContent::latest()->get();

@endphp
@extends('layouts.admin');
@section('main-content')
    <div class="container mt-5">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Home Image</th>
                    <th>Iframe Link</th>
                    <th>Title</th>
                    <th>Features</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($homeContents as $homeContent)
                    <tr>
                        <td>
                            <!-- Home Image -->
                            @if ($homeContent->image)
                                <img src="{{ asset('uploads/home/' . $homeContent->image) }}" class="img-fluid"
                                    style="max-width: 100px; max-height: 100px;">
                            @else
                                No Image
                            @endif
                        </td>
                        <td>{{ $homeContent->iframe_link }}</td>
                        <td>{{ $homeContent->title }}</td>
                        <td>
                            @if ($homeContent && isset($homeContent->features))
                                @foreach (json_decode($homeContent->features) as $feature)
                                    <li>{{ $feature }}</li>
                                @endforeach
                            @endif

                        </td>
                        <td>
                            <div class="container ">
                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle" type="button" id="actionDropdown"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Actions
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="actionDropdown">
                                        <li><a class="dropdown-item"
                                                href="{{ route('home.edit', ['id' => $homeContent->id]) }}"> Edit</a></li>
                                        <li><a class="dropdown-item text-danger"
                                                href="{{ route('home.delete', ['id' => $homeContent->id]) }}">Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
