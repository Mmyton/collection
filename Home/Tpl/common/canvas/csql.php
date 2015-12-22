<?php
$m=M('search');  //M->数据表，打开数据表的链接

$q=$_GET['q'];
$data = $m->where('num='.$q)->limit(10)->select();
$count= count($data);
$response=$data[0][tem];
$b=$data[0][ts];
echo $response;
?>