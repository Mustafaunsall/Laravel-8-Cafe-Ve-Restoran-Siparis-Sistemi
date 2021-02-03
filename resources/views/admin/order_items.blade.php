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
                <h2>Order Table </h2>

                <div class="x_content">

                    @include('home.message')

                    <table id="datatable" class="table table-striped table-bordered"
                           style="width:100%">
                        <form action="{{route('admin_order_update',['id'=>$data->id])}}" method="post"
                              class="form-horizontal form-label-left" enctype="multipart/form-data">
                            @csrf

                            <tr>
                                <th>İd</th>
                                <td>{{$data->id}}</td>
                            </tr>
                            <tr>
                                <th>User</th>
                                <td>{{$data->user->name}}</td>
                            </tr>
                            <tr>
                                <th>Name</th>
                                <td>{{$data->name}}</td>
                            </tr>
                            <tr>
                                <th>Table No</th>
                                <td>{{$data->table_no}}</td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td>{{$data->address}}</td>
                            </tr>
                            <tr>
                                <th>Phone</th>
                                <td>{{$data->phone}}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{$data->email}}</td>
                            </tr>
                            <tr>
                                <th>Total</th>
                                <td>{{$data->total}}</td>
                            </tr>
                            <tr>
                                <th>Ip</th>
                                <td>{{$data->IP}}</td>
                            </tr>
                            <tr>
                                <th>Created Date</th>
                                <td>{{$data->created_at}}</td>
                            </tr>
                            <tr>
                                <th>Updated Date</th>
                                <td>{{$data->updated_at}}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>
                                    <select name="status">
                                        <option selected>{{$data->status}}</option>
                                        <option>Accepted</option>
                                        <option>Canceled</option>
                                        <option>Preparing</option>
                                        <option>Completed</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>Admin Note:</th>
                                <td><textarea name="note" rows="3" cols="15"> {{$data->note}}</textarea></td>

                            </tr>
                            <tr>
                                <th></th>
                                <td>
                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <div class="col-md-9 col-sm-9  offset-md-3">

                                            <button type="submit" class="btn btn-success">Update Order</button>
                                        </div>
                                    </div>
                                </td>

                            </tr>
                        </form>
                    </table>
                    <table class="cart-table table table-bordered">
                        <thead>
                        <tr>

                            <th>İmage</th>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Status</th>
                            <th>Note</th>
                            <th></th>

                        </tr>
                        </thead>
                        <tbody>

                        @foreach($datalist as $rs)
                            <form action="{{route('admin_order_item_update',['id'=>$rs->id])}}" method="post"
                                  class="form-horizontal form-label-left" enctype="multipart/form-data">
                                @csrf
                                <tr>

                                    <td>@if($rs->product->image)
                                            <a href="{{route('product',['id'=>$rs->product->id])}}"><img
                                                    src="{{Storage::url($rs->product->image)}}" alt="" height="70"
                                                    width="90"></a>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{route('product',['id'=>$rs->product->id])}}">{{$rs->product->title}}</a>
                                    </td>
                                    <td><span class="amount">{{$rs->product->price}} <i
                                                class="fa fa-turkish-lira"></i></span>
                                    </td>
                                    <td>{{$rs->quantity}}</td>
                                    <td><span class="amount">{{$rs->amount}} <i
                                                class="fa fa-turkish-lira"></i></span>
                                    </td>

                                    <td>
                                        <select name="status">
                                            <option selected>{{$rs->status}}</option>
                                            <option>Accepted</option>
                                            <option>Canceled</option>
                                            <option>Preparing</option>
                                            <option>Completed</option>

                                        </select>
                                    </td>
                                    <td><textarea name="note" rows="3" cols="15"> {{$rs->note}}</textarea></td>
                                    <td><input type="submit" value="update"></td>


                                </tr>
                            </form>
                        @endforeach
                        </tbody>
                    </table>


                </div>


            </div>
        </div>
    </div>
</div>



















