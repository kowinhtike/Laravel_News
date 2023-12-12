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
  <div class="row">
    <div class="col-sm-9">

    </div>
    <div class="col-sm-3">
      @foreach ($comments as $comment)
        <div class="card m-2 ">
          <div class="card-header">
            {{ $comment->name }}
          </div>
          <div class="card-body">
            <h5 class="card-title">{{ $comment->text }}</h5>
  
          </div>
        </div>
      @endforeach
    </div>
  </div>
  <div class="row">
    <div class="col-sm-9">

    </div>
    <div class="col-sm-3 p-3 ">
      <form action="{{ route('news-comment',['id' => $new->id,'name' => session('user')]) }}" method="POST">
        @csrf
        <input class=" form-control " type="text" name="text">
        <button class="btn btn-dark " type="submit">Send</button>
      </form>
    </div>
  </div>
</div>
@endsection

