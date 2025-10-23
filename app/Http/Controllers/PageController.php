<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login() {
        return view('login');
    }

    public function doLogin(Request $request) {
        $username = $request->input('username');
        $role = $request->input('role');

        session([
            'username' => $username,
            'role' => $role
        ]);
        session()->flash('welcome', "Selamat datang, $username!");

        return redirect()->route('dashboard', compact('username', 'role'));
    }

    public function dashboard(Request $request) {
        $username = session('username');
        $role = session('role');
        $produk = [
            [
                'nama' => 'Kopai Osing',
                'kategori' => 'Minuman',
                'harga' => 'Rp 35.000',
                'stok' => '20pcs',
                'gambar' => 'https://images.tokopedia.net/img/cache/700/VqbcmM/2022/8/12/1c05cc89-6b84-4e56-bb59-cfc753d6f9fc.jpg'
            ],
            [
                'nama' => 'Batik Gajah Oling',
                'kategori' => 'Pakaian',
                'harga' => 'Rp 120.000',
                'stok' => '2pcs',
                'gambar' => 'https://i.pinimg.com/736x/26/6a/80/266a80e05a22079e77e4c305d329cecb.jpg'
            ],
            [
                'nama' => 'Sale Pisang',
                'kategori' => 'Makanan Ringan',
                'harga' => 'Rp 20.000',
                'stok' => '10pcs',
                'gambar' => 'https://down-id.img.susercontent.com/file/id-11134207-7rbk6-m6feccyfgygc01'
            ],
            [
                'nama' => 'Rengginang Udang',
                'kategori' => 'Makanan Ringan',
                'harga' => 'Rp 10.000',
                'stok' => '15pcs',
                'gambar' => 'https://down-id.img.susercontent.com/file/id-11134207-7quky-lkc5row8wmmx57_tn.webp'
            ],
            [
                'nama' => 'Udeng Banyuwangi',
                'kategori' => 'Aksesoris',
                'harga' => 'Rp 15.000',
                'stok' => '100pcs',
                'gambar' => 'https://cf.shopee.co.id/file/698eadf8d5b764fd55c6c0c13c6822d7'
            ],
            [
                'nama' => 'Bagiak Oreng Osing',
                'kategori' => 'Makanan Ringan',
                'harga' => 'Rp 20.000',
                'stok' => '15pcs',
                'gambar' => 'https://ceklist.id/wp-content/uploads/2023/12/1-Bagiak-Irma-Jaya.jpg'
            ],
        ];

        return view('dashboard', compact('username', 'role', 'produk'));
    }

    public function profile(Request $request) {
        $username = session('username');
        $role = session('role');
        return view('profile', compact('username', 'role'));
    }

    public function pengelolaan() {
        $role = session('role');
        if ($role === 'customer'){
            $keranjang = [
            [
                'nama' => 'Kopai Osing',
                'kategori' => 'Minuman',
                'harga' => 'Rp 35.000',
                'jumlah' => '5',
                'gambar' => 'https://images.tokopedia.net/img/cache/700/VqbcmM/2022/8/12/1c05cc89-6b84-4e56-bb59-cfc753d6f9fc.jpg'
            ],
            [
                'nama' => 'Batik Gajah Oling',
                'kategori' => 'Pakaian',
                'harga' => 'Rp 900.000',
                'jumlah' => '1',
                'gambar' => 'https://i.pinimg.com/736x/26/6a/80/266a80e05a22079e77e4c305d329cecb.jpg'
            ],
        ];
        return view('pengelolaan-customer', compact('keranjang'));
    }
        $produk = [
            [
                'nama' => 'Kopai Osing',
                'kategori' => 'Minuman',
                'harga' => 'Rp 35.000',
                'stok' => '20pcs',
                'gambar' => 'https://images.tokopedia.net/img/cache/700/VqbcmM/2022/8/12/1c05cc89-6b84-4e56-bb59-cfc753d6f9fc.jpg'
            ],
            [
                'nama' => 'Batik Gajah Oling',
                'kategori' => 'Pakaian',
                'harga' => 'Rp 120.000',
                'stok' => '2pcs',
                'gambar' => 'https://i.pinimg.com/736x/26/6a/80/266a80e05a22079e77e4c305d329cecb.jpg'
            ],
            [
                'nama' => 'Sale Pisang',
                'kategori' => 'Makanan Ringan',
                'harga' => 'Rp 20.000',
                'stok' => '10pcs',
                'gambar' => 'https://down-id.img.susercontent.com/file/id-11134207-7rbk6-m6feccyfgygc01'
            ],
            [
                'nama' => 'Rengginang Udang',
                'kategori' => 'Makanan Ringan',
                'harga' => 'Rp 10.000',
                'stok' => '15pcs',
                'gambar' => 'https://down-id.img.susercontent.com/file/id-11134207-7quky-lkc5row8wmmx57_tn.webp'
            ],
            [
                'nama' => 'Udeng Banyuwangi',
                'kategori' => 'Aksesoris',
                'harga' => 'Rp 15.000',
                'stok' => '100pcs',
                'gambar' => 'https://cf.shopee.co.id/file/698eadf8d5b764fd55c6c0c13c6822d7'
            ],
            [
                'nama' => 'Bagiak Oreng Osing',
                'kategori' => 'Makanan Ringan',
                'harga' => 'Rp 20.000',
                'stok' => '15pcs',
                'gambar' => 'https://ceklist.id/wp-content/uploads/2023/12/1-Bagiak-Irma-Jaya.jpg'
            ],
        ];
        return view('pengelolaan-staff', compact('produk'));
    }

}
