@extends('app')
    @section('title-section', ' | Admin page')
        @section('main-contain')

            <div class="container my-5">
    <!-- Page Header -->
    <div class="row mb-4">
        <div class="col-md-12">
            <h1 class="display-4">Admin Dashboard</h1>
            <p class="lead">Manage comments, users, and posts effectively.</p>
        </div>
    </div>

    <!-- Admin Actions -->
    <div class="row mb-4">
        <!-- Manage Comments -->
        <div class="col-md-3 mb-4">
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <h5 class="card-title">Manage Comments</h5>
                    <p class="card-text">View, edit, or delete comments made by users.</p>
                    <a href="#manageComments" class="btn btn-primary">Go to Comments</a>
                </div>
            </div>
        </div>

        <!-- Manage Users -->
        <div class="col-md-3 mb-4">
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <h5 class="card-title">Manage Users</h5>
                    <p class="card-text">View user details, deactivate, or delete users.</p>
                    <a href="#manageUsers" class="btn btn-warning">Go to Users</a>
                </div>
            </div>
        </div>

        <!-- Manage Posts -->
        <div class="col-md-3 mb-4">
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <h5 class="card-title">Manage Posts</h5>
                    <p class="card-text">View, edit, or delete blog posts.</p>
                    <a href="#managePosts" class="btn btn-success">Go to Posts</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Manage Comments Section -->
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

    <!-- Manage Users Section -->
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

    <!-- Manage Posts Section -->
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
</div>

        @endsection