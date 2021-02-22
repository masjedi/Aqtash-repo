<!doctype html><html lang=zxx>

@include('layout.head')
<body>

@include('layout.header')

<div class=main-home-area>
    <div class=d-table>
        <div class=d-table-cell>
            <div class=container>
                <div class=home-content>
                    <h1>Learn a new skill from HASK </h1>
                    <h1>With Us</h1>
                     <form>
                        <input class=form-control placeholder="Search courses...">
                        <button type=submit class="btn btn-primary">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<section class=boxes-area  >
    <div class=container>
        <div class=boxes-inner-content>
            <div class=row >
                <div class="col-lg-12 col-md-12 col-sm-12 ">
                    <div class=single-box style=" position:center; width: fit-content; margin-left: auto;  margin-right: auto;" >
                        <img src="{{asset('assets/img/technology.jpg')}}" alt=technology style=" width: 800px; height: 400px; ">
                        <div class=box-content>
                            <h3>Technologyfvf</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class=container>
        <div class=row>
            <div class="col-lg-3 col-md-3">
                <div class=fun-fact>
                    <h3><span class=count>2500</span>+</h3>
                    <h5>Students</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class=fun-fact>
                    <h3><span class=count>100</span>+</h3>
                    <h5>Teachers</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class=fun-fact>
                    <h3><span class=count>55</span>+</h3>
                    <h5>Winnings Awards</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class=fun-fact>
                    <h3><span class=count>1236</span>+</h3>
                    <h5>Certified Students</h5>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="popular-courses-area ptb-100">
    <div class=top-divider></div>
    <div class=container>
        <div class=section-title>
            <h3>Popular Courses</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco . </p>
        </div>
        <div class=row>
            @foreach($courses as  $course)
            <div class="col-lg-4 col-md-6">
                <div class=single-courses-item>
                    <div class=courses-img>
                        <img src="{{asset('images/course')}}/{{$course->course_photo}}" style="height: 230px;" alt=course>
                    </div>
                    <div class=courses-content>
                        <h3><a href="#">{{$course->course_title}}</a></h3>
                    </div>
                    <div class=courses-content-bottom>
                        <h4><i class=icofont-ui-user style="color: #e60c3d;"></i> 120 Students</h4>
                        <h4 class=price><span>$140</span> {{$course->course_price}}</h4>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="col-lg-12 col-md-12">
                <div class="view-all text-center">
                    <a href="#" class="btn btn-primary">View All Courses <i class=icofont-rounded-double-right></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="how-it-works red-bg ptb-100">
    <div class=top-divider></div>
    <div class=bottom-divider></div>
    <div class=container>
        <div class=section-title>
            <h3>How It Works<span>?</span></h3>
        </div>
        <div class=row>
            <div class="col-lg-4 col-md-6">
                <div class=work-process>
                    <i class=icofont-search-document></i>
                    <h3>Search Courses</h3>
                    <p>An nec placerat repudiare scripserit, temporibus complectitur at sea, vel ignota fierent rreloquentiam id.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class=work-process>
                    <i class=icofont-info></i>
                    <h3>View Course Details</h3>
                    <p>An nec placerat repudiare scripserit, temporibus complectitur at sea, vel ignota fierent rreloquentiam id.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                <div class=work-process>
                    <i class=icofont-like></i>
                    <h3>Apply, Enroll or Register</h3>
                    <p>An nec placerat repudiare scripserit, temporibus complectitur at sea, vel ignota fierent rreloquentiam id.</p>
                </div>
            </div>
            <div class="col-lg-12 col-md-12">
                <div class="view-all text-center">
                    <a href="#" class="btn btn-primary">Register Now <i class=icofont-rounded-double-right></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="testimonials-area ptb-100">
    <div class=container>
        <div class=section-title>
            <h3>Testimonials</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco . </p>
        </div>
    </div>
    <div class="row m-0">
        <div class=testimonials-slider>
            <div class="col-lg-12 col-md-12">
                <div class=single-feedback>
                    <img src="assets/img/client1.jpg" alt=client>
                    <div class=feedback-content>
                        <i class=icofont-quote-left></i>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <h3>Jason Stamtham</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12">
                <div class=single-feedback>
                    <img src="assets/img/client2.jpg" alt=client>
                    <div class=feedback-content>
                        <i class=icofont-quote-left></i>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <h3>Jason Stamtham</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12">
                <div class=single-feedback>
                    <img src="assets/img/client3.jpg" alt=client>
                    <div class=feedback-content>
                        <i class=icofont-quote-left></i>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <h3>Jason Stamtham</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="news-area ptb-100">
    <div class=container>
        <div class=section-title>
            <h3>Theinfinitex News</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
        </div>
        <div class=row>
            <div class=news-slider>
                <div class="col-lg-12 col-md-12">
                    <div class=single-blog>
                        <div class=blog-img>
                            <a href="#"><img src="assets/img/blog-one.jpg" alt=blog></a>
                        </div>
                        <div class=blog-content>
                            <h4><span><i class=icofont-ui-user></i> Posted by <a href="#">Admin</a></span>
                                <span class=date><i class=icofont-ui-calendar></i> 18 Jan, 2019</span></h4>
                            <h3><a href="#">Those Other College Expenses You Aren't Thinking About</a></h3>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class=single-blog>
                        <div class=blog-img>
                            <a href="#"><img src="assets/img/blog-two.jpg" alt=blog></a>
                        </div>
                        <div class=blog-content>
                            <h4><span><i class=icofont-ui-user></i> Posted by <a href="#">Admin</a></span>
                                <span class=date><i class=icofont-ui-calendar></i> 18 Jan, 2019</span></h4>
                            <h3><a href="#">Excepteur sint occaecat cupidatat non proident quaerat voluptatem.</a></h3>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class=single-blog>
                        <div class=blog-img>
                            <a href="#"><img src="assets/img/blog-three.jpg" alt=blog></a>
                        </div>
                        <div class=blog-content>
                            <h4><span><i class=icofont-ui-user></i> Posted by <a href="#">Admin</a></span>
                                <span class=date><i class=icofont-ui-calendar></i> 18 Jan, 2019</span></h4>
                            <h3><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h3>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('layout.footer')

@include('layout.scripts')
</body>
<!-- Mirrored from envytheme.com/templates/edufield/edufield/index-default.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Aug 2020 05:45:19 GMT -->
</html>
