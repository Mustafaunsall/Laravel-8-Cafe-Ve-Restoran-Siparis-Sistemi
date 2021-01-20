@extends('layouts.admin')

@section('title', 'FAQ Edit')
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>FAQ Edit</h3>
                </div>


            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12  ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>FAQ Edit Form</h2>
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
                                    <form action="{{route('admin_faq_update',['id'=>$data->id])}}" method="post" class="form-horizontal form-label-left" enctype="multipart/form-data">
                                          @csrf
                                        <div class="form-group row ">
                                            <label class="control-label col-md-3 col-sm-3 ">Position</label>
                                            <div class="col-md-9 col-sm-9 ">
                                                <input type="number" name="position" value="{{$data->position}}" class="form-control" >
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label class="control-label col-md-3 col-sm-3 ">Question</label>
                                            <div class="col-md-9 col-sm-9 ">
                                                <input type="text" name="question" value="{{$data->question}}" class="form-control" >
                                            </div>
                                        </div>



                                        <div class="form-group row ">
                                            <label class="control-label col-md-3 col-sm-3 ">Answer</label>
                                            <div class="col-md-9 col-sm-9 ">
                                                <textarea   class="form-control" id="summary-ckeditor" name="answer" >{{ $data->answer }}</textarea>
                                                <script src="{{ asset('assets/ckeditor/ckeditor.js') }}"></script>
                                                <script src="{{ asset('assets/ckfinder/ckfinder.js') }}"></script> <!--image upload-->
                                                <script>
                                                    CKEDITOR.replace( 'summary-ckeditor' );
                                                </script>

                                            </div>
                                        </div>



                                        <div class="form-group row">
                                            <label class="control-label col-md-3 col-sm-3 ">Status</label>
                                            <div class="col-md-9 col-sm-9 ">
                                                <select name="status"  class="form-control">
                                                    <option selected="selected">{{$data->status}}</option>

                                                    <option>False</option>
                                                    <option>True</option>
                                                </select>
                                            </div>
                                        </div>



                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-9 col-sm-9  offset-md-3">

                                                <button type="submit" class="btn btn-success">Edit FAQ</button>
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

