@extends('template')

@section('title')
    Blog do Willian
@endsection

@section('content')
    @foreach($posts as $post)
        <?php extract($post) ?>
    <div class="row">
        <h1>{{$title}}</h1>
        <h2> {{$subtitle}}</h2>
        <a href="/artigo/{{$url}}">Leia Mais</a>
    </div>
        <hr>
    @endforeach
@endsection
