@extends('layouts.app')

@section('content')
	@include('partials.header')
	@include('partials.breadcrum',['title'=>'Video classifier example'])
	<section class="singl-blog-post-area section_padding_10">
		<div class="container">
			<div class="row">
				<webcam-recognizer width="960" height="960"></webcam-recognizer>
			</div>
		</div>
	</section>
	@include('partials.footer')
@endsection