@extends('layouts.app')

@section('content')
<div class="max-w-md mx-auto bg-white p-6 rounded shadow">
    <h2 class="text-2xl font-bold mb-4 text-center">Login Isun Osing</h2>
    <form action="{{ route('doLogin') }}" method="POST" class="space-y-4">
        @csrf
        <input type="text" name="username" placeholder="Username" class="w-full border rounded px-4 py-2" required>
        <input type="password" name="password" placeholder="Password" class="w-full border rounded px-4 py-2" required>
        <select name="role" class="w-full border rounded px-4 py-2" required>
            <option value="">-- Login Sebagai --</option>
            <option value="customer">Customer</option>
            <option value="staff">Staff</option>
        </select>
        <button type="submit" class="w-full bg-yellow-600 text-black py-2 rounded hover:bg-grey-700">Login</button>
    </form>
</div>
@endsection
