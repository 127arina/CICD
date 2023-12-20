@extends('admin.template.main')
@php
    $user = Auth::user(); // Mendapatkan data pengguna dari sistem otentikasi Laravel
@endphp

@section('main-content')
<div class="container-fluid">
    <div class="row mb-3">
        <div class="col-md-12">
            <a href="{{ route('admin.tambah-produk') }}" class="btn btn-primary">Add Product</a>
        </div>
    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Price</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $product)
                                    <tr>
                                        <td>{{ $product->id }}</td>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->description }}</td>
                                        <td>
                                            <img src="{{ asset($product->image_url) }}" alt="Product Image" style="max-width: 100px;">
                                        </td>
                                        <td>{{ $product->price }}</td>
                                        <td>
                                            <a href="{{ route('admin.tampilkan-data', $product->id) }}" class="btn btn-primary">Edit</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('admin.delete-product', $product->id) }}" method="POST" class="delete-form">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" class="btn btn-danger delete-btn">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->

    <script>
        const deleteButtons = document.querySelectorAll('.delete-btn');

        deleteButtons.forEach(button => {
            button.addEventListener('click', function(event) {
                const deleteForm = this.parentElement; // Get the parent form element
                event.preventDefault();

                // Display a confirmation dialog
                const confirmed = confirm('Are you sure you want to delete this product?');

                // If the user confirms, submit the form
                if (confirmed) {
                    deleteForm.submit();
                }
            });
        });
    </script>
@endsection
