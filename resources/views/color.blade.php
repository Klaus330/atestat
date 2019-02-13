@extends('layouts.app')

@section('content')
	@include('partials.header')
	@include('partials.breadcrum',['title'=>'Color picker example'])
	<section class="singl-blog-post-area section_padding_100">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-xs-12">
					<color-picker></color-picker>
				</div>
				<div class="col-md-12 col-xs-12">
					
				</div>
			</div>
		</div>
	</section>
	@include('partials.footer')
@endsection