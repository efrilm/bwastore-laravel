@extends('layouts.admin')

@section('title')
    Store Dashboard
@endsection

@section('content')
    <div class="section-content section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <div class="dashboard-heading">
                <h2 class="dashboard-title">Admin Dashboard</h2>
                <p class="dashboard-subtitle">This is BWAStore Admin</p>
            </div>
            <div class="dashboard-content">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-2">
                            <div class="card-body">
                                <div class="dashboard-card-title">Customer</div>
                                <div class="dashboard-card-subtitle">{{ $customer }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-2">
                            <div class="card-body">
                                <div class="dashboard-card-title">Revenue</div>
                                <div class="dashboard-card-subtitle">${{ $revenue }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-2">
                            <div class="card-body">
                                <div class="dashboard-card-title">Transaction</div>
                                <div class="dashboard-card-subtitle">{{ $transaction }}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12 mt-2">
                        <h5 class="mb-3">Recent Transaction</h5>
                        <a href="/dashboard-transaction-details.html" class="card card-list d-block">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-1">
                                        <img src="/images/dashboard-icon-product-1.png" alt="">
                                    </div>
                                    <div class="col-md-4">
                                        Machiatto
                                    </div>
                                    <div class="col-md-3">
                                        Reynandi
                                    </div>
                                    <div class="col-md-3">
                                        12 January, 2022
                                    </div>
                                    <div class="col-md-1 d-none d-md-block">
                                        <img src="/images/dashboard-arrow-right.svg" alt="">
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="/dashboard-transaction-details.html" class="card card-list d-block">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-1">
                                        <img src="/images/dashboard-icon-product-2.png" alt="">
                                    </div>
                                    <div class="col-md-4">
                                        LeBrone X
                                    </div>
                                    <div class="col-md-3">
                                        Aca
                                    </div>
                                    <div class="col-md-3">
                                        18 January, 2022
                                    </div>
                                    <div class="col-md-1 d-none d-md-block">
                                        <img src="/images/dashboard-arrow-right.svg" alt="">
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="/dashboard-transaction-details.html" class="card card-list d-block">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-1">
                                        <img src="/images/dashboard-icon-product-3.png" alt="">
                                    </div>
                                    <div class="col-md-4">
                                        Sofa Margarine
                                    </div>
                                    <div class="col-md-3">
                                        Joni Gimanh
                                    </div>
                                    <div class="col-md-3">
                                        18 January, 2022
                                    </div>
                                    <div class="col-md-1 d-none d-md-block">
                                        <img src="/images/dashboard-arrow-right.svg" alt="">
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
