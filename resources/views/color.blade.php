@extends('layouts.app')

@section('content')
	@include('partials.header')
	@include('partials.breadcrum',['title'=>'Color picker example'])
	<section class="singl-blog-post-area section_padding_100">
		<div class="container h-full">
			<div class="row" style="margin: 100px 0;">
				<div class="col-md-12 col-xs-12">
					<color-changer></color-changer>
				</div>
			</div>
		</div>
	</section>
	
	@include('partials.footer')	
@endsection