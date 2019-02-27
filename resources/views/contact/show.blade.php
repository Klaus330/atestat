@extends('layouts.app')


@section('content')
	@include('partials.header')
	<section style="background: #343434; height: 100%; margin: auto;" class="singl-blog-post-area section_padding_200">
	<div class="container section_padding_100">
		<div class="row">
			<div class="col-md-12 col-xs-12 singl-blog-post">
				<div class="singl-blog-details wow fadeInUp">
					<h2>Subiect: {{$contact->subject}}</h2>
					<h3>Nume: {{$contact->name}}</h3>	
					<h3>Email: {{$contact->email}}</h3>	

					<p>
						<b>Mesaj:</b> {{$contact->message}}
					</p>

					<a class="btn btn-md btn-default" href="/home">Inapoi</a>
				</div>
			</div>
		</div>
	</div>
</section>
	@include('partials.footer')
@endsection