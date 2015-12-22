<?php
    $User=session($name='name');
    $url=$_GET['url'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=9" />
    <title>光纤传感监测系统</title>
    <load href="__HSS__/bootstrap.min.css"/>
    <load href="__HSS__/home.css"/>
    <load href="__HSS__/bootstrap-datetimepicker.min.css"/>
    <load href="__CSS__/font-awesome/css/font-awesome.min.css"/>
    <load href="__JSS__/laydate/need/laydate.css"/>
    <!--    <load href="__HSS__/laydate/jquery.datetimepicker.css"/>-->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="http://apps.bdimg.com/libs/html5shiv/3.7/html5shiv.min.js"></script>
    <script src="http://apps.bdimg.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="__JSS__/laydate/laydate.js"></script>

    <?php
		$will='.';
		if(session($name='sign')!='result_admin'){
		redirect($will."/?s=BackForward/backforward/url/login");
		};
	?>

</head>
<body>
<div id="wrapper">
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">网站前台</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="?s=BackForward/backforward/url/admin">后台管理</a>
        </div>
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-left">
                <li>
                    <a href="?s=Forward/forward/url/adminhome" id="a1">被测量</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-left">
                <li>
                    <a href="?s=Forward/forward/url/wavtview" id="a2">波长</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-left">
                <li>
                    <a href="?s=Forward/forward/url/spetview" id="a3">光谱</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right navbar-user">
                <li>
                    <a href="http://192.168.0.111/collection/Home/Tpl/download/Desktop.rar">手机监控端下载</a>
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
    <div id="page-wrapper">
        <ul class="nav nav-tabs">
            <?php
                if($url=="adminhome"||$url=="meahistory"||$url=="warning"){
                    echo '<li id="li1"><a href="?s=Forward/forward/url/adminhome">实时数据</a></li>';
                    echo '<li id="li2"><a href="?s=Forward/forward/url/meahistory">历史数据</a></li>';
                    echo '<li id="li3"><a href="?s=Forward/forward/url/warning">传感预警</a></li>';
                }
                if($url=="wavtview"||$url=="wavhistory"){
                    echo '<li id="li1"><a href="?s=Forward/forward/url/wavtview">实时数据</a></li>';
                    echo '<li id="li2"><a href="?s=Forward/forward/url/wavhistory">历史数据</a></li>';
                }
                if($url=="spetview"||$url=="spehistory"){
                    echo '<li id="li1"><a href="?s=Forward/forward/url/spetview">实时数据</a></li>';
                    echo '<li id="li2"><a href="?s=Forward/forward/url/spehistory">历史数据</a></li>';
                }
            ?>
        </ul>
    </div>
    {__CONTENT__}

<script src="__JSS__/bootstrap.min.js" type="text/javascript" charset="UTF-8"></script>

</body>
</html>