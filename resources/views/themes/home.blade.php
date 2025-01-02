@extends('themes.layouts.app')
@include('themes.shared.slider')

@section('content')
    <!-- SweetAlert -->
    @include('sweetalert::alert') <!-- Include SweetAlert alert -->

    <!-- Popular -->
    <section class="popular">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-6">
                    <h1>Popular</h1>
                </div>
                <div class="col-6 text-end">
                    <a href="#" class="btn-first">View All</a>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-3 col-6">
                    <div class="card card-body p-lg-4 p3">
                        <a href="#"><img src="{{ asset('themes/assets/img/shop_01.jpg') }}" alt=""
                                class="img-fluid"></a>
                        <h3 class="product-name mt-3">Product 1</h3>
                        <div class="rating">
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="card card-body p-lg-4 p3">
                        <a href="#"><img src="{{ asset('themes/assets/img/shop_02.jpg') }}" alt=""
                                class="img-fluid"></a>
                        <h3 class="product-name mt-3">Product 2</h3>
                        <div class="rating">
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6 mt-3 mt-lg-0">
                    <div class="card card-body p-lg-4 p3">
                        <a href="#"><img src="{{ asset('themes/assets/img/shop_03.jpg') }}" alt=""
                                class="img-fluid"></a>
                        <h3 class="product-name mt-3">Product 3</h3>
                        <div class="rating">
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6 mt-3 mt-lg-0">
                    <div class="card card-body p-lg-4 p3">
                        <a href="#"><img src="{{ asset('themes/assets/img/shop_04.jpg') }}" alt=""
                                class="img-fluid"></a>
                        <h3 class="product-name mt-3">Product 4</h3>
                        <div class="rating">
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Latest -->
    <section class="latest">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-6">
                    <h1>Latest</h1>
                </div>
                <div class="col-6 text-end">
                    <a href="#" class="btn-first">View All</a>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-3 col-6">
                    <div class="card card-body p-lg-4 p3">
                        <a href="#"><img src="{{ asset('themes/assets/img/shop_01.jpg') }}" alt=""
                                class="img-fluid"></a>
                        <h3 class="product-name mt-3">Product 1</h3>
                        <div class="rating">
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="card card-body p-lg-4 p3">
                        <a href="#"><img src="{{ asset('themes/assets/img/shop_02.jpg') }}" alt=""
                                class="img-fluid"></a>
                        <h3 class="product-name mt-3">Product 2</h3>
                        <div class="rating">
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6 mt-3 mt-lg-0">
                    <div class="card card-body p-lg-4 p3">
                        <a href="#"><img src="{{ asset('themes/assets/img/shop_03.jpg') }}" alt=""
                                class="img-fluid"></a>
                        <h3 class="product-name mt-3">Product 3</h3>
                        <div class="rating">
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6 mt-3 mt-lg-0">
                    <div class="card card-body p-lg-4 p3">
                        <a href="#"><img src="{{ asset('themes/assets/img/shop_04.jpg') }}" alt=""
                                class="img-fluid"></a>
                        <h3 class="product-name mt-3">Product 4</h3>
                        <div class="rating">
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
