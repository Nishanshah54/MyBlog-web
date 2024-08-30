@extends('app')
@section('titile','manageComments')
 @section('main-contain')
 <div id="manageComments" class="mb-5">
    <h2 class="mb-4">Manage Comments</h2>
    <table class="table table-bordered table-hover">
        <thead class="thead-light">
            <tr>
                <th>Comment ID</th>
                <th>Author</th>
                <th>Content</th>
                <th>Post Title</th>
                <th>Date Posted</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- Example Comment 1 -->
            <tr>
                <td>1</td>
                <td>John Doe</td>
                <td>This is an example comment.</td>
                <td>How to Learn Laravel</td>
                <td>August 29, 2024</td>
                <td>
                    <a href="#" class="btn btn-sm btn-secondary">Edit</a>
                    <a href="#" class="btn btn-sm btn-danger">Delete</a>
                </td>
            </tr>
            <!-- More comments can be listed here -->
        </tbody>
    </table>
</div>
     
 @endsection