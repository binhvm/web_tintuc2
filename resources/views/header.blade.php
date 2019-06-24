
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="homepage">Instagram</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <form class="navbar-form navbar-left" role="search" action="search" method="get">
                    <div class="form-group">
                      <input type="text" name='timkiem' class="form-control" placeholder="Search" required="">
                    </div>
                    <button type="submit" class="btn btn-secondary">Search</button>
                </form>

                <ul class="nav navbar-nav pull-right">
                        @if(Auth::check())
                            <li>
                                <a href="#"><span class="glyphicon glyphicon-user"></span> {{Auth::user()->name}}</a>
                            </li>
                            @if(Auth::user()->level == 1)
                                <li>
                                    <a href="admin/users/list"><span class="glyphicon glyphicon-th"></span> Admin pages</a>
                                </li>
                            @endif
                            <li>
                                <a href="logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
                            </li>
                        @else
                            <li>
                                <a href="login"><span class="glyphicon glyphicon-log-in"></span> Login</a>
                            </li>
                            <li>
                                <a href="register"><span class="glyphicon glyphicon-plus"></span> Register</a>
                            </li>
                        @endif
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>