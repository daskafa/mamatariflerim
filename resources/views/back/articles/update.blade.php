@extends('back.layouts.master')
@section('content')
<section style="padding: 2em;">
<div class="table-responsive table--no-card m-b-40">
    <div class="card">
        <div class="card-header">
            <strong>Tarif Güncelle</strong> Bölümü
        </div>
        <div class="card-body card-block">
            @if($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </div>
            @endif
            <form method="POST" action="{{ route('admin.tarifler.update', $article->id) }}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class="form-control-label">Mama Başlığı</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" name="title" value="{{ $article->title }}" placeholder="başlık giriniz" class="form-control">
                        <small class="form-text text-muted">This is a help text</small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="textarea-input" class=" form-control-label">İçerik</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <textarea name="content" id="textarea-input" rows="9" placeholder="İçerik..." class="form-control">{!! $article->content !!}</textarea>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="select" class=" form-control-label">Kategori Seçin</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <select name="category" id="select" class="form-control w-25">
                            @foreach ($categories as $category)
                                <option @if($article->category_id == $category->id) selected @endif value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="file-input" class=" form-control-label">Tarif Fotoğrafı</label>
                        <img src="{{ asset($article->image) }}" width="200">
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="file" name="image" class="form-control-file">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-sm">
                    <i class="fa fa-dot-circle-o"></i> Güncelle
                </button>
            </form>
        </div>
    </div>
</div>
</section>
@endsection
