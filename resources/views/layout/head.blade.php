<head>
    <meta charset=utf-8>
    <meta name=viewport content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel=stylesheet href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel=stylesheet href="{{asset('assets/css/icofont.min.css')}}">
    <link rel=stylesheet href="{{asset('assets/css/classy-nav.min.css')}}">
    <link rel=stylesheet href="{{asset('assets/css/animate.css')}}">
    <link rel=stylesheet href="{{asset('assets/css/owl.carousel.css')}}">
    <link rel=stylesheet href="{{asset('assets/css/magnific-popup.css')}}">
    <link rel=stylesheet href="{{asset('assets/css/owl.theme.default.min.css')}}">
    <link rel=stylesheet href="{{asset('assets/css/style.css')}}">
    @if(\LaravelLocalization::getCurrentLocaleDirection() == 'rtl')
        <link href="{{asset('css/rtl.css')}}" rel="stylesheet" type="text/css" >
     {{--   <style>
            .caption-box h4 a {
                padding-right: 20px!important;
            }
            .inner-column{
                text-align: right!important;
                max-width: 100%!important;
            }
            .page-wrapper{
                direction: rtl;
                text-align: right;
            }
        </style>--}}
    @endif
    <link rel=stylesheet href="{{asset('assets/css/responsive.css')}}">
    <title>HASK</title>
    <link rel=icon type="image/png" href="{{asset('assets/img/favicon.png')}}">
</head>
