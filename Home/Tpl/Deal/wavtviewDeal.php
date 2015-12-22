<?php
    $Ch=$_GET['Ch'];
    $FBG=$_GET['FBG'];
    $m=M('view_search');
    $where['Ch']=array('like',$Ch);
    $where['FBG']=array('like',$FBG);
    $result=$m->where($where)->limit(1)->select();
    if($result!=null){
    echo json_encode($result);
    }
    if($result==null){
    	echo '[{"InfoId":"-7","Ch":"0","FBG":"0","Lo":"A","Num":"01","MName":"\u6e29\u5ea6","MeasurandType":"1","WaveLength":"NaN","MeasurandValue":"551.036","ITime":"2015-07-06 19:14:34"}]';
    }
?>