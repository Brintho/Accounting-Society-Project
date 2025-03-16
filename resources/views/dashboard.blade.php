@extends('layouts.admin');

@section('main-content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">হিসাব সমিতি ড্যাশবোর্ড</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">ড্যাশবোর্ড</li>
            </ol>
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body">মোট সদস্য</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">বিস্তারিত দেখুন</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-warning text-white mb-4">
                        <div class="card-body">মোট জমা</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">বিস্তারিত দেখুন</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-success text-white mb-4">
                        <div class="card-body">মোট উত্তোলন</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">বিস্তারিত দেখুন</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-danger text-white mb-4">
                        <div class="card-body">বকেয়া</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">বিস্তারিত দেখুন</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-chart-area me-1"></i>
                            মাসিক জমার হিসাব
                        </div>
                        <div class="card-body"><canvas id="monthlyDepositChart" width="100%" height="40"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-chart-bar me-1"></i>
                            মাসিক উত্তোলনের হিসাব
                        </div>
                        <div class="card-body"><canvas id="monthlyWithdrawalChart" width="100%" height="40"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    সদস্যদের তালিকা
                </div>
                <div class="card-body">
                    <table id="membersTable">
                        <thead>
                            <tr>
                                <th>নাম</th>
                                <th>সদস্য আইডি</th>
                                <th>যোগদানের তারিখ</th>
                                <th>জমা</th>
                                <th>উত্তোলন</th>
                                <th>বকেয়া</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>নাম</th>
                                <th>সদস্য আইডি</th>
                                <th>যোগদানের তারিখ</th>
                                <th>জমা</th>
                                <th>উত্তোলন</th>
                                <th>বকেয়া</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td>আব্দুল করিম</td>
                                <td>001</td>
                                <td>2021/01/15</td>
                                <td>৳ 50,000</td>
                                <td>৳ 20,000</td>
                                <td>৳ 0</td>
                            </tr>
                            <tr>
                                <td>রহিমা খাতুন</td>
                                <td>002</td>
                                <td>2021/02/20</td>
                                <td>৳ 45,000</td>
                                <td>৳ 15,000</td>
                                <td>৳ 5,000</td>
                            </tr>
                            <tr>
                                <td>সালমা বেগম</td>
                                <td>003</td>
                                <td>2021/03/10</td>
                                <td>৳ 60,000</td>
                                <td>৳ 25,000</td>
                                <td>৳ 0</td>
                            </tr>
                            <tr>
                                <td>জাহিদ হাসান</td>
                                <td>004</td>
                                <td>2021/04/05</td>
                                <td>৳ 70,000</td>
                                <td>৳ 30,000</td>
                                <td>৳ 10,000</td>
                            </tr>
                            <tr>
                                <td>ফারহানা আক্তার</td>
                                <td>005</td>
                                <td>2021/05/12</td>
                                <td>৳ 55,000</td>
                                <td>৳ 20,000</td>
                                <td>৳ 0</td>
                            </tr>
                            <tr>
                                <td>আনিসুর রহমান</td>
                                <td>006</td>
                                <td>2021/06/18</td>
                                <td>৳ 65,000</td>
                                <td>৳ 35,000</td>
                                <td>৳ 5,000</td>
                            </tr>
                            <tr>
                                <td>নাসিমা আক্তার</td>
                                <td>007</td>
                                <td>2021/07/22</td>
                                <td>৳ 40,000</td>
                                <td>৳ 10,000</td>
                                <td>৳ 0</td>
                            </tr>
                            <tr>
                                <td>মোঃ সেলিম</td>
                                <td>008</td>
                                <td>2021/08/30</td>
                                <td>৳ 75,000</td>
                                <td>৳ 40,000</td>
                                <td>৳ 15,000</td>
                            </tr>
                            <tr>
                                <td>সুমাইয়া আক্তার</td>
                                <td>009</td>
                                <td>2021/09/25</td>
                                <td>৳ 50,000</td>
                                <td>৳ 20,000</td>
                                <td>৳ 0</td>
                            </tr>
                            <tr>
                                <td>মোঃ রফিক</td>
                                <td>010</td>
                                <td>2021/10/10</td>
                                <td>৳ 60,000</td>
                                <td>৳ 25,000</td>
                                <td>৳ 5,000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection
