@extends('index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-md-6" style="padding-bottom:120px">
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
                        
                        <h1 class="page-header">Post
                            <small>Add</small>
                        </h1>
                        <form action="posts/add" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Title</label>
                                <input class="form-control" name="title" placeholder="Please enter your title" value="{{old('status')}}" required />
                            </div>
                            <div class="form-group">
                                <label>Image</label>
                                <input class="form-control" type="file" name="image"/>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-success">Add</button>
                            <a href="homepage" class="btn btn-dark" role="button">Cancel</a>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection