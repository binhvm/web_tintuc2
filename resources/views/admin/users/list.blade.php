@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Users
                            <small>List</small>
                            <a href="admin/users/add"><input style="float: right;" type="button" name="btn_add" class="btn btn-success" value="Add"></a>
                        </h1>
                    </div>
                    
                    @if(session('thongbao'))
                        <div class="alert alert-danger">{{session('thongbao')}}</div>
                    @endif
                    
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>No.</th>
                                <th>User name</th>
                                <th>Email</th>
                                <th>Level</th>
                                <th>Status</th>
                                <th>Act</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr class="odd gradeX" align="center">
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>
                                    @if($user->level == 0)
                                        {{"Member"}}
                                    @else
                                        {{"Admin"}}
                                    @endif
                                </td>
                                <td>
                                    @if($user->status == 1)
                                        {{"Active"}}
                                    @else
                                        {{"Disable"}}
                                    @endif
                                </td>
                                <td>
                                    <a href="admin/users/edit/{{$user->id}}"><input type="button" class="btn btn-warning" id="btn_comment" value="Edit"></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection