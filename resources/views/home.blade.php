@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Menu</div>

                <div class="panel-body">
                    <a href="{{route('perfil.inicio')}}">Perfil</a><br><br>
                    <a href="{{route('galeria.inicio')}}">Galeria</a><br><br>
                    <a href="{{route('feed.inicio')}}">Feed</a><br><br>
                    <a href="{{route('foto.inicio')}}">Potar Foto</a><br><br>
                    <a href="{{route('texto.inicio')}}">Postar Texto</a><br><br>
                    <a href="{{route('contato.inicio')}}">Contato</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
