@extends('layouts.app')

@section('content')
<h2 class="text-3xl font-semibold mb-6">Pengelolaan Produk</h2>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    @foreach ($produk as $item)
    <div class="bg-white shadow rounded p-4">
        <img src="{{ $item['gambar'] }}" alt="{{ $item['nama'] }}" class="w-full h-65 object-cover rounded mb-4">
        <h3 class="text-xl font-bold">{{ $item['nama'] }}</h3>
        <p class="text-gray-600">{{ $item['kategori'] }}</p>
        <p class="text-teal-600 font-semibold">{{ $item['harga'] }}</p>
        <div class="flex justify-between mt-4">
            <a href="#" class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600 text-sm">Edit</a>
            <button class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 text-sm">Hapus</button>
        </div>
    </div>
    @endforeach
</div>
@endsection

