@extends('app')
@section('title-section','Register user page')
@section('main-contain')
    <div class="container">
        <form action="{{ route('register_validation') }}" method="POST">
            @csrf
            <!-- Username -->
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" value="{{ old('username') }}" placeholder="Enter your username">
                @error('username')
                    <small class="text-danger"> <span>*{{ $message }}</span></small>
                @enderror
            </div>
        
            <!-- Email -->
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="Enter your email">
                @error('email')
                    <small class="text-danger"><span>*{{ $message }}</span></small>
                @enderror
            </div>
        
            <!-- Password -->
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Create a password">
                @error('password')
                    <small class="text-danger"><span>*{{ $message }}</span></small>
                @enderror
            </div>
        
            <!-- Confirm Password -->
            <div class="form-group">
                <label for="confirmPassword">Confirm Password</label>
                <input type="password" class="form-control" id="confirmPassword" name="password_confirmation" placeholder="Confirm your password">
            </div>
        
            <!-- Register Button -->
            <button type="submit" class="btn btn-primary btn-block">Register</button>
        </form>
        
    </div>
    
@endsection