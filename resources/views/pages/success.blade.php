@extends('layouts.success')
@section('title', 'Checkout Success')

@section('content')
    <main>
        <div class="section-success d-flex align-items-center">
            <div class="col text-center">
                <img src="{{ url('frontend/img/checked.png') }}" alt="" />
                <h2>Yey, Selamat Transaksi Berhasil</h2>
                <p>
                    Silahkan cek email anda kami telah mengirim
                    <br />
                    instruksi untuk perjalanan anda
                </p>
                <a href="{{ route('home') }}" class="btn btn-home-page mt-3 px-5">
                    Home Page
                </a>
            </div>
        </div>
    </main>
@endsection
