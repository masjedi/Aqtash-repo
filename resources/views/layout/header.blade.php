<div class=preloader-area>
    <div class=loader>
        <div class=dots>
            <i class="dots-item dots-item-move-down"></i>
            <i class="dots-item dots-item-move-left"></i>
            <i class="dots-item dots-item-move-left"></i>
            <i class="dots-item dots-item-move-left"></i>
            <i class="dots-item dots-item-move-left"></i>
            <i class="dots-item dots-item-move-down"></i>
            <i class="dots-item dots-item-move-right"></i>
            <i class="dots-item dots-item-move-right"></i>
            <i class="dots-item dots-item-move-down"></i>
            <i class="dots-item dots-item-move-up"></i>
            <i class="dots-item dots-item-move-down"></i>
            <i class="dots-item dots-item-move-up"></i>
            <i class=dots-item></i>
            <i class="dots-item dots-item-move-down"></i>
            <i class="dots-item dots-item-move-up"></i>
            <i class="dots-item dots-item-move-down"></i>
            <i class="dots-item dots-item-move-up"></i>
            <i class="dots-item dots-item-move-left"></i>
            <i class="dots-item dots-item-move-left"></i>
            <i class="dots-item dots-item-move-up"></i>
            <i class="dots-item dots-item-move-right"></i>
            <i class="dots-item dots-item-move-right"></i>
            <i class="dots-item dots-item-move-right"></i>
            <i class="dots-item dots-item-move-right"></i>
            <i class="dots-item dots-item-move-up"></i>
        </div>
    </div>
</div>
<div class="main-header-area header-sticky" style="color: blue;">
    <div class=container>
        <div class="classy-nav-container breakpoint-off">
            <nav class="classy-navbar justify-content-between" id=EduStudyNav>
                <a class=nav-brand href={{url('/')}}>
                    <img src="{{asset('assets/img/logo.png')}}" alt=logo>
                </a>
                <div class=classy-navbar-toggler>
                    <span class=navbarToggler><span>
                        </span>
                        <span>
                        </span>
                        <span></span>
                    </span>
                </div>
                <div class=classy-menu>
                    <div class=classycloseIcon>
                        <div class=cross-wrap>
                            <span class=top></span>
                            <span class=bottom></span>
                        </div>
                    </div>
                    <div class=classynav style="padding-right: 10px;">
                        <ul>
                            <li style="padding-right: 10px;"><a href="{{url('/')}}" class=active>Home </a></li>
                            <li style="padding-right: 10px;"><a href="{{url('/subscribe')}}">Subscribe</a></li>
                            <li style="padding-right: 10px;" ><a href="{{url('/about')}}">About Us </a></li>
                            <li style="padding-right: 10px;"><a href="{{url('/courses')}}">Courses </a></li>
                            <li style="padding-right: 10px;"><a href="{{url('/teacher')}}">Teacher </a></li>
                            <li style="padding-right: 10px;"><a href="{{url('/blog')}}">Blog</a></li>
                            <li style="padding-right: 10px;"><a href="{{url('/contact')}}">Contact</a></li>
                            <!-- <li style="padding-right: 10px;"><a href="{{url('/login')}}">Login</a></li>
                            -->
                            <li style="padding-right: 10px;"><a href="#search" class=search-btn><i class=icofont-search-2></i></a></li>
                            <!-- <li><a href="#section-register">{{__('menu.contact_page')}}</a></li> -->
            <li >  <a id="pashto"  href="{{ LaravelLocalization::getLocalizedURL('ps') }}"  class="btn btn-primary" style="color: white; ">پښتو </a> </li>
            <li ><a  href="{{ LaravelLocalization::getLocalizedURL('en') }}" class="btn btn-primary" style="color: white;"> English</a> </li>
            <li >  <a id="dari"  href="{{ LaravelLocalization::getLocalizedURL('fa') }}"  class="btn btn-primary" style="color: white;">دری </a> </li>
            
            </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<div id=search-area>
    <button type=button class=close>×</button>
    <form>
        <input type=search value="" placeholder="Search Kewword(s)">
        <button type=submit class="btn btn-primary">Search</button>
    </form>
</div>
