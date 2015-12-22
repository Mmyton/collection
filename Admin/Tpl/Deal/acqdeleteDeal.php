<?php
    $acq_AId=$_GET['acq_AId'];
    $m=M('table_acquisition');
    $where['AId']=array('like',$acq_AId);
    $m->where($where)->setField('Lo',null);
    $m->where($where)->setField('Num',null);
    echo '<script>alert("删除成功");window.location.href="?s=BackForward/backforward/url/acqlist";</script>';
?>