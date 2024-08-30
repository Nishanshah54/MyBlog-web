@extends('app')
@section('titile','managePost')

 @section('main-contain')
 {{-- managePost section --}}
 <div id="managePosts" class="mb-5">
    <h2 class="mb-4">Manage Posts</h2>
    <table class="table table-bordered table-hover">
        <thead class="thead-light">
            <tr>
                <th>Post ID</th>
                <th>Title</th>
                <th>Author</th>
                <th>Date Published</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- Example Post 1 -->
            <tr>
                <td>201</td>
                <td>Top 10 Laravel Tips</td>
                <td>Admin</td>
                <td>August 20, 2024</td>
                <td>
                    <a href="#" class="btn btn-sm btn-secondary">Edit</a>
                    <a href="#" class="btn btn-sm btn-danger">Delete</a>
                </td>
            </tr>
            <!-- More posts can be listed here -->
        </tbody>
    </table>
</div>
     
 @endsection