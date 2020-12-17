@extends('front.layouts.master')
@section('content')
@section('title')
mamatariflerim | zor ama güzel günlerinizde daima yanınızda
@endsection


<!-- component -->
<form method="POST" action="{{ route('contact.post') }}" class="w-full max-w-lg container mx-auto mt-6">
    @csrf
    @if (session('success'))
    <div class="bg-green-200 relative text-green-600 py-3 px-3 my-3 rounded-lg">
            {{ session('success') }}
    </div>
    @endif
    @if ($errors->any())
    <div class="bg-red-200 relative text-red-600 py-3 px-3 my-3 rounded-lg">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="flex flex-wrap -mx-3 mb-6">
      <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
          İsim
        </label>
        <input name="name" value="{{ old('name') }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="">
        {{-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> --}}
      </div>
      <div class="w-full md:w-1/2 px-3">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
          Soyisim
        </label>
        <input name="surname" value="{{ old('surname') }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="">
      </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-6">
      <div class="w-full px-3">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
          E-mail
        </label>
        <input name="email" value="{{ old('email') }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="email" type="email">
        {{-- <p class="text-gray-600 text-xs italic">Some tips - as long as needed</p> --}}
      </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-6">
      <div class="w-full px-3">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
          Mesajınız
        </label>
        <textarea name="message" class=" no-resize appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 h-48 resize-none" id="message">{{ old('message') }}</textarea>
      </div>
    </div>
    <div class="md:flex md:items-center">
      <div class="md:w-1/3">
        <button class="shadow bg-indigo-700 hover:bg-indigo-700 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
          Gönder
        </button>
      </div>
      <div class="md:w-2/3"></div>
    </div>
  </form>

    @endsection



