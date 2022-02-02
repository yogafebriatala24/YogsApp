@extends('layouts.admin')

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Paket Travel{{ $item->title }}</h1>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>

        @endif

        <div class="card shadow">
            <div class="card-body">
                <form action="{{ route('gallery.update', $item->id) }}" method="post">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" placeholder="Title"
                            value="{{ $item->title }}">
                    </div>
                    <div class="form-group">
                        <label for="location">Lokasi</label>
                        <input type="text" class="form-control" name="location" placeholder="Location"
                            value="{{ $item->location }}">
                    </div>
                    <div class="form-group">
                        <label for="about">About</label>
                        <textarea name="about" rows="10" class="d-block w-100 form-control">{{ $item->about }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="cagar_budaya">Cagar Budaya</label>
                        <input type="text" class="form-control" name="cagar_budaya" placeholder="cagar_budaya"
                            value="{{ $item->cagar_budaya }}">
                    </div>
                    <div class="form-group">
                        <label for="makanan_khas">Makanan Khas</label>
                        <input type="text" class="form-control" name="makanan_khas" placeholder="makanan_khas"
                            value="{{ $item->makanan_khas }}">
                    </div>
                    <div class="form-group">
                        <label for="tarian_khas">Tarian Khas</label>
                        <input type="text" class="form-control" name="tarian_khas" placeholder="tarian_khas"
                            value="{{ $item->tarian_khas }}">
                    </div>
                    <div class="form-group">
                        <label for="tanggal_keberangkatan">Tanggal Keberangkatan</label>
                        <input type="date" class="form-control" name="tanggal_keberangkatan"
                            placeholder="tanggal_keberangkatan" value="{{ $item->tanggal_keberangkatan }}">
                    </div>
                    <div class="form-group">
                        <label for="durasi_wisata">Durasi Wisata</label>
                        <input type="text" class="form-control" name="durasi_wisata" placeholder="durasi_wisata"
                            value="{{ $item->durasi_wisata }}">
                    </div>
                    <div class="form-group">
                        <label for="tipe_trip">Tipe Trip</label>
                        <input type="text" class="form-control" name="tipe_trip" placeholder="tipe_trip"
                            value="{{ $item->tipe_trip }}">
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="number" class="form-control" name="harga" placeholder="harga"
                            value="{{ $item->harga }}">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">
                        Ubah
                    </button>
                </form>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->



@endsection
