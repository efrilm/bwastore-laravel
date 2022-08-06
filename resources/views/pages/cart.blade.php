@extends('layouts.app')

@section('title')
    Store Cart Page
@endsection

@section('content')
    <!-- Page Content -->
    <div class="page-content page-cart">
        <!-- Breadcrumbs -->
        <section class="store-breadcrumbs" data-aos="fade-down">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <nav aria-label="breadcrumbs">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="/index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Cart</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Breadcrumbs -->

        <!-- Store Cart -->
        <section class="store-cart">
            <div class="container">
                <!-- Table -->
                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-12 table-responsive">
                        <table class="table table-borderless table-cart">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Name &amp; Seller</th>
                                    <th>Price</th>
                                    <th>Menu</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="width: 25%">
                                        <img src="/images/product-cart-1.jpg" alt="" class="cart-image" />
                                    </td>
                                    <td style="width: 35%">
                                        <div class="product-title">Sofa Ternyaman</div>
                                        <div class="product-subtitle">by Sukam Wijaya</div>
                                    </td>
                                    <td style="width: 35%">
                                        <div class="product-title">$29,111</div>
                                        <div class="product-subtitle">USD</div>
                                    </td>
                                    <td style="width: 20%">
                                        <a href="#" class="btn btn-remove-cart"> Remove </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 20%">
                                        <img src="/images/product-cart-2.jpg" alt="" class="cart-image" />
                                    </td>
                                    <td style="width: 35%">
                                        <div class="product-title">Sneaker</div>
                                        <div class="product-subtitle">by Allizwell</div>
                                    </td>
                                    <td style="width: 35%">
                                        <div class="product-title">$49,111</div>
                                        <div class="product-subtitle">USD</div>
                                    </td>
                                    <td style="width: 20%">
                                        <a href="#" class="btn btn-remove-cart"> Remove </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 25%">
                                        <img src="/images/product-cart-3.jpg" alt="" class="cart-image" />
                                    </td>
                                    <td style="width: 35%">
                                        <div class="product-title">Coffie Holder</div>
                                        <div class="product-subtitle">by Jhons Scambelrs</div>
                                    </td>
                                    <td style="width: 35%">
                                        <div class="product-title">$10,111</div>
                                        <div class="product-subtitle">USD</div>
                                    </td>
                                    <td style="width: 20%">
                                        <a href="#" class="btn btn-remove-cart"> Remove </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- End Table -->

                <!-- Divider -->
                <div class="row" data-aos="fade-up" data-aos-delay="150">
                    <div class="col-12">
                        <hr />
                    </div>
                </div>
                <!-- End Divider -->

                <!-- Title Shipping Details -->
                <div class="row" data-aos="fade-up" data-aos-delay="150">
                    <div class="col-12">
                        <h2 class="mb-4">Shipping Details</h2>
                    </div>
                </div>
                <!-- End Shipping Details -->

                <!-- Shipping Details -->
                <div class="row mb-2" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="addressOne">Address 1</label>
                            <input type="text" class="form-control" id="addressOne" name="addressOne"
                                value="Setra Duta Cemara" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="addressTwo">Address 2</label>
                            <input type="text" class="form-control" id="addressTwo" name="addressTwo"
                                value="Blok B2 No. 34" />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="province">Province</label>
                            <select name="province" id="province" class="form-control">
                                <option value="West Java">West Java</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="city">City</label>
                            <select name="city" id="city" class="form-control">
                                <option value="Bandung">Bandung</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="postalCode">Postal Code</label>
                            <input type="text" class="form-control" id="postalCode" name="postalCode"
                                value="129222" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="country">Country</label>
                            <input type="text" class="form-control" id="country" name="country"
                                value="Indonesia" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="mobile">Mobile</label>
                            <input type="text" class="form-control" id="mobile" name="mobile"
                                value="+628 2020 11111" />
                        </div>
                    </div>
                </div>
                <!-- End Shipping Details -->

                <!-- Divider -->
                <div class="row" data-aos="fade-up" data-aos-delay="150">
                    <div class="col-12">
                        <hr />
                    </div>
                </div>
                <!-- End Divider -->

                <!-- Title Payment Informations -->
                <div class="row" data-aos="fade-up" data-aos-delay="150">
                    <div class="col-12">
                        <h2 class="mb-1">Payment Informations</h2>
                    </div>
                </div>
                <!-- End Payment Informations -->

                <!-- Payment Informations  -->
                <div class="row" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-4 col-md-2">
                        <div class="product-title">$10</div>
                        <div class="product-subtitle">Country Tax</div>
                    </div>
                    <div class="col-4 col-md-3">
                        <div class="product-title">$280</div>
                        <div class="product-subtitle">Product Insurance</div>
                    </div>
                    <div class="col-4 col-md-2">
                        <div class="product-title">$580</div>
                        <div class="product-subtitle">Ship to Jakarta</div>
                    </div>
                    <div class="col-4 col-md-2">
                        <div class="product-title text-success">$392,409</div>
                        <div class="product-subtitle">Total</div>
                    </div>
                    <div class="col-8 col-md-3">
                        <a href="/success.html" class="btn btn-success mt-4 px-4 btn-block">
                            Checkout Now
                        </a>
                    </div>
                </div>
                <!-- End Payment Informations -->
            </div>
        </section>
        <!-- Store Cart -->
    </div>
    <!-- End Page Content -->
@endsection
