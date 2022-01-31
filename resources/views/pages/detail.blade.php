@extends('layouts.app')
@section('title', 'Detail Travel')

@section('content')
    <main>
        <section class="section-details-header"></section>
        <section class="section-details-content">
            <div class="container">
                <div class="row">
                    <div class="col p-0">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">Paket Travel</li>
                                <li class="breadcrumb-item active">Details</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 pl-lg-0">
                        <div class="card card-details">
                            <h1>Bromo, Jawa Timur</h1>
                            <p>Indonesia</p>
                            <div class="gallery">
                                <div class="xzoom-container">
                                    <img src="{{ url('frontend/img/details.jpg') }}" class="xzoom"
                                        id="xzoom-default" xoriginal="{{ url('frontend/img/details.jpg') }}" />
                                </div>
                                <div class="xzoom-thumbs">
                                    <a href="{{ url('frontend/img/thumbs1.jpg') }}">
                                        <img src="{{ url('frontend/img/thumbs1.jpg') }}" class="xzoom-gallery"
                                            width="128" xpreview="{{ url('frontend/img/thumbs1.jpg') }}" />
                                    </a>
                                    <a href="{{ url('frontend/img/thumbs2.jpg') }}">
                                        <img src="{{ url('frontend/img/thumbs2.jpg') }}" class="xzoom-gallery"
                                            width="128" xpreview="{{ url('frontend/img/thumbs2.jpg') }}" />
                                    </a>
                                    <a href="{{ url('frontend/img/thumbs3.jpg') }}">
                                        <img src="{{ url('frontend/img/thumbs3.jpg') }}" class="xzoom-gallery"
                                            width="128" xpreview="{{ url('frontend/img/thumbs3.jpg') }}" />
                                    </a>
                                    <a href="{{ url('frontend/img/thumbs4.jpg') }}">
                                        <img src="{{ url('frontend/img/thumbs4.jpg') }}" class="xzoom-gallery"
                                            width="128" xpreview="{{ url('frontend/img/thumbs4.jpg') }}" />
                                    </a>
                                    <a href="{{ url('frontend/img/thumbs5.jpg') }}">
                                        <img src="{{ url('frontend/img/thumbs5.jpg') }}" class="xzoom-gallery"
                                            width="128" xpreview="{{ url('frontend/img/thumbs5.jpg') }}" />
                                    </a>
                                </div>
                            </div>
                            <h2>Tentang Wisata</h2>
                            <p>
                                Gunung Bromo adalah sebuah gunung berapi aktif di Jawa Timur,
                                Indonesia. Gunung ini memiliki ketinggian 2.329 meter di atas
                                permukaan laut dan berada dalam empat wilayah kabupaten, yakni
                                Kabupaten Probolinggo, Kabupaten Pasuruan, Kabupaten Lumajang,
                                dan Kabupaten Malang.
                            </p>
                            <div class="features row">
                                <div class="col-md-4">
                                    <div class="description">
                                        <img src="{{ url('frontend/img/Budaya 1.png') }}" alt=""
                                            class="features-image" />
                                        <div class="description">
                                            <h3>Pura Luhur</h3>
                                            <p>Cagar Budaya</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 border-left">
                                    <div class="description">
                                        <img src="{{ url('frontend/img/Makanan.png') }}" alt="" class="features-image" />
                                        <div class="description">
                                            <h3>Nasi Aron</h3>
                                            <p>Makanan Khas</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 border-left">
                                    <div class="description">
                                        <img src="{{ url('frontend/img/Tari.png') }}" alt="" class="features-image" />
                                        <div class="description">
                                            <h3>Tari Ujung</h3>
                                            <p>Tarian Khas</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-details card-right">
                            <h2>Members are going</h2>
                            <div class="members my-2">
                                <img src="{{ url('frontend/img/members1.png') }}" alt="" class="member-image mr-1" />
                                <img src="{{ url('frontend/img/members2.png') }}" alt="" class="member-image mr-1" />
                                <img src="{{ url('frontend/img/members3.png') }}" alt="" class="member-image mr-1" />
                                <img src="{{ url('frontend/img/members4.png') }}" alt="" class="member-image mr-1" />
                                <img src="{{ url('frontend/img/members.png') }}" alt="" class="member-image mr-1" />
                            </div>
                            <hr />
                            <h2>Informasi</h2>
                            <table class="trip-informations">
                                <tr>
                                    <th width="50%">Tanggal Keberangkatan</th>
                                    <td width="50%" class="text-right">19 Desember, 2021</td>
                                </tr>
                                <tr>
                                    <th width="50%">Durasi Wisata</th>
                                    <td width="50%" class="text-right">4 Hari 3 Malam</td>
                                </tr>
                                <tr>
                                    <th width="50%">Tipe Trip</th>
                                    <td width="50%" class="text-right">Open Trip</td>
                                </tr>
                                <tr>
                                    <th width="50%">Harga</th>
                                    <td width="50%" class="text-right">$80,00 / Orang</td>
                                </tr>
                            </table>
                        </div>
                        <div class="join-container">
                            <a href="{{ route('checkout') }}" class="btn btn-block btn-join-now mt-3 py-2">
                                Join Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@push('prepend-style')
    <link rel="stylesheet" href="{{ url('frontend/libraries/xzoom/xzoom.css') }}" />
@endpush

@push('addon-script')
    <script src="{{ url('frontend/libraries/xzoom/xzoom.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $(".xzoom, xzoom-gallery").xzoom({
                zoomWidth: 100,
                title: false,
                tint: "#333",
                position: "lens",
                lensShape: "circle",
            });
        });
    </script>
@endpush
