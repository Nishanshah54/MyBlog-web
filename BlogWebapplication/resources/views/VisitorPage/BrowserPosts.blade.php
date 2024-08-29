@extends('app')
@section('title-section','BrowserPosts')
   @section('main-contain')
        {{-- <!-- Main Content --> --}}
    <div class="container my-5">
        <div class="row">
            <!-- Post 1 -->
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Post Image">
                    <div class="card-body">
                        <h5 class="card-title">Post Title 1</h5>
                        <p class="card-text">This is a brief summary of the first blog post...</p>
                        <p class="text-muted">By Author 1 on August 25, 2024</p>
                        <a href="{{route('V_Post')}}" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>

            {{-- <!-- Post 2 --> --}}
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Post Image">
                    <div class="card-body">
                        <h5 class="card-title">Post Title 2</h5>
                        <p class="card-text">This is a brief summary of the second blog post...</p>
                        <p class="text-muted">By Author 2 on August 26, 2024</p>
                        <a href="{{route('V_Post')}}" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>

            <!-- Post 3 -->
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Post Image">
                    <div class="card-body">
                        <h5 class="card-title">Post Title 3</h5>
                        <p class="card-text">This is a brief summary of the third blog post...</p>
                        <p class="text-muted">By Author 3 on August 27, 2024</p>
                        <a href="{{route('V_Post')}}" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- main-contain --}}

   @endsection