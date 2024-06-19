@extends('layouts.index')

@section('title')
    CarVent Gallery
@endsection

@section('nav-links')
    <li class="nav-item"><a class="nav-link" aria-current="page" href="/#about">About</a></li>
    <li class="nav-item"><a class="nav-link active" href="#">Gallery</a></li>
    <li class="nav-item"><a class="nav-link" href="#">Disabled</a></li>
@endsection

@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Gallery</h2>
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>Gallery</li>
                </ol>
            </div>

        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>gallery</h2>
                <p>Check <span>Our Gallery</span></p>
            </div>

            <div class="gallery-slider swiper">
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                            href="assets/img/gallery/display1.png"><img src="assets/img/gallery/display1.png"
                                class="img-fluid" alt=""></a></div>
                    <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                            href="assets/img/gallery/display2.png"><img src="assets/img/gallery/display2.png"
                                class="img-fluid" alt=""></a></div>
                    <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                            href="assets/img/gallery/display3.png"><img src="assets/img/gallery/display3.png"
                                class="img-fluid" alt=""></a></div>
                    <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                            href="assets/img/gallery/display4.png"><img src="assets/img/gallery/display4.png"
                                class="img-fluid" alt=""></a></div>
                    <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                            href="assets/img/gallery/display5.png"><img src="assets/img/gallery/display5.png"
                                class="img-fluid" alt=""></a></div>
                    <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                            href="assets/img/gallery/display6.png"><img src="assets/img/gallery/display6.png"
                                class="img-fluid" alt=""></a></div>
                    <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                            href="assets/img/gallery/display7.png"><img src="assets/img/gallery/display7.png"
                                class="img-fluid" alt=""></a></div>
                    <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                            href="assets/img/gallery/display8.png"><img src="assets/img/gallery/display8.png"
                                class="img-fluid" alt=""></a></div>
                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Our Collection</h2>
                <p>Check Our <span>Car Collection</span></p>
            </div>

            <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

                <li class="nav-item">
                    <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#all">
                        <h4>All</h4>
                    </a>
                </li><!-- End tab nav item -->

                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#petrol">
                        <h4>Petrol</h4>
                    </a><!-- End tab nav item -->

                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#diesel">
                        <h4>Diesel</h4>
                    </a>
                </li><!-- End tab nav item -->

                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#electric">
                        <h4>Electric</h4>
                    </a>
                </li><!-- End tab nav item -->

                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#hybrid">
                        <h4>Hybrid</h4>
                    </a>
                </li><!-- End tab nav item -->

            </ul>

            <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

                <div class="tab-pane fade active show" id="all">

                    <div class="tab-header text-center">
                        <p>Cars</p>
                        <h3>All Type</h3>
                    </div>

                    <div class="row gy-5">

                        @foreach ($cars as $car)
                            <div class="col-lg-4 menu-item">
                                <a href="{{ asset('assets/img/cars/' . ($car->photo_url ? $car->photo_url : 'default.png')) }}"
                                    class="glightbox d-flex justify-content-center">
                                    <img src="{{ asset('assets/img/cars/' . ($car->photo_url ? $car->photo_url : 'default.png')) }}"
                                        class="menu-img img-fluid" alt=""
                                        style="height: 200px; object-fit: contain;">
                                </a>
                                <h4>{{ $car->name }}</h4>
                                <p class="ingredients">{{ $car->notes }}</p>
                                <p class="price">Rp{{ number_format($car->price) }}</p>
                                <a href="{{ route('rent', ['id' => $car->id]) }}" class="btn btn-rent"><span>Rent this
                                        car</span></a>
                            </div><!-- Menu Item -->
                        @endforeach

                    </div>
                </div>

                <div class="tab-pane fade" id="petrol">

                    <div class="tab-header text-center">
                        <p>Cars</p>
                        <h3>Petrol Fuel Type</h3>
                    </div>

                    <div class="row gy-5">

                        @foreach ($cars as $car)
                            @if ($car->fuel_type == 'petrol')
                                <div class="col-lg-4 menu-item">
                                    <a href="{{ asset('assets/img/cars/' . ($car->photo_url ? $car->photo_url : 'default.png')) }}"
                                        class="glightbox d-flex justify-content-center">
                                        <img src="{{ asset('assets/img/cars/' . ($car->photo_url ? $car->photo_url : 'default.png')) }}"
                                            class="menu-img img-fluid" alt=""
                                            style="height: 200px; object-fit: contain;">
                                    </a>
                                    <h4>{{ $car->name }}</h4>
                                    <p class="ingredients">{{ $car->notes }}</p>
                                    <p class="price">Rp{{ number_format($car->price) }}</p>
                                    <a href="{{ route('rent', ['id' => $car->id]) }}" class="btn btn-rent"><span>Rent
                                            this car</span></a>
                                </div><!-- Menu Item -->
                            @endif
                        @endforeach

                    </div>
                </div>

                <div class="tab-pane fade" id="diesel">

                    <div class="tab-header text-center">
                        <p>Cars</p>
                        <h3>Diesel Fuel Type</h3>
                    </div>

                    <div class="row gy-5">

                        @foreach ($cars as $car)
                            @if ($car->fuel_type == 'diesel')
                                <div class="col-lg-4 menu-item">
                                    <a href="{{ asset('assets/img/cars/' . ($car->photo_url ? $car->photo_url : 'default.png')) }}"
                                        class="glightbox d-flex justify-content-center">
                                        <img src="{{ asset('assets/img/cars/' . ($car->photo_url ? $car->photo_url : 'default.png')) }}"
                                            class="menu-img img-fluid" alt=""
                                            style="height: 200px; object-fit: contain;">
                                    </a>
                                    <h4>{{ $car->name }}</h4>
                                    <p class="ingredients">{{ $car->notes }}</p>
                                    <p class="price">Rp{{ number_format($car->price) }}</p>
                                    <a href="{{ route('rent', ['id' => $car->id]) }}" class="btn btn-rent"><span>Rent
                                            this car</span></a>
                                </div><!-- Menu Item -->
                            @endif
                        @endforeach

                    </div>
                </div>

                <div class="tab-pane fade" id="electric">

                    <div class="tab-header text-center">
                        <p>Cars</p>
                        <h3>Electric Fuel Type</h3>
                    </div>

                    <div class="row gy-5">

                        @foreach ($cars as $car)
                            @if ($car->fuel_type == 'electric')
                                <div class="col-lg-4 menu-item">
                                    <a href="{{ asset('assets/img/cars/' . ($car->photo_url ? $car->photo_url : 'default.png')) }}"
                                        class="glightbox d-flex justify-content-center">
                                        <img src="{{ asset('assets/img/cars/' . ($car->photo_url ? $car->photo_url : 'default.png')) }}"
                                            class="menu-img img-fluid" alt=""
                                            style="height: 200px; object-fit: contain;">
                                    </a>
                                    <h4>{{ $car->name }}</h4>
                                    <p class="ingredients">{{ $car->notes }}</p>
                                    <p class="price">Rp{{ number_format($car->price) }}</p>
                                    <a href="{{ route('rent', ['id' => $car->id]) }}" class="btn btn-rent"><span>Rent
                                            this car</span></a>
                                </div><!-- Menu Item -->
                            @endif
                        @endforeach

                    </div>
                </div>

                <div class="tab-pane fade" id="hybrid">

                    <div class="tab-header text-center">
                        <p>Cars</p>
                        <h3>Hybrid Fuel Type</h3>
                    </div>

                    <div class="row gy-5">

                        @foreach ($cars as $car)
                            @if ($car->fuel_type == 'hybrid')
                                <div class="col-lg-4 menu-item">
                                    <a href="{{ asset('assets/img/cars/' . ($car->photo_url ? $car->photo_url : 'default.png')) }}"
                                        class="glightbox d-flex justify-content-center">
                                        <img src="{{ asset('assets/img/cars/' . ($car->photo_url ? $car->photo_url : 'default.png')) }}"
                                            class="menu-img img-fluid" alt=""
                                            style="height: 200px; object-fit: contain;">
                                    </a>
                                    <h4>{{ $car->name }}</h4>
                                    <p class="ingredients">{{ $car->notes }}</p>
                                    <p class="price">Rp{{ number_format($car->price) }}</p>
                                    <a href="{{ route('rent', ['id' => $car->id]) }}" class="btn btn-rent"><span>Rent
                                            this car</span></a>
                                </div><!-- Menu Item -->
                            @endif
                        @endforeach

                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Menu Section -->
@endsection
