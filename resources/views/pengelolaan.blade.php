@extends('layouts.app')

@section('title', 'Pengelolaan Produk')

@section('content')
    <h1>Pengelolaan Produk</h1>
    <p style="color: #927969; margin-bottom: 25px;">
        Daftar produk yang tersedia di SweetBite.
    </p>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px;">
        @foreach ($produk as $item)
            <x-product-card :product="$item" />
        @endforeach
    </div>
@endsection
