
<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
@include('admin.layout.head')
<!-- END HEAD -->

<body
    class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white dark-sidebar-color logo-dark">
<div class="page-wrapper">
    <!-- start header -->
@include('admin.layout.header')
<!-- end header -->
    <!-- start page container -->
    <div class="page-container">
        <!-- start sidebar menu -->
    @include('admin.layout.sidebar')
    <!-- end sidebar menu -->
        <!-- start page content -->
        <div class="page-content-wrapper">
            <div class="page-content">
                <div class="page-bar">
                    <div class="page-title-breadcrumb">
                        <div class=" pull-left">
                            <div class="page-title"></div>
                        </div>
                        <ol class="breadcrumb page-breadcrumb pull-right">
                            <li><i class="fa fa-home"></i>&nbsp;
                                <a class="parent-item" href="{{url('alsa/dashboard')}}">Home</a>
                                &nbsp;<i class="fa fa-angle-right"></i>
                            </li>
                            <li><a class="parent-item" href="#">Category</a>&nbsp;<i class="fa fa-angle-right"></i>
                            </li>
                            <li class="active" >Update Category</li>
                        </ol>
                    </div>
                </div>
                <div class="row" style="margin-left: 120px; margin-right: 120px;">

                    <div class="col-md-12 col-sm-6" >
                        <div class="card card-box">
                            <div class="card-head">
                                <header style="color:#133984  ;">Category Update Form</header>
                                <button id="panel-button"
                                        class="mdl-button mdl-js-button mdl-button--icon pull-right"
                                        data-upgraded=",MaterialButton">
                                    <i class="material-icons">more_vert</i>
                                </button>
                                <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                                    data-mdl-for="panel-button">
                                    <li class="mdl-menu__item"><i class="material-icons">assistant_photo</i>Action
                                    </li>
                                    <li class="mdl-menu__item"><i class="material-icons">print</i>Another action
                                    </li>
                                    <li class="mdl-menu__item"><i class="material-icons">favorite</i>Something else
                                        here</li>
                                </ul>
                            </div>
                            <div class="card-body " id="bar-parent">
                                <form method="post" action="{{route('category.update', $category->id)}}" enctype="multipart/form-data">
                                    <input type="hidden"  name="_method" value="PUT" >
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label for="simpleFormEmail"> Name</label>
                                        <input  value="{{$category->category_name}}" name="category_name" type="text" class="form-control" id="simpleFormEmail" placeholder="Category Name">
                                    </div>
                                    <button style="width: 90px; height: 40px; margin-left: 330px; " type="submit" class="btn btn-success">Update</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page content -->
    </div>
    <!-- end page container -->
    <!-- start footer -->
@include('admin.layout.footer')
<!-- end footer -->
</div>
<!-- start js include path -->
@include('admin.layout.scripts')
</body>
</html>
