@extends('layouts.app')

@section('content')
	<div>
		<center><h1>Feed</h1></center>
	</div>
	<div>

			@foreach ($publicacao as $publicacaos)
		<p>Id: {{$publicacaos->id}}</p>
		<p>Texto: {{$publicacaos->texto}}</p></br>

		@endforeach
	

		<center>
			<a href="{{route('home.inicio')}}">Voltar ao menu</a>
		</center>
	</div>
@endsection