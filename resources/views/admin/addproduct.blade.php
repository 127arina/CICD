@extends('admin.template.main')


    <!-- Contoh inisialisasi variabel $user -->
    @php
        $user = Auth::user(); // Mendapatkan data pengguna dari sistem otentikasi Laravel
    @endphp

    <body>
        <form action="{{ route('product.add') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="nama">Nama Produk:</label>
                <input type="text" id="nama" name="nama">
            </div>
            <div>
                <label for="harga">Harga:</label>
                <input type="text" id="harga" name="harga">
            </div>
            <div>
                <label for="deskripsi">Deskripsi:</label>
                <textarea id="deskripsi" name="deskripsi"></textarea>
            </div>
            <div>
                <label for="gambar">Gambar:</label>
                <input type="file" id="gambar" name="gambar">
            </div>
            <button type="submit">Tambah Produk</button>
        </form>
    </body>
</html>
