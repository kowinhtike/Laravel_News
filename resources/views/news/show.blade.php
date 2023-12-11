@extends('master.news')

@section('title',"News Page")

@section("navbar")
@parent
@endsection

@section('content')

<div class=" container-fluid bg-secondary p-3 ">
  <div class="row">
      <div class="col-sm-4   ">
            
            <a href="{{ route('news-show',["id" => $new->id]) }}" > <img width="100%" src="{{ asset("storage"."/".$new->image_url) }}"> </a>    
        </div>
        <div class="col-sm-8 bg-white p-3 ">
            <h2>{{ $new->title }}</h2>
          <p>
            {{ $new->body }}
          </p>
        </div>
  </div>
  <div class="row p-2 bg-white">
    <div class="col-sm-10">

    </div>
    <div class="col-sm-1 text-left ">
      <a href="{{ route('news-edit',["id" => $new->id]) }}" class="btn btn-dark">Edit</a>
    </div>
    <div class="col-sm-1 text-center ">
      <a href="{{ route('news-destroy',["id" => $new->id]) }}" class="btn btn-danger">Delete</a>

    </div>
  </div>
</div>
@endsection

