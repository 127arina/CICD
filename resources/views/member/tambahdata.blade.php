<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>RAMA LAUNDRY</title>
</head>
<body>
<h2 class="text-center mb-4">Tambah Data pelanggan</h2>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('member.pelanggan') }}" method="POST" enctype="multipart/form-data" >
                        {{-- onsubmit="return validateUserId() --}}
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                            <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Alamat</label>
                            <input type="text" name="alamat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">No.Telp</label>
                            <input type="text" name="no_telp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Servis</label>
                            <select name="servis" class="form-select" aria-label="Default select example">
                                <option selected>Pilih Servis</option>
                                <option value="1">cuci</option>
                                <option value="2">setrika</option>
                                <option value="3">laundry</option>
                                <option value="3">Jahit Baju</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Keterangan</label>
                            <input type="text" name="keterangan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Banyak</label>
                            <input type="text" name="kg" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Biaya</label>
                            <input type="text" name="biaya" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Status</label>
                            <select name="status" class="form-select" aria-label="Default select example">
                                <option selected>Pilih Status</option>
                                <option value="1">proses</option>
                                <option value="2">selesai</option>
                                <option value="3">diambil</option>
                                <option value="3">antar</option>
                            </select>
                        </div>
                    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">User ID</label>
    <input type="text" name="user_id" id="user_id" class="form-control" value="{{ Auth::id() }}" readonly>
</div>


                        {{-- <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">User ID</label>
                            <input type="text" name="user_id" id="user_id" class="form-control" value="{{ Auth::id() }}" readonly>
                        </div> --}}


                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Optional JavaScript; choose one of the two! -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
