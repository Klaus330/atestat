@extends('layouts.app')

@section('content')
	@include('partials.header')
	@include('partials.breadcrum',['title'=>'Webcam Transfer Learning'])
	<section class="singl-blog-post-area section_padding_50">
		<div class="container">
			<web-game width="600" height="480"></web-game>
			<div class="row">
				<h3>Sursă de inspirație: <a href="https://storage.googleapis.com/tfjs-examples/webcam-transfer-learning/dist/index.html">
					Google Creative Lab - webcam transfer learning
				</a></h3>
			</div>
		</div>
	</section>
	@include('partials.footer')
@endsection