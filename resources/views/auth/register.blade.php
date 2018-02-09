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
      <form class="form-horizontal" method="POST" action="{{ route('register') }}">
          {{ csrf_field() }}

          <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
              <label for="name">Name</label>

              <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                  @if ($errors->has('name'))
                      <span class="help-block">
                          <strong>{{ $errors->first('name') }}</strong>
                      </span>
                  @endif
              <small id="nameHelp" class="form-text text-muted">Enter your fullname.</small>
          </div>

          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
              <label for="email">Email</label>
              <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                  @if ($errors->has('email'))
                      <span class="help-block">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                  @endif
                <small id="emailHelp" class="form-text text-muted">Enter your email here.</small>
          </div>

          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
              <label for="password">Password</label>
              <input id="password" type="password" class="form-control" name="password" required>
                  @if ($errors->has('password'))
                      <span class="help-block">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif
              <small id="emailHelp" class="form-text text-muted">Minimum 8 charecters.</small>
          </div>

          <div class="form-group">
              <label for="password-confirm">Confirm Password</label>
              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
          </div>

          <div class="container text-center">
              <button type="submit" class="btn btn-primary">Register</button>
          </div>
      </form>

    </div>
  </section>
</div>
@endsection
