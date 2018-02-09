@extends('layout.master')

@section('content')
<div class="container">
  <section class="jumbotron text-center">
    <div class="container">
      <h1 class="jumbotron-heading">Title</h1>
      <p class="lead text-muted">Time and date by <a href="#">Mark</a></p>
      <hr>
    </div>
  </section>
  <div style="--jumbotron-padding-y:3px" class="blog-post">
    <img class="card-img-top" style="height: 100%; width: 100%; display: block;" src="{{$post->image}}" data-holder-rendered="true">

    <p>This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported.</p>
    <hr>

    <p>Body of the post</p>

  </div>





</div>


@endsection
