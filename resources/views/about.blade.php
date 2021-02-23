

<!doctype html>
<html lang="zxx">

@include('layout.head')
<body>

<!-- Start Main Menu Area -->
@include('layout.header')
<!-- End Main Menu Area -->

<!-- Start Search Popup Area -->
<div id="search-area">
    <button type="button" class="close">×</button>
    <form>
        <input type="search" value="" placeholder="Search Kewword(s)">
        <button type="submit" class="btn btn-primary">Search</button>
    </form>
</div>
<!-- End Search Popup Area -->

<!-- Start Page Title Area -->
<div class="page-title">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <h3>About Us</h3>
            </div>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start About Area -->
<section class="about-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="about-text">
                    <h3>Welcome To <span>EduField</span></h3>

                    <h5>Lorem ipsum dolor sit amet soluta saepe odit error, maxime praesentium sunt udiandae!</h5>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Quos dolo rem consequ untur, natus laudantium commodi earum aliquid in ullam.Lorem ipsum.</p>

                    <p>Lorem ipsum dolor sit amet soluta saepe odit error, maxime praesentium sunt udiandae!</p>

                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum sunt ut dolorem laboriosam culpa excepturi sed distinctio eius! Ut magnam numquam libero quia vero blanditiis fugit corporis quisquam, debitis quidem laudantium deleniti.</p>
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="about-slider">
                    <div class="item">
                        <img src="{{asset('assets/img/about-img1.jpg')}}" alt="about">
                    </div>

                    <div class="item">
                        <img src="{{asset('assets/img/about-img2.jpg')}}" alt="about">
                    </div>

                    <div class="item">
                        <img src="{{asset('assets/img/about-img3.jpg')}}" alt="about">
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-about">
                    <i class="icofont-paper-plane"></i>
                    <h3>Progressive Programs</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Quos dolo rem consequ untur, natus laudantium commodi earum aliquid in ullam.Lorem ipsum.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-about">
                    <i class="icofont-checked"></i>
                    <h3>Online Courses</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Quos dolo rem consequ untur, natus laudantium commodi earum aliquid in ullam.Lorem ipsum.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                <div class="single-about">
                    <i class="icofont-airplane-alt"></i>
                    <h3>International Students</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Quos dolo rem consequ untur, natus laudantium commodi earum aliquid in ullam.Lorem ipsum.</p>
                </div>
            </div>


        </div>
    </div>
</section>
<!-- End About Area -->

<!-- Start Why Choose Us Area CSS -->
<section class="why-choose-us">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="image"></div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="why-choose ptb-100">
                    <div class="single-choose">
                        <div class="icon">
                            <i class="icofont-book-alt"></i>
                        </div>

                        <div class="content">
                            <h4>Our Vision</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        </div>
                    </div>

                    <div class="single-choose">
                        <div class="icon">
                            <i class="icofont-teacher"></i>
                        </div>

                        <div class="content">
                            <h4>Our Mission</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        </div>
                    </div>

                    <div class="single-choose mb-0">
                        <div class="icon">
                            <i class="icofont-support"></i>
                        </div>

                        <div class="content">
                            <h4>24/7 Online Support</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Why Choose Us Area CSS -->

<!-- Start Footer Area -->
@include('layout.footer')
<!-- End Footer Area -->

@include('layout.scripts')
</html>
