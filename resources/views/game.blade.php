@extends('layouts.app')

@section('content')
	@include('partials.header')
	@include('partials.breadcrum',['title'=>'Pong Game example	'])
	<section class="singl-blog-post-area section_padding_50">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<web-game width="960" height="960"></web-game>
				</div>
			</div>
		</div>
	</section>
	@include('partials.footer')
@endsection