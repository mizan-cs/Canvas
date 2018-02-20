@extends('layout.master')
@section ('content')



<main style="margin-top:50px" role="main" class="container">
	<div class="row">
		<aside class="col-md-4 blog-sidebar">

			@include('layout.archive')

			@include('layout.ImportantLink')

		</aside><!-- /.blog-sidebar -->

		<!-- Newsfeeds -->


		<div class="col-md-8 blog-main">

			@include('question.question_form')

			@foreach($questions as $question)
			@include('question.single_question')
			@endforeach
			

		</div><!-- /.blog-main -->

	</div><!-- /.row -->
</main><!-- /.container -->

@endsection
