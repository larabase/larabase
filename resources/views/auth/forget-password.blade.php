@extends('auth')

@section('content')
    <div class="card smooth-shadow-md">
        <!-- Card body -->
        <div class="card-body p-5">
            <div class="mb-4">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('static/images/brand/logo/logo-2.svg') }}" class="mb-2  text-inverse" alt="Image">
                </a>
                <p class="mb-6">Don't worry, we'll send you an email to reset your password.
                </p>
            </div>
            <!-- Form -->
            <form>
                <!-- Email -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" class="form-control" name="email" placeholder="Enter Your Email"
                        required="">
                </div>
                <!-- Button -->
                <div class="mb-3 d-grid">
                    <button type="submit" class="btn btn-primary">
                        Reset Password
                    </button>
                </div>
                <span>Don't have an account? <a href="{{ url('login') }}">sign in</a></span>
            </form>
        </div>
    </div>
@endsection
