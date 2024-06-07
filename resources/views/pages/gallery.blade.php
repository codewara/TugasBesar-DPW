@extends('layouts.index')

@section('title') CarVent Gallery @endsection

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
                <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/display1.png"><img src="assets/img/gallery/display1.png" class="img-fluid" alt=""></a></div>
                <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/display2.png"><img src="assets/img/gallery/display2.png" class="img-fluid" alt=""></a></div>
                <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/display3.png"><img src="assets/img/gallery/display3.png" class="img-fluid" alt=""></a></div>
                <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/display4.png"><img src="assets/img/gallery/display4.png" class="img-fluid" alt=""></a></div>
                <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/display5.png"><img src="assets/img/gallery/display5.png" class="img-fluid" alt=""></a></div>
                <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/display6.png"><img src="assets/img/gallery/display6.png" class="img-fluid" alt=""></a></div>
                <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/display7.png"><img src="assets/img/gallery/display7.png" class="img-fluid" alt=""></a></div>
                <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/display8.png"><img src="assets/img/gallery/display8.png" class="img-fluid" alt=""></a></div>
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
            <p>Check Our <span>Yummy Menu</span></p>
        </div>

        <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

            <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-starters">
                <h4>Starters</h4>
                </a>
            </li><!-- End tab nav item -->

            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-breakfast">
                <h4>Breakfast</h4>
                </a><!-- End tab nav item -->

            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-lunch">
                <h4>Lunch</h4>
                </a>
            </li><!-- End tab nav item -->

            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-dinner">
                <h4>Dinner</h4>
                </a>
            </li><!-- End tab nav item -->

        </ul>

        <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

            <div class="tab-pane fade active show" id="menu-starters">

                <div class="tab-header text-center">
                    <p>Menu</p>
                    <h3>Starters</h3>
                </div>

                <div class="row gy-5">
                    @foreach ($cars as $car)
                    <div class="col-lg-4 menu-item">
                        <a href="assets/img/cars/{{ $car->photo }}" class="glightbox"><img src="assets/img/cars/{{ $car->photo }}" class="menu-img img-fluid" alt=""></a>
                        <h4>Magnam Tiste</h4>
                        <p class="ingredients">
                            Lorem, deren, trataro, filede, nerada
                        </p>
                        <p class="price">
                            $5.95
                        </p>
                    </div><!-- Menu Item -->
                    @endforeach

                    <div class="col-lg-4 menu-item">
                        <a href="assets/img/menu/menu-item-2.png" class="glightbox"><img src="assets/img/menu/menu-item-2.png" class="menu-img img-fluid" alt=""></a>
                        <h4>Aut Luia</h4>
                        <p class="ingredients">
                            Lorem, deren, trataro, filede, nerada
                        </p>
                        <p class="price">
                            $14.95
                        </p>
                    </div><!-- Menu Item -->

                    <div class="col-lg-4 menu-item">
                        <a href="assets/img/menu/menu-item-3.png" class="glightbox"><img src="assets/img/menu/menu-item-3.png" class="menu-img img-fluid" alt=""></a>
                        <h4>Est Eligendi</h4>
                        <p class="ingredients">
                            Lorem, deren, trataro, filede, nerada
                        </p>
                        <p class="price">
                            $8.95
                        </p>
                    </div><!-- Menu Item -->

                    <div class="col-lg-4 menu-item">
                        <a href="assets/img/menu/menu-item-4.png" class="glightbox"><img src="assets/img/menu/menu-item-4.png" class="menu-img img-fluid" alt=""></a>
                        <h4>Eos Luibusdam</h4>
                        <p class="ingredients">
                            Lorem, deren, trataro, filede, nerada
                        </p>
                        <p class="price">
                            $12.95
                        </p>
                    </div><!-- Menu Item -->

                    <div class="col-lg-4 menu-item">
                        <a href="assets/img/menu/menu-item-5.png" class="glightbox"><img src="assets/img/menu/menu-item-5.png" class="menu-img img-fluid" alt=""></a>
                        <h4>Eos Luibusdam</h4>
                        <p class="ingredients">
                            Lorem, deren, trataro, filede, nerada
                        </p>
                        <p class="price">
                            $12.95
                        </p>
                    </div><!-- Menu Item -->

                    <div class="col-lg-4 menu-item">
                        <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img src="assets/img/menu/menu-item-6.png" class="menu-img img-fluid" alt=""></a>
                        <h4>Laboriosam Direva</h4>
                        <p class="ingredients">
                            Lorem, deren, trataro, filede, nerada
                        </p>
                        <p class="price">
                            $9.95
                        </p>
                    </div><!-- Menu Item -->

                </div>
            </div><!-- End Starter Menu Content -->

            <div class="tab-pane fade" id="menu-breakfast">

                <div class="tab-header text-center">
                    <p>Menu</p>
                    <h3>Breakfast</h3>
                </div>

                <div class="row gy-5">

                    <div class="col-lg-4 menu-item">
                        <a href="assets/img/menu/menu-item-1.png" class="glightbox"><img src="assets/img/menu/menu-item-1.png" class="menu-img img-fluid" alt=""></a>
                        <h4>Magnam Tiste</h4>
                        <p class="ingredients">
                            Lorem, deren, trataro, filede, nerada
                        </p>
                        <p class="price">
                            $5.95
                        </p>
                    </div><!-- Menu Item -->

                    <div class="col-lg-4 menu-item">
                        <a href="assets/img/menu/menu-item-2.png" class="glightbox"><img src="assets/img/menu/menu-item-2.png" class="menu-img img-fluid" alt=""></a>
                        <h4>Aut Luia</h4>
                        <p class="ingredients">
                            Lorem, deren, trataro, filede, nerada
                        </p>
                        <p class="price">
                            $14.95
                        </p>
                    </div><!-- Menu Item -->

                    <div class="col-lg-4 menu-item">
                        <a href="assets/img/menu/menu-item-3.png" class="glightbox"><img src="assets/img/menu/menu-item-3.png" class="menu-img img-fluid" alt=""></a>
                        <h4>Est Eligendi</h4>
                        <p class="ingredients">
                            Lorem, deren, trataro, filede, nerada
                        </p>
                        <p class="price">
                            $8.95
                        </p>
                    </div><!-- Menu Item -->

                    <div class="col-lg-4 menu-item">
                        <a href="assets/img/menu/menu-item-4.png" class="glightbox"><img src="assets/img/menu/menu-item-4.png" class="menu-img img-fluid" alt=""></a>
                        <h4>Eos Luibusdam</h4>
                        <p class="ingredients">
                            Lorem, deren, trataro, filede, nerada
                        </p>
                        <p class="price">
                            $12.95
                        </p>
                    </div><!-- Menu Item -->

                    <div class="col-lg-4 menu-item">
                        <a href="assets/img/menu/menu-item-5.png" class="glightbox"><img src="assets/img/menu/menu-item-5.png" class="menu-img img-fluid" alt=""></a>
                        <h4>Eos Luibusdam</h4>
                        <p class="ingredients">
                            Lorem, deren, trataro, filede, nerada
                        </p>
                        <p class="price">
                            $12.95
                        </p>
                    </div><!-- Menu Item -->

                    <div class="col-lg-4 menu-item">
                        <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img src="assets/img/menu/menu-item-6.png" class="menu-img img-fluid" alt=""></a>
                        <h4>Laboriosam Direva</h4>
                        <p class="ingredients">
                            Lorem, deren, trataro, filede, nerada
                        </p>
                        <p class="price">
                            $9.95
                        </p>
                    </div><!-- Menu Item -->

                </div>
            </div><!-- End Breakfast Menu Content -->

            <div class="tab-pane fade" id="menu-lunch">

                <div class="tab-header text-center">
                    <p>Menu</p>
                    <h3>Lunch</h3>
                </div>

                <div class="row gy-5">

                    <div class="col-lg-4 menu-item">
                        <a href="assets/img/menu/menu-item-1.png" class="glightbox"><img src="assets/img/menu/menu-item-1.png" class="menu-img img-fluid" alt=""></a>
                        <h4>Magnam Tiste</h4>
                        <p class="ingredients">
                            Lorem, deren, trataro, filede, nerada
                        </p>
                        <p class="price">
                            $5.95
                        </p>
                    </div><!-- Menu Item -->

                    <div class="col-lg-4 menu-item">
                        <a href="assets/img/menu/menu-item-2.png" class="glightbox"><img src="assets/img/menu/menu-item-2.png" class="menu-img img-fluid" alt=""></a>
                        <h4>Aut Luia</h4>
                        <p class="ingredients">
                            Lorem, deren, trataro, filede, nerada
                        </p>
                        <p class="price">
                            $14.95
                        </p>
                    </div><!-- Menu Item -->

                    <div class="col-lg-4 menu-item">
                        <a href="assets/img/menu/menu-item-3.png" class="glightbox"><img src="assets/img/menu/menu-item-3.png" class="menu-img img-fluid" alt=""></a>
                        <h4>Est Eligendi</h4>
                        <p class="ingredients">
                            Lorem, deren, trataro, filede, nerada
                        </p>
                        <p class="price">
                            $8.95
                        </p>
                    </div><!-- Menu Item -->

                    <div class="col-lg-4 menu-item">
                        <a href="assets/img/menu/menu-item-4.png" class="glightbox"><img src="assets/img/menu/menu-item-4.png" class="menu-img img-fluid" alt=""></a>
                        <h4>Eos Luibusdam</h4>
                        <p class="ingredients">
                            Lorem, deren, trataro, filede, nerada
                        </p>
                        <p class="price">
                            $12.95
                        </p>
                    </div><!-- Menu Item -->

                    <div class="col-lg-4 menu-item">
                        <a href="assets/img/menu/menu-item-5.png" class="glightbox"><img src="assets/img/menu/menu-item-5.png" class="menu-img img-fluid" alt=""></a>
                        <h4>Eos Luibusdam</h4>
                        <p class="ingredients">
                            Lorem, deren, trataro, filede, nerada
                        </p>
                        <p class="price">
                            $12.95
                        </p>
                    </div><!-- Menu Item -->

                    <div class="col-lg-4 menu-item">
                        <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img src="assets/img/menu/menu-item-6.png" class="menu-img img-fluid" alt=""></a>
                        <h4>Laboriosam Direva</h4>
                        <p class="ingredients">
                            Lorem, deren, trataro, filede, nerada
                        </p>
                        <p class="price">
                            $9.95
                        </p>
                    </div><!-- Menu Item -->

                </div>
            </div><!-- End Lunch Menu Content -->

            <div class="tab-pane fade" id="menu-dinner">

                <div class="tab-header text-center">
                    <p>Menu</p>
                    <h3>Dinner</h3>
                </div>

                <div class="row gy-5">

                    <div class="col-lg-4 menu-item">
                        <a href="assets/img/menu/menu-item-1.png" class="glightbox"><img src="assets/img/menu/menu-item-1.png" class="menu-img img-fluid" alt=""></a>
                        <h4>Magnam Tiste</h4>
                        <p class="ingredients">
                            Lorem, deren, trataro, filede, nerada
                        </p>
                        <p class="price">
                            $5.95
                        </p>
                    </div><!-- Menu Item -->

                    <div class="col-lg-4 menu-item">
                        <a href="assets/img/menu/menu-item-2.png" class="glightbox"><img src="assets/img/menu/menu-item-2.png" class="menu-img img-fluid" alt=""></a>
                        <h4>Aut Luia</h4>
                        <p class="ingredients">
                            Lorem, deren, trataro, filede, nerada
                        </p>
                        <p class="price">
                            $14.95
                        </p>
                    </div><!-- Menu Item -->

                    <div class="col-lg-4 menu-item">
                        <a href="assets/img/menu/menu-item-3.png" class="glightbox"><img src="assets/img/menu/menu-item-3.png" class="menu-img img-fluid" alt=""></a>
                        <h4>Est Eligendi</h4>
                        <p class="ingredients">
                            Lorem, deren, trataro, filede, nerada
                        </p>
                        <p class="price">
                            $8.95
                        </p>
                    </div><!-- Menu Item -->

                    <div class="col-lg-4 menu-item">
                        <a href="assets/img/menu/menu-item-4.png" class="glightbox"><img src="assets/img/menu/menu-item-4.png" class="menu-img img-fluid" alt=""></a>
                        <h4>Eos Luibusdam</h4>
                        <p class="ingredients">
                            Lorem, deren, trataro, filede, nerada
                        </p>
                        <p class="price">
                            $12.95
                        </p>
                    </div><!-- Menu Item -->

                    <div class="col-lg-4 menu-item">
                        <a href="assets/img/menu/menu-item-5.png" class="glightbox"><img src="assets/img/menu/menu-item-5.png" class="menu-img img-fluid" alt=""></a>
                        <h4>Eos Luibusdam</h4>
                        <p class="ingredients">
                            Lorem, deren, trataro, filede, nerada
                        </p>
                        <p class="price">
                            $12.95
                        </p>
                    </div><!-- Menu Item -->

                    <div class="col-lg-4 menu-item">
                        <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img src="assets/img/menu/menu-item-6.png" class="menu-img img-fluid" alt=""></a>
                        <h4>Laboriosam Direva</h4>
                        <p class="ingredients">
                            Lorem, deren, trataro, filede, nerada
                        </p>
                        <p class="price">
                            $9.95
                        </p>
                    </div><!-- Menu Item -->

                </div>
            </div><!-- End Dinner Menu Content -->

        </div>

    </div>
</section><!-- End Menu Section -->
@endsection