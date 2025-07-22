<!DOCTYPE html>
<html lang="en">


<!-- auth-login.html  21 Nov 2019 03:49:32 GMT -->

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Agent Login</title>
    {{-- App CSS --}}
    <link rel="stylesheet" href="{{ asset('/backend/assets/css/app.min.css') }}">
    {{-- Bootstrap Social CSS --}}
    <link rel="stylesheet" href="{{ asset('/backend/assets/bundles/bootstrap-social/bootstrap-social.css') }}">
    {{-- Style CSS --}}
    <link rel="stylesheet" href="{{ asset('/backend/assets/css/style.css') }}">
    {{-- Components CSS --}}
    <link rel="stylesheet" href="{{ asset('/backend/assets/css/components.css') }}">
    {{-- Custom CSS --}}
    <link rel="stylesheet" href="{{ asset('/backend/assets/css/custom.css') }}">
    {{-- Favicon --}}
    <link rel='shortcut icon' type='image/x-icon' href='{{ asset('uploads/favicon.png') }}' />
</head>

<body>
    <div class="loader"></div>

    <div id="app">

        <section class="section custom_agent_login">

            <div class="container">

                <div class="row">

                    @php
                        $site_setting = siteSetting();
                    @endphp

                    <div class="col-12 custom_login_logo">
                        <img src="{{ asset($site_setting->footer_logo) }}" alt="" style="width: 30%;">
                    </div>

                    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">

                        <div class="card card-primary">

                            <div class="card-header">
                                <h4>Agent Login</h4>
                            </div>

                            <div class="card-body">

                                <form method="POST" action="{{ route('agent.login') }}" class="needs-validation" novalidate="">

                                    @include('widgets.errors')

                                    @csrf

                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
                                        <div class="invalid-feedback">
                                            Please fill in your email
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="d-block">
                                            <label for="password" class="control-label">Password</label>
                                        </div>
                                        <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                                        <div class="invalid-feedback">
                                            please fill in your password
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                            Login
                                        </button>
                                    </div>

                                </form>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>

    </div>

    {{-- App JS --}}
    <script src="{{ asset('/backend/assets/js/app.min.js') }}"></script>
    {{-- Script JS --}}
    <script src="{{ asset('/backend/assets/js/scripts.js') }}"></script>
    {{-- Custom JS --}}
    <script src="{{ asset('/backend/assets/js/custom.js') }}"></script>
</body>

</html>
