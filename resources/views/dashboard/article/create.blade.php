@extends('dashboard.layout')

@section('content')
	<div class="row">
		<div class="col s12 m12 l12">
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
	</div>
@stop