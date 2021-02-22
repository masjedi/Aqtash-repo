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
                            <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                                                   href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                            </li>
                            <li><a class="parent-item" href="#">Category Tables</a>&nbsp;<i
                                    class="fa fa-angle-right"></i>
                            </li>
                            <li class="active">Category Tables</li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card card-topline-aqua" >
                            <div class="card-head">
                                <header>CATEGORY TABLE</header>
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
                                            <th style="text-align: center;">ID</th>
                                            <th style="text-align: center;">Name</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($categories as $category)
                                        <tr>
                                            <td style="width: 20px; background-color: #fbfcfd;">{{$category->id}}</td>
                                            <td style="text-align: center;" >{{$category->category_name}}</td>
                                    <td style=" text-align: center;">
                                    <button style=" width: 30px;" class="btn btn-success btn-xs">
                                        <i style=" text-align: center;" class="fa fa-check"></i>
                                    </button>
                                    <button class="btn btn-primary btn-xs">
                                        <a href="{{route('category.edit', $category->id)}}" ><i class="fa fa-pencil" style="color: white;"></i></a>
                                    </button>

                                        <form action="{{route('category.destroy', $category->id)}}" method="post">
                                            <input type="hidden", name="_method", value="DELETE" >
                                            {{csrf_field()}}
                                            <button style="margin-left: 98px; margin-top: -50px; width: 30px;" class="btn btn-danger btn-xs">
                                                <i style=" text-align: center;" class="fa fa-trash-o "></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                        @endforeach
                                <hr>

                            </tbody>
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
