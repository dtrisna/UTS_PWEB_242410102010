<nav class="bg-white shadow-md py-4 px-6 flex justify-between items-center">
    <div class="flex items-center space-x-3">
        <img src="{{asset ('storage/images/logo-isun-osing.png')}}" alt="Logo Isun Osing" class="h-12 w-auto">
        <span class="text-xl font-bold text-teal-700 tracking-wide">Toko Isun Osing</span>
    </div>
    <div class="space-x-6 text-sm">
        <a href="/dashboard" class="text-gray-700 hover:text-yellow-600">Dashboard</a>
        <a href="/profile" class="text-gray-700 hover:text-yellow-600">Profile</a>
        <a href="/pengelolaan" class="text-gray-700 hover:text-yellow-600">Pengelolaan</a>
        <a href="{{ route('logout') }}">
        <button class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 text-sm">Logout</button></a>
    </div>
</nav>
