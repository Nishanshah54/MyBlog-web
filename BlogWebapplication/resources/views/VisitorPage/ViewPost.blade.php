@extends('app')
@section('title-section','ViewPost')
   @section('main-contain')
   <div class="container my-5">
    <div class="row">
        <div class="col-md-12">
            <h1 class="display-4">Post Title</h1>
            <p class="text-muted">By Author Name on August 25, 2024</p>
            <img src="https://via.placeholder.com/800x400" class="img-fluid mb-4" alt="Post Image">
            <p class="lead">This is the main content of the blog post. It could be a detailed article, story, or news piece that the author wants to share with readers.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Donec id elit non mi porta gravida at eget metus. Vestibulum id ligula porta felis euismod semper.</p>
            <p>Cras mattis consectetur purus sit amet fermentum. Maecenas faucibus mollis interdum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Sed posuere consectetur est at lobortis. Nullam quis risus eget urna mollis ornare vel eu leo.</p>
            <p>Vestibulum id ligula porta felis euismod semper. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
        </div>
    </div>

    <!-- Comments Section -->
    <div class="row mt-5">
        <div class="col-md-12">
            <h3>Comments</h3>
            <!-- Comment 1 -->
            <div class="media mb-4">
                <img src="https://via.placeholder.com/64" class="mr-3 rounded-circle" alt="User Avatar">
                <div class="media-body">
                    <h5 class="mt-0">Commenter Name</h5>
                    This is a comment on the blog post. It might be a reader's opinion, feedback, or question.
                </div>
            </div>

            <!-- Comment 2 -->
            <div class="media mb-4">
                <img src="https://via.placeholder.com/64" class="mr-3 rounded-circle" alt="User Avatar">
                <div class="media-body">
                    <h5 class="mt-0">Another Commenter</h5>
                    Another comment providing insights or starting a discussion related to the post content.
                </div>
            </div>

            <!-- Add a Comment -->
            <div class="card my-4">
                <h5 class="card-header">Leave a Comment</h5>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <textarea class="form-control" rows="3" placeholder="Enter your comment here..."></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

   @endsection