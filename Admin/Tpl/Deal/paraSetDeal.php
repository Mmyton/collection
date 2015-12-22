<?php
    for($i=1;$i<=9;$i++){
        $data[$i]=$_POST['para'.$i];
    }
    $m=M('table_parameter');
    $where['PN']=array('like','para1');
    $result=$m->where($where)->limit(1)->find();
    if(!$result){
        for($j=1;$j<=9;$j++){
            $para['PN']='para'.$j;
            $para['Value']=$data[$j];
            if($j==1){
                $para['MeasurandType']=1;
            }elseif($j==4){
                $para['MeasurandType']=2;
            }elseif($j==7){
                $para['MeasurandType']=3;
            }
            $m->add($para);
        }
    }else{
        for($k=1;$k<=9;$k++){
            $edit['PN']=array('like','para'.$k);
            $m->where($edit)->setField('Value',$data[$k]);
        }
    }
    echo '<script>alert("修改成功");window.location.href="?s=BackForward/backforward/url/paraset";</script>';


?>