<?php
    for($i=1;$i<=6;$i++){
        $acq[$i]=$_POST['acq'.$i];
    }
    $m=M('table_acquisition');
    $data['Lo']=$acq[1];
    $data['Num']=$acq[2];
    $data['Ch']=$acq[3];
    $data['FBG']=$acq[4];
    if($acq[5]==='温度'){
        $data['MeasurandType']=1;
    }elseif($acq[5]==='压力'){
        $data['MeasurandType']=2;
    }else{
        $data['MeasurandType']=3;
    }
    $data['Illus']=$acq[6];
    $where['Lo']=array('like',$acq[1]);
    $where['Num']=array('like',$acq[2]);
    $where['Ch']=array('like',$acq[3]);
    $where['FBG']=array('like',$acq[4]);
    $search=$m->where($where)->select();
    $Add['Ch']=array('like',$acq[3]);
    $Add['FBG']=array('like',$acq[4]);
    $update=$m->where($Add)->select();
    if($search){
        echo '<script>alert("此采集点已存在");window.location.href="?s=BackForward/backforward/url/acqadd";</script>';
    }else if($update){
        $m->where($Add)->setField('Lo',$acq[1]);
        $m->where($Add)->setField('Num',$acq[2]);
        echo '<script>alert("添加成功");window.location.href="?s=BackForward/backforward/url/acqadd";</script>';
    }else if(count($m->select())>80){
        echo '<script>alert("采集点已满");window.location.href="?s=BackForward/backforward/url/acqadd";</script>';
    }else{
        $m->add($data);
        echo '<script>alert("添加成功");window.location.href="?s=BackForward/backforward/url/acqadd";</script>';
    }
?>