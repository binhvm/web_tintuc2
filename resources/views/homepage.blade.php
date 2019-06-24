@extends('index')

@section('content')
    <!-- Page Content -->
	<div class="container">

	@if(session('thongbao'))
		<div class="alert alert-danger">{{session('thongbao')}}</div>
	@endif
	
    </div>
    <!-- end Page Content -->
@endsection