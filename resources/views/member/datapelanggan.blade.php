@extends('member.template.main')

@section('main-content')

    <!-- Contoh inisialisasi variabel $user -->
    @php
        $user = Auth::user(); // Mendapatkan data pengguna dari sistem otentikasi Laravel
    @endphp

    <h2 class="text-center mb-4">Data pelanggan</h2>

    <div class="container">
        <a href="{{ url('/member/tambahpelanggan') }}" type="button" class="btn btn-success">Tambah +</a>
        <a href="{{ url('/member') }}" type="button" class="btn btn-primary">Kembali</a>

        <div class="row mt-3">
            <div class="container">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">NoTelp</th>
                            <th scope="col">Servis</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Banyak(Kg)</th>
                            <th scope="col">Biaya</th>
                            <th scope="col">Status</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($data as $row)
                            <tr>
                                <th scope="row">{{ $no++ }}</th>
                                <td>{{ $row->nama }}</td>
                                <td>{{ $row->alamat }}</td>
                                <td>{{ $row->no_telp }}</td>
                                <td>{{ $row->servis }}</td>
                                <td>{{ $row->keterangan }}</td>
                                <td>{{ $row->kg }}</td>
                                <td>{{ $row->biaya }}</td>
                                <td>{{ $row->status }}</td>
                                <td>{{ $row->updated_at->format('D M Y') }}</td>
                                <td>
                                    <a href="/tampilkandata/{{ $row->id }}" class="btn btn-primary">Edit</a>
                                    <a href="#" class="btn btn-danger delete" data-id="{{ $row->id }}"
                                        data-nama="{{ $row->nama }}">Hapus</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- cdn alert -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $('.delete').click(function () {
            var pelangganid = $(this).attr('data-id');
            swal({
                    title: "Yakin?",
                    text: "Kamu akan menghapus data pelanggan dengan id " + pelangganid + " ",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location = "delete/" + pelangganid + ""
                        swal("Data berhasil dihapus", {
                            icon: "success",
                        });
                    } else {
                        swal("Data tidak jadi dihapus");
                    }
                });
        });

    </script>

    <script>
        @if (Session::has('success'))
            toastr.success("{{ Session::get('success') }}")
        @endif

    </script>
@endsection
