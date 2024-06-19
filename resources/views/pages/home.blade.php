@extends('layouts.index')

@section('title', 'CarVent - Rent Your Dream Car!')

@section('content')
    <div class="access page">
        <section id="hero" class="hero d-flex align-items-center section-bg">
            <div class="container">
                <div class="row justify-content-between gy-5">
                    <div
                        class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
                        <h2 data-aos="fade-up">Rent Your Dream Car with CarVent</h2>
                        <p data-aos="fade-up" data-aos-delay="100">
                            Luxury shouldn't be out of reach. With CarVent, you can rent your dream car without breaking the
                            bank. Make the car you've always desired a reality - affordably and conveniently.
                        </p>
                        <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                            <a href="{{ route('rent') }}" class="btn-book-a-table">Rent a Car</a>
                        </div>
                    </div>
                    <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
                        <img src="assets/img/maincar.png" class="img-fluid" alt="" data-aos="zoom-out"
                            data-aos-delay="300">
                    </div>
                </div>
            </div>
        </section><!-- End Hero Section -->

        <main id="main">

            <!-- ======= About Section ======= -->
            <section id="about" class="about">
                <div class="container" data-aos="fade-up">

                    <div class="section-header">
                        <h2>About Us</h2>
                        <p>Tentang Kami</p>
                    </div>

                    <div class="row gy-4">
                        <div class="col-lg-7 position-relative about-img"
                            style="background-image: url(assets/img/about.png);" data-aos="fade-up" data-aos-delay="150">
                            <div class="call-us position-absolute">
                                <h4>Rental Mobil</h4>
                                <p>+62 812 6272 7062</p>
                            </div>
                        </div>
                        <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
                            <div class="content ps-0 ps-lg-5">
                                <h3>Carve Your Own Path</h3>
                                <p class="fst-italic">
                                    Carvent is more than just wheels. We provide exceptional customer service and a seamless
                                    rental experience, so you can focus on creating memories that last a lifetime.
                                </p>
                                <ul>
                                    <li><i class="bi bi-check2-all"></i> <b>Explore with Freedom</b>: Carve your own path
                                        and discover hidden gems behind the wheel.</li>
                                    <li><i class="bi bi-check2-all"></i> <b>Seamless Rentals</b>: Our user-friendly platform
                                        and commitment to service ensures a smooth and stress-free experience.</li>
                                    <li><i class="bi bi-check2-all"></i> <b>The Perfect Ride</b>: Choose from a diverse
                                        fleet to find the ideal vehicle for your adventure.</li>
                                    <li><i class="bi bi-check2-all"></i> <b>Unlock Possibilities</b>: Go beyond the ordinary
                                        and turn your travel dreams into reality.</li>
                                </ul>
                                <p>Ready to hit the road and explore new horizons? Let Carvent be your partner in adventure.
                                    Rent your perfect ride today and start carving your own path!</p>
                            </div>
                        </div>
                    </div>

                </div>
            </section><!-- End About Section -->

            <!-- ======= Contact Section ======= -->
            <section id="contact" class="contact">
                <div class="container" data-aos="fade-up">

                    <div class="section-header">
                        <h2>Contact</h2>
                        <p>Need Help? <span>Contact Us</span></p>
                    </div>

                    <div class="mb-3">
                        <iframe style="border:0; width: 100%; height: 350px;"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.2533732380207!2d107.58222337367104!3d-6.860207193138277!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e71bbc1c9a59%3A0xdcbaeaa3fdba7ddb!2sERco%20Kost!5e0!3m2!1sen!2sid!4v1716179365211!5m2!1sen!2sid"
                            frameborder="0" allowfullscreen></iframe>
                    </div><!-- End Google Maps -->

                    <div class="row gy-4">
                        <div class="col-md-6">
                            <div class="info-item  d-flex align-items-center">
                                <i class="icon bi bi-map flex-shrink-0"></i>
                                <div>
                                    <h3>Our Address</h3>
                                    <p>Jl Geger Arum Bawah No.115, Gegerkalong, Kec. Sukasari, Kota Bandung, Jawa Barat
                                        40153</p>
                                </div>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="col-md-6">
                            <div class="info-item d-flex align-items-center">
                                <i class="icon bi bi-envelope flex-shrink-0"></i>
                                <div>
                                    <h3>Email Us</h3>
                                    <p>intxger@gmail.com</p>
                                </div>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="col-md">
                            <div class="info-item  d-flex align-items-center">
                                <i class="icon bi bi-telephone flex-shrink-0"></i>
                                <div>
                                    <h3>Call Us</h3>
                                    <p>+62 812 6272 7062</p>
                                </div>
                            </div>
                        </div><!-- End Info Item -->

                    </div>

                </div>
            </section><!-- End Contact Section -->

        </main><!-- End #main -->
    </div>
@endsection
