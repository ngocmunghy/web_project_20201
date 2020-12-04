<!DOCTYPE html>
<html lang="vi">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <title>Layout</title>
   <style type="text/css">
    header {
        position: relative;
        background-color: #d5f4e6;
    }
    .shopping-mall{
        position: absolute;
        bottom: 20px;
        font-variant: small-caps;
    }
    .shopping-mall>h1{
        font-family: Times New Roman;
        font-size: 50px;
        color: white;
        letter-spacing: 0.3px;
        text-shadow: 0 0 2px black;
        padding-bottom: 0px;
        border-bottom: 1px solid gray;
        margin: 0px;
    }
    .poly-cart{
        margin-top: 5px;
    }

    .poly-cart ul {
       padding: 0px;
       margin: 0px;
       list-style: none;
       font-variant: small-caps;
   }

   .poly-cart .panel-heading strong {
       font-variant: small-caps;
       font-size: larger;
       text-shadow: 0 0 2px black;
   }
</style>
</head>
<body>
    <div class="container" style = "height: auto">
       <header class="row">
        <div class = "shopping-mall">
           <h1>Phần mềm quản lý trường học</h1>
           <!-- <h5>The center point of the professional programming</h5> -->
       </div>
       <img class = "pull-right" src="hust.png"/>
   </header>

   <nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                <span class="glyphicon glyphicon-home"></span> Trang chủ
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <ul class="nav navbar-nav">
            <li class="active">
                <a href="#">
                    <span class="glyphicon glyphicon-list-alt"></span> Giới thiệu
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="glyphicon glyphicon-earphone"></span> Liên hệ
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="glyphicon glyphicon-envelope"></span> Góp ý
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="glyphicon glyphicon-question-sign"></span> Hỏi đáp
                </a>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    <span class="glyphicon glyphicon-user"></span> Tài khoản <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="abc.php">Đăng nhập</a></li>
                    <li><a href="#">Quên mật khẩu</a></li>
                    <li><a href="#">Đăng ký thành viên</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Đăng xuất</a></li>
                    <li><a href="#">Đổi mật khâu</a></li>
                    <li><a href="#">Cập nhật hồ sơ</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Đơn hàng</a></li>
                    <li><a href="#">Hàng đã mua</a></li>
                </ul>
            </li>
        </ul>
    </div><!-- /.navbar-collapse -->
</div>
</nav>

<div class="container" style = "height: auto">
    <div class = "row">
        <article class="col-sm-9">

        </article>

        <aside class="col-sm-3">
            <div class = "poly-cart">
                <div class="panel panel-default">
                    <div class = "panel-heading">
                        <h4 class = "panel-title" align="center">
                            Admin
                        </h4>
                    </div>
                    <div class="panel-body">
                        <img src="account.png"/>
                        
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span class = "glyphicon glyphicon-th-list"></span>
                    <strong>Chủng Loại</strong>
                </div>
                <div class="list-group">
                    <a href="#" class="list-group-item">Quản lý giáo viên</a>
                    <a href="#" class="list-group-item">Quản lý sinh viên</a>
                    <a href="#" class="list-group-item">Quản lý môn học</a>
                    <a href="#" class="list-group-item">Quản lý cơ sở vật chất</a>
                </div>
            </div>
        </aside>
    </div>
</div>

<footer class="panel panel-default">
   <div class = "panel-heading text-center">
       <p>SMS v.1.0 &copy; 2020</p>
   </div>
</footer>
</div>
</body>
</html>