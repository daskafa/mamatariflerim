@extends('back.layouts.master')
@section('content')
<section style="padding: 2em;">
    <h2 class="title-1 m-b-25">{{ $articles->count() }} Tarif bulundu.</h2>
<div class="table-responsive table--no-card m-b-40">
    <table id="table_id" class="display">
        <thead>
            <tr>
                <th>Fotoğraf</th>
                <th>Başlık</th>
                <th>Kategori</th>
                <th>Görüntülenme Sayısı</th>
                <th>Oluşturma Tarihi</th>
                <th>İşlemler</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)
                <tr>
                    <td>
                        <img src="{{ asset($article->image) }}" style="width:10em;">
                    </td>
                    <td>{{ $article->title }}</td>
                    <td>{{ $article->getCategory->name }}</td>
                    <td>{{ $article->hit }}</td>
                    <td>{{ $article->created_at->diffForHumans() }}</td>
                    <td>
                        <a href="#" class="item" style="font-size: 1.5em;color:#333;">
                            <i class="zmdi zmdi-eye"></i>
                        </a>
                        <a href="{{ route('admin.tarifler.edit', $article->id) }}" class="item" style="font-size: 1.5em;color:#333;margin-left:0.5em;">
                            <i class="zmdi zmdi-edit"></i>
                        </a>
                        <a href="{{ route('admin.delete.article', $article->id) }}" class="item" style="font-size: 1.5em;color:#333;margin-left:0.5em;">
                            <i class="zmdi zmdi-delete"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</section>
@endsection
