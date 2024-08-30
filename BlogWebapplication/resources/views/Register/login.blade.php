@extends('app')
    @section('title-section',' login')

    @section('main-contain')

    <div class="container my-5">
        <!-- Page Header -->
        <div class="row mb-4">
            <div class="col-md-12 text-center">
                <h1 class="display-4">Welcome Back!</h1>
                <p class="lead">Please log in to your account.</p>
            </div>
        </div>
    
        <!-- Login Form -->
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <form>
                            <!-- Email or Username -->
                            <div class="form-group">
                                <label for="loginEmail">Email or Username</label>
                                <input type="text" class="form-control" id="loginEmail" placeholder="Enter your email or username">
                            </div>
    
                            <!-- Password -->
                            <div class="form-group">
                                <label for="loginPassword">Password</label>
                                <input type="password" class="form-control" id="loginPassword" placeholder="Enter your password">
                            </div>
    
                            <!-- Remember Me -->
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="rememberMe">
                                <label class="form-check-label" for="rememberMe">Remember me</label>
                            </div>
    
                            <!-- Login Button -->
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    
        <!-- Additional Links -->
        <div class="row justify-content-center mt-4">
            <div class="col-md-6 text-center">
                <p><a href="#forgotPassword">Forgot your password?</a></p>
                <p>Don't have an account? <a href="#register">Sign up here</a>.</p>
            </div>
        </div>
    </div>
    
        
    @endsection