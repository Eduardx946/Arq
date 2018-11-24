@extends('layouts.app')

@section('content')
		<div>
			<center>
			<form method="POST" action="{{route('foto.salvar')}}">
				{{ csrf_field() }}
				Imagem: <input type='file' name='imagem'><br><br>
				Descricao: <input type='text' name='descricao'><br><br>	
				<button>Postar</button>
			</form>
		</center>
		</div>
		<div>
		<center>
			<a href="{{url('home')}}">Voltar ao menu</a>
		</center>
	</div>
@endsection