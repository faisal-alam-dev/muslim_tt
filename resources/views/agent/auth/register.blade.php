@extends('frontend.master')

@section('frontend_title', 'Become An Agent')

@section('frontend_content')

    <!-- Page Title -->
    <section class="page-title" style="background-image:url({{ asset('frontend/assets/images/background/page-title.jpg') }})">
        <div class="auto-container">
            <h2>Become An Agent</h2>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ route('frontend.index') }}">Home</a></li>
                <li>Agent Registration</li>
            </ul>
        </div>
    </section>
    <!-- End Page Title -->

    {{-- Become An Agent --}}
    <section class="register-one">

        <div class="auto-container">

            <h3>Welcome to Muslim Tour & Travels <br> Register NOW for an amazing traveling experience!</h3>

            <div class="row clearfix">

                <!-- Column -->
                <div class="register-one_column col-lg-12 col-md-12 col-sm-12">

                    <div class="register-one_column-outer">

                        <div class="styled-form">

                            <div class="mb-4">
                                @include('widgets.errors')
                            </div>

                            <form method="post" action="{{ route('agent.registration.store') }}">

                                @csrf

                                <div class="form-group">
                                    <input type="text" name="name" value="{{ old('name') }}" placeholder="Full Name" required>
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="row">

                                    <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                                        <div class="form-group">
                                            <input type="email" name="email" value="{{ old('email') }}" placeholder="Email Address" required>
                                            @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                                        <div class="form-group">
                                            <input type="text" name="phone" value="{{ old('phone') }}" placeholder="Phone Number">
                                            @error('phone')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                </div>

                                <div class="form-group">
                                    <input type="text" name="address" value="{{ old('address') }}" placeholder="Address">
                                    @error('address')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="row">

                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group mb-4">
                                        <input type="password" name="password" placeholder="Password" required>
                                        @error('password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group mb-4">
                                        <input type="password" name="confirm_password" placeholder="Confirm Password" required>
                                        @error('confirm_password')
                                            <span class="text-danger">Password and confirm password do not match</span>
                                        @enderror
                                    </div>

                                </div>

                                <div class="form-group">
                                    <div class="check-box">
                                        <input type="checkbox" name="terms" id="type-1" {{ old('terms') ? 'checked' : '' }} required>
                                        <label for="type-1">By joining, you agree to the Terms and Privacy Policy</label>
                                    </div>
                                    @error('terms')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group d-flex justify-content-between align-items-center" style="gap: 10px;">
                                    <button class="theme-btn btn-style-one" type="submit">
                                        <span class="btn-wrap">
                                            <span class="text-one">Register Now!</span>
                                            <span class="text-two">Register Now!</span>
                                        </span>
                                    </button>
                                    <div>
                                        Already have an account? <a href="{{ route('agent.login') }}">Login</a>
                                    </div>
                                </div>

                            </form>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            @if (session('success'))
                Swal.fire({
                    title: 'Success!',
                    text: 'Agent registered successfully. Please login.',
                    icon: 'success',
                    confirmButtonText: 'OK',
                    timer: 3000
                }).then((result) => {
                    if (result.isConfirmed || result.dismiss === Swal.DismissReason.timer) {
                        location.reload();
                    }
                });
            @endif
        });
    </script>

@endsection
