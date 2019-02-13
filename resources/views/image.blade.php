@extends('layouts.app')

@section('content')
	@include('partials.header')
	@include('partials.breadcrum',['title'=>'Image classifier example'])
	<section class="singl-blog-post-area section_padding_100">
		<div class="container">
			<div class="row">
				<image-prediction width="960" height="960"></image-prediction>
			</div>
		</div>
	</section>
	@include('partials.footer')
@endsection