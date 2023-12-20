@extends('member.template.main')
@php
    $user = Auth::user(); // Getting user data from Laravel's authentication system
@endphp


@section('main-content')
<div class="container">
    <h1>Tambah Order</h1>

    <form action="{{ route('store_order') }}" method="POST">
        @csrf <!-- Token CSRF untuk keamanan -->

        <div class="mb-3">
            <label for="nama_produk" class="form-label">Nama Produk:</label>
            <input type="text" class="form-control" id="nama_produk" name="nama_produk" required>
        </div>

        <div class="mb-3">
            <label for="Provinsi" class="form-label">Provinsi:</label>
            <input type="text" class="form-control" id="Provinsi" name="Provinsi" required>
        </div>

        <div class="mb-3">
            <label for="Kota" class="form-label">Kota:</label>
            <input type="text" class="form-control" id="Kota" name="Kota" required>
        </div>

        <div class="mb-3">
            <label for="Desa" class="form-label">Desa:</label>
            <input type="text" class="form-control" id="Desa" name="Desa" required>
        </div>

        <div class="mb-3">
            <label for="Jalan" class="form-label">Jalan:</label>
            <input type="text" class="form-control" id="Jalan" name="Jalan" required>
        </div>

        <div class="mb-3">
            <label for="RT_RW" class="form-label">RT/RW:</label>
            <input type="text" class="form-control" id="RT_RW" name="RT_RW" required>
        </div>

        <div class="mb-3">
            <label for="jumlah" class="form-label">Jumlah:</label>
            <input type="number" class="form-control" id="jumlah" name="jumlah" required>
        </div>

        <div class="mb-3">
            <label for="harga" class="form-label">Harga:</label>
            <input type="number" class="form-control" id="harga" name="harga" required>
        </div>

        <div class="mb-3">
            <label for="tanggal_pesan" class="form-label">Tanggal Pesan:</label>
            <input type="date" class="form-control" id="tanggal_pesan" name="tanggal_pesan" required>
        </div>

        <div class="mb-3">
            <label for="keterangan" class="form-label">Keterangan:</label>
            <textarea class="form-control" id="keterangan" name="keterangan"></textarea>
        </div>
        <label for="exampleInputEmail1" class="form-label">User ID</label>
        <input type="text" name="user_id" id="user_id" class="form-control" value="{{ Auth::id() }}" readonly>


        <button type="submit" class="btn btn-primary">Simpan Order</button>
    </form>
</div>
@endsection
