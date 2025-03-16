@extends('layouts.admin')
@section('main-content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">ডেমো রিকোয়েস্ট</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">ড্যাশবোর্ড</a></li>
                <li class="breadcrumb-item active">ডেমো রিকোয়েস্ট</li>
            </ol>

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    ডেমো রিকোয়েস্ট তালিকা
                </div>
                <div class="card-body">
                    <table id="customTable" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>আইডি</th>
                                <th>নাম</th>
                                <th>প্রতিষ্ঠানের ধরন</th>
                                <th>প্রতিষ্ঠানের নাম</th>
                                <th>মোবাইল নং</th>
                                <th>ইমেইল</th>
                                <th>বর্তমান সদস্য সংখ্যা</th>
                                <th>মন্তব্য</th>
                                <th>স্ট্যাটাস</th>
                                <th>অ্যাকশন</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($demoRequests as $demoRequest)
                                <tr>
                                    <td>{{ $demoRequest->id }}</td>
                                    <td>{{ $demoRequest->your_name }}</td>
                                    <td>{{ $demoRequest->organizationType->name }}</td>
                                    <td>{{ $demoRequest->organization_name }}</td>
                                    <td>{{ $demoRequest->mobile_no }}</td>
                                    <td>{{ $demoRequest->email }}</td>
                                    <td>{{ $demoRequest->present_member }}</td>
                                    <td>{{ $demoRequest->comment }}</td>
                                    <td>
                                        <form action="{{ route('demo.status.update', ['id' => $demoRequest->id]) }}"
                                            method="POST" class="d-inline">
                                            @csrf
                                            @method('PATCH')
                                            <select name="status" class="form-select form-select-sm d-inline-block w-auto"
                                                onchange="this.form.submit()">
                                                <option value="Pending"
                                                    {{ $demoRequest->status == 'Pending' ? 'selected' : '' }}>পেন্ডিং
                                                </option>
                                                <option value="Active"
                                                    {{ $demoRequest->status == 'Active' ? 'selected' : '' }}>অ্যাক্টিভ
                                                </option>
                                            </select>
                                        </form>
                                    </td>
                                    <td>

                                        <a href="{{ route('demo.edit', ['id' => $demoRequest->id]) }}"
                                            class="btn btn-primary btn-sm">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{ route('demo.destroy', ['id' => $demoRequest->id]) }}"
                                            method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"
                                                onclick="return confirm('আপনি কি নিশ্চিত?')">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('searchInput');
            const perPageSelect = document.getElementById('perPage');
            const table = document.getElementById('customTable');
            const tbody = table.querySelector('tbody');
            const rows = Array.from(tbody.querySelectorAll('tr'));
            let currentPage = 1;
            let rowsPerPage = 10;

            // টেবিল আপডেট ফাংশন
            function updateTable() {
                const searchText = searchInput.value.toLowerCase();
                const filteredRows = rows.filter(row => {
                    const text = row.textContent.toLowerCase();
                    return text.includes(searchText);
                });

                // সব রো প্রথমে লুকিয়ে ফেলি
                rows.forEach(row => row.style.display = 'none');

                // শুধু ফিল্টার করা রো-গুলো দেখাই
                const start = (currentPage - 1) * rowsPerPage;
                const end = start + rowsPerPage;
                filteredRows.slice(start, end).forEach(row => row.style.display = '');
            }

            // সার্চ ফাংশন
            searchInput.addEventListener('keyup', function() {
                currentPage = 1; // সার্চ করলে প্রথম পেজে ফিরে যাই
                updateTable();
            });

            // প্রতি পেজে কয়টি দেখাবে
            perPageSelect.addEventListener('change', function() {
                rowsPerPage = parseInt(this.value);
                currentPage = 1; // পেজ সাইজ পরিবর্তন করলে প্রথম পেজে ফিরে যাই
                updateTable();
            });

            // প্রথমবার টেবিল আপডেট করি
            updateTable();
        });
    </script>
@endsection
