@extends('layouts.app')

@section('title', 'Profile')

@section('content')
<div style="max-width: 600px; margin: auto;">
    <h1>Profile Pengguna</h1>
    <p style="color: #927969;">Informasi akun SweetBite kamu.</p>

    <div style="background: white; padding: 30px; border-radius: 12px; margin-top: 25px; box-shadow: 0 3px 12px rgba(90,55,35,.08);">
        <div style="font-size: 60px; text-align: center;">👤</div>

        <h2 style="text-align: center; margin: 15px 0;">{{ $username }}</h2>

        <p><strong>Username:</strong> {{ $username }}</p>
        <p><strong>Nama Aplikasi:</strong> SweetBite</p>
        <p><strong>Jenis Akun:</strong> Pengguna</p>
    </div>
</div>
@endsection
