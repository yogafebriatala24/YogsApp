@extends('layouts.app')

@section('title')
    YogsApp
@endsection

@section('content')
    <!-- Header -->
    <header class="text-center">
        <h1>
            Ayo Menjelajah Dunia,
            <br />
            Dengan Sekali Klik
        </h1>
        <p class="mt-3">
            Buat pengamalan terbaik
            <br />
            anda bersama kami
        </p>
        <a href="#popular" class="btn btn-get-started px-4 mt-4">Get Started</a>
    </header>

    <main>
        <div class="container">
            <section class="section-stats row justify-content-center" id="stats">
                <div class="col-3 col-md-2 stats-detail">
                    <h2>20K</h2>
                    <p>Members</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>12</h2>
                    <p>Countries</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>3K</h2>
                    <p>Hotels</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>83</h2>
                    <p>Partners</p>
                </div>
            </section>
        </div>

        <section class="section-popular" id="popular">
            <div class="container">
                <div class="row">
                    <div class="col text-center section-popular-heading">
                        <h2>Wisata Populer</h2>
                        <p>
                            Beberapa tempat yang paling
                            <br />
                            sering dikunjungi
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-popular-content" id="popularContent">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    @foreach ($items as $item)
                        <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                            <div class="card-travel text-center d-flex flex-column"
                                style="background-image: url('{{ $item->galleries->count() ? Storage::url($item->galleries->first()->image) : '' }}')">
                                <div class="travel-country">{{ $item->location }}</div>
                                <div class="travel-location">{{ $item->title }}</div>
                                <div class="travel-button mt-auto">
                                    <a href="{{ route('detail', $item->slug) }}" class="btn btn-travel-details px-4">View
                                        Details</a>
                                </div>
                            </div>
                        </div>

                    @endforeach
                </div>
            </div>
        </section>
        <section class="section-networks">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h2>Our Network</h2>
                        <p>
                            Companies are trusted us
                            <br />
                            more than jus a trip
                        </p>
                    </div>
                    <div class="col-md-8 text-center">
                        <img src="{{ url('frontend/img/partner.png') }}" alt="" class="img-partner" />
                    </div>
                </div>
            </div>
        </section>
        <section class="section-testimonial-heading" id="testimonialHeading">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h2>They're Loving Us</h2>
                        <p>
                            Pengalaman terbaik mereka
                            <br />
                            Bersama dengan kami
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section-testimonial-content" id="testimonialContent">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    <div class="col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="{{ url('frontend/img/testi1.png') }}" alt="User" class="mb-4 rounded-circle" />
                                <h3 class="mb-4">Yoga Febriatala</h3>
                                <p class="testimonial">
                                    "Ini merupakan pengalaman luar biasa dan fasilitas yang
                                    diberikan oleh YogsApp sangat baik"
                                </p>
                            </div>
                            <hr />
                            <p class="trip-to mt-2">Trip to Ubub</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="{{ url('frontend/img/testi2.png') }}" alt="User" class="mb-4 rounded-circle" />
                                <h3 class="mb-4">Silvia Putri</h3>
                                <p class="testimonial">
                                    "Ini merupakan pengalaman luar biasa dan fasilitas yang
                                    diberikan oleh YogsApp sangat baik"
                                </p>
                            </div>
                            <hr />
                            <p class="trip-to mt-2">Trip to Bromo, Jawa Timur</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="{{ url('frontend/img/testi3.png') }}" alt="User" class="mb-4 rounded-circle" />
                                <h3 class="mb-4">Tono</h3>
                                <p class="testimonial">
                                    "Ini merupakan pengalaman luar biasa dan fasilitas yang
                                    diberikan oleh YogsApp sangat baik"
                                </p>
                            </div>
                            <hr />
                            <p class="trip-to mt-2">Trip to Paris</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <a href="#" class="btn btn-need-help px-4 mt-4 mx-1">
                            I Need Help
                        </a>
                        <a href="{{ route('register') }}" class="btn btn-get-started px-4 mt-4 mx-1">
                            Get Started
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection
