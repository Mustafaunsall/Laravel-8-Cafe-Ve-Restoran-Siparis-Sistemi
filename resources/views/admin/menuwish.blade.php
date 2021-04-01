@extends('layouts.admin')

@section('title', 'Admin Menuwish List')
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Menu Wishes</h3>
                </div>


            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12  ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Menu wish Table</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>

                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card-box table-responsive">

                                        <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                            <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>User</th>
                                                <th>Tableno</th>
                                                <th>Phone</th>
                                                <th>Email</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Detail</th>


                                            </tr>
                                            </thead>
                                            <tbody>
                                            @include('home.message')
                                            @foreach($datalist as $rs)
                                                <tr>
                                                    <td>
                                                        {{$rs->id}}
                                                    </td>
                                                    <td>
                                                        <a href="{{route('admin_user_show',['id'=>$rs->user_id])}}" onclick="return !window.open(this.href,'targetWindow','top=50 left=50 with=600,height=300')">
                                                            {{$rs->name}}</a>
                                                    </td>
                                                    <td>
                                                        {{$rs->table_no}}
                                                    </td>
                                                    <td>
                                                        {{$rs->phone}}
                                                    </td>
                                                    <td>
                                                        {{$rs->email}}
                                                    </td>


                                                    <td>
                                                        {{$rs->created_at}}
                                                    </td>
                                                    <td>
                                                        {{$rs->status}}
                                                    </td>
                                                    <td><a href="{{route('admin_menuwish_show',['id'=>$rs->id])}}" onclick="return !window.open(this.href,'targetWindow','top=50 left=100 with=1000,height=800')"><img style="height: 20px; width: 20px" src="{{ asset('assets/admin/images') }}/edit.png"></a> </td>

                                                </tr>
                                            @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->

@endsection

