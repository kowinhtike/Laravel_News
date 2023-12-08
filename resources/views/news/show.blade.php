@extends('master.news')

@section('title',"News Page")

@section("navbar")
@parent
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="card" style="width: 18rem;">
            <img height="300px" src="{{ asset("storage"."/".$new->image_url) }}" class="card-img-top" alt="...">
              <h5 class="card-title">{{ $new->title }}</h5>
              <p class="card-text">{{ $new->body }}</p>
              <a href="{{ route('news-edit',["id" => $new->id]) }}" class="btn btn-dark">Edit Post</a><a href="{{ route('news-destroy',["id" => $new->id]) }}" class="btn btn-danger">Delete Post</a>
            </div>
          </div>
    </div>
</div>
@endsection