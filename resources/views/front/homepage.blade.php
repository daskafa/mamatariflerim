@extends('front.layouts.master')
@section('content')
@section('title')
mamatariflerim | zor ama güzel günlerinizde daima yanınızda
@endsection


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



