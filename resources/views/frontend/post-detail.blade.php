@extends('frontend.layout')

@section('content')
	<div class="row">
		<div class="col s12 m12 l12">
			<h3>{{ $article->title }}</h3>
			<hr class="navbar">
			<article>
				{!! $article->body !!}
			</article>
		</div>
	</div>
@stop