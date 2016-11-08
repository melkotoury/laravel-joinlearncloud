@extends('admin.layouts.master')


@section('content')
    <table class="table table-bordered" id="users-table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
        </thead>
    </table>
@stop

@push('scripts')
<script>
$(function() {
    $('#users-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('datatables.data') !!}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'email', name: 'email' },
            { data: 'created_at', name: 'created_at' },
            { data: 'updated_at', name: 'updated_at' }
        ]
    });
});
</script>
@endpush



 <li class="dropdown messages-menu">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-envelope-o"></i>

                  <span class="label label-success">{{ \App\Contact::where('seen',0)->count() }}</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have {{ \App\Contact::where('seen',0)->count() }} messages</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 200px;">
                      <ul class="menu" style="overflow: hidden; width: 100%; height: 200px;">
                    
                    <!-- start foreach -->
                    @foreach(\App\Contact::all() as $msg)
                       <li><!-- start message -->
                          <a href="#">
                            <div class="pull-left">
                              <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                            </div>
                            <h4>
                              Support Team
                              <small><i class="fa fa-clock-o"></i> 5 mins</small>
                            </h4>
                            <p>Why not buy a new awesome theme?</p>
                          </a>
                        </li><!-- end message -->
                        <!-- enforeach -->
                      @endforeach
                    
                    </ul><div class="slimScrollBar" style="width: 3px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 131.148px; background: rgb(0, 0, 0);"></div><div class="slimScrollRail" style="width: 3px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; opacity: 0.2; z-index: 90; right: 1px; background: rgb(51, 51, 51);"></div></div>
                  </li>
                  <li class="footer"><a href="#">See All Messages</a></li>
                </ul>
              </li>