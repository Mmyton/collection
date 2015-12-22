<?php
    $UserId=$_GET['UserId'];
    $m=M('table_user');
    $where['UserId']=array('like',$UserId);
    $m->where($where)->delete();
    echo '<script>alert("删除成功");window.location.href="?s=BackForward/backforward/url/userlist";</script>';
?>