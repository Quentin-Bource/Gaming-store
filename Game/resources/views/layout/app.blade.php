<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <script>document.documentElement.classList.add('js')</script>
    <title>Old Game Store</title>
</head>
<body class="bg-cover font-mono" style="background-image: url('{{ asset('img/bg.jpg') }}')">

    <div class=" bg-stone-50 opacity-80 m-12 pb-2 rounded-md">
        @include('partials.nav')
        @yield('content')

    </div>

   
    
</body>
<script src="https://unpkg.com/taos@1.0.3/dist/taos.js"></script>
</html>