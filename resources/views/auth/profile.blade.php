@extends('master.news')

@section('title',"All User Page")

@section("navbar")
@parent
@endsection

@section('content')

<div class="container-fluid  ">

    <div class="row p-3 ">
        <div class="col-sm-4">
        </div>
        <div class="col-sm-4 d-flex justify-content-center ">
            <div style="width: 180px;height:300px">
                <img src="https://png.pngtree.com/png-clipart/20190516/original/pngtree-users-vector-icon-png-image_3725294.jpg" alt="Image description" class="img-thumbnail">
                <h3 class="text-center mt-3 ">{{ $user->name }}</h3>
            </div>
        </div>
        <div class="col-sm-4">

        </div>
        
    </div>
    <div class="row">
        <div class="col-sm-4">

        </div>
        <div class="col-sm-2 text-center bg-primary text-white p-2 m-1 ">
            Add Friend
        </div>
        <div class="col-sm-2 text-center bg-secondary text-white p-2 m-1">
            Follow
        </div>
        <div class="col-sm-4">
            
        </div>
    </div>
    <div class="row p-5 ">
       <h1> All News :</h1>
    </div>
    <div class="row p-3">
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
