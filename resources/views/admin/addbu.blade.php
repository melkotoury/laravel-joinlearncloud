@extends('admin.layouts.main')
    
@section('title')
Admin | Add Bulding
@endsection
       
        
@section('content')

                   
                   <section class="content-header">
          <h1>
            Add Bulding
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Data tables</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-8">
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/addbu') }}" enctype='multipart/form-data'>
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('bu_name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Bulding Name</label>

                            <div class="col-md-6">
                                <input type="text"  class="form-control" name="bu_name" value="{{ old('bu_name') }}">

                                @if ($errors->has('bu_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('bu_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div><br>

                      

                     <div class="form-group{{ $errors->has('bu_rooms') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Rooms Number</label>

                            <div class="col-md-6">
                                <input type="number"  class="form-control" name="bu_rooms" value="{{ old('bu_rooms') }}">

                                @if ($errors->has('bu_rooms'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('bu_rooms') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div><br>

                      

                     <div class="form-group{{ $errors->has('bu_price') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Bulding price</label>

                            <div class="col-md-6">
                                <input type="number"  class="form-control" name="bu_price" value="{{ old('bu_price') }}">

                                @if ($errors->has('bu_price'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('bu_price') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div><br>

                      
                     <div class="form-group{{ $errors->has('bu_rent') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Bulding Type</label>

                            <div class="col-md-6">
                                <select class="form-control" name="bu_rent" value="{{ old('bu_rent') }}">
                                    <option value="0">Apartment</option>
                                    <option value="1">Villa</option>
                                    <option value="2">Chalet</option>
                                </select>
                                @if ($errors->has('bu_rent'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('bu_rent') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div><br>




                      

                     <div class="form-group{{ $errors->has('bu_type') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Operating Type</label>

                            <div class="col-md-6">
                                <select class="form-control" name="bu_type" value="{{ old('bu_type') }}">
                                    <option value="0">For Sell</option>
                                    <option value="1">For Rent</option>
                                </select>
                                @if ($errors->has('bu_type'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('bu_type') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div><br>


                     <div class="form-group{{ $errors->has('bu_square') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Area Space</label>

                            <div class="col-md-6">
                                <input type="number"  class="form-control" name="bu_square" value="{{ old('bu_square') }}">

                                @if ($errors->has('bu_square'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('bu_square') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div><br>



                     <div class="form-group{{ $errors->has('bu_meta') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Meta</label>

                            <div class="col-md-6">
                                <input type="text"  class="form-control" name="bu_meta" value="{{ old('bu_meta') }}">

                                @if ($errors->has('bu_meta'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('bu_meta') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div><br>

                      
                      
                      
                     <div class="form-group{{ $errors->has('bu_small_des') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Site Description For SEO</label>

                            <div class="col-md-6">
                                <textarea  class="form-control" name="bu_small_des" >{{ old('bu_small_des') }}</textarea>

                                @if ($errors->has('bu_small_des'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('bu_small_des') }}</strong>
                                    </span>
                                @endif
                                <br>

                            </div>
                        </div><br>

                      
                      


                     <div class="form-group{{ $errors->has('bu_langtuide') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">langtuide</label>

                            <div class="col-md-6">
                                <input type="text"  class="form-control" name="bu_langtuide" value="{{ old('bu_langtuide') }}">

                                @if ($errors->has('bu_langtuide'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('bu_langtuide') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div><br>

                      
                    
                      
                      


                     <div class="form-group{{ $errors->has('bu_latitude') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Latitude</label>

                            <div class="col-md-6">
                                <input type="text"  class="form-control" name="bu_latitude" value="{{ old('bu_latitude') }}">

                                @if ($errors->has('bu_latitude'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('bu_latitude') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div><br>

                      


                     <div class="form-group{{ $errors->has('bu_larg_des') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Long Description </label>

                            <div class="col-md-6">
                                <textarea  class="form-control" name="bu_larg_des" >{{ old('bu_larg_des') }}</textarea>

                                @if ($errors->has('bu_larg_des'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('bu_larg_des') }}</strong>
                                    </span>
                                @endif
                                <br>

                            </div>
                        </div><br>




                     <div class="form-group{{ $errors->has('bu_status') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Status</label>

                            <div class="col-md-6">
                                <select class="form-control" name="bu_status" value="{{ old('bu_status') }}">
                                    <option value="0">Activated</option>
                                    <option value="1">Diactivated </option>
                                </select>
                                @if ($errors->has('bu_status'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('bu_status') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div><br>

                    
                    <div class="form-group{{ $errors->has('bu_image') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Upload Image</label>

                            <div class="col-md-6">
                               <input type="file" id="exampleInputFile" class="form-control" name="bu_image">
                              
                                @if ($errors->has('bu_image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('bu_image') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div><br>




                      
                      
                    
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> &nbsp Add User 
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                                <div class="col-md-4"></div>

                    
            
          </div><!-- /.row -->
        </section><!-- /.content -->
                   
                   
                   
                   
                   
                   
                    
                    
      
@endsection