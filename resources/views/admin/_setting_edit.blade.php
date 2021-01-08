@extends('layouts.admin')

@section('title', 'Setting Edit')
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Setting Edit</h3>
                </div>


            </div>

            <div class="clearfix"></div>


            <form action="{{route('admin_setting_update')}}" method="post" class="form-horizontal form-label-left" enctype="multipart/form-data">
            <div class="row">
                    @csrf
                <div class="col-12 col-sm-12  ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2><i class="fa fa-bars"></i>  Edit<small>Tabs</small></h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>

                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">

                            <ul class="nav nav-tabs bar_tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#general1" role="tab" aria-controls="general" aria-selected="true">General</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="smtp-tab" data-toggle="tab" href="#smtp1" role="tab" aria-controls="smtp" aria-selected="false">Smtp</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="social-tab" data-toggle="tab" href="#social1" role="tab" aria-controls="social" aria-selected="false">Social Media</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact1" role="tab" aria-controls="contact" aria-selected="false">Contact Page</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="about-tab" data-toggle="tab" href="#about1" role="tab" aria-controls="about" aria-selected="false">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="refrences-tab" data-toggle="tab" href="#references1" role="tab" aria-controls="references" aria-selected="false">References</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">

                            <div class="tab-pane fade show active" id="general1" role="tabpanel" aria-labelledby="general-tab">

                                <input type="hidden" name="id" value="{{$data->id}}" class="form-control" >

                                <div class="form-group row ">
                                    <label class="control-label col-md-3 col-sm-3 ">Title</label>
                                    <div class="col-md-9 col-sm-9 ">
                                        <input type="text" name="title" value="{{$data->title}}" class="form-control" >
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label class="control-label col-md-3 col-sm-3 ">Keywords</label>
                                    <div class="col-md-9 col-sm-9 ">
                                        <input type="text" name="keywords" value="{{$data->keywords}}" class="form-control" >
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label class="control-label col-md-3 col-sm-3 ">Description</label>
                                    <div class="col-md-9 col-sm-9 ">
                                        <input type="text" name="description" value="{{$data->description}}" class="form-control" >
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label class="control-label col-md-3 col-sm-3 ">Company</label>
                                    <div class="col-md-9 col-sm-9 ">
                                        <input type="text" name="company" value="{{$data->company}}" class="form-control" >
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label class="control-label col-md-3 col-sm-3 ">Adress</label>
                                    <div class="col-md-9 col-sm-9 ">
                                        <input type="text" name="adress" value="{{$data->adress}}" class="form-control" >
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label class="control-label col-md-3 col-sm-3 ">Phone</label>
                                    <div class="col-md-9 col-sm-9 ">
                                        <input type="text" name="phone" value="{{$data->phone}}" class="form-control" >
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label class="control-label col-md-3 col-sm-3 ">Fax</label>
                                    <div class="col-md-9 col-sm-9 ">
                                        <input type="text" name="fax" value="{{$data->fax}}" class="form-control" >
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label class="control-label col-md-3 col-sm-3 ">Email</label>
                                    <div class="col-md-9 col-sm-9 ">
                                        <input type="email" name="email" value="{{$data->email}}" class="form-control" >
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
                            </div>

                                <div class="tab-pane fade" id="smtp1" role="tabpanel" aria-labelledby="smtp-tab">
                                    <div class="form-group row ">
                                        <label class="control-label col-md-3 col-sm-3 ">Smtpserver</label>
                                        <div class="col-md-9 col-sm-9 ">
                                            <input type="text" name="smtpserver" value="{{$data->smtpserver}}" class="form-control" >
                                        </div>
                                    </div>

                                    <div class="form-group row ">
                                        <label class="control-label col-md-3 col-sm-3 ">Smtpemail</label>
                                        <div class="col-md-9 col-sm-9 ">
                                            <input type="text" name="smtpemail" value="{{$data->smtpemail}}" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="form-group row ">
                                        <label class="control-label col-md-3 col-sm-3 ">Smtppassword</label>
                                        <div class="col-md-9 col-sm-9 ">
                                            <input type="password" name="smtppassword" value="{{$data->smtppassword}}" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="form-group row ">
                                        <label class="control-label col-md-3 col-sm-3 ">Smtpport</label>
                                        <div class="col-md-9 col-sm-9 ">
                                            <input type="number" name="smtpport" value="{{$data->smtpport}}" class="form-control" >
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="social1" role="tabpanel" aria-labelledby="social-tab">
                                    <div class="form-group row ">
                                        <label class="control-label col-md-3 col-sm-3 ">Facebook</label>
                                        <div class="col-md-9 col-sm-9 ">
                                            <input type="text" name="facebook" value="{{$data->facebook}}" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="form-group row ">
                                        <label class="control-label col-md-3 col-sm-3 ">Instagram</label>
                                        <div class="col-md-9 col-sm-9 ">
                                            <input type="text" name="instagram" value="{{$data->instagram}}" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="form-group row ">
                                        <label class="control-label col-md-3 col-sm-3 ">Twitter</label>
                                        <div class="col-md-9 col-sm-9 ">
                                            <input type="text" name="twitter" value="{{$data->twitter}}" class="form-control" >
                                        </div>
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="contact1" role="tabpanel" aria-labelledby="contact-tab">
                                    <div class="form-group row ">
                                        <label class="control-label col-md-3 col-sm-3 ">Contact</label>
                                        <div class="col-md-9 col-sm-9 ">
                                            <textarea   class="form-control" id="contact" name="contact" >{{ $data->contact }}</textarea>
                                            <script src="{{ asset('assets/ckeditor/ckeditor.js') }}"></script>
                                            <script src="{{ asset('assets/ckfinder/ckfinder.js') }}"></script>
                                            <script>
                                                CKEDITOR.replace( 'contact' );
                                            </script>

                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="about1" role="tabpanel" aria-labelledby="about-tab">

                                    <div class="form-group row ">
                                        <label class="control-label col-md-3 col-sm-3 ">About Us</label>
                                        <div class="col-md-9 col-sm-9 ">
                                            <textarea   class="form-control" id="about" name="about" >{{ $data->about }}</textarea>
                                            <script src="{{ asset('assets/ckeditor/ckeditor.js') }}"></script>
                                            <script src="{{ asset('assets/ckfinder/ckfinder.js') }}"></script> <!--image upload-->
                                            <script>
                                                CKEDITOR.replace( 'about' );
                                            </script>

                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="references1" role="tabpanel" aria-labelledby="refrences-tab">
                                    <div class="form-group row ">
                                        <label class="control-label col-md-3 col-sm-3 ">References</label>
                                        <div class="col-md-9 col-sm-9 ">
                                            <textarea   class="form-control" id="references" name="references" >{{ $data->references }}</textarea>
                                            <script src="{{ asset('assets/ckeditor/ckeditor.js') }}"></script>
                                            <script src="{{ asset('assets/ckfinder/ckfinder.js') }}"></script> <!--image upload-->
                                            <script>
                                                CKEDITOR.replace( 'references' );
                                            </script>

                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Edit Setting</button>
                            </div>
                        </div>

                    </div>
                </div>


            </div>
            </form>
        </div>
    </div>
    <!-- /page content -->

@endsection

