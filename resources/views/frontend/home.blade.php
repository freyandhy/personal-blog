@extends('frontend.layout')

@section('sidebar')
	@include('frontend.partials.sidebar')
@stop

@section('content')
	<div class="col s12 m8 l8">
		<div class="row">
			<div class="col s12 m12 l12">
				<h3>Home</h3>
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
		</div>
		<div class="row">
			<div class="col s12 m12 l12">
				<div class="row">
					<div class="col s12 m6 l6">
						<div class="card">
							<div class="card-image waves-effect waves-block waves-light">
						    	<img class="activator" src="{{ url('img/1.jpg') }}">
						    </div>
						    <div class="card-content">
						    	<span class="card-title activator grey-text text-darken-4 center">Sebaik-baik Hamba</span>
						    </div>
						    <div class="card-reveal">
						    	<span class="card-title grey-text text-darken-4">Sebaik-baik Hamba<i class="material-icons right">close</i></span>
						    	<p>Sebaik-baik kalian adalah orang yang belajar Al-Qur'an dan mengajarkannya. <br> (HR. Bukhari)</p>
						    </div>
						</div>
					</div>
					<div class="col s12 m6 l6">
						<div class="card">
						    <div class="card-image waves-effect waves-block waves-light">
						    	<img class="activator" src="{{ url('img/2.jpg') }}">
						    </div>
						    <div class="card-content">
						    	<span class="card-title activator grey-text text-darken-4">Meneladani Rasulullah</span>
						    </div>
						    <div class="card-reveal">
						    	<span class="card-title grey-text text-darken-4">Teladan Rasulullah<i class="material-icons right">close</i></span>
						    	<p>
						    		Hafshah RA. istri Rasulullah, saat ditanya, “Apa yang menjadi tempat tidur Rasulullah SAW?” Ia menjawab, “Kain dari bulu yang kami lipat dua. Di atas itulah  Rasulullah SAW tidur. Pernah suatu malam aku berkata (dalam hati): sekiranya kain itu aku lipat menjadi empat lapis, tentu akan lebih empuk baginya. Maka kain itu kulipat empat lapis.” <br><br>
									Manakala waktu subuh, cerita Hafsah, Rasulullah SAW mengatakan, “Apa yang engkau hamparkan sebagai tempat tidurku semalam?” Aku menjawab, itu adalah alas tidur yang biasanya Nabi pakai, hanya saja aku lipat empat. Aku kira akan lebih empuk.” Rasulullah SAW membalas, “Kembalikan kepada asalnya! Sungguh, disebabkan empuknya, aku terhalang dari shalat di malam hari.” <br> (HR. At-Tirmidzi).
								</p>
						    </div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col s12 m6 l6">
						<div class="card">
							<div class="card-image waves-effect waves-block waves-light">
						    	<img class="activator" src="{{ url('img/3.jpg') }}">
						    </div>
						    <div class="card-content">
						    	<span class="card-title activator grey-text text-darken-4">Keutamaan Sedekah</span>
						    </div>
						    <div class="card-reveal">
						    	<span class="card-title grey-text text-darken-4">Keutamaan Sedekah<i class="material-icons right">close</i></span>
						    	<p>
						    		“Sesungguhnya orang-orang yang bersedekah baik laki-laki maupun perempuan dan meminjamkan kepada Allah pinjaman yang baik, niscaya akan dilipat-gandakan (ganjarannya) kepada mereka; dan bagi mereka pahala yang banyak.” <br> (Qs. Al Hadid: 18)
						    	</p>
						    </div>
						</div>
					</div>
					<div class="col s12 m6 l6">
						<div class="card">
							<div class="card-image waves-effect waves-block waves-light">
						    	<img class="activator" src="{{ url('img/4.jpg') }}">
						    </div>
						    <div class="card-content">
						    	<span class="card-title activator grey-text text-darken-4">Rumah Roboh</span>
						    </div>
						    <div class="card-reveal">
						    	<span class="card-title grey-text text-darken-4">Rumah Roboh<i class="material-icons right">close</i></span>
						    	<p>
						    		Sesungguhnya orang yang dalam hatinya tidak ada Al-Quran sedikitpun bagaikan rumah yang akan roboh. <br> (HR. Tirmidzi)
						    	</p>
						    </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop