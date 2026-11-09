
@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

<div style="margin-bottom: 30px;">
    <p style="color: #A66B4F;">WELCOME TO SWEETBITE</p>

    <h1 style="margin: 10px 0;">
        Halo, {{ $username }}! 👋
    </h1>

    <p style="color: #927969;">
        Selamat datang di toko bakery SweetBite.
        Yuk, lihat produk yang tersedia hari ini!
    </p>
</div>

<div style="background: #F3D5C0; padding: 25px; border-radius: 12px; margin-bottom: 30px;">
    <h2>Freshly Baked, Made with Love!</h2>

    <p style="margin-top: 10px;">
        Temukan berbagai pilihan brownies, cake, dan cookies
        yang dibuat dengan bahan berkualitas.
    </p>
</div>

<h2 style="margin-bottom: 20px;">Produk Kami</h2>

<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px;">

    @foreach ($produk as $item)
        <x-product-card :product="$item" />
    @endforeach

</div>

@endsection
