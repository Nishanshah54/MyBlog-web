@extends('app')
@section('title-section','AddComments')
   @section('main-contain')
   <div class="container my-5">
    <!-- Comment Form -->
    <div class="row mb-4">
        <div class="col-md-12">
            <h2 class="mb-4">Leave a Comment</h2>
            <form>
                <div class="form-group">
                    <label for="commentAuthor">Your Name</label>
                    <input type="text" class="form-control" id="commentAuthor" placeholder="Enter your name">
                </div>
                <div class="form-group">
                    <label for="commentContent">Your Comment</label>
                    <textarea class="form-control" id="commentContent" rows="4" placeholder="Enter your comment here..."></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit Comment</button>
            </form>
        </div>
    </div>

    <!-- Existing Comments -->
    <div class="row">
        <div class="col-md-12">
            <h2 class="mb-4">Comments</h2>

            <!-- Comment 1 -->
            <div class="media mb-4">
                <img src="https://via.placeholder.com/64" class="mr-3 rounded-circle" alt="User Avatar">
                <div class="media-body">
                    <h5 class="mt-0">Commenter Name 1</h5>
                    This is the content of the first comment. It could include thoughts, feedback, or questions related to the blog post.
                    <p class="text-muted small">Posted on August 29, 2024</p>
                </div>
            </div>

            <!-- Comment 2 -->
            <div class="media mb-4">
                <img src="https://via.placeholder.com/64" class="mr-3 rounded-circle" alt="User Avatar">
                <div class="media-body">
                    <h5 class="mt-0">Commenter Name 2</h5>
                    Another comment from a different user, contributing to the discussion on the post.
                    <p class="text-muted small">Posted on August 30, 2024</p>
                </div>
            </div>

            <!-- Comment 3 -->
            <div class="media mb-4">
                <img src="https://via.placeholder.com/64" class="mr-3 rounded-circle" alt="User Avatar">
                <div class="media-body">
                    <h5 class="mt-0">Commenter Name 3</h5>
                    A third comment providing additional insights or asking questions about the post.
                    <p class="text-muted small">Posted on August 31, 2024</p>
                </div>
            </div>
        </div>
    </div>
</div>

   @endsection