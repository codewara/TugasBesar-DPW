@extends('layouts.index')

@section('title', 'Rent A Car')

@section('content')
    <div class="access page">
        <!-- ======= Rent A Car Section ======= -->
        <section id="book-a-table" class="book-a-table">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Rent A Car</h2>
                    <p>Book <span>Your Adventure</span> With Us</p>
                </div>

                <div class="row g-0">
                    @if (isset($selected) && $selected)
                        <div id="image" class="col-lg-4 reservation-img"
                            style="background-image: url({{ asset('/assets/img/cars/' . $selected->photo_url) }});
                                   background-size: contain;
                                   background-position: center;
                                   background-repeat: no-repeat;"
                            data-aos="zoom-out" data-aos-delay="200">
                        </div>
                        <script>
                            $(document).ready(function() {
                                $('#total').slideDown();
                                $('#field_price b').html('Rp' + Number({{ $selected->price }}).toLocaleString() + ' /day');
                            });
                        </script>
                    @else
                        <div id="image" class="col-lg-4 reservation-img"
                            style="background-image: url(assets/img/reservation.jpg);" data-aos="zoom-out"
                            data-aos-delay="200">
                        </div>
                    @endif
                    <div class="col-lg-8 reservation-form-bg">
                        <form action="{{ route('createCharge') }}" method="POST" class="php-email-form" data-aos="fade-up"
                            data-aos-delay="100">
                            @csrf
                            <div class="d-flex row gy-4">
                                <div>
                                    @if (isset($selected) && $selected)
                                        <input type="text" class="form-control" value="{{ $selected->name }}" disabled>
                                        <input type="hidden" name="car_id" value="{{ $selected->id }}">
                                    @else
                                        <select class="form-select" aria-label="Category" id="car_id" name="car_id"
                                            required>
                                            <option value="" selected disabled hidden>Select a car</option>
                                            @foreach ($cars as $car)
                                                <option value="{{ $car->id }}">{{ $car->name }}</option>
                                            @endforeach
                                        </select>
                                    @endif
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="mb-3">
                                        <input type="checkbox" name="include_driver" class="form-check-input"
                                            id="include_driver">
                                        <label for="include_driver" class="form-label">Include Driver?</label>
                                    </div>
                                    <div class="mb-3">
                                        <label for="start_date" class="form-label">Start Date</label>
                                        <input type="date" name="start_date" class="form-control" id="start_date"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="end_date" class="form-label">End Date</label>
                                        <input type="date" name="end_date" class="form-control" id="end_date" required>
                                    </div>
                                </div>
                                <div id="total" class="col-lg-6 col-md-6">
                                    <input type="hidden" id="totalrent" name="total_price" min="1" value=""
                                        required>
                                    <h4>Summary of Charges:</h4>
                                    <div id="price">
                                        <p id="field_price" class="d-flex justify-content-between">Car Rental Price :
                                            <b></b>
                                        </p>
                                    </div>
                                    <div id="driver">
                                        <p id="field_driver" class="d-flex justify-content-between">Driver Fee
                                            (optional) :
                                            <b>Rp50,000 /day</b>
                                        </p>
                                    </div>
                                    <div id="duration">
                                        <p id="field_duration" class="d-flex justify-content-between">Rental Duration :
                                            <b></b>
                                        </p>
                                    </div>
                                    <div id="pricetotal">
                                        <h4 id="field_total" class="d-flex mt-6 justify-content-between">Total Cost :
                                            <b></b>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="customer_id" value="{{ Auth::user()->id }}">
                            <div class="text-center mt-6">
                                <button type="submit" name="btn-add">Rent A Car</button>
                            </div>
                        </form>
                    </div><!-- End Form Rent A Car -->

                </div>

            </div>
        </section><!-- End Rent A Car Section -->
    </div>
    <script src="https://app.midtrans.com/snap/snap.js" data-client-key="{{ config('midtrans.client_key') }}"></script>
@endsection
