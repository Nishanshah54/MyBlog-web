@extends('app')
    @section('title-section', 'user Profile')
        @section('main-contain')

        <div class="container my-5">
            <!-- Page Header -->
            <div class="row mb-4">
                <div class="col-md-12 text-center">
                    <h1 class="display-4">Your Account</h1>
                    <p class="lead">Manage your profile, view your activities, and update your account settings.</p>
                </div>
            </div>
        
            <!-- User Information -->
            <div class="row mb-4">
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <div class="card-body text-center">
                            <img src="https://via.placeholder.com/150" class="rounded-circle mb-3" alt="User Avatar">
                            <h5 class="card-title">[Username]</h5>
                            <p class="card-text">[user@example.com]</p>
                            <a href="#editProfile" class="btn btn-primary">Edit Profile</a>
                        </div>
                    </div>
                </div>
        
                <!-- Account Actions -->
                <div class="col-md-8">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Account Actions</h5>
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <a href="#changePassword" class="btn btn-link">Change Password</a>
                                </li>
                                <li class="list-group-item">
                                    <a href="#notifications" class="btn btn-link">Manage Notifications</a>
                                </li>
                                <li class="list-group-item">
                                    <a href="#privacySettings" class="btn btn-link">Privacy Settings</a>
                                </li>
                                <li class="list-group-item">
                                    <a href="#logout" class="btn btn-danger">Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        
            <!-- Recent Activities -->
            <div class="row mt-5">
                <div class="col-md-12">
                    <h2 class="mb-4">Recent Activities</h2>
                    <!-- Activity Item 1 -->
                    <div class="media mb-4">
                        <img src="https://via.placeholder.com/64" class="mr-3 rounded-circle" alt="Activity Icon">
                        <div class="media-body">
                            <h5 class="mt-0">Commented on "Understanding Laravel Blade"</h5>
                            <p class="text-muted small">Posted on August 29, 2024</p>
                        </div>
                    </div>
                    <!-- Activity Item 2 -->
                    <div class="media mb-4">
                        <img src="https://via.placeholder.com/64" class="mr-3 rounded-circle" alt="Activity Icon">
                        <div class="media-body">
                            <h5 class="mt-0">Liked "Laravel Best Practices"</h5>
                            <p class="text-muted small">Liked on August 28, 2024</p>
                        </div>
                    </div>
                    <!-- Activity Item 3 -->
                    <div class="media mb-4">
                        <img src="https://via.placeholder.com/64" class="mr-3 rounded-circle" alt="Activity Icon">
                        <div class="media-body">
                            <h5 class="mt-0">Updated profile picture</h5>
                            <p class="text-muted small">Updated on August 27, 2024</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        @endsection