@extends('layouts.app')

@section('content')
	<div>
		<center><h1>Galeria</h1></center>
	</div>
	<div>

		@foreach ($foto as $fotos)
		<p>Id: {{$fotos->id}}</p>
		<p>Foto: {{$fotos->imagem}}</p>
		<p>Descrição: {{$fotos->descricao}}</p></br>


		@endforeach
		<center>
			<a href="{{route('home.inicio')}}">Voltar ao menu</a>
		</center>
	</div>
@endsection