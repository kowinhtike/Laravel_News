@extends('master.news')

@section('title',"News Page")

@section("navbar")
@parent
@endsection

@section('content')
<div class="container">
    <div class="row">
      @if (session()->has("success"))
                <div class="alert alert-success">{{ session("success") }}</div>
            @endif
        @foreach ($news as $new)
        <div class="card" style="width: 18rem;">
            <img height="300px" src="{{ asset("storage"."/".$new->image_url) }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{ $new->title }}</h5>
              <a href="{{ route('news-show',["id" => $new->id]) }}" class="btn btn-primary">View Post</a>
            </div>
          </div>
        @endforeach
    </div>
</div>
@endsection