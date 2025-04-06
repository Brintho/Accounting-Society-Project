@php
    $homeContents = \App\Models\HomeContent::latest()->get();
@endphp

@extends('layouts.admin')
@section('main-content')
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex justify-content-between align-items-center">
                <h4 class="m-0 font-weight-bold text-primary">Home Content Management</h4>
                <a href="{{ route('home.create') }}" class="btn btn-primary btn-sm">
                    <i class="fas fa-plus-circle"></i> Add New Content
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered " id="dataTable" width="100%" cellspacing="0">
                        <thead class="thead-light">
                            <tr>
                                <th>Media</th>
                                <th>Content</th>
                                <th>Contact Info</th>
                                <th>Social Links</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($homeContents as $homeContent)
                                <tr>
                                    <!-- Media Column -->
                                    <td>
                                        <div class="media-container">
                                            @if ($homeContent->image)
                                                <div class="media-item mb-3">
                                                    <h6 class="media-title"><i class="fas fa-image"></i> Home Image</h6>
                                                    <img src="{{ asset('uploads/home/' . $homeContent->image) }}"
                                                        class="img-thumbnail" style="max-width: 150px; max-height: 100px;">
                                                </div>
                                            @endif

                                            @if ($homeContent->iframe_link)
                                                <div class="media-item">
                                                    <h6 class="media-title"><i class="fas fa-video"></i> Video</h6>
                                                    <div class="embed-responsive embed-responsive-16by9"
                                                        style="max-width: 200px;">
                                                        <iframe class="embed-responsive-item"
                                                            src="{{ $homeContent->iframe_link }}" allowfullscreen></iframe>
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                    </td>

                                    <!-- Content Column -->
                                    <td>
                                        <div class="content-info">

                                            <h5 class="text-primary">{{ $homeContent->title }}</h5>
                                            <p class="text-muted font-italic">"{{ $homeContent->software_tagline }}"</p>

                                            <div class="description-box">
                                                <p>{{ Str::limit($homeContent->description, 150) }}</p>
                                            </div>

                                            @if ($homeContent && isset($homeContent->features))
                                                <div class="features-box mt-2">
                                                    <h6><i class="fas fa-check-circle"></i> Key Features:</h6>
                                                    <ul class="features-list">
                                                        @foreach (json_decode($homeContent->features) as $feature)
                                                            <li>{{ $feature }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                        </div>
                                    </td>

                                    <!-- Contact Info Column -->
                                    <td>
                                        <div class="contact-info">
                                            <div class="contact-item">
                                                <i class="fas fa-map-marker-alt"></i>
                                                <span>{{ $homeContent->company_address }}</span>
                                            </div>

                                            <div class="contact-item">
                                                <i class="fas fa-phone"></i>
                                                <span>{{ $homeContent->company_phone }}</span>
                                            </div>

                                            <div class="contact-item">
                                                <i class="fab fa-whatsapp"></i>
                                                <span>{{ $homeContent->whatsapp_number }}</span>
                                            </div>

                                            <div class="contact-item">
                                                <i class="fas fa-envelope"></i>
                                                <span>{{ $homeContent->company_email }}</span>
                                            </div>
                                        </div>
                                    </td>

                                    <!-- Social Links Column -->
                                    <td>
                                        <div class="social-links">
                                            @if ($homeContent->messenger)
                                                <a href="{{ $homeContent->messenger }}" target="_blank"
                                                    class="social-link messenger">
                                                    <i class="fab fa-facebook-messenger"></i> Messenger
                                                </a>
                                            @endif
                                            @if ($homeContent->facebook)
                                                <a href="{{ $homeContent->facebook }}" target="_blank"
                                                    class="social-link messenger">
                                                    <i class="fab fa-facebook-messenger"></i> facebook
                                                </a>
                                            @endif

                                            @if ($homeContent->youtube_link)
                                                <a href="{{ $homeContent->youtube_link }}" target="_blank"
                                                    class="social-link youtube">
                                                    <i class="fab fa-youtube"></i> YouTube
                                                </a>
                                            @endif

                                            @if ($homeContent->website_link)
                                                <a href="{{ $homeContent->website_link }}" target="_blank"
                                                    class="social-link website">
                                                    <i class="fas fa-globe"></i> Website
                                                </a>
                                            @endif
                                        </div>
                                    </td>

                                    <!-- Actions Column -->
                                    <td>
                                        <div class="action-buttons">
                                            <a href="{{ route('home.edit', ['id' => $homeContent->id]) }}"
                                                class="btn btn-sm btn-primary mb-2" title="Edit">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a href="{{ route('home.delete', ['id' => $homeContent->id]) }}"
                                                class="btn btn-sm btn-danger" title="Delete"
                                                onclick="return confirm('Are you sure you want to delete this item?');">
                                                <i class="fas fa-trash-alt"></i>
                                            </a>

                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* Custom styling for the table */
        .media-container {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .media-container {
            display: flex;
            flex-direction: column;
            gap: 15px;
            max-width: 250px;
            /* সর্বোচ্চ প্রস্থ নির্ধারণ */
        }

        .media-item {
            width: 100%;
            overflow: hidden;
        }

        .embed-responsive {
            position: relative;
            display: block;
            width: 100%;
            padding: 0;
            overflow: hidden;
            border-radius: 4px;
            border: 1px solid #dee2e6;
        }

        .embed-responsive-16by9::before {
            display: block;
            content: "";
            padding-top: 56.25%;
            /* 16:9 Aspect Ratio */
        }

        .embed-responsive .embed-responsive-item {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: 0;
        }

        .media-title {
            font-size: 0.9rem;
            color: #6c757d;
            margin-bottom: 5px;
        }

        .content-info {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .description-box {
            background-color: #f8f9fa;
            padding: 8px;
            border-radius: 5px;
            border-left: 3px solid #4e73df;
        }

        .features-box {
            background-color: #f8f9fa;
            padding: 8px;
            border-radius: 5px;
        }

        .features-list {
            padding-left: 20px;
            margin-bottom: 0;
        }

        .features-list li {
            margin-bottom: 5px;
            font-size: 0.9rem;
        }

        .contact-info {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .contact-item {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 0.9rem;
        }

        .contact-item i {
            color: #4e73df;
            width: 20px;
            text-align: center;
        }

        .social-links {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .social-link {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 5px 10px;
            border-radius: 5px;
            color: white;
            text-decoration: none;
            font-size: 0.9rem;
            transition: all 0.3s;
        }

        .social-link:hover {
            color: rgb(0, 0, 0);
            opacity: 0.9;
            transform: translateX(3px);
        }

        .social-link i {
            font-size: 1.1rem;
        }

        .messenger {
            background-color: #006AFF;
        }

        .youtube {
            background-color: #FF0000;
        }

        .website {
            background-color: #17a2b8;
        }

        .action-buttons {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 5px;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .table-responsive {
                overflow-x: auto;
            }

            #dataTable {
                width: 100% !important;
            }
        }
    </style>

@section('scripts')
    <!-- Page level plugins -->
    <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable({
                responsive: true,
                columnDefs: [{
                        responsivePriority: 1,
                        targets: 1
                    }, // Content column
                    {
                        responsivePriority: 2,
                        targets: -1
                    }, // Actions column
                    {
                        responsivePriority: 3,
                        targets: 0
                    } // Media column
                ]
            });
        });
    </script>
@endsection
@endsection
