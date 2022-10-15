@extends('layouts.app')

@section('content')
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <h1>Список статей</h1>
    @foreach ($articles as $article)
        <h2><a href="{{route('articles.show', $article->id)}}">{{$article->name}}</a></h2>
        <h3><a href="{{route('articles.edit', $article->id)}}">Edit Article {{$article->name}}</a></h3>
        <a href="{{route('articles.destroy', $article->id)}}">Удалить</a>
        {{-- Str::limit – функция-хелпер, которая обрезает текст до указанной длины --}}
        {{-- Используется для очень длинных текстов, которые нужно сократить --}}
        <div>{{Str::limit($article->body, 200)}}</div>
    @endforeach
@endsection
