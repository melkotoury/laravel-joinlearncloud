@extends('admin.layouts.main')
    
    
@section('title')
Admin | Edit User
@endsection
       

       
        
@section('content')

                   
                   <section class="content-header">
          <h1>
            Data Tables
            <small>advanced tables</small>
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
            
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/editusers/'.$user->id) }}">
                        {!! csrf_field() !!}
                        <!--  -->
            @if (session('success'))
                <div class="alert alert-success">
                    <ul>
                            <li>{{ session('success') }}</li>
                    </ul>
                </div>
            @endif
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" value="{{ $user->name }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="{{ $user->email }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Edit 
                                </button>
                            </div>
                        </div>
                    </form>

                            <br><br>


                        <!-- edit password credentials -->

            <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/editpassword/'.$user->id) }}">
                        {!! csrf_field() !!}                       

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Old Password</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">New Password</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="npass">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('New Password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Edit Password
                                </button>
                            </div>
                        </div>
                    </form>
                    
            
          </div><!-- /.row -->
        </section><!-- /.content -->
                   
                   
                   
                   
                   
                   
                    
                    
      
@endsection