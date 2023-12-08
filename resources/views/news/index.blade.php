@extends('master.news')

@section('title',"News Page")

@section("navbar")
@parent
@endsection

@section('content')
<div class="container">
    <div class="row">
        @foreach ($news as $new)
        <div class="card" style="width: 18rem;">
            <img height="300px" src="storage/{{ $new->image_url }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{ $new->title }}</h5>
              <p class="card-text">{{ $new->body }}</p>
              <a href="#" class="btn btn-primary">View Post</a>
            </div>
          </div>
        @endforeach
    </div>
</div>
@endsection