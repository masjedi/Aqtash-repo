

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
                <h3>All Blog</h3>
            </div>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start Blog Area -->
<section class="blog-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="single-blog-post">
                            <img src="{{asset('assets/img/blog-one.jpg')}}" alt="blog">

                            <div class="date">
                                <span>18 Jan, 2019</span>
                            </div>

                            <div class="blog-post-content">
                                <h3><a href="#">Online Tutorials</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipi scing elit nullam blandit bibn dit.</p>

                                <a href="#" class="read-more">
                                    <span class="left"><i class="icofont-rounded-double-right"></i></span>
                                    Read More
                                    <span class="right"><i class="icofont-rounded-double-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="single-blog-post">
                            <img src="{{asset('assets/img/blog-two.jpg')}}" alt="blog">

                            <div class="date">
                                <span>18 Jan, 2019</span>
                            </div>

                            <div class="blog-post-content">
                                <h3><a href="#">Web Design</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipi scing elit nullam blandit bibn dit.</p>

                                <a href="#" class="read-more">
                                    <span class="left"><i class="icofont-rounded-double-right"></i></span>
                                    Read More
                                    <span class="right"><i class="icofont-rounded-double-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="single-blog-post">
                            <img src="{{asset('assets/img/blog-three.jpg')}}" alt="blog">

                            <div class="date">
                                <span>18 Jan, 2019</span>
                            </div>

                            <div class="blog-post-content">
                                <h3><a href="#">PHP Tutorials</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipi scing elit nullam blandit bibn dit.</p>

                                <a href="#" class="read-more">
                                    <span class="left"><i class="icofont-rounded-double-right"></i></span>
                                    Read More
                                    <span class="right"><i class="icofont-rounded-double-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="single-blog-post">
                            <img src="{{asset('assets/img/blog-three.jpg')}}" alt="blog">

                            <div class="date">
                                <span>18 Jan, 2019</span>
                            </div>

                            <div class="blog-post-content">
                                <h3><a href="#">PHP Tutorials</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipi scing elit nullam blandit bibn dit.</p>

                                <a href="#" class="read-more">
                                    <span class="left"><i class="icofont-rounded-double-right"></i></span>
                                    Read More
                                    <span class="right"><i class="icofont-rounded-double-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
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

            <div class="col-lg-4 col-md-12">
                <div class="side-bar mb-0">
                    <div class="single-widget search-box">
                        <h3 class="title">Search</h3>
                        <form>
                            <input type="text" class="form-control" placeholder="Search...">
                            <button type="submit" class="btn btn-primary"><i class="icofont icofont-search"></i></button>
                        </form>
                    </div>

                    <div class="single-widget recent-post">
                        <h3 class="title">Recent Post</h3>

                        <div class="single-recent-post">
                            <div class="img">
                                <a href="#"><img src="{{asset('assets/img/blog-one.jpg')}}" alt="blog"></a>
                            </div>

                            <div class="content">
                                <h4><a href="#">Lorem Ipsum is simply dummy typesetting</a></h4>

                                <span>25 December 2018</span>
                            </div>
                        </div>

                        <div class="single-recent-post">
                            <div class="img">
                                <a href="#"><img src="{{asset('assets/img/blog-two.jpg')}}" alt="blog"></a>
                            </div>

                            <div class="content">
                                <h4><a href="#">Lorem Ipsum is simply dummy typesetting</a></h4>

                                <span>25 December 2018</span>
                            </div>
                        </div>

                        <div class="single-recent-post mb-0">
                            <div class="img">
                                <a href="#"><img src="{{asset('assets/img/blog-three.jpg')}}" alt="blog"></a>
                            </div>

                            <div class="content">
                                <h4><a href="#">Lorem Ipsum is simply dummy typesetting</a></h4>

                                <span>25 December 2018</span>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Blog Area -->

<!-- Start Footer Area -->
@include('layout.footer')
<!-- End Footer Area -->


<!-- jQuery Min JS -->
@include('layout.scripts')
</body>
</html>
