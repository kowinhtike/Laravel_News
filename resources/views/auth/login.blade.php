@extends('master.news')

@section('title',"Login Page")

@section("navbar")
@parent
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-8">
            @if(session()->has('login-error')){
                <p class="alert alert-danger">{{ session('login-error') }}</p>
            }
            @endif
            <h1>This is login form</h1>
            <form action="{{ route('news-signin') }}" method="post" >
                @csrf
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
                <button type="submit" class="btn btn-dark">Login</button>
            </form>
        </div>
    </div>
</div>
@endsection
