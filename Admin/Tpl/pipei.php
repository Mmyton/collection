<?php
    $userName=$_POST['userName'];
    $userPassword=$_POST['userPassword'];
    $m=M('table_user');
    $where['UserName']=array('like',$userName);
    $where['PassWord']=array('like',$userPassword);
    $data=$m->where($where)->limit(1)->find();
    $a=$m->where($where)->field('UserType')->find();
    if($data&&$a['UserType']==0){
        session($name='sign',$value='result_admin');
        session($name='name',$value=$data[Name]);
        $url="?s=Forward/forward/url/adminhome/";
        echo "<script language='JavaScript'>";
        echo "window.location.href='$url'";
        echo "</script>";
    }elseif($data&&$a['UserType']==1){
        session($name='sign',$value='result_guest');
        session($name='name',$value=$data[Name]);
        $url="?s=Forward/forward/url/adminhomep/UserName/".$data[Name];
        echo "<script language='JavaScript'>";
        echo "window.location.href='$url'";
        echo "</script>";
    }else{
        session($name='sign',$value='result_error');
        echo '<script>alert("用户名或者密码错误");window.location.href="?s=BackForward/backforward/url/login";</script>';
    }
?>