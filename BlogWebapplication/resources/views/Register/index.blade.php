@extends('app')
@section('title-section','Register Account')
    @section('main-contain')
    <div class="container my-5">
        <!-- Page Header -->
        <div class="row mb-4">
            <div class="col-md-12 text-center">
                <h1 class="display-4">Create an Account</h1>
                <p class="lead">Join us today! Please fill in the information below to create your account.</p>
            </div>
        </div>
    
        <!-- Registration Form -->
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <form>
                            <!-- Username -->
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" placeholder="Enter your username">
                                <small class="form-text text-muted">Choose a unique username.</small>
                            </div>
    
                            <!-- Email -->
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter your email">
                                <small class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
    
                            <!-- Password -->
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" placeholder="Create a password">
                            </div>
    
                            <!-- Confirm Password -->
                            <div class="form-group">
                                <label for="confirmPassword">Confirm Password</label>
                                <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm your password">
                            </div>
    
                            <!-- Register Button -->
                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    
        <!-- Login Redirect -->
        <div class="row justify-content-center mt-4">
            <div class="col-md-6 text-center">
                <p>Already have an account? <a href="#login">Login here</a>.</p>
            </div>
        </div>
    </div>
    
        
    @endsection