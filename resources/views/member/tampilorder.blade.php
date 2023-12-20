@extends('member.template.main')
@php
    $user = Auth::user(); // Getting user data from Laravel's authentication system
@endphp

@section('main-content')
<div class="container">
    <h1>Edit Order</h1>

    <form action="{{ route('order.update', ['id' => $order->id]) }}" method="POST">
        @csrf <!-- CSRF Token for security -->
        @method('PUT') <!-- Method spoofing for PUT request -->

        <div class="mb-3">
            <label for="nama_produk" class="form-label">Nama Produk:</label>
            <input type="text" class="form-control" id="nama_produk" name="nama_produk" value="{{ $order->nama_produk }}" required>
        </div>

        <div class="mb-3">
            <label for="Provinsi" class="form-label">Provinsi:</label>
            <input type="text" class="form-control" id="Provinsi" name="Provinsi" value="{{ $order->Provinsi }}">
        </div>

        <div class="mb-3">
            <label for="Kota" class="form-label">Kota:</label>
            <input type="text" class="form-control" id="Kota" name="Kota" value="{{ $order->Kota }}">
        </div>

        <div class="mb-3">
            <label for="Desa" class="form-label">Desa:</label>
            <input type="text" class="form-control" id="Desa" name="Desa" value="{{ $order->Desa }}">
        </div>

        <div class="mb-3">
            <label for="Jalan" class="form-label">Jalan:</label>
            <input type="text" class="form-control" id="Jalan" name="Jalan" value="{{ $order->Jalan }}">
        </div>

        <div class="mb-3">
            <label for="RT_RW" class="form-label">RT/RW:</label>
            <input type="text" class="form-control" id="RT_RW" name="RT_RW" value="{{ $order->RT_RW }}">
        </div>

        <div class="mb-3">
            <label for="jumlah" class="form-label">Jumlah:</label>
            <input type="number" class="form-control" id="jumlah" name="jumlah" value="{{ $order->jumlah }}" required>
        </div>

        <div class="mb-3">
            <label for="harga" class="form-label">Harga:</label>
            <input type="number" class="form-control" id="harga" name="harga" value="{{ $order->harga }}" required>
        </div>

        <div class="mb-3">
            <label for="tanggal_pesan" class="form-label">Tanggal Pesan:</label>
            <input type="date" class="form-control" id="tanggal_pesan" name="tanggal_pesan" value="{{ \Carbon\Carbon::parse($order->tanggal_pesan)->format('Y-m-d') }}" required>
        </div>

        <div class="mb-3">
            <label for="keterangan" class="form-label">Keterangan:</label>
            <textarea class="form-control" id="keterangan" name="keterangan">{{ $order->keterangan }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update Order</button>
    </form>
</div>
@endsection
