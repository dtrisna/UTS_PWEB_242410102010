@extends('layouts.app')

@if (session('welcome'))
<div class="mb-6 bg-white-100 border border-yellow-300 text-black-800 px-4 py-3 rounded relative" role="alert">
    <strong class="font-bold"></strong>
    <span class="block sm:inline">{{ session('welcome') }}</span>
</div>
@endif

@section('content')
<div class="text-center mb-12">
    <h1 class="text-4xl font-serif font-bold text-gray-800">Isun Osing</h1>
    <p class="text-lg text-gray-600 mt-2">Oleh-oleh khas Banyuwangi yang autentik dan berkelas</p>
</div>  

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
    @foreach ($produk as $item)
    <div class="bg-white rounded shadow overflow-hidden hover:scale-105 transition">
        <img src="{{ $item['gambar'] }}" alt="{{ $item['nama'] }}" class="w-full h-65 object-cover">
        <div class="p-4">
            <h2 class="text-xl font-semibold text-gray-800">{{ $item['nama'] }}</h2>
            <p class="text-sm text-gray-600 mb-2">{{ $item['kategori'] }}</p>
            <p class="text-teal-600 font-bold mb-4">{{ $item['harga'] }}</p>
            <p class="text-sm text-gray-600 mb-2">Stok: {{ $item['stok'] }} tersedia</p>
            @if ($role === 'customer')
            <div class="flex flex-col gap-2">
                <button class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600 text-sm flex items-center justify-center gap-2">
                    Masukkan ke Keranjang
                </button>
            </div>
            @endif
        </div>
    </div>
    @endforeach
</div>
@endsection
