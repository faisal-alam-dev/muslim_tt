@extends('frontend.master')

@section('frontend_title', $package->package_name)

@section('frontend_content')

    <!-- Page Title -->
    <section class="page-title" style="background-image:url({{ asset('frontend/assets/images/background/page-title.jpg') }})">
        <div class="auto-container">
            <h2>{{ $package->package_name }}</h2>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ route('frontend.index') }}">Home</a></li>
                <li>Package Details</li>
            </ul>
        </div>
    </section>
    <!-- End Page Title -->

    <!-- Sidebar Page Container -->
    <div class="sidebar-page-container style-two">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Content Side -->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <div class="course-detail">
                        <div class="course-detail_inner">
                            <div class="course-detail_image">
                                <img src="{{ asset($package->package_image) }}" alt="{{ $package->package_name }}" />
                            </div>
                            <div class="course-detail_content">
                                <h3 class="course-detail_heading">{{ $package->package_name }}</h3>
                                <h4 class="course-detail_subtitle">Package Features</h4>
                                <div class="custom_package_contents">
                                    <table class="table table-bordered custom-package-table">
                                        <tbody>
                                            @if ($package->package_price_with_food)
                                                <tr>
                                                    <th>Price (with food):</th>
                                                    <td>৳{{ $package->package_price_with_food }}</td>
                                                </tr>
                                            @endif
                                            @if ($package->package_price_without_food)
                                                <tr>
                                                    <th>Price (without food):</th>
                                                    <td>৳{{ $package->package_price_without_food }}</td>
                                                </tr>
                                            @endif
                                            @if ($package->package_duration_start)
                                                <tr>
                                                    <th>Duration Start:</th>
                                                    <td>{{ $package->package_duration_start }}</td>
                                                </tr>
                                            @endif
                                            @if ($package->package_duration)
                                                <tr>
                                                    <th>Duration:</th>
                                                    <td>{{ $package->package_duration }} days</td>
                                                </tr>
                                            @endif
                                            @if ($package->package_hotel_makkah)
                                                <tr>
                                                    <th>Hotel Makkah:</th>
                                                    <td>{{ $package->package_hotel_makkah }}</td>
                                                </tr>
                                            @endif
                                            @if ($package->package_hotel_madinah)
                                                <tr>
                                                    <th>Hotel Madinah:</th>
                                                    <td>{{ $package->package_hotel_madinah }}</td>
                                                </tr>
                                            @endif
                                            @if ($package->package_flights_up)
                                                <tr>
                                                    <th>Flights Up:</th>
                                                    <td>{{ $package->package_flights_up }}</td>
                                                </tr>
                                            @endif
                                            @if ($package->package_flights_down)
                                                <tr>
                                                    <th>Flights Down:</th>
                                                    <td>{{ $package->package_flights_down }}</td>
                                                </tr>
                                            @endif
                                            @if ($package->package_land_transport)
                                                <tr>
                                                    <th>Land Transport:</th>
                                                    <td>{{ $package->package_land_transport }}</td>
                                                </tr>
                                            @endif
                                            @if ($package->package_food)
                                                <tr>
                                                    <th>Food:</th>
                                                    <td>{{ $package->package_food }}</td>
                                                </tr>
                                            @endif
                                            @if ($package->package_special_services)
                                                <tr>
                                                    <th>Special Services:</th>
                                                    <td>{{ $package->package_special_services }}</td>
                                                </tr>
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                                <h4 class="course-detail_subtitle">Overview</h4>
                                <div>{!! $package->package_long_description !!}</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Side -->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar">

                        <!-- Course Widget -->
                        <div class="sidebar-widget course-widget">
                            <div class="widget-content">
                                <!-- Sidebar Title -->
                                <div class="sidebar-title">
                                    <h4>Apply for Package</h4>
                                </div>
                                <form action="{{ route('frontend.package.confirmation') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="package_id" value="{{ $package->id }}">
                                    <div class="form-group">
                                        <label for="full_name">Full Name</label>
                                        <input type="text" id="full_name" name="full_name" class="form-control" placeholder="Enter your full name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input type="text" id="phone" name="phone" class="form-control" placeholder="Enter your phone number" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email address" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="message">Message or Comments</label>
                                        <textarea id="message" name="message" class="form-control" rows="4" placeholder="Enter your message or comments"></textarea>
                                    </div>
                                    <button type="submit" class="theme-btn course-appy_btn w-100 mt-4">Submit</button>
                                </form>
                            </div>
                        </div>

                        <!-- Helpline Widget -->
                        <div class="sidebar-widget helpline-widget">
                            <div class="widget-content">
                                <div class="image">
                                    <img src="{{ asset('frontend/assets/images/icons/helpline-widget.png') }}" alt="" />
                                </div>
                                <h4 class="helpline-title">If you have any further query then you can contact our helpline</h4>
                                <div class="helpline-widget_phone flaticon-phone-call"></div>
                                <div class="helpline-widget_number">Helpline: 0241-21131 <span>(10AM-5PM)</span></div>
                            </div>
                        </div>

                    </aside>
                </div>

            </div>
        </div>
    </div>

@endsection
