@include('layouts.addphoto')

<div class="container">

<button type="button" class="btn btn-dark"><a href="http://127.0.0.1:8000/">На главную</a></button>

@if (is_array($photos) || is_object($photos))

@foreach($photos as $photo)
<div class="card bg-dark text-white">
  <img src="..." class="card-img" alt="...">
  <div class="card-img-overlay">
    <h5 class="card-title"><a href="{{Storage::disk('public')->url($photo->file)}}">{{$photo->title}}</a></h5>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <p class="card-text"><small class="text-muted">{{$photo->date}}</small></p>
  </div>
</div>
</div>
@endforeach
@endif


