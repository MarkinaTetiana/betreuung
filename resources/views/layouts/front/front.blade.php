<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Pflege-Projekt') </title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    
    
</head>
<body>
    @include('layouts.front.navbar')
    
    
    <main class="container my-4">   
        @yield('content')
    </main>
    @include('layouts.front.footer')
</body>
</html>