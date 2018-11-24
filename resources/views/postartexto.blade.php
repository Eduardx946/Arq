@extends('layouts.app')

@section('content')
		<div>
			<center>
			<form method="POST" action="{{route('texto.salvar')}}">
				{{ csrf_field() }}
				Texto: <input type='textarea' name='texto'><br><br>	


				<button>Postar</button>
			</form>
			</center>
		</div>
		<div>
		<center>
			<a href="{{route('home.inicio')}}">Voltar ao menu</a>
		</center>
	</div>
@endsection