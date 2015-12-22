<?php
    for($i=1;$i<=80;$i++){
        $init['init'.$i]=$_POST['init'.$i];
    }
    $m=M('table_parameter');
    $where['PN']=array('like','init1');
    $result=$m->where($where)->limit(1)->find();
    if(!$result){
        for($j=1;$j<=80;$j++){
            $data['PN']='init'.$j;
            $data['Value']=$init['init'.$j];
            $m->add($data);
        }
        echo '<script>alert("插入成功");window.location.href="?s=BackForward/backforward/url/initset";</script>';
    }else{
        for($k=1;$k<=80;$k++){
            $edit['PN']=array('like','init'.$k);
            $m->where($edit)->setField('Value',$init['init'.$k]);
        }
        echo '<script>alert("修改成功");window.location.href="?s=BackForward/backforward/url/initset";</script>';
    }
?>
