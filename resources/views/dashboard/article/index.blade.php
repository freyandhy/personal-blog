@extends('dashboard.layout')

@section('breadcrumbs')
	<div id="breadcrumbs-wrapper" class=" grey lighten-3">
		<div class="container">
			<div class="row">
 				<div class="col s12 m12 l12">
	   				<h5 class="breadcrumbs-title">Article</h5>
	   				<br>
	 			</div>
			</div>
		</div>
	</div><br>
@stop

@section('content')
<div class="row">
	<div class="col s6 m6 l6">
		<div class="card-panel">
			<h4 class="header2">List Articles</h4>
			<div class="row">
				<table class="hoverable col s12">
					<thead>
						<tr>
							<th>Title</th>
							<th>Date</th>
							<th>#</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($articles as $article)
						<tr>
							<td>{{ $article->title }}</td>
							<td>{{ $article->created_at }}</td>
							<td></td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<div class="col s6 m6 l6">
		<div class="card-panel">
			<h4 class="header2">Create New Article</h4>
			<div class="row">
				{!! Form::open(['class' => 'col s12']) !!}
					<div class="row">
						<div class="input-field col s12">
							{!! Form::text('title') !!}
							{!! Form::label('title','Title') !!}
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							{!! Form::textarea('body',null,['class' => 'materialize-textarea']) !!}
							{!! Form::label('body','Body') !!}
						</div>
					</div> 
					<div class="row">
						<div class="input-field col s12">
							{!! Form::button('Create <i class="mdi-content-send right"></i>', ['type' => 'submit','class' => 'btn light-green darken-2 waves-effect waves-light right']) !!}	
						</div>
					</div>
				{!! Form::close() !!}		
			</div>
	</div>
</div>
@stop