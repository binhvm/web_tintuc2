@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Users
                            <small>Edit</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        
                        {{-- Hiển thị lỗi--}}
                        @if(count($errors) > 0)
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $err)
                                    {{$err}}<br>
                                @endforeach
                            </div>
                        @endif
                        
                        {{-- Hiển thị thông báo --}}
                        @if(session('thongbao'))
                            <div class="alert alert-warning">{{session('thongbao')}}</div>
                        @endif

                        <form action="admin/users/edit/{{$users->id}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>User name</label>
                                <input class="form-control" name="name" value="{{$users->name}}" />
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" name="email" value="{{$users->email}}" readonly />
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="changePassword" id="changePassword">
                                <label>Change your password</label>
                                <input class="form-control password" type="password" name="password" placeholder="Please enter your password" disabled required />
                            </div>
                            <div class="form-group">
                                <label>Your password confirm</label>
                                <input class="form-control password" type="password" name="repassword" placeholder="Please enter your password again" disabled required />
                            </div>
                            <div class="form-group">
                                <label>Level: </label>
                                <label class="radio-inline">
                                    <input type="radio" name="quyen" value="0" 
                                    @if($users->level == 0) {{"checked"}}
                                    @endif
                                    >Member
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="quyen" value="1"
                                    @if($users->level == 1) {{"checked"}}
                                    @endif
                                    >Admin
                                </label>
                            </div>
                            <div class="form-group">
                                <label>Status: </label>
                                <label class="radio-inline">
                                    <input type="radio" name="status" value="1" 
                                    @if($users->status == 1) {{"checked"}}
                                    @endif
                                    >Active
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="status" value="0"
                                    @if($users->status == 0) {{"checked"}}
                                    @endif
                                    >Disable
                                </label>
                            </div>
                            <button type="submit" class="btn btn-warning">Edit</button>
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

@section('script')
    <script>
        $(document).ready(function() {
            $('#changePassword').change(function() {
                if ($(this).is(":checked")) {
                    $(".password").removeAttr('disabled');
                }else{
                    $(".password").attr('disabled', '');
                }
            });
        });
    </script>
@endsection