@include('frontend.partials.header')
	<div class="container">
		@include('frontend.partials.navbar')
		<div class="row">
			@yield('sidebar')
			@yield('content')	
		</div>
	</div>
@include('frontend.partials.footer')