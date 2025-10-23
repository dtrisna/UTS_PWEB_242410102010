@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto bg-white p-6 rounded shadow">
    <h2 class="text-2xl font-bold mb-4">Profil Pengguna</h2>
    <p><strong>Username:</strong> {{ $username }}</p>
    <p><strong>Sebagai:</strong> {{ $role }}</p>
</div>
@endsection
