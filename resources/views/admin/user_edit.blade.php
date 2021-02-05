@extends('layouts.admin')

@section('title', 'User Edit')
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>User Edit</h3>
                </div>


            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12  ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>User Edit Form</h2>
                            @include('home.message')
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Settings 1</a>
                                        <a class="dropdown-item" href="#">Settings 2</a>
                                    </div>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>

                                <div class="x_content">
                                    <br>
                                    <form action="{{route('admin_user_update',['id'=>$data->id])}}" method="post" class="form-horizontal form-label-left" enctype="multipart/form-data">
                                          @csrf
                                        <div class="form-group row ">
                                            <label class="control-label col-md-3 col-sm-3 ">Name</label>
                                            <div class="col-md-9 col-sm-9 ">
                                                <input type="text" name="name" value="{{$data->name}}" class="form-control" >
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label class="control-label col-md-3 col-sm-3 ">Email</label>
                                            <div class="col-md-9 col-sm-9 ">
                                                <input type="text" name="email" value="{{$data->email}}" class="form-control" >
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label class="control-label col-md-3 col-sm-3 ">Phone</label>
                                            <div class="col-md-9 col-sm-9 ">
                                                <input type="text" name="phone" value="{{$data->phone}}" class="form-control" >
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label class="control-label col-md-3 col-sm-3 ">Address</label>
                                            <div class="col-md-9 col-sm-9 ">
                                                <input type="text" name="address" value="{{$data->adress}}" class="form-control" >
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label class="control-label col-md-3 col-sm-3 ">Image</label>
                                            <div class="col-md-9 col-sm-9 ">
                                                <input type="file" name="image"  class="form-control" >

                                                @if($data->profile_photo_path)
                                                    <img src="{{Storage::url($data->profile_photo_path)}}" height="100" alt="">

                                                @endif
                                            </div>
                                        </div>




                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-9 col-sm-9  offset-md-3">

                                                <button type="submit" class="btn btn-success">Edit User</button>
                                            </div>
                                        </div>

                                    </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->

@endsection

