@extends('admin.layouts.main')
    
    
@section('title')
Admin | SiteSettings
@endsection
       

       
        
@section('content')

                   
                   <section class="content-header">
          <h1>
            Site Settings
            <small>Users Table</small>
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
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/sitesetting') }}">
                        {!! csrf_field() !!}

                        
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Home 1</label>

                            <div class="col-md-6">
                                <textarea   class="form-control" name="homeone">{{ $site != null ? $site->homeone : 'no content' }}</textarea >

                                
                            </div>
                        </div><br>
                  
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Home 2</label>

                            <div class="col-md-6">
                                <textarea   class="form-control" name="hometwo">{{ $site != null ? $site->hometwo : 'no content' }}</textarea >

                                
                            </div>
                        </div><br>
                  
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Home 3</label>

                            <div class="col-md-6">
                                <textarea   class="form-control" name="homethree">{{ $site != null ? $site->homethree : 'no content' }}</textarea >

                              
                            </div>
                        </div><br>
                  
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Home 4</label>

                            <div class="col-md-6">
                                <textarea   class="form-control" name="homefour">{{ $site != null ? $site->homefour : 'no content' }}</textarea >

                                
                            </div>
                        </div><br>
                  
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Home 5</label>

                            <div class="col-md-6">
                                <textarea   class="form-control" name="homefive">{{ $site != null ? $site->homefive : 'no content' }}</textarea >

                               
                            </div>
                        </div><br>
                  
                      <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">feature 1</label>

                            <div class="col-md-6">
                                <textarea   class="form-control" name="featureone">{{ $site != null ? $site->featureone : 'no content' }}</textarea >

                                
                            </div>
                        </div><br>
                  
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">feature 2</label>

                            <div class="col-md-6">
                                <textarea   class="form-control" name="featuretwo">{{ $site != null ? $site->featuretwo : 'no content' }}</textarea >

                                
                            </div>
                        </div><br>
                  
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">feature 3</label>

                            <div class="col-md-6">
                                <textarea   class="form-control" name="featurethree">{{ $site != null ? $site->featurethree : 'no content' }}</textarea >

                              
                            </div>
                        </div><br>
                  
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">feature 4</label>

                            <div class="col-md-6">
                                <textarea   class="form-control" name="featurefour">{{ $site != null ? $site->featurefour : 'no content' }}</textarea >

                                
                            </div>
                        </div><br>
                  
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">feature 5</label>

                            <div class="col-md-6">
                                <textarea   class="form-control" name="featurefive">{{ $site != null ? $site->featurefive : 'no content' }}</textarea >

                               
                            </div>
                        </div><br>
                  
                      <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">profile 1</label>

                            <div class="col-md-6">
                                <textarea   class="form-control" name="profileone">{{ $site != null ? $site->profileone : 'no content' }}</textarea >

                                
                            </div>
                        </div><br>
                  
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">profile 2</label>

                            <div class="col-md-6">
                                <textarea   class="form-control" name="profiletwo">{{ $site != null ? $site->profiletwo : 'no content' }}</textarea >

                                
                            </div>
                        </div><br>
                  
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">profile 3</label>

                            <div class="col-md-6">
                                <textarea   class="form-control" name="profilethree">{{ $site != null ? $site->profilethree : 'no content' }}</textarea >

                              
                            </div>
                        </div><br>
                  
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">profile 4</label>

                            <div class="col-md-6">
                                <textarea   class="form-control" name="profilefour">{{ $site != null ? $site->profilefour : 'no content' }}</textarea >

                                
                            </div>
                        </div><br>
                  
                       
                       <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Google Analytics Widget</label>

                            <div class="col-md-6">
                                <textarea   class="form-control" name="profile 5"></textarea >

                                
                            </div>
                        </div><br>
                  
                       
                      

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" name="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> &nbsp Submit Settings 
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                                <div class="col-md-4"></div>

                    
            
          </div><!-- /.row -->
        </section><!-- /.content -->
                   
                   
                   
                   
                   
                   
                    
                    
      
@endsection