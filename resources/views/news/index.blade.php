@extends('master.news')

@section('title',"News Page")

@section("navbar")
@parent
@endsection

@section('content')
<div class="container">
    <div class="row">
      @if (session()->has("login-success"))
                <div class="alert alert-success">{{ session("login-success") }}</div>
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