
@extends('layouts.app')

@section('title', 'Login')

@section('content')

<style>
    .login-wrapper {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 70vh;
        padding: 25px 0;
    }

    .login-card {
        background: white;
        width: 100%;
        max-width: 420px;
        padding: 35px;
        border-radius: 15px;
        box-shadow: 0 5px 20px rgba(90, 55, 35, 0.10);
        text-align: center;
    }

    .login-card .cake-icon {
        font-size: 48px;
        margin-bottom: 10px;
    }

    .login-card h1 {
        margin-bottom: 10px;
        font-size: 28px;
    }

    .login-card p {
        color: #927969;
        font-size: 14px;
        margin-bottom: 25px;
    }

    .form-group {
        text-align: left;
        margin-bottom: 18px;
    }

    .form-group label {
        display: block;
        margin-bottom: 8px;
        font-weight: bold;
        font-size: 14px;
    }

    .form-group input {
        width: 100%;
        padding: 12px;
        border: 1px solid #E5D4C8;
        border-radius: 7px;
        outline: none;
    }

    .form-group input:focus {
        border-color: #A66B4F;
    }

    .login-button {
        width: 100%;
        padding: 13px;
        background: #A66B4F;
        color: white;
        border: none;
        border-radius: 7px;
        font-size: 15px;
        font-weight: bold;
        cursor: pointer;
    }

    .login-button:hover {
        background: #805039;
    }

    .login-note {
        margin-top: 20px;
        font-size: 12px;
        color: #927969;
    }
</style>

<div class="login-wrapper">
    <div class="login-card">

        <div class="cake-icon">🧁</div>

        <h1>Welcome to SweetBite!</h1>

        <p>Masuk dan kelola toko bakery favoritmu.</p>

        <form action="{{ route('login.proses') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="username">Username</label>
                <input
                    type="text"
                    id="username"
                    name="username"
                    placeholder="Masukkan username"
                    required
                >
            </div>

            <button type="submit" class="login-button">
                Masuk Sekarang
            </button>
        </form>

        <div class="login-note">
            Freshly baked, made with love.
        </div>

    </div>
</div>

@endsection
