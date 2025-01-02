@extends('themes.layouts.app')

@section('content')
    <section class="breadcrumb-section pb-4 pb-md-4 pt-4 pt-md-4">
        <div class="container">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ '/' }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('products') }} ">Products</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $product->name }}</li>
                </ol>
            </nav>
        </div>
    </section>
    <section class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div id="product-images" class="carousel slide" data-ride="carousel">
                        <!-- slides -->
                        <div class="carousel-inner">
                            <div class="carousel-item active"> <img src="{{ asset('img/1.jpg') }}" alt="Product 1"> </div>
                            <div class="carousel-item"> <img src="{{ asset('img/2.jpg') }}" alt="Product 2"> </div>
                            <div class="carousel-item"> <img src="{{ asset('img/3.jpg') }}" alt="Product 3"> </div>
                            <div class="carousel-item"> <img src="{{ asset('img/4.jpg') }}" alt="Product 4"> </div>
                        </div> <!-- Left right -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#product-images"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#product-images"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                        <!-- Thumbnails -->
                        <ol class="carousel-indicators list-inline">
                            <li class="list-inline-item active"> <a id="carousel-selector-0" class="active"
                                    data-bs-slide-to="0" data-bs-target="#product-images"> <img
                                        src="{{ asset('img/1.jpg') }}" class="img-fluid"> </a> </li>
                            <li class="list-inline-item"> <a id="carousel-selector-1" data-bs-slide-to="1"
                                    data-bs-target="#product-images">
                                    <img src="{{ asset('img/2.jpg') }}" class="img-fluid"> </a> </li>
                            <li class="list-inline-item"> <a id="carousel-selector-2" data-bs-slide-to="2"
                                    data-bs-target="#product-images">
                                    <img src="{{ asset('img/3.jpg') }}" class="img-fluid"> </a> </li>
                            <li class="list-inline-item"> <a id="carousel-selector-3" data-bs-slide-to="3"
                                    data-bs-target="#product-images">
                                    <img src="{{ asset('img/4.jpg') }}" class="img-fluid"> </a> </li>
                        </ol>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="product-detail mt-6 mt-md-0">
                        <h1 class="mb-1">{{ $product->name }}</h1>
                        <div class="mb-3 rating">
                            <small class="text-warning">
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star-half"></i>
                            </small>
                        </div>
                        <hr class="my-6">
                        <div class="product-info">
                            <table class="table table-borderless mb-0">
                                <tbody>
                                    <tr>
                                        <td>SKU:</td>
                                        <td>{{ $product->sku }}</td>
                                    </tr>
                                    <tr>
                                        <td>Availability:</td>
                                        <td>{{ $product->stock_status_label }}</td>
                                    </tr>
                                    <tr>
                                        <td>Type:</td>
                                        <td>Fruits</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <br>
                        <p>{!! $product->body !!}</p>
                        <hr class="my-6">
                        <div class="product-share">
                            <a href="{{ $whatsappUrl }}" class="whatsapp-button" target="_blank">
                                <i class="bx bxl-whatsapp"></i>Hubungi Kami di Whatsapp
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
