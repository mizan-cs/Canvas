<div class="navbar navbar-dark bg-dark box-shadow">
  <div class="container d-flex justify-content-between">
    <a href="/" class="navbar-brand d-flex align-items-center">
      <strong>Canvas</strong>
    </a>

    <div style="float:right" class="">
      @if(Auth::check())

      <ul style="margin-left: 5px" class="navbar-nav">
        <li  class="nav-item active">
        <button style="float:right;border-color:rgba(255,255,255,.0)" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
          <a href="#" class="ratio img-responsive img-circle" style="background-image: url(https://qph.ec.quoracdn.net/main-thumb-140889586-200-vmjxkevwtpcubzpvxrkhmygtkaahyouh.jpeg);"></a>
        </button>
        <a href="/" class="navbar-brand d-flex align-items-center">
          <strong>{{Auth::user()->name}}</strong>
        </a>
      </li>
    </ul>
    @else
    <ul style="margin-left: auto; margin-right: 5px" class="navbar-nav">
      <li  class="nav-item active">
        <a style="display: inline;" class="nav-link" href="register"> <strong>Registration</strong></a>
        <a style="display: inline;" class="nav-link" href="#"> <strong>|</strong></a>
        <a style="display: inline;" class="nav-link" href="login"> <strong>Login</strong></a>
      </li>
    </ul>
    @endif
  </div>
</div>
</div>
