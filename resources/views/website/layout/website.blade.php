<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Signature - @stack('title')</title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @vite(["resources/css/headers/header.css"])
    @vite(["resources/css/footers/style.css"])
    @vite(["resources/css/contact/cta.css"])


    {{-- Plugins style import  --}}
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
    />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


    {{-- Font import  --}}
    <style>
        @font-face {
            font-family: "artico-bold";
            src: url("{{Vite::asset('resources/fonts/Artico/Fontspring-DEMO-artico-medium.otf')}}")

        }

        @font-face {
            font-family: "artico-thin";
            src: url("{{Vite::asset('resources/fonts/Artico/Fontspring-DEMO-artico-light.otf')}}")
        }

        @font-face {
            font-family: "eras";
            src: url("{{Vite::asset('resources/fonts/itcerasstd-book.otf')}}")

        }


        @font-face {
            font-family: "goldbill";
            src: url("{{Vite::asset('resources/fonts/goldbill_xs/Goldbill-XSExtraBold.ttf')}}"),
        }


        @font-face {
            font-family: "goldbill-thin";
            src: url("{{Vite::asset('resources/fonts/goldbill_xs/Goldbill-XLLight.ttf')}}"),
        }

        @font-face {
            font-family: "Always W01 Black";
            src: url("https://db.onlinewebfonts.com/t/26b8ae09ece7d707ec77a26999d6789c.eot");
            src: url("https://db.onlinewebfonts.com/t/26b8ae09ece7d707ec77a26999d6789c.eot?#iefix")format("embedded-opentype"),
            url("https://db.onlinewebfonts.com/t/26b8ae09ece7d707ec77a26999d6789c.woff2")format("woff2"),
            url("https://db.onlinewebfonts.com/t/26b8ae09ece7d707ec77a26999d6789c.woff")format("woff"),
            url("https://db.onlinewebfonts.com/t/26b8ae09ece7d707ec77a26999d6789c.ttf")format("truetype"),
            url("https://db.onlinewebfonts.com/t/26b8ae09ece7d707ec77a26999d6789c.svg#Always W01 Black")format("svg");
        }
    </style>




    @stack('custom-css')
</head>
<body>

    @include('website.layout.header')
    
    @yield('content')


    @include('website.layout.footer')
    @stack('custom-js')
</body>
</html>