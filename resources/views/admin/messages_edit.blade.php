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
<link href="{{asset('assets')}}/admin/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css"
      rel="stylesheet">
<!-- JQVMap -->
<link href="{{asset('assets')}}/admin/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
<!-- bootstrap-daterangepicker -->
<link href="{{asset('assets')}}/admin/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

<div class="row">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Message Table </h2>

                <div class="x_content">

                    @include('home.message')
                    <form action="{{route('admin_message_update',['id'=>$data->id])}}" method="post"
                          class="form-horizontal form-label-left" enctype="multipart/form-data">
                        @csrf
                        <table id="datatable" class="table table-striped table-bordered"
                               style="width:100%">

                            <tr>
                                <th>İd</th>
                                <td>{{$data->id}}</td>
                            </tr>
                            <tr>
                                <th>Name</th>
                                <td>{{$data->name}}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{$data->email}}</td>
                            </tr>
                            <tr>
                                <th>Phone</th>
                                <td>{{$data->phone}}</td>
                            </tr>
                            <tr>
                                <th>Subject</th>
                                <td>{{$data->subject}}</td>
                            </tr>
                            <tr>
                                <th>Message</th>
                                <td>{{$data->message}}</td>
                            </tr>
                            <tr>
                                <th>Ip</th>
                                <td>{{$data->ip}}</td>
                            </tr>
                            <tr>
                                <th>Admin Note</th>
                                <td><textarea class="form-control" name="note" id="note" placeholder="{{$data->note}}"
                                              rows="5"></textarea></td>

                            </tr>
                            <tr>
                                <th></th>
                                <td>
                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <div class="col-md-9 col-sm-9  offset-md-3">

                                            <button type="submit" class="btn btn-success">Update Message</button>
                                        </div>
                                    </div>
                                </td>

                            </tr>
                        </table>
                    </form>
                </div>


            </div>
        </div>
    </div>
</div>



















