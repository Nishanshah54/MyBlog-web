@extends('app')
@section('titile','manageuser')
 @section('main-contain')
 <div id="manageUsers" class="mb-5">
    <h2 class="mb-4">Manage Users</h2>
    <table class="table table-bordered table-hover">
        <thead class="thead-light">
            <tr>
                <th>User ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Date Registered</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- Example User 1 -->
            <tr>
                <td>101</td>
                <td>JaneDoe</td>
                <td>janedoe@example.com</td>
                <td>July 12, 2024</td>
                <td>Active</td>
                <td>
                    <a href="#" class="btn btn-sm btn-secondary">Edit</a>
                    <a href="#" class="btn btn-sm btn-danger">Delete</a>
                </td>
            </tr>
            <!-- More users can be listed here -->
        </tbody>
    </table>
</div>


     
 @endsection