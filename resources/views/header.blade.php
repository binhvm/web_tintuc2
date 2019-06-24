<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="navbar-header">
            <span><i class="fab fa-instagram" ></i></span>
            <a class="navbar-brand" href="homepage">| Instagram</a>
        </div>

        <form class="search-box">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        </form>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="icon-menu">
            <ul class="navbar-nav">
                @if(Auth::check())
                <li>
                    <a href="thongtintk/{{Auth::user()->id}}"><span class="glyphicon glyphicon-user"></span> {{Auth::user()->name}}</a>
                </li>
                @if(Auth::user()->quyen == 1)
                <li>
                    <a href="admin/user/danhsach"><span class="glyphicon glyphicon-th"></span> Quản trị website</a>
                </li>
                @endif
                <li>
                    <a href="dangxuat"><span class="glyphicon glyphicon-log-out"></span> Đăng xuất</a>
                </li>
                @else
                <li>
                    <a href="dangnhap"><span class="glyphicon glyphicon-log-in"></span> Đăng nhập</a>
                </li>
                <li>
                    <a href="dangky"><span class="glyphicon glyphicon-plus"></span> Đăng ký</a>
                </li>
                @endif
            </ul>
        </div>
    </nav>
</header>