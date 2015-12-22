<?php
    $User=session($name='name');
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=9" />
    <title>光纤传感监测系统后台</title>
    <load href="__CSS__/bootstrap.min.css"/>
    <load href="__CSS__/admin.css"/>
    <load href="__CSS__/font-awesome/css/font-awesome.min.css"/>
<?php 
$will='.';
if(session($name='sign')!='result_admin'){
	redirect($will."/?s=BackForward/backforward/url/login");
};?>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="http://apps.bdimg.com/libs/html5shiv/3.7/html5shiv.min.js"></script>
    <script src="http://apps.bdimg.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div id="wrapper">
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse">
                <span class="sr-only">网站首页</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="?s=Forward/forward/url/adminhome">网站首页</a>
        </div>
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li><a href="?s=BackForward/backforward/url/admin"><i class="fa fa-desktop"></i> 后台首页</a></li>
                <li><a href="?s=BackForward/backforward/url/paraset"><i class="fa fa-dashboard"></i> 参数设置</a></li>
                <li><a href="?s=BackForward/backforward/url/initset"><i class="fa fa-bar-chart-o"></i> 初值设置</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i> 采集点信息<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="?s=BackForward/backforward/url/acqadd"> 添加采集点信息</a></li>
                        <li><a href="?s=BackForward/backforward/url/acqlist"> 采集点信息编辑</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i> 用户信息<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="?s=BackForward/backforward/url/useradd"> 添加用户</a></li>
                        <li><a href="?s=BackForward/backforward/url/userlist"> 用户编辑</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right navbar-user">
                <li>
                    <a href="http://192.168.0.113/collection/Home/Tpl/download/Desktop.rar">手机监控端下载</a>
                </li>
                <li class="dropdown user-dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>欢迎：<?php echo $User;?><b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="?s=BackForward/backforward/url/login"><i class="fa fa-power-off"></i> Log Out</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    {__CONTENT__}
</div>
<script src="__JS__/jquery-2.1.3.min.js" type="text/javascript"></script>
<script src="__JS__/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>