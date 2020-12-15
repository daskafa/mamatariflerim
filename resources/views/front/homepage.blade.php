@extends('front.layouts.master')
@section('content')
@section('title')
mamatariflerim | zor ama güzel günlerinizde daima yanınızda
@endsection

    <div class="">
        <div class="container mx-auto">
            <div class="grid">
                <div class="grid-rows-1">
                    <img class="w-36 h-auto mx-auto mt-32 rounded" src="https://picsum.photos/300/300">
                </div>
            </div>
            <div class="grid">
                <div class="grid-rows-1 mt-5 mb-5">
                    <p class="text-center text-white text-xl">mamatariflerim.com olarak bebeğiniz ve sizin bu güzel ama birazda zorlu beslenme <br> yolculuğunda biraz da olsa omuzlarınızdaki yükü alarak yardımcı olmak için buradayız...</p>
                </div>
            </div>
            <div class="grid pb-14">
                <div class="grid-rows-1">
                    <div class="flex justify-center">
                        <a href="#" class="transition duration-300 rounded text-white m-3 py-2 px-10 bg-black hover:bg-blue-400"><p class="tracking-widest">Tüm Tarifleri Gör</p></a>
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

    <div class="text-center text-3xl pt-8 font-bold">
        <h3>- SON TARİFLER -</h3>
    </div>

    <div class="container mx-auto">
        <div class="grid grid-cols-4 pt-8 gap-4 mb-20">
            @include('front.widgets.articleList')
        </div>


        @include('front.widgets.categoryWidget')


        <div class="grid grid-cols-1 mb-20">
            <div class="bg-white p-5 w-4/5 mx-auto">
                <img src="https://picsum.photos/1200/100">
            </div>
        </div>

    </div>

    <div class="pb-8">
        <ul class="flex justify-center">
            {{-- <li class="bg-yellow-400 text-white mr-3 py-2 px-3"><a href="#">1</a></li> --}}
            {{ $articles->links() }}
        </ul>
    </div>

    @endsection



