
@extends('layout.master')

@section('content')


<div class="container">


  <section class="jumbotron text-center">
    <div class="container">
      <h1 class="jumbotron-heading">Singup to Canvas</h1>
      <!-- <p class="lead text-muted">Share knoledge</p> -->
    </div>
    <hr>
    <div class="container text-left">
    <form method="POST" action="/register">
      {{csrf_field()}}
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" >
        <small id="nameHelp" class="form-text text-muted">Enter your fullname.</small>
      </div>

      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" required>
        <small id="emailHelp" class="form-text text-muted">Enter your email here.</small>
      </div>

      <div class="form-group">
        <label for="password">New Password</label>
        <input type="password" class="form-control" id="password" name="password" required>
        <small id="emailHelp" class="form-text text-muted">Minimum 8 charecters.</small>
      </div>

      <div class="form-group">
        <label for="password_confirmation">Password Confirmation</label>
        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
      </div>

      <div class="form-group">
        @include('layout.errors')
      </div>
      <div class="container text-center">
          <button type="submit" class="btn btn-primary">Register</button>
      </div>

      </div>
    </form>
  </section>

</div>



@endsection
