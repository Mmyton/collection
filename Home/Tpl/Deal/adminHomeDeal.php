<?php
    $Lo=$_GET['Lo'];
    $Num=$_GET['Num'];
    $MeasurandType=$_GET['MeasurandType'];
    $m=M('view_search');
    $where['Lo']=array('like',$Lo);
    $where['Num']=array('like',$Num);
    $where['MeasurandType']=array('like',$MeasurandType);
    $result=$m->where($where)->limit(1)->select();
    if($result!=null){
        echo json_encode($result);
    }
    if($result==null){
     	echo '[{"InfoId":"-7","Ch":"0","FBG":"0","Lo":"A","Num":"01","MName":"\u6e29\u5ea6","MeasurandType":"1","WaveLength":"1555.500887","MeasurandValue":"NaN","ITime":"2015-07-06 10:12:32"}]';
    }
?>