<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Isun Osing</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-grey-50">
    @include('components.navbar')
    <main class="container mx-auto py-10 px-5">
        @yield('content')
    </main>
    <div class="bg-gray-50 border-t mt-4 py-8 px-6 text-sm text-gray-700">
        <div class="max-w-4xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <h3 class="text-lg font-semibold mb-2">Alamat Isun Osing</h3>
                <p class="mb-2">Jl. K.H. Agus Salim No.12A, Taman Baru, Kec. Banyuwangi, Kabupaten Banyuwangi, Jawa Timur 68416</p>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15794.97417516796!2d114.35148490607207!3d-8.228524469412786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd15ab585734b0d%3A0x71a88306d9242428!2sOsing%20Deles%20Pusat%20Oleh-Oleh%20Banyuwangi!5e0!3m2!1sid!2sid!4v1761215301376!5m2!1sid!2sid"
                    width="100%" height="200" style="border:0;" 
                    class="rounded shadow">
                </iframe>
            </div>
        </div>
    </div><br>
    <x-footer />
</body>
</html>
