
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
                <h3>All Teacher</h3>
            </div>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start Teacher Area -->
<section class="teacher-area ptb-100">
    <div class="container">
        <div class="row">
            @foreach($teachers as  $teacher)
            <div class="col-lg-4 col-md-6">
                <div class="teacher-box">
                    <div class="pic">
                        <img src="{{asset('images/teacher')}}/{{$teacher->teacher_image}}" alt="teacher">
                        <a href="#" class="view-profile">View Profile</a>
                    </div>

                    <div class="teacher-content">
                        <h3 class="title"><a href="#">{{$teacher->teacher_name}}</a></h3>
                        <span class="post">Teacher</span>

                        <ul>
                            <li><a href="#"><i class="icofont-facebook"></i></a></li>
                            <li><a href="#"><i class="icofont-twitter"></i></a></li>
                            <li><a href="#"><i class="icofont-linkedin"></i></a></li>
                            <li><a href="#"><i class="icofont-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- End Teacher Area -->

<!-- Start Footer Area -->
@include('layout.footer')
<!-- End Footer Area -->

@include('layout.scripts')
</body>

<!-- Mirrored from envytheme.com/templates/edufield/edufield/teacher-style-two.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Aug 2020 05:45:28 GMT -->
</html>
