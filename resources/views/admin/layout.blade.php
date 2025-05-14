<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
   <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-800">
    <nav class="bg-white shadow p-4">
        <div class="container mx-auto flex justify-between">
            <h1 class="text-xl font-bold">Admin Panel</h1>
            <a href="">Logout</a>
        </div>
    </nav>

    <main class="mt-4">
        @yield('content')
    </main>
</body>
</html>