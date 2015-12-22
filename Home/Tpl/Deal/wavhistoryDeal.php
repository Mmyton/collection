<?php
    $Ch=$_GET['Ch'];
    $FBG=$_GET['FBG'];
    $StartTime=$_GET['StartTime'];
    $StopTime=$_GET['StopTime'];
    $where['Ch']=array('like',$Ch);
    $where['FBG']=array('like',$FBG);
    $s=M('table_acquisition');
    $data1=$s->where($where)->select();
    $AId=$data1[0]['AId'];
    if(2>(strtotime($StopTime.':00') - strtotime($StartTime.':00'))/60/60){
        $m=M('view_search');
        $data=$m->where($where)->select();
        $h=count($data);
        for($i=0;$i<$h;$i++){
            if(strtotime($data[$i]['ITime'])>=strtotime($StartTime)&&strtotime($data[$i]['ITime'])<=strtotime($StopTime)){
                $result[]=$data[$i];
            }
        }
     if($result!=null){
        echo json_encode(array_reverse($result));
        }
        else if($result==null){
        	echo '[{"InfoId":"-7","Ch":"0","FBG":"0","Lo":"A","Num":"01","MName":"\u6e29\u5ea6","MeasurandType":"1","WaveLength":"1555.500887","MeasurandValue":"NaN","ITime":"2015-07-06 10:12:32"}]';
        }
    }
    if(2>abs(strtotime($StopTime.':00') - strtotime($StartTime.':00'))/60/60/24 and 2<abs(strtotime($StopTime.':00') - strtotime($StartTime.':00'))/60/60){
        $m=M('table_min');
        $data=$m->where('AId='.$AId)->select();
        $h=count($data);
        for($i=0;$i<$h;$i++){
            if(strtotime($data[$i]['ITime'])>=strtotime($StartTime)&&strtotime($data[$i]['ITime'])<=strtotime($StopTime)){
                $result[]=$data[$i];
            }
        }
        for($i=0;$i<count($result);$i+=2){
            $dat[$i/2][0]=$result[$i]['ITime'];
            $dat[$i/2][1]=floatval($result[$i]['WaveLength']);
            if($result[$i]['WaveLength']>=$result[$i+1]['WaveLength']){
                $dat[$i/2][2]=floatval($result[$i]['WaveLength']);
                $dat[$i/2][3]=floatval($result[$i+1]['WaveLength']);
            }
            if($result[$i]['WaveLength']<$result[$i+1]['WaveLength']){
                $dat[$i/2][2]=floatval($result[$i+1]['WaveLength']);
                $dat[$i/2][3]=floatval($result[$i]['WaveLength']);
            }
            $dat[$i/2][4]=floatval($result[$i+1]['WaveLength']);

        }
    if($dat!=null){
        echo json_encode($dat);
        }
        else if($dat==null){
        	echo '[["1970-01-01 08:00:00",54.9588,54.9588,54.9232,54.9232]]';
        }
    }
    if(2<abs(strtotime($StopTime.':00') - strtotime($StartTime.':00'))/60/60/24 and 7>abs(($StopTime.':00') - strtotime($StartTime.':00'))/60/60/24){
        $m=M('table_hour');
        $data=$m->where('AId='.$AId)->select();
        $h=count($data);
        for($i=0;$i<$h;$i++){
            if(strtotime($data[$i]['ITime'])>=strtotime($StartTime)&&strtotime($data[$i]['ITime'])<=strtotime($StopTime)){
                $result[]=$data[$i];
            }
        }
        for($i=0;$i<count($result);$i+=2){
            $dat[$i/2][0]=$result[$i]['ITime'];
            $dat[$i/2][1]=floatval($result[$i]['WaveLength']);
            if($result[$i]['WaveLength']>=$result[$i+1]['WaveLength']){
                $dat[$i/2][2]=floatval($result[$i]['WaveLength']);
                $dat[$i/2][3]=floatval($result[$i+1]['WaveLength']);
            }
            if($result[$i]['WaveLength']<$result[$i+1]['WaveLength']){
                $dat[$i/2][2]=floatval($result[$i+1]['WaveLength']);
                $dat[$i/2][3]=floatval($result[$i]['WaveLength']);
            }
            $dat[$i/2][4]=floatval($result[$i+1]['WaveLength']);

        }
    if($dat!=null){
        echo json_encode($dat);
        }
        else if($dat==null){
        	echo '[["1970-01-01 08:00:00",54.9588,54.9588,54.9232,54.9232]]';
        }
    }
    if(7<abs(strtotime($StopTime.':00') - strtotime($StartTime.':00'))/60/60/24){
        $m=M('table_day');
        $data=$m->where('AId='.$AId)->select();
        $h=count($data);
        for($i=0;$i<$h;$i++){
            if(strtotime($data[$i]['ITime'])>=strtotime($StartTime)&&strtotime($data[$i]['ITime'])<=strtotime($StopTime)){
                $result[]=$data[$i];
            }
        }
        for($i=0;$i<count($result);$i+=2){
            $dat[$i/2][0]=$result[$i]['ITime'];
            $dat[$i/2][1]=floatval($result[$i]['WaveLength']);
            if($result[$i]['WaveLength']>=$result[$i+1]['WaveLength']){
                $dat[$i/2][2]=floatval($result[$i]['WaveLength']);
                $dat[$i/2][3]=floatval($result[$i+1]['WaveLength']);
            }
            if($result[$i]['WaveLength']<$result[$i+1]['WaveLength']){
                $dat[$i/2][2]=floatval($result[$i+1]['WaveLength']);
                $dat[$i/2][3]=floatval($result[$i]['WaveLength']);
            }
            $dat[$i/2][4]=floatval($result[$i+1]['WaveLength']);

        }
    if($dat!=null){
        echo json_encode($dat);
        }
        else if($dat==null){
        	echo '[["1970-01-01 08:00:00",54.9588,54.9588,54.9232,54.9232]]';
        }
    }

?>