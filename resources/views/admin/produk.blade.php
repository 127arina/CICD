@extends('admin.template.main')

@section('main-content')

    <!-- HTML structure for listing products -->
    <h2>List of Products</h2>

    <div class="product-list">
        <!-- Iterate through products and display them -->
        @foreach($products as $product)
            <div class="product-item">
                <h3>{{ $product->name }}</h3>
                <p>Description: {{ $product->description }}</p>
                <p>Price: ${{ $product->price }}</p>
                <!-- Add more details here if needed -->
            </div>
        @endforeach
    </div>

@endsection
