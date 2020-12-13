<div class="mt-28">
    <h3 class="text-indigo-700 font-bold">Popüler Kategoriler</h3>
    <div class="relative">
        <ul>
            @foreach ($categories as $category)
            <li class="border-b-2 border-gray-200 border-dashed mt-6 pb-2"><a href="#">{{ $category->name }} <span class="absolute right-0">24</span></a></li>
            @endforeach
        </ul>
    </div>
</div>
