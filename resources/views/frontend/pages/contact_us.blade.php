@extends('frontend.master')

@section('frontend_title', 'Contact Us')

@section('frontend_content')

    <!-- Page Title -->
    <section class="page-title" style="background-image:url({{ asset('frontend/assets/images/background/page-title.jpg') }})">
        <div class="auto-container">
            <h2>Contact</h2>
            <ul class="bread-crumb clearfix">
                <li><a href="index.html">Home</a></li>
                <li>Contact</li>
            </ul>
        </div>
    </section>
    <!-- End Page Title -->

    <!-- Contact Info -->
    <section class="contact-info">
        <div class="auto-container">
            <div class="inner-container">
                <div class="row clearfix">
                    <!-- Info Column -->
                    <div class="contact-info_column col-lg-4 col-md-6 col-sm-12">
                        <div class="contact-info_outer">
                            <div class="contact-info_icon fa-solid fa-location-dot fa-fw"></div>
                            <h4 class="contact-info_heading">Our Address</h4>
                            <div class="contact-info_text">{!! $site_setting->head_address !!}</div>
                        </div>
                    </div>

                    <!-- Info Column -->
                    <div class="contact-info_column col-lg-4 col-md-6 col-sm-12">
                        <div class="contact-info_outer">
                            <div class="contact-info_icon fa-solid fa-phone fa-fw"></div>
                            <h4 class="contact-info_heading">Our Phone</h4>
                            <div class="contact-info_text">{!! $site_setting->site_phone !!} <span>{!! $site_setting->site_phone_alter !!}</span></div>
                        </div>
                    </div>

                    <!-- Info Column -->
                    <div class="contact-info_column col-lg-4 col-md-6 col-sm-12">
                        <div class="contact-info_outer">
                            <div class="contact-info_icon fa-solid fa-envelope fa-fw"></div>
                            <h4 class="contact-info_heading">Email address</h4>
                            <div class="contact-info_text">{{ $site_setting->site_email }}</div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Info -->

    <!-- Contact Form Box -->
    <div class="contact-form_box">
        <div class="auto-container">
            <h4>Feel free to write Muslim Tour & Travels anytime</h4>

            <!-- Contact Form -->
            <div class="contact-form">
                <form id="contact-form" method="post" action="{{ route('admin.contact.store') }}">
                    @csrf

                    <div class="form-group">
                        <input type="text" name="name" placeholder="Full Name" required="">
                    </div>

                    <div class="form-group">
                        <input type="text" name="email" placeholder="Your Email" required="">
                    </div>

                    <div class="form-group">
                        <input type="text" name="phone" placeholder="Your Phone" required="">
                    </div>

                    <div class="form-group">
                        <input type="text" name="subject" placeholder="Your Subject" required="">
                    </div>

                    <div class="form-group">
                        <textarea class="" name="message" placeholder="Type your Message"></textarea>
                    </div>

                    <div class="form-group">
                        <!-- Button Box -->
                        <div class="button-box">
                            <button type="submit" class="theme-btn btn-style-four">
                                <span class="btn-wrap">
                                    <span class="text-one">Send Message</span>
                                    <span class="text-two">Send Message</span>
                                </span>
                            </button>
                        </div>
                    </div>

                </form>
            </div>
            <!-- End Comment Form -->

        </div>
    </div>
    <!-- End Contact Form Box -->

    <!-- Map One -->
    <section class="map-one">
        <div class="map-outer">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17871.431337596845!2d90.36314464546132!3d23.816785275965348!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c118428b4b93%3A0xbcaed8ab84c40f7a!2sBaisteki!5e0!3m2!1sen!2sbd!4v1753181079680!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
    <!-- End Map One -->

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            @if (session('success'))
                Swal.fire({
                    title: 'Success!',
                    text: 'Your message has been sent successfully!',
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
