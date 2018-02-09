<div class="list-group">
  @foreach($errors->all() as $error)
  <a href="#" class="list-group-item list-group-item-action list-group-item-danger">{{$error}}</a>
  @endforeach
</div>
