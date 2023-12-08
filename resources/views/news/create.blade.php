@extends('master.news')

@section('title',"News Page")

@section("navbar")
@parent
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-8">
            <h1>This is create form</h1>
            <form action="{{ route("news-store") }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Title</label>
                    <input type="text" name="title" class="form-control"  placeholder="input title">
                    @error("title")
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                  </div>

                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Your Content</label>
                    <textarea class="form-control" name="body"  rows="3"></textarea>
                    @error("body")
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="image">Image</label>
                    <input type="file" name="image" id="image" placeholder="Image" class="form-control">
                    @error("image")
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit" class="btn btn-dark">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection

@if (session()->has("create"))
                @push("scripts")
                <script>
                  Swal.fire({
                  title: "Successful!",
                  text: "You created the new new",
                  icon: "success"
                });
                </script>
                @endpush
            @endif