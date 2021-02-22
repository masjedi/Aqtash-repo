
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
                            <div class="page-title"> </div>
                        </div>
                        <ol class="breadcrumb page-breadcrumb pull-right">
                            <li><i class="fa fa-home"></i>&nbsp;
                                <a class="parent-item" href="{{url('/alsa/dashboard')}}">Home</a>&nbsp;
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li><a class="parent-item" href="#">Course Tables</a>&nbsp;<i
                                    class="fa fa-angle-right"></i>
                            </li>
                            <li class="active">Course Tables</li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-topline-aqua">
                            <div class="card-head">
                                <header>COURSE TABLE</header>
                                <div class="tools">
                                    <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                    <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                                    <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                </div>
                            </div>
                            <div class="card-body ">
                                <div class="table-scrollable">
                                    <table id="example1" class="display full-width table-hover" >
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Email</th>
                                            <th>Detail</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($teachers as $teacher)
                                            <tr>
                                                <td style="width: 20px; background-color: #fbfcfd;">{{$teacher->id}}</td>
                                                <td>{{$teacher->teacher_email}}</td>
                                                <td>{!! $teacher->teacher_detail !!}</td>
                                                <td>
                                                    <button class="btn btn-success btn-xs" style="display: inline !important;"  >
                                                        <a href="{{url('/alsa/teacher')}}"  style="color: white;"><i class="fa fa-backward"></i> </a>
                                                    </button>

                                                </td>
                                            </tr>
                                        </tbody>
                                        @endforeach
                                    </table>
                                </div>
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
<!-- end js include path -->
</body>
</html>
