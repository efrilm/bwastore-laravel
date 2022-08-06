@extends('layouts.dashboard')

@section('title')
    Store Dashboard Product
@endsection

@section('content')
    <div class="section-content section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <div class="dashboard-heading">
                <h2 class="dashboard-title">#STORE9875</h2>
                <p class="dashboard-subtitle">Transaction Details</p>
            </div>
            <div class="dashboard-content" id="transactionDetails">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-md-2">
                                        <img src="/images/product-details-dashboard.png" class="w-100 mb-3" alt="">
                                    </div>
                                    <div class="col-12 col-md-10">
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <div class="product-title"> Customer Name </div>
                                                <div class="product-subtitle"> Angga Risky </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="product-title"> Product Name </div>
                                                <div class="product-subtitle"> Machiatto </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="product-title"> Date of Transaction </div>
                                                <div class="product-subtitle"> 12 Januari, 2022 </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="product-title"> Status </div>
                                                <div class="product-subtitl text-danger"> Pending </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="product-title"> Total Amount </div>
                                                <div class="product-subtitle"> $280, 409 </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="product-title"> Mobile </div>
                                                <div class="product-subtitle"> +628 2022 1111 </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 mt-4">
                                        <h5>Shipping Information</h5>
                                    </div>
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <div class="product-title"> Address I </div>
                                                <div class="product-subtitle"> Setra Suta Cemara </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="product-title"> Address II </div>
                                                <div class="product-subtitle"> Blok B2 No. 34 </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="product-title"> Province </div>
                                                <div class="product-subtitle"> Jawa Barat </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="product-title"> City </div>
                                                <div class="product-subtitle"> Bandung </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="product-title"> Postal Code </div>
                                                <div class="product-subtitle"> 12234 </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="product-title"> Country </div>
                                                <div class="product-subtitle"> Indonesia </div>
                                            </div>
                                            <div class="col-12 col-md-3">
                                                <div class="product-title"> Status</div>
                                                <select name="status" id="status" class="form-control" v-model="status">
                                                    <option value="UNPAID">Unpaid</option>
                                                    <option value="PENDING">Pending</option>
                                                    <option value="SHIPPING">Shipping</option>
                                                    <option value="SUCCESS">Success</option>
                                                </select>
                                            </div>
                                            <template v-if="status =='SHIPPING'">
                                                <div class="col-md-3">
                                                    <div class="product-title">Input Resi</div>
                                                    <input type="text" class="form-control" name="resi"
                                                        v-model="resi">
                                                </div>
                                                <div class="col-md-2">
                                                    <button type="submit" class="btn btn-success btn-block mt-4">Update
                                                        Resi</button>
                                                </div>
                                            </template>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-12 text-right">
                                        <button class="btn btn-success btn-lg mt-4">
                                            Save Now
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('addon-script')
    <script src="/vendor/vue/vue.js"></script>
    <script>
        var transactionDetails = new Vue({
            el: "#transactionDetails",
            data: {
                status: "SHIPPING",
                resi: "BD012308012132",
            },

        });
    </script>
@endpush