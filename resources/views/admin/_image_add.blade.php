<html>
<head>
    <title>Image Gallery</title>
    <!-- Bootstrap -->
    <link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link href="{{asset('assets')}}/admin/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('assets')}}/admin/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('assets')}}/admin/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{asset('assets')}}/admin/vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="{{asset('assets')}}/admin/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{asset('assets')}}/admin/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{asset('assets')}}/admin/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">


</head>
<body>


                <div class="col-md-12 col-sm-12  ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Product:{{$data->title}} </h2>

                            <div class="clearfix"></div>
                        </div>

                                <div class="x_content">
                                    <br>
                                    <form action="{{route('admin_image_store',['product_id'=>$data->id])}}" method="post" class="form-horizontal form-label-left" enctype="multipart/form-data">
                                          @csrf
                                        <div class="form-group row ">
                                            <label class="control-label col-md-3 col-sm-3 ">Title</label>
                                            <div class="col-md-9 col-sm-9 ">
                                                <input type="text" name="title" class="form-control" >
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label class="control-label col-md-3 col-sm-3 ">Image</label>
                                            <div class="col-md-9 col-sm-9 ">
                                                <input type="file" name="image" class="form-control" >
                                            </div>
                                        </div>


                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-9 col-sm-9  offset-md-3">

                                                <button type="submit" class="btn btn-success">Add Image</button>
                                            </div>
                                        </div>

                                    </form>
                                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th>İd</th>
                                            <th>Title</th>
                                            <th>Image</th>
                                            <th>Delete</th>
                                        </tr>
                                        </thead>


                                        <tbody>
                                        @foreach($images as $rs)

                                            <tr>
                                                <td>{{$rs->id}}</td>
                                                <td>{{$rs->title}}</td>
                                                <td>
                                                    @if($rs->image)
                                                        <img src="{{Storage::url($rs->image)}}" height="50px"  alt="">
                                                    @endif
                                                </td>
                                                <td><a href="{{route('admin_image_delete',['id'=>$rs->id,'product_id'=>$data->id])}}" onclick="return confirm('delete are you sure')"><img style="height: 20px; width: 20px" src="{{ asset('assets/admin/images') }}/sil.png"></a></td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>

                        </div>
                    </div>
                </div>






</body>

</html>




