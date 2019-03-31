@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="col-md-8 col-md-offset-2">
			<h1>Lista de Articulos</h1>
			@foreach($posts as $post)
			<div class="card" style="width: 56rem;">
				<div class="card-body">
					<div class="card-title">
						<b style="font-size: 18px" >{{ $post->name }}</b>
					</div>
					@if($post->file)
					 <img src="{{ $post->file }}" class="card-img">
					@endif
					{{ $post->excerpt }}
					<a  href="{{ route('post', $post->slug) }}" class="pull-right">Leer más</a>
				</div>
			</div>
			<br>
			@endforeach()
			{{ $posts->render() }}
		</div>
	</div>
@endsection