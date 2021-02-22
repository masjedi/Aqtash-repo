

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
                <h3>All Courses</h3>
            </div>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

           {{--Course  Search--}}
            <div class=container style="margin-top: 150px;">
                <div class=home-content>
                    <form>
                        <input class=form-control placeholder="Search courses...">
                        <button type=submit class="btn btn-primary">Search</button>
                    </form>
                </div>
            </div>
<!-- Start Courses Area -->
<section class="courses-area ptb-100">
    <div class="container">
        <div class="row">
            @foreach($courses as $course)
                <div class="col-lg-4 col-md-6" >
                    <div class=single-courses-item >
                        <div class=courses-img>
                            <img src="{{asset('/images/course')}}/{{$course->course_photo}}"  style="height: 230px;"  alt=course> </div>
                        <div class=courses-content>
                            <h3><a href="{{url('/course_detail', $course->id)}}">{{$course->course_title}}</a></h3>
                        </div>
                        <div class=courses-content-bottom>
                            <h4><i class=icofont-ui-user style="color: #e60c3d;"></i> 120 Students</h4>
                            <h4 class=price>{{$course->course_price}}</h4>
                        </div>
                    </div>
                </div>
            @endforeach
            <br>
            <br>
            <div class="col-lg-12 col-md-12">
                <div class="pagination-area">
                    <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-center">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <i class="icofont-stylish-left"></i>
                                </a>
                            </li>

                            <li class="page-item active"><a class="page-link" href="#">1</a></li>

                            <li class="page-item"><a class="page-link" href="#">2</a></li>

                            <li class="page-item"><a class="page-link" href="#">3</a></li>

                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <i class="icofont-stylish-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Courses Area -->

<!-- Start Footer Area -->
@include('layout.footer')
<!-- End Footer Area -->

<!-- Back to top -->
@include('layout.scripts')
</body>
</html>
