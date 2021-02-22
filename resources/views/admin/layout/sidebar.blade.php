<div class="sidebar-container">
    <div class="sidemenu-container navbar-collapse collapse fixed-menu">
        <div id="remove-scroll">
            <ul class="sidemenu page-header-fixed p-t-20" data-keep-expanded="false" data-auto-scroll="true"
                data-slide-speed="200">
                <li class="sidebar-toggler-wrapper hide">
                    <div class="sidebar-toggler">
                        <span></span>
                    </div>
                </li>
                <li class="sidebar-user-panel">
                    <div class="user-panel">
                        <div class="row">
                            <div class="sidebar-userpic">
                                <img src="{{asset('admin/assets/img/dp.jpg')}}"style= " height: 80px; width: 80px;" class="img-responsive" alt=""> </div>
                        </div>
                        <div class="profile-usertitle">
                            <div class="sidebar-userpic-name"> Admin </div>
                            <div class="profile-usertitle-job"> CEO </div>
                        </div>
                        <div class="sidebar-userpic-btn">
                            <a class="tooltips" href="user_profile.html" data-placement="top"
                               data-original-title="Profile">
                                <i class="material-icons">person_outline</i>
                            </a>
                            <a class="tooltips" href="email_inbox.html" data-placement="top"
                               data-original-title="Mail">
                                <i class="material-icons">mail_outline</i>
                            </a>
                            <a class="tooltips" href="chat.html" data-placement="top"
                               data-original-title="Chat">
                                <i class="material-icons">chat</i>
                            </a>
                            <a class="tooltips" href="login.html" data-placement="top"
                               data-original-title="Logout">
                                <i class="material-icons">input</i>
                            </a>
                        </div>
                    </div>
                </li>

                <li class="nav-item start active">
                    <a  href="index.html" class="nav-link nav-toggle">
                        <i class="material-icons">dashboard</i>
                        <span class="title">Dashboard</span>
                        <span class="selected"></span>
                        <span class="arrow open"></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link nav-toggle"> <i class="material-icons">dvr</i>
                        <span class="title">Category</span> <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a href="{{route('admin.category.create')}}" class="nav-link "> <span class="title">Add Category</span>
                            </a>
                        </li>,
                        <li class="nav-item">
                            <a href="{{route('admin.category.index')}}" class="nav-link "> <span class="title">View Category</span>
                            </a>
                        <li></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link nav-toggle"> <i class="material-icons">dvr</i>
                        <span class="title">Articles</span> <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a href="{{route('admin.art.create')}}" class="nav-link "> <span class="title">Add Article</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.art.index')}}" class="nav-link "> <span class="title">View Article</span>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link nav-toggle"> <i class="material-icons">dvr</i>
                        <span class="title">Character</span> <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a href="{{route('admin.char.create')}}" class="nav-link "> <span class="title">Add Character</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.char.index')}}" class="nav-link "> <span class="title">View Character</span>
                            </a>
                        <li></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link nav-toggle"> <i class="material-icons">desktop_mac</i>
                        <span class="title">Meeting</span> <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a href="{{route('admin.meet.create')}}" class="nav-link "> <span class="title">Add Meeting</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.meet.index')}}" class="nav-link "> <span class="title">View Meeting</span>
                            </a>
                        </li>



                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link nav-toggle"> <i class="material-icons">group</i>
                        <span class="title">Student</span> <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">

                        <li class="nav-item">
                            <a href="Student_detail.html" class="nav-link "> <span class="title">View Student</span>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="material-icons">subtitles</i>
                        <span class="title">Blog </span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a href="blog.html" class="nav-link ">
                                <span class="title">Add News</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="advance_form.html" class="nav-link ">
                                <span class="title">View News</span>
                            </a>
                        </li>

                    </ul>


            </ul>
        </div>
    </div>
</div>
