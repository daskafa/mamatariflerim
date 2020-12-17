<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'mamatariflerim')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{asset('css/app.css')}}" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>

<body class="bg-white">

    <div class="bg-baby-1">
        <div class="container mx-auto">
            <div class="grid">
                <div class="grid-rows-1">
                    <img class="w-36 h-auto mx-auto mt-32 rounded" src="https://picsum.photos/300/300">
                </div>
            </div>
            <div class="grid">
                <div class="grid-rows-1 mt-5 mb-5">
                    <p class="text-center text-gray-800 text-xl">mamatariflerim.com olarak bebeğiniz ve sizin bu güzel ama
                        birazda zorlu beslenme <br> yolculuğunda biraz da olsa omuzlarınızdaki yükü alarak yardımcı
                        olmak için buradayız...</p>
                </div>
            </div>
            <div class="grid pb-14">
                <div class="grid-rows-1">
                    <div class="flex justify-center">
                        <a href="#"
                            class="transition duration-300 rounded text-white m-3 py-2 px-10 bg-black hover:bg-gray-700">
                            <p class="tracking-widest">Tüm Tarifleri Gör</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-indigo-700">
        <div class="container mx-auto">
            <ul class="flex justify-center p-5 text-white">
                <li class="mr-9"><a href="">+6 Ay</a></li>
                <li class="mr-9"><a href="">+9 Ay</a></li>
                <li class="mr-9"><a href="">Tüm Tarifler</a></li>
                <li class="mr-9"><a href="">Psikolojik Destek</a></li>
                <li class="mr-9"><a href="">Neden Buradayız</a></li>
                <li class=""><a href="">İletişim</a></li>
            </ul>
        </div>
    </div>
