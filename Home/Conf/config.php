<?php
return array(
	//'配置项'=>'配置值'
'DB_TYPE'=>'mysql',   //设置数据库类型
'DB_HOST'=>'localhost',//设置主机
'DB_NAME'=>'collection_xmuni',//设置数据库名
'DB_USER'=>'root',    //设置用户名
'DB_PWD'=>'',        //设置密码
'DB_PORT'=>'3306',   //设置端口号
'DB_PREFIX'=>'',  //设置表前缀
/*
'DB_DSN'=>'mysql://root:@localhost:3306/thinkphp',//使用DSN方式配置数据库信息
*/
'SHOW_PAGE_TRACE'=>true,//开启页面Trace
'TMPL_TEMPLATE_SUFFIX'=>'.php',//更改模板文件后缀名
	/*
'TMPL_FILE_DEPR'=>'_',//修改模板文件目录层次*/
'TMPL_DETECT_THEME'=>true,//自动侦测模板主题
'THEME_LIST'=>'muban,header,home',//支持的模板主题列表
'TMPL_PARSE_STRING'=>array(           //添加自己的模板变量规则
    '__CSS__'=>__ROOT__.'/Admin/Tpl/common/Css',
    '__JS__'=>__ROOT__.'/Admin/Tpl/common/Js',
    '__HSS__'=>__ROOT__.'/Home/Tpl/common/css',
    '__JSS__'=>__ROOT__.'/Home/Tpl/common/js',
),
define('PHP_PATH', 'Home/Tpl',true),
'LAYOUT_ON'=>false,//开启模板渲染
'URL_CASE_INSENSITIVE'=>true,//url不区分大小写
//'URL_HTML_SUFFIX'=>'html|shtml|xml',//限制伪静态的后缀
//'APP_GROUP_LIST' => 'Home,Admin', //项目分组设定
//'DEFAULT_GROUP'  => 'Home', //默认分组
'DB_FIELD_CACHE'=>false,
'HTML_CACHE_ON'=>false,
'URL_ROUTER_ON'=>true,//启用路由
'URL_MAP_RULES'=>array(
'r/main'=> '/Tpl/main/main.php'
			),//路由规则			
);
?>