@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="col-md-8 col-md-offset-2">
			<h1>{{ $post->name }}</h1>
			<div class="card" style="width: 56rem;">
				<div class="card-body">
					<div class="card-title">
						<b style="font-size: 18px" >Categoría</b>
						<a href="{{ route('category',$post->category->slug)}}">{{ $post->category->name }}</a>
					</div>
						@if($post->file)
						 <img src="{{ $post->file }}" class="card-img">
						@endif
						{{ $post->excerpt }}
						<hr>
						{!! $post->body !!}
						<hr>
						Etiquetas
						@foreach($post->tags as $tag)
							<a href="{{ route('tag',$tag->slug)}}">
								{{ $tag->name }}
							</a>
						@endforeach
				</div>
			</div>
			<br>
		</div>
	</div>
@endsection