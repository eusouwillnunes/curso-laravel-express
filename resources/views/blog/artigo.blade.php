@extends('template')

@section('title')
<?php
    if($postSite):
    extract($postSite);
    echo $title;
        else:
        echo "404";
    endif;
    ?>
@endsection

@section('content')
    <?php
    if($postSite):
        extract($postSite); ?>
    <div class="row">
        <h1> {{$title}}</h1>
        <h2> {{$subtitle}}</h2>
        <?= $content; ?>
    </div>

    <?php
    else:
       ?>
    <div class="row">
        <h1>Desculpe, página não encontrada!</h1>
    </div>
    <?php
    endif;
    ?>
@endsection