@extends('layouts.checkout')
@section('title', 'Checkout')

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
                                <li class="breadcrumb-item">Details</li>
                                <li class="breadcrumb-item active">Checkout</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 pl-lg-0">
                        <div class="card card-details">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <h1>Who is going?</h1>
                            <p>Trip to {{ $item->travel_package->title }}, {{ $item->travel_package->location }}</p>

                            <div class="attendee">
                                <table class="table table-responsive-sm text-center">
                                    <thead>
                                        <tr>
                                            <td>Picture</td>
                                            <td>Name</td>
                                            <td>Nationality</td>
                                            <td>Visa</td>
                                            <td>Passport</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($item->details as $detail )
                                            <tr>
                                                <td>
                                                    <img src="https://ui-avatars.com/api/?name={{ $detail->username }}"
                                                        height="60" class="rounded-circle" />
                                                </td>
                                                <td class="align-middle">{{ $detail->username }}</td>
                                                <td class="align-middle">{{ $detail->negara }}</td>
                                                <td class="align-middle">{{ $detail->is_visa ? '30 Days' : 'N/A' }}</td>
                                                <td class="align-middle">
                                                    {{ \Carbon\Carbon::createFromDate($detail->doe_passport) > \Carbon\Carbon::now() ? 'Active' : 'Inactive' }}
                                                </td>
                                                <td class="align-middle">
                                                    <a href="{{ route('checkout-remove', $detail->id) }}">
                                                        <img src="{{ url('frontend/img/hapus.png') }}" alt="" />
                                                    </a>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="6" class="text-center">No Visitor</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                            <div class="member mt-3">
                                <h2>Add Member</h2>
                                <form class="form-inline" method="POST"
                                    action="{{ route('checkout-create', $item->id) }}">
                                    @csrf
                                    <label for="username" class="sr-only"> Name </label>
                                    <input type="text" name="username" class="form-control mb-2 mr-sm-2" id="username"
                                        placeholder="Username" />
                                    <label for="negara" class="sr-only"> Negara </label>
                                    <input type="text" name="negara" class="form-control mb-2 mr-sm-2" style="width:50px"
                                        id="negara" required placeholder="Negara" />
                                    <label for="is_visa" class="sr-only"> VISA </label>
                                    <select name="is_visa" id="is_visa" required class="custom-select mb-2 mr-sm-2">
                                        <option value="" selected>VISA</option>
                                        <option value="1">30 Days</option>
                                        <option value="0">N/A</option>
                                    </select>
                                    <label for="doe_passport" class="sr-only">DOE Passport</label>

                                    <div class="input-group mb-2 mr-sm-2">
                                        <input type="text" class="form-control datepicker" name="doe_passport"
                                            id="doePassport" placeholder="DOE Passport" />
                                    </div>
                                    <button class="btn btn-add-now mb-2 px-4">Add Now</button>
                                </form>

                                <h3 class="mt-3 mb-0">Catatan:</h3>
                                <p class="disclaimer mb-0">
                                    Anda hanya bisa menambahkan yang sudah terdaftar di YogsApp
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-details card-right">
                            <h2>Informasi Pembayaran</h2>
                            <table class="trip-informations">
                                <tr>
                                    <th width="50%">Jumlah Orang</th>
                                    <td width="50%" class="text-right">{{ $item->details->count() }} Orang</td>
                                </tr>
                                <tr>
                                    <th width="50%">Tambahan VISA</th>
                                    <td width="50%" class="text-right">$ {{ $item->tambahan_visa }},00</td>
                                </tr>
                                <tr>
                                    <th width="50%">Harga Trip</th>
                                    <td width="50%" class="text-right">${{ $item->travel_package->harga }} / Orang
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">Total Harga</th>
                                    <td width="50%" class="text-right">${{ $item->transaction_total }},00</td>
                                </tr>
                                <tr>
                                    <th width="50%">Total Bayar</th>
                                    <td width="50%" class="text-right text-total">
                                        <span class="text-blue"> ${{ $item->transaction_total }}, </span><span
                                            class="text-orange"> {{ mt_rand(0, 99) }} </span>
                                    </td>
                                </tr>
                            </table>
                            <hr />
                            <h2>Pembayaran</h2>
                            <p class="pembayaran">
                                Silahkan selesaikan pembayaran sebelum memulai perjalanan anda
                            </p>
                            <div class="bank">
                                <div class="bank-item pb-3">
                                    <img src="{{ url('frontend/img/bca.png') }}" class="bank-image" />
                                    <div class="description">
                                        <h3>Bank Central Asia</h3>
                                        <p>
                                            PT.YogsApp
                                            <br />
                                            8630 9999 3402
                                        </p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="bank-item pb-3">
                                    <img src="{{ url('frontend/img/bni.png') }}" class="bank-image" />
                                    <div class="description">
                                        <h3>Bank Nasional Indonesia</h3>
                                        <p>
                                            PT.YogsApp
                                            <br />
                                            0812 1222 2424
                                        </p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="join-container">
                            <a href="{{ route('checkout-success', $item->id) }}"
                                class="btn btn-block btn-join-now mt-3 py-2">
                                I Have Made Payment
                            </a>
                        </div>
                        <div class="text-center mt-3">
                            <a href="{{ route('detail', $item->travel_package->slug) }}" class="text-muted">Cancel
                                Booking</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection


@push('prepend-style')
    <link rel="stylesheet" href="{{ url('frontend/libraries/combined/css/gijgo.min.css') }}" />
@endpush

@push('addon-script')
    <script src="{{ url('frontend/libraries/combined/js/gijgo.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $(".datepicker").datepicker({
                format: 'yyyy-mm-dd',
                uilibrary: "bootstrap4",
                icons: {
                    rightIcon: '<img src="{{ url('frontend/img/passport.png') }}"/>',
                },
            });
        });
    </script>
@endpush
