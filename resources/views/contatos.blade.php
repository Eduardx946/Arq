@extends('layouts.app')

@section('content')
	<div>
		<center><h1>Contatos</h1></center>
	</div>
	<div>
		@foreach ($usuario as $users)
		<p>Id: {{$users->id}}</p>
		<p>Nome: {{$users->name}}</p>
		<p>Email: {{$users->email}}</p></br>


		@endforeach
		<center>
			<a href="{{route('home.inicio')}}">Voltar ao menu</a>
		</center>
	</div>
@endsection