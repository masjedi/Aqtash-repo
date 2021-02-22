
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
                            <li><a class="parent-item" href="#">Video Tables</a>&nbsp;<i
                                    class="fa fa-angle-right"></i>
                            </li>
                            <li class="active">Video Tables</li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-topline-aqua">
                            <div class="card-head">
                                <header>VIDEO TABLE</header>
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
                                            <th>Name</th>
                                            <th>URL</th>
                                            <th>Course</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($videos as $video)
                                            <tr>
                                                <td style="width: 20px; background-color: #fbfcfd;">{{$video->id}}</td>
                                                <td>{{$video->video_name}}</td>
                                                <td>{{$video->video_url}}</td>
                                                <td>{{$video->course_id}}</td>
                                                <td style="text-align: center;">
                                                    <button class="btn btn-primary btn-xs">
                                                        <a href="{{route('video.edit', $video->id)}}" ><i class="fa fa-pencil" style="color: white;"></i></a>
                                                    </button>
                                                    <form action="{{route('video.destroy', $video->id)}}" method="post">
                                                        <input type="hidden", name="_method", value="DELETE" >
                                                        {{csrf_field()}}
                                                        <button style="margin-left: 98px; margin-top: -50px; width: 30px;" class="btn btn-danger btn-xs" style="display: inline !important;">
                                                            <i class="fa fa-trash-o "></i>
                                                        </button>
                                                    </form>
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
