@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Users
                            <small>Add</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        @if(count($errors) > 0)
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $err)
                                    {{$err}}<br>
                                @endforeach
                            </div>
                        @endif
                        
                        @if(session('thongbao'))
                            <div class="alert alert-success">{{session('thongbao')}}</div>
                        @endif

                        <form action="admin/users/add" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>User name</label>
                                <input class="form-control" name="name" placeholder="Please enter user name" value="{{old('name')}}" required />
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" name="email" placeholder="Please enter email" value="{{old('email')}}" required />
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input class="form-control" type="password" name="password" placeholder="Please enter password" required/>
                            </div>
                            <div class="form-group">
                                <label>Password confirm</label>
                                <input class="form-control" type="password" name="repassword" placeholder="Please enter password confirm" required>
                            </div>
                            <div class="form-group">
                                <label>Level: </label>
                                <label class="radio-inline">
                                    <input type="radio" name="level" value="0" checked>Member
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="level" value="1">Admin
                                </label>
                            </div>
                            <button type="submit" class="btn btn-success">Add</button>
                            <a href="admin/users/list" class="btn btn-dark" role="button">Cancel</a>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection