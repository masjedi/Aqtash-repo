

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
                <h3>Contact Us</h3>
            </div>
        </div>
    </div>
</div>
<!-- End Page Title Area -->
<!-- Start Contact Area -->
<section class="contact-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12">
                <div class="contact-box">
                    <div class="icon">
                        <i class="icofont-phone"></i>
                    </div>

                    <div class="content">
                        <h4>Phone / Fax</h4>
                        <p><a href="#">(+021) 245522455</a></p>
                        <p><a href="#">(+000) 245522455</a></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-12">
                <div class="contact-box">
                    <div class="icon">
                        <i class="icofont-envelope"></i>
                    </div>

                    <div class="content">
                        <h4>E-mail</h4>
                        <p><a href="#">info@EduField.org </a></p>
                        <p><a href="#">support@EduField.org</a></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-12">
                <div class="contact-box">
                    <div class="icon">
                        <i class="icofont-google-map"></i>
                    </div>

                    <div class="content">
                        <h4>Location</h4>
                        <p>2750 Quadra Street , Park Area, <span>Victoria, Canada.</span></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-12">
                <div class="leave-your-message">
                    <h3>Leave Your Message</h3>
                    <p>If you have any questions about the services we provide simply use the form below. We try and respond to all queries and comments within 24 hours.</p>

                    <div class="stay-connected">
                        <h3>Stay Connected</h3>
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="icofont-facebook"></i>

                                    <span>Facebook</span>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="icofont-twitter"></i>

                                    <span>Twitter</span>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="icofont-pinterest"></i>

                                    <span>Pinterest</span>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="icofont-vimeo"></i>

                                    <span>Vimeo</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-8 col-md-12">
                <form id="contactForm">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label for="name">Name*</label>
                                <input type="text" class="form-control" name="name" id="name" required data-error="Please enter your name">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label for="email">Email*</label>
                                <input type="email" class="form-control" name="email" id="email" required data-error="Please enter your email">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label for="number">Phone Number*</label>
                                <input type="text" class="form-control" name="number" id="number" required data-error="Please enter your number">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label for="message">Message*</label>
                                <textarea name="message" class="form-control" id="message" cols="30" rows="4" required data-error="Write your message"></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <button type="submit" class="btn btn-primary">Send Message</button>
                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- End Contact Area -->

<!-- Start Footer Area -->
@include('layout.footer')
<!-- End Footer Area -->

<!-- jQuery Min JS -->
@include('layout.scripts')
</body>
</html>
