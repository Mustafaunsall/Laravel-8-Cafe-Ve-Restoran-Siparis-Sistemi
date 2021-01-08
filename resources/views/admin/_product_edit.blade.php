@extends('layouts.admin')

@section('title', 'Product Edit')
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Product Edit</h3>
                </div>


            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12  ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Product Edit Form</h2>
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
                                    <form action="{{route('admin_product_update',['id'=>$data->id])}}" method="post" class="form-horizontal form-label-left" enctype="multipart/form-data">
                                          @csrf
                                        <div class="form-group row ">
                                            <label class="control-label col-md-3 col-sm-3 ">Title</label>
                                            <div class="col-md-9 col-sm-9 ">
                                                <input type="text" name="title" value="{{$data->title}}" class="form-control" >
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label class="control-label col-md-3 col-sm-3 ">Keyword</label>
                                            <div class="col-md-9 col-sm-9 ">
                                                <input type="text" name="keywords" value="{{$data->keywords}}" class="form-control" >
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label class="control-label col-md-3 col-sm-3 ">Image</label>
                                            <div class="col-md-9 col-sm-9 ">
                                                <input type="file" name="image" value="{{ $data->image }}" class="form-control" >

                                                @if($data->image)
                                                    <img src="{{Storage::url($data->image)}}" height="100" alt="">

                                                @endif
                                            </div>
                                        </div>


                                        <div class="form-group row ">
                                            <label class="control-label col-md-3 col-sm-3 ">Detail</label>
                                            <div class="col-md-9 col-sm-9 ">
                                                <textarea   class="form-control" id="summary-ckeditor" name="detail" >{{ $data->detail }}</textarea>
                                                <script src="{{ asset('assets/ckeditor/ckeditor.js') }}"></script>
                                                <script src="{{ asset('assets/ckfinder/ckfinder.js') }}"></script> <!--image upload-->
                                                <script>
                                                    CKEDITOR.replace( 'summary-ckeditor' );
                                                </script>

                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label class="control-label col-md-3 col-sm-3 ">Price</label>
                                            <div class="col-md-9 col-sm-9 ">
                                                <input type="number" name="price" value="{{$data->price}}" class="form-control" >
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label class="control-label col-md-3 col-sm-3 ">Description</label>
                                            <div class="col-md-9 col-sm-9 ">
                                                <input type="text" name="description" value="{{$data->description}}" class="form-control" >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3 col-sm-3 ">Category</label>
                                            <div class="col-md-9 col-sm-9 ">
                                                <select  name="category_id" class="form-control">
                                                    @foreach($datalist as $rs)

                                                        <option value="{{$rs->category->id}}" @if($rs->category->id == $data->category_id) selected="selected"  @endif >{{$rs->category->title}}</option>

                                                    @endforeach
                                                </select>
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

                                                <button type="submit" class="btn btn-success">Edit Product</button>
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

