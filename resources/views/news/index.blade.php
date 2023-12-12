@extends('master.news')

@section('title',"News Page")

@section("navbar")
@parent
@endsection

@section('content')
<div class=" container-fluid  p-3 ">
    <div class="row">
      @if (session()->has("login-success"))
                <div class="alert alert-success">{{ session("login-success") }}</div>
      @endif
      @foreach ($news as $new)
        <div class="col-sm-4 bg-light mt-3 p-2 pb-5 d-flex flex-column align-items-center  ">
              <div class="container-fluid">
                <h2 class=" p-3 ">{{ $new->title }}</h2>
              </div>
              <a href="{{ route('news-show',["id" => $new->id]) }}" > <img width="100%" src="{{ asset("storage"."/".$new->image_url) }}"> </a>    
          </div>
      @endforeach
    </div>
</div>
@endsection

@if (session()->has("update"))
                @push("scripts")
                <script>
                  Swal.fire({
                  title: "Successful!",
                  text: "You updated this post",
                  icon: "success"
                });
                </script>
                @endpush
            @endif

@if (session()->has("delete"))
                @push("scripts")
                <script>
                  Swal.fire({
                  title: "Successful!",
                  text: "You deleted this item!",
                  icon: "success"
                });
                </script>
                @endpush
            @endif