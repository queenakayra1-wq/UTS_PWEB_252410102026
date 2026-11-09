<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function prosesLogin(Request $request)
    {
        $username = $request->input('username');

        return redirect()->route('dashboard', [
            'username' => $username
        ]);
    }

    public function dashboard(Request $request)
    {
        $username = $request->query('username');

        $produk = [
            ['nama' => 'Chocolate Brownies', 'harga' => 25000, 'stok' => 15],
            ['nama' => 'Strawberry Cake', 'harga' => 35000, 'stok' => 10],
            ['nama' => 'Cookies', 'harga' => 15000, 'stok' => 20]
        ];

        return view('dashboard', compact('username', 'produk'));
    }

    public function profile(Request $request)
    {
        $username = $request->query('username');

        return view('profile', compact('username'));
    }

   public function pengelolaan(Request $request)
{
    $username = $request->query('username');

    $produk = [
        ['nama' => 'Chocolate Brownies', 'harga' => 25000, 'stok' => 15],
        ['nama' => 'Strawberry Cake', 'harga' => 35000, 'stok' => 10],
        ['nama' => 'Cookies', 'harga' => 15000, 'stok' => 20]
    ];

    return view('pengelolaan', compact('username', 'produk'));
    }
}
