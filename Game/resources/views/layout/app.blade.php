<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://unpkg.com/@splidejs/splide@3.0.8/dist/css/splide.min.css">
    <script src="https://unpkg.com/@splidejs/splide@3.0.8/dist/js/splide.min.js"></script>
    <title>Old Game Store</title>
</head>
<body class="bg-cover font-mono" style="background-image: url('{{ asset('img/bg.jpg') }}')">

    <div class=" bg-stone-50 opacity-80 m-12 rounded-md">
        @include('partials.nav')
        @yield('content')

        @include('partials.footer')

    </div>

   
    
</body>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init();
</script>
<script>
  new Splide('.splide', {
    type: 'loop',
    perPage: 3,
    perMove: 1,
    arrows: true,
    autoplay: true,
    interval: 2000, 
  }).mount();

  </script>
  

</html>