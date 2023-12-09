@extends('master.news')

@section('title',"Signup Page")

@section("navbar")
@parent
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-8">
            <h1>This is Register form</h1>
            <form action="{{ route('news-signup') }}" method="post" >
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Yourname</label>
                    <input id="name" type="text" name="name" class="form-control"  placeholder="your name">
                    @error("name")
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                  </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input id="email" type="text" name="email" class="form-control"  placeholder="your email">
                    @error("email")
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                  </div>

                  <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input id="password" type="password" name="password" class="form-control"  placeholder="your password">
                    @error("password")
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                  </div>  
                <button type="submit" class="btn btn-dark">Register</button>
            </form>
        </div>
       
    </div>
    <p class="text-dark mt-50">You have an account?</p>
        <a class="btn btn-success w-200" href="{{ route('news-login') }}">To Login</a>

</div>
@endsection
