<?php
    $UserId=$_GET['UserId'];
    $user2=$_POST['user2'];
    $user3=$_POST['user3'];
    $user4=$_POST['user4'];
    $m=M('table_user');
    if($user4==='管理员'){
        $data=0;
    }else{
        $data=1;
    }
    $m->where('UserId='.$UserId)->setField('UserName',$user2);
    $m->where('UserId='.$UserId)->setField('PassWord',$user3);
    $m->where('UserId='.$UserId)->setField('UserType',$data);
    echo '<script>alert("修改成功");window.location.href="?s=BackForward/backforward/url/userlist";</script>';
?>