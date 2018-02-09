@extends('layout.master')

@section('content')



<div class="container">




  <form method="POST" action="/submitPost">
    {{csrf_field()}}
    <div class="form-group">
      <label for="exampleInputTitle">Title</label>
      <input type="text" class="form-control" id="postTitle" name="title" required>
      <small id="titleHelp" class="form-text text-muted">Post title should be maximum 100 charechers.</small>
    </div>

    <div class="form-group">
      <label for="exampleInputBody">Body</label>
      <textarea type="text" rows="8" class="form-control" id="postBody" name="body" required> </textarea >
        <small id="bodyHelper" class="form-text text-muted">Maximum 500 words.</small>
      </div>

      <div class="input-group input-group-sm mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-sm">URL</span>
        </div>
        <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" id="image" name="image" required>
      </div>

      <div class="list-group">
        @foreach($errors->all() as $error)
        <a href="#" class="list-group-item list-group-item-action list-group-item-danger">{{$error}}</a>
        @endforeach
      </div>
      <button type="submit" class="btn btn-success">Submit</button>

    </form>

  </div>



  @endsection
