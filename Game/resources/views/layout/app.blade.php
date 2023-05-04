<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Old Game Store</title>
</head>
<body class="bg-cover" style="background-image: url('{{ asset('img/bg.jpg') }}')">

    <div class=" bg-stone-50 opacity-80 m-12 rounded-md">
        @include('partials.nav')
        @yield('content')

    </div>
   
    
</body>
</html>