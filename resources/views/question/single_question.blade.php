
<div style="margin-top: 10px"  class="card">

  <div style="padding-bottom: 5px; 0px;padding: .50rem 0.rem;margin-bottom: 0;background-color: rgba(0,0,0,0);border-bottom: 0px solid rgba(0,0,0,0)" class="card-header">

    <button style="padding: 0.1rem 0.3rem;float:left;border-color:rgba(255,255,255,.0)" class="navbar-toggler">

      <a href="#" class="ratio img-responsive img-circle" style=" height: 20px; width:20px;background-image: url({{$question->user->image}});"></a>

    </button>

    <span style="margin-bottom: 4px;color: #999;font-size: 13px;"> <a style="color: #999;" href="#"> {{$question->user->name}}</a> asked this - {{$question->created_at->diffForHumans()}} <br> 134 views</span>

  </div>

  <div style="padding-top: 0px;" class="card-body">

    <h5 class="card-title"><a href="#">{{$question->title}}</a></h5>
    <p class="card-text">{{$question->descrtiption}}</p>

    <div style="text-align: center;margin-bottom:20px">

      <a style="float:left" href="#" class="btn btn-outline-info btn-sm">Reply</a>

      @foreach($question->tags as $tag)
      <a style="height:20px;font-size:9px" href="#" class="btn btn-primary btn-sm">{{$tag->name}}</a>
      @endforeach

      <div style="float:right">

        <a  href="#" class="btn btn-outline-danger btn-sm">Dislike</a>
        <span>{{$question->fames->where('dislike','1')->count()}}</span>
        <a style="margin-left: 10px"  href="#" class="btn btn-outline-success btn-sm">Like</a>
        <span>{{$question->fames->where('like','1')->count()}}</span>

      </div>

    </div>

  </div>
</div>
