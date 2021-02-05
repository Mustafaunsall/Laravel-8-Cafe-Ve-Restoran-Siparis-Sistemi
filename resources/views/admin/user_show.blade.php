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
<title>{{$data->name}}</title>
<div class="row">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>User Detail Table </h2>

                <div class="x_content">

                    @include('home.message')

                    <table id="datatable" class="table table-striped table-bordered"
                           style="width:100%">

                        <tr>
                            <th rowspan="8" align="center">
                                @if($data->profile_photo_path)
                                    <img src="{{Storage::url($data->profile_photo_path)}}" height="500" alt="">

                                @endif
                            </th>
                            <th>Id</th>
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
                            <th>Address</th>
                            <td>{{$data->adress}}</td>
                        </tr>
                        <tr>
                            <th>Date</th>
                            <td>{{$data->created_at}}</td>
                        </tr>

                        <tr>
                            <th>Roles</th>
                            <td>
                                <table>
                                    @foreach($data->roles as $row)
                                        <tr>
                                           <td>{{$row->name}}</td>
                                            <td>
                                                <a href="{{route('admin_user_role_delete',['userid'=>$data->id,'roleid'=>$row->id])}} "
                                                   onclick="return confirm('delete are you sure')">
                                                    <img style="height: 20px; width: 20px"
                                                         src="{{ asset('assets/admin/images') }}/sil.png">
                                                </a>
                                            </td>
                                        </tr>

                                    @endforeach

                                </table>
                            </td>
                        </tr>
                        <form action="{{route('admin_user_role_add',['id'=>$data->id])}}" method="post"
                              class="form-horizontal form-label-left" enctype="multipart/form-data">
                            @csrf
                            <tr>
                                <th>Add Role</th>
                                <td>

                                    <select name="roleid">
                                        @foreach($datalist as $rs )

                                                     <option value="{{$rs->id}}">{{$rs->name}}</option>
                                        @endforeach
                                    </select>

                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <div class="col-md-9 col-sm-9  offset-md-3">

                                            <button type="submit" class="btn btn-success">Add Roles</button>
                                        </div>
                                    </div>


                                </td>

                            </tr>

                        </form>
                    </table>

                </div>


            </div>
        </div>
    </div>
</div>



















