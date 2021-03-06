@isset($categories)
<div class="mt-28">
    <h3 class="text-indigo-700 font-bold">Popüler Kategoriler</h3>
    <div class="relative">
        <ul>
            @foreach ($categories as $category)
            <li class="@if(Request::segment(2) == $category->slug) bg-gray-800 text-white rounded @endif border-b-2 border-gray-200 border-dashed mt-6 pb-2">
                <a @if(Request::segment(2) != $category->slug)  href="{{ route('category', $category->slug) }}" @endif>{{ $category->name }} <span class="bg-black text-white p-3 absolute right-0">{{ $category->articleCount() }}</span></a></li>
            @endforeach
        </ul>
    </div>
</div>
@endisset
