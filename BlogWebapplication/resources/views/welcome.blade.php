 @extends('app')
 @section('title-section','index')
    @section('main-contain')
    <div class="container my-5">
        <!-- Featured Posts -->
        <div class="row mb-4">
            <div class="col-md-12">
                <h2 class="mb-4">Featured Posts</h2>
            </div>
    
            <!-- Featured Post 1 -->
            <div class="col-md-6 mb-4">
                <div class="card shadow-sm">
                    <img src="https://via.placeholder.com/600x300" class="card-img-top" alt="Featured Post Image">
                    <div class="card-body">
                        <h5 class="card-title">Featured Post Title 1</h5>
                        <p class="card-text">This is a summary of the featured post. It highlights key points and encourages the reader to click and read more.</p>
                        <a href="{{route('V_Post')}}" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
    
            <!-- Featured Post 2 -->
            <div class="col-md-6 mb-4">
                <div class="card shadow-sm">
                    <img src="https://via.placeholder.com/600x300" class="card-img-top" alt="Featured Post Image">
                    <div class="card-body">
                        <h5 class="card-title">Featured Post Title 2</h5>
                        <p class="card-text">This is a summary of another featured post, offering insights and drawing the reader's attention to the content.</p>
                        <a href="{{route('V_Post')}}" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    
        <!-- Recent Posts -->
        <div class="row mb-4">
            <div class="col-md-12">
                <h2 class="mb-4">Recent Posts</h2>
            </div>
    
            <!-- Recent Post 1 -->
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <img src="https://via.placeholder.com/400x200" class="card-img-top" alt="Recent Post Image">
                    <div class="card-body">
                        <h5 class="card-title">Recent Post Title 1</h5>
                        <p class="card-text">A brief overview of the recent post. Gives readers a quick summary and entices them to explore more.</p>
                        <a href="{{route('V_Post')}}" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
    
            <!-- Recent Post 2 -->
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <img src="https://via.placeholder.com/400x200" class="card-img-top" alt="Recent Post Image">
                    <div class="card-body">
                        <h5 class="card-title">Recent Post Title 2</h5>
                        <p class="card-text">Another summary of a recent post, designed to capture interest and encourage clicks.</p>
                        <a href="{{route('V_Post')}}" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
    
            <!-- Recent Post 3 -->
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <img src="https://via.placeholder.com/400x200" class="card-img-top" alt="Recent Post Image">
                    <div class="card-body">
                        <h5 class="card-title">Recent Post Title 3</h5>
                        <p class="card-text">A third recent post summary to engage users and provide fresh content on the homepage.</p>
                        <a href="{{route('V_Post')}}" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    
        <!-- Categories Section -->
        <div class="row mb-4">
            <div class="col-md-12">
                <h2 class="mb-4">Categories</h2>
            </div>
    
            <!-- Category 1 -->
            <div class="col-md-3 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body text-center">
                        <h5 class="card-title">Category 1</h5>
                        <a href="{{route('V_Post')}}" class="btn btn-outline-primary btn-sm">View Posts</a>
                    </div>
                </div>
            </div>
    
            <!-- Category 2 -->
            <div class="col-md-3 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body text-center">
                        <h5 class="card-title">Category 2</h5>
                        <a href="{{route('V_Post')}}" class="btn btn-outline-primary btn-sm">View Posts</a>
                    </div>
                </div>
            </div>
    
            <!-- Category 3 -->
            <div class="col-md-3 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body text-center">
                        <h5 class="card-title">Category 3</h5>
                        <a href="{{route('V_Post')}}" class="btn btn-outline-primary btn-sm">View Posts</a>
                    </div>
                </div>
            </div>
    
            <!-- Category 4 -->
            <div class="col-md-3 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body text-center">
                        <h5 class="card-title">Category 4</h5>
                        <a href="{{route('V_Post')}}" class="btn btn-outline-primary btn-sm">View Posts</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    
    @endsection