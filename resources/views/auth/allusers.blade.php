@extends('master.news')

@section('title',"All User Page")

@section("navbar")
@parent
@endsection

@section('content')

<div class="container">
    @foreach ($users as $user)
    @if (!($user->email == session('user')))
    <div class="row p-3 ">
        <div class="col-sm-1">
            <div style="width: 70px;height:70px">
                <img src="https://png.pngtree.com/png-clipart/20190516/original/pngtree-users-vector-icon-png-image_3725294.jpg" alt="Image description" class="img-thumbnail">
            </div>

        </div>
        <div class="col-sm-11 ">
            <a href="{{ route('news-profile',['email' => $user->email]) }}"><h1>{{ $user->name }}</h1></a>
        </div>
    </div>
    @endif
    @endforeach
</div>
@endsection
