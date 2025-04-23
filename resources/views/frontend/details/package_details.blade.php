@extends('frontend.master')

@section('frontend_title', $package->package_name)

@section('frontend_content')

<!-- Page Title -->
<section class="page-title" style="background-image:url(assets/images/background/page-title.jpg)">
    <div class="auto-container">
        <h2>Courses Details</h2>
        <ul class="bread-crumb clearfix">
            <li><a href="index.html">Home</a></li>
            <li>Courses Details</li>
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
                            <img src="assets/images/resource/course-11.jpg" alt="" />
                        </div>
                        <div class="course-detail_content">
                            <h3 class="course-detail_heading">Online Quran Memorization Course</h3>
                            <div class="course-detail_info d-flex justify-content-between align-items-center flex-wrap">
                                <!-- Author -->
                                <div class="course-detail_author">
                                    <div class="course-detail_author-image">
                                        <img src="assets/images/resource/author-7.png" alt="" />
                                    </div>
                                    Adul Nobi
                                    <span>Arabic Teacher</span>
                                </div>
                                <!-- List -->
                                <ul class="course-detail_list">
                                    <li><span>20</span>lessons</li>
                                    <li><span>10</span>weeks</li>
                                    <li><span>50</span>enroll</li>
                                </ul>
                                <div class="course-detail_price">$92.00 <span>Course Fee</span></div>
                            </div>
                            <h4 class="course-detail_subtitle">Overview</h4>
                            <p>This class is for students who can fluently read Qur’an. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum. Unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae</p>

                            <!-- Product Info Tabs -->
                            <div class="course-detail-info-tabs">
                                <!-- Product Tabs -->
                                <div class="course-detail-tabs tabs-box">
                                
                                    <!-- Tab Btns -->
                                    <ul class="tab-btns tab-buttons clearfix">
                                        <li data-tab="#prod-curriculum" class="tab-btn active-btn">Curriculum</li>
                                        <li data-tab="#prod-instructor" class="tab-btn">Instructor</li>
                                        <li data-tab="#prod-review" class="tab-btn">Review</li>
                                        <li data-tab="#prod-faq" class="tab-btn">Faq</li>
                                    </ul>
                                    
                                    <!-- Tabs Container -->
                                    <div class="tabs-content">
                                        
                                        <!-- Tab -->
                                        <div class="tab active-tab" id="prod-curriculum">
                                            <div class="content">
                                                <h4 class="course-detail_subtitle">Course Structure</h4>
                                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum. Unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae</p>

                                                <!-- Accordion Box -->
                                                <ul class="accordion-box">
                                                    
                                                    <!-- Block -->
                                                    <li class="accordion block">
                                                        <div class="acc-btn active"><div class="icon-outer"><span class="icon icon-plus flaticon-padlock"></span> <span class="icon icon-minus flaticon-check-mark"></span></div>Quran Literacy, level 1 <i class="preview">preview</i></div>
                                                        <div class="acc-content current">
                                                            <div class="content">
                                                                <div class="text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum. Unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae</div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                                
                                                    <!-- Block -->
                                                    <li class="accordion block">
                                                        <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus flaticon-padlock"></span> <span class="icon icon-minus flaticon-check-mark"></span></div>Basic Quran Memorization, level 2</div>
                                                        <div class="acc-content">
                                                            <div class="content">
                                                                <div class="text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum. Unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae</div>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <!-- Block -->
                                                    <li class="accordion block">
                                                        <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus flaticon-padlock"></span> <span class="icon icon-minus flaticon-check-mark"></span></div>Quran Tajweed, level 1</div>
                                                        <div class="acc-content">
                                                            <div class="content">
                                                                <div class="text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum. Unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae</div>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <!-- Block -->
                                                    <li class="accordion block">
                                                        <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus flaticon-padlock"></span> <span class="icon icon-minus flaticon-check-mark"></span></div>Intermediate Quran Level Course</div>
                                                        <div class="acc-content">
                                                            <div class="content">
                                                                <div class="text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum. Unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae</div>
                                                            </div>
                                                        </div>
                                                    </li>

                                                </ul>

                                                <h4 class="course-detail_subtitle">Intermediate Quran Level Course</h4>
                                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum. Unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae</p>

                                                <!-- Accordion Box -->
                                                <ul class="accordion-box">
                                                    
                                                    <!-- Block -->
                                                    <li class="accordion block">
                                                        <div class="acc-btn active"><div class="icon-outer"><span class="icon icon-plus flaticon-padlock"></span> <span class="icon icon-minus flaticon-check-mark"></span></div>Quran Memorization Lesson 1 <i class="preview">preview</i></div>
                                                        <div class="acc-content current">
                                                            <div class="content">
                                                                <div class="text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum. Unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae</div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                                
                                                    <!-- Block -->
                                                    <li class="accordion block">
                                                        <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus flaticon-padlock"></span> <span class="icon icon-minus flaticon-check-mark"></span></div>Quran Memorization Lesson 2</div>
                                                        <div class="acc-content">
                                                            <div class="content">
                                                                <div class="text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum. Unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae</div>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <!-- Block -->
                                                    <li class="accordion block">
                                                        <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus flaticon-padlock"></span> <span class="icon icon-minus flaticon-check-mark"></span></div>Quran Memorization Lesson 3</div>
                                                        <div class="acc-content">
                                                            <div class="content">
                                                                <div class="text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum. Unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae</div>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <!-- Block -->
                                                    <li class="accordion block">
                                                        <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus flaticon-padlock"></span> <span class="icon icon-minus flaticon-check-mark"></span></div>Quran Memorization Lesson 4</div>
                                                        <div class="acc-content">
                                                            <div class="content">
                                                                <div class="text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum. Unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae</div>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <!-- Block -->
                                                    <li class="accordion block">
                                                        <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus flaticon-padlock"></span> <span class="icon icon-minus flaticon-check-mark"></span></div>Quran Memorization Lesson 5 <span class="questions">questions</span> <i class="preview">preview</i></div>
                                                        <div class="acc-content">
                                                            <div class="content">
                                                                <div class="text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum. Unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae</div>
                                                            </div>
                                                        </div>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Tab -->
                                        <div class="tab" id="prod-instructor">
                                            <div class="content">
                                                
                                                <!-- Course Author Box -->
                                                <div class="course-author_box">
                                                    <div class="course-author_box-inner">
                                                        <div class="course-author_box-image">
                                                            <img src="assets/images/resource/author-14.png" alt="" />
                                                        </div>
                                                        <h5 class="course-author_box-heading">Rajab Saad <span>Arabic Teacher</span></h5>
                                                        <div class="course-author_box-text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum. Unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam</div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <!-- Tab -->
                                        <div class="tab" id="prod-review">
                                            <div class="content">
                                                
                                                <div class="course-review_box">
                                                    <h5>2 Review</h5>

                                                    <div class="author_outer">

                                                        <!-- Course Author Box -->
                                                        <div class="course-author">
                                                            <div class="course-author_inner">
                                                                <div class="course-author_image">
                                                                    <img src="assets/images/resource/author-15.png" alt="" />
                                                                </div>
                                                                <h5 class="course-author_heading">Ibrahim Kabir</h5>
                                                                <div class="course-author_text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum. Unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam. Alteration in some form, lipsum is simply free text by injected </div>
                                                            </div>
                                                        </div>

                                                        <!-- Course Author Box -->
                                                        <div class="course-author">
                                                            <div class="course-author_inner">
                                                                <div class="course-author_image">
                                                                    <img src="assets/images/resource/author-16.png" alt="" />
                                                                </div>
                                                                <h5 class="course-author_heading">Mahfuz Riad </h5>
                                                                <div class="course-author_text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum. Unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam. Alteration in some form, lipsum is simply free text by injected </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <!-- Course Comment Form -->
                                                    <div class="course-comment_form">
                                                        <h5>Add a Review</h5>
                                                        <form method="post" action="https://themazine.com/html/Alquran-2/alquran/contact.html">
                                                            <div class="row clearfix">

                                                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                                    <input type="text" name="username" placeholder="Your Name" required="">
                                                                </div>
                                                                
                                                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                                    <input type="text" name="email" placeholder="Email Address" required="">
                                                                </div>
                                                                
                                                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                                                    <textarea class="" name="message" placeholder="Type Your Message"></textarea>
                                                                </div>
                                                                
                                                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                                    <!-- Button Box -->
                                                                    <div class="button-box">
                                                                        <button type="submit" class="theme-btn btn-style-one">
                                                                            <span class="btn-wrap">
                                                                                <span class="text-one">Leave a Review</span>
                                                                                <span class="text-two">Leave a Review</span>
                                                                            </span>
                                                                        </button>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </form>
                                                    </div>
                                                    <!-- End Comment Form -->



                                                </div>

                                            </div>
                                        </div>

                                        <!-- Tab -->
                                        <div class="tab" id="prod-faq">
                                            <div class="content">
                                                
                                                <!-- Accordion Box -->
                                                <ul class="accordion-box_two style-two">
                                                    
                                                    <!-- Block -->
                                                    <li class="accordion block">
                                                        <div class="acc-btn active"><div class="icon-outer"><span class="icon"><img src="assets/images/icons/faq-arrow.png" alt="" /></span></div>Can I choose the sessions timings on my own convenience?</div>
                                                        <div class="acc-content current">
                                                            <div class="content">
                                                                <div class="text">Yes, you can. Once you are enrolled in the course, the Support team will email you to arrange the timing of the sessions with you. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum. Unde omnis iste natus error sit voluptatem  </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                                
                                                    <!-- Block -->
                                                    <li class="accordion block">
                                                        <div class="acc-btn"><div class="icon-outer"><span class="icon"><img src="assets/images/icons/faq-arrow.png" alt="" /></span></div>Why online Islamic classes have charges?</div>
                                                        <div class="acc-content">
                                                            <div class="content">
                                                                <div class="text">Yes, you can. Once you are enrolled in the course, the Support team will email you to arrange the timing of the sessions with you. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum. Unde omnis iste natus error sit voluptatem  </div>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <!-- Block -->
                                                    <li class="accordion block">
                                                        <div class="acc-btn"><div class="icon-outer"><span class="icon"><img src="assets/images/icons/faq-arrow.png" alt="" /></span></div>Where are the Quran Tutors from & are they qualified?</div>
                                                        <div class="acc-content">
                                                            <div class="content">
                                                                <div class="text">Yes, you can. Once you are enrolled in the course, the Support team will email you to arrange the timing of the sessions with you. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum. Unde omnis iste natus error sit voluptatem  </div>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <!-- Block -->
                                                    <li class="accordion block">
                                                        <div class="acc-btn"><div class="icon-outer"><span class="icon"><img src="assets/images/icons/faq-arrow.png" alt="" /></span></div>What if a teacher is absent and misses my class?</div>
                                                        <div class="acc-content">
                                                            <div class="content">
                                                                <div class="text">Yes, you can. Once you are enrolled in the course, the Support team will email you to arrange the timing of the sessions with you. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum. Unde omnis iste natus error sit voluptatem  </div>
                                                            </div>
                                                        </div>
                                                    </li>

                                                </ul>

                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>

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
                                <h4>Course Features</h4>
                            </div>
                            <ul class="course-list">
                                <li>Course Fee <span>$92.00</span></li>
                                <li>Lessons <span>12</span></li>
                                <li>Duration<span>12 hours</span></li>
                                <li>Students<span>50</span></li>
                                <li>Category<span>Islam</span></li>
                                <li>Level<span>Advanced</span></li>
                            </ul>
                            <a class="theme-btn course-appy_btn" href="#">Apply Now</a>
                        </div>
                    </div>

                    <!-- Helpline Widget -->
                    <div class="sidebar-widget helpline-widget">
                        <div class="widget-content">
                            <div class="image">
                                <img src="assets/images/icons/helpline-widget.png" alt="" />
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
