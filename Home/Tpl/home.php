<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=9" />
    <title>光纤传感监测系统</title>
    <load href="__HSS__/bootstrap.min.css"/>
    <load href="__HSS__/muban.css"/>
    <load href="__HSS__/time/jquery.datetimepicker.css"/>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="http://apps.bdimg.com/libs/html5shiv/3.7/html5shiv.min.js"></script>
    <script src="http://apps.bdimg.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

   <?php
   $User=session($name='name');
$will='.';
if(session($name='sign')!='result_guest'){
	redirect($will."/?s=BackForward/backforward/url/login");
};?>
</head>
<body>
<div>
    <div id="home">
        <ul class="nav nav-tabs ">
            <li id="li1"><a href="?s=Forward/forward/url/adminhomep" >实时数据</a></li>
            <li id="li2"><a href="?s=Forward/forward/url/meahistoryp">历史数据</a></li>
            <li id="li3"><a href="?s=Forward/forward/url/warningp">传感预警</a></li>
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
        </ul>
    </div>
    {__CONTENT__}
</div>
<script src="__JSS__/bootstrap.min.js" type="text/javascript" charset="UTF-8"></script>

</body>
</html>