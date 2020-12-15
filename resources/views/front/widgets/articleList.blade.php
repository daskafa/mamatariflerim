@if (count($articles) > 0)
@foreach ($articles as $article)
<div class="grid-rows-1 mx-auto max-w-xs bg-white p-4">
    <div class="relative">
        <img class="w-auto h-auto" src="{{ $article->image }}">
        <p class="absolute top-0 m-3 px-1 rounded-md bg-gray-100 bg-opacity-50 text-black font-bold">{{ $article->created_at->diffForHumans() }}</p>
    </div>
    <div class="mt-3">
        <h5 class="mb-3"><b>{{ $article->title }}</b></h5>
        <p class="text-justify mb-3"><a href="{{ route('single', [$article->getCategory->slug, $article->slug]) }}">{{!! Illuminate\Support\Str::limit($article->content, 250, '...') !!}}</a></p>
        <hr class="mb-3">
        <p><b>yazar: </b></p><br>
        <em>Kategori: {{ $article->getCategory->name }}</em>
    </div>
</div>
@endforeach
@else
<div>
    <h1>Bu kategoriye ait yazı bulunamadı</h1>
</div>
@endif
