<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Instagram</title>
    <base href="{{asset('')}}">

    <!-- Bootstrap Core CSS -->
    <link href="admin_asset/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="admin_asset/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="admin_asset/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="admin_asset/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

    <div class="container">
        <!-- slider -->
        <div class="row carousel-holder" style="margin-top: 100px;">
            <div class="col-md-4"></div>
            <div class="col-md-4">

                    @if(session('notification'))
                        <div class="alert alert-warning">{{session('notification')}}</div>
                    @endif

                <div class="panel panel-default">
                    <div class="panel-heading "><b>Login</b></div>
                    <div class="panel-body">
                        <form action="login" method="POST">
                            @csrf
                            <div>
                                <label>Email</label>
                                <input type="email" class="form-control" placeholder="Please enter your email" name="email" value="{{old('email')}}" required>
                            </div>
                            <br>    
                            <div>
                                <label>Password</label>
                                <input type="password" class="form-control" placeholder="Please enter password" name="password" required>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-success">Login</button>
                            <a href="hompage" class="btn btn-dark" role="button">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
        <!-- end slide -->
    </div>

    <!-- jQuery -->
    <script src="admin_asset/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="admin_asset/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="admin_asset/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="admin_asset/dist/js/sb-admin-2.js"></script>

</body>

</html>
