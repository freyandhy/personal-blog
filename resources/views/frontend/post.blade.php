@extends('frontend.layout')

@section('content')
	<div class="col s12 m12 l12">
		<h3>Artikel</h3>
		<hr class="navbar">
		@foreach ($articles as $article)
			<article>
				<a href="{{ url('/post',$article->id) }}" title=""><h5>{{ $article->title }}</h5></a>
				{!! substr($article->body, 0, 300) !!} ..... <br><br>
				<a href="{{ url('/post',$article->id) }}" class="waves-effect waves-light btn orange"><i class="material-icons right">play_arrow</i>Selengkapnya</a>
			</article>
			<hr />
		@endforeach
	</div>
@stop