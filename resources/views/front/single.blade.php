@extends('front.layouts.master')
@section('content')
@section('title')
mamatariflerim | zor ama güzel günlerinizde daima yanınızda
@endsection

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

    <div class="bg-white">
        <div class="container mx-auto">
            <div class="flex items-center h-28">
                <div class="grid grid-cols-2 gap-8 w-full">
                    <div class="grid-rows-1">
                        <div class="container mx-auto flex items-center pl-44">
                            <svg class="h-14 w-14 rounded bg-yellow-300 text-white p-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z" />
                            </svg>
                            <b class="mx-3.5 text-lg text-indigo-700">mamatariflerim.com</b>
                            <p class="text-lg text-gray-400 italic">En özel ve zorlu zamanınızda yanınızda.</p>
                        </div>
                    </div>
                    <div class="grid-rows-1 flex items-center justify-end pr-44">
                        <p class="font-light">Anasayfa / Tarifler</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 mb-20">
        <div class="bg-gray-200 py-16 w-full mx-auto">
            <img class="mx-auto" src="https://picsum.photos/900/150">
        </div>
    </div>

    <div class="grid grid-cols-12 gap-4 container mx-auto">
        <div class="col-span-8 pl-44">
            <p class="text-white bg-indigo-700 w-max py-1 px-3 rounded-md">Tüm Tarifler</p>
            <h3 class="text-4xl mt-4">
                Tarif Başlığı
            </h3>
            <p class="mt-2 text-gray-400">tarih / yazar</p>
            <div class="mt-5 mb-5">
                <img src="https://picsum.photos/700/500" class="rounded w-full object-cover h-82">
                <div class="break-all">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum mollitia et debitis vel porro quas, cumque id non doloribus minima obcaecati, culpa ullam rem quae architecto. Officiis corrupti ducimus totam.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum mollitia et debitis vel porro quas, cumque id non doloribus minima obcaecati, culpa ullam rem quae architecto. Officiis corrupti ducimus totam.</p>
                    <ul class="mt-4">
                        <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis sint nobis repudiandae adipisci dolor maxime corrupti commodi.</li>
                        <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis sint nobis repudiandae adipisci dolor maxime corrupti commodi.</li>
                        <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis sint nobis repudiandae adipisci dolor maxime corrupti commodi.</li>
                        <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis sint nobis repudiandae adipisci dolor maxime corrupti commodi.</li>
                    </ul>
                </div>
            </div>
            <hr>
            <div>
                <ul class="flex mt-3">
                    <li class="     py-1 px-3 rounded-md bg-indigo-700 text-white">Etiketler</li>
                    <li class="ml-5 py-1 px-3 rounded-md text-gray-600 hover:text-indigo-700 font-bold transition duration-300">mama</li>
                    <li class="ml-5 py-1 px-3 rounded-md text-gray-600 hover:text-indigo-700 font-bold transition duration-300">bebekmamasi</li>
                    <li class="ml-5 py-1 px-3 rounded-md text-gray-600 hover:text-indigo-700 font-bold transition duration-300">tarif</li>
                    <li class="ml-5 py-1 px-3 rounded-md text-gray-600 hover:text-indigo-700 font-bold transition duration-300">mamatarifi</li>
                </ul>
            </div>
        </div>
        <div class="col-span-3 p-14">
            <h3 class="text-yellow-300 font-bold">Mama tarifi ara</h3>
            <input class="border-2 border-gray-300 p-2 w-full mt-6 text-sm" placeholder="sağlıklı tarifler burada!" type="text">
            <div class="mt-28">
                <img src="https://picsum.photos/142/192" class="w-full object-cover h-60" alt="">
            </div>
            <div class="mt-28">
                <h3 class="text-indigo-700 font-bold">Popüler Kategoriler</h3>
                <div class="relative">
                    <ul>
                        <li class="border-b-2 border-gray-200 border-dashed mt-6 pb-2"><a href="#">test <span class="absolute right-0">24</span></a></li>
                        <li class="border-b-2 border-gray-200 border-dashed mt-2 pb-2"><a href="#">test <span class="absolute right-0">24</span></a></li>
                        <li class="border-b-2 border-gray-200 border-dashed mt-2 pb-2"><a href="#">test <span class="absolute right-0">24</span></a></li>
                        <li class="border-b-2 border-gray-200 border-dashed mt-2 pb-2"><a href="#">test <span class="absolute right-0">24</span></a></li>
                        <li class="border-b-2 border-gray-200 border-dashed mt-2 pb-2"><a href="#">test <span class="absolute right-0">24</span></a></li>
                    </ul>
                </div>
            </div>
            {{-- <div class="mt-28">
                <h3 class="text-indigo-700 font-bold">Diğer Lezzetli Tarifler</h3>
                <div class="grid grid-cols-6">
                    <div class="grid-rows-2">
                    <img src="https://picsum.photos/55/55" class="" alt="">
                    </div>
                    <div class="grid-rows-4">
                    <p>5 Beautiful buildings you need to before dying</p>
                    <em>12 JAN, 2016</em>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>

    @endsection
