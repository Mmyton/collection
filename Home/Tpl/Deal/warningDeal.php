<?php
    $m=M('view_search');
    $n=M('table_parameter');
    $s=M('table_acquisition');
    $result3=$s->query('SELECT distinct Lo from table_acquisition where Lo is not NULL;');
    $result4=$s->query('SELECT distinct Num from table_acquisition where Lo is not NULL;');
    for($d=0;$d<count($result3);$d++){
        if($result3[$d][Lo]!=''){
            $result1[][Lo]=$result3[$d][Lo];
        }
    }
    for($e=0;$e<count($result4);$e++){
        if($result4[$e][Num]!=''){
            $result2[][Num]=$result4[$e][Num];
        }
    }
    for($i=0;$i<count($result1);$i++){
        for($j=0;$j<count($result2);$j++){
            $datat[] = $m->where('Lo = "'.$result1[$i]['Lo']. '" and Num="'.$result2[$j]['Num'].'" and MeasurandType="1"')->limit(1)->select();
            $datap[] = $m->where('Lo = "'.$result1[$i]['Lo']. '" and Num="'.$result2[$j]['Num'].'" and MeasurandType="2"')->limit(1)->select();
            $dataf[] = $m->where('Lo = "'.$result1[$i]['Lo']. '" and Num="'.$result2[$j]['Num'].'" and MeasurandType="3"')->limit(1)->select();
        }
    }
    $h1=count($result1);
    $h2=count($result2);
    $h=$h1*$h2;
    $dataY = $n->where('PN = "para2" or PN="para3" or PN="para5" or PN="para6" or PN = "para8" or PN="para9"')->select();
    $json='[';
    for($a=0;$a<$h;$a++){
        $a1=$datat[$a][0][Lo];
        if($a1==NULL){
            continue;
        }
        $json=$json.'{"id"'.':"'.$a.'",';
        $json=$json.'"Lo"'.':"'.$datat[$a][0][Lo].'",';
        $a2=$datat[$a][0][Num];
        $json=$json.'"num":"'.$datat[$a][0][Num].'",';
        $a3=$datat[$a][0][MeasurandValue];
        if($a3!=null){
            $json=$json.'"tem":"'.$a3.'",';
        }
        if($a3==NULL){
            $json=$json.'"tem":"0",';
        }
        $a4=$datap[$a][0][MeasurandValue];
        if($a4!=null){
            $json=$json.'"pres":"'.$a4.'",';
        }
        if($a4==null){
            $json=$json.'"pres":"0",';
        }
        $a5=$dataf[$a][0][MeasurandValue];
        if($a5!=null){
            $json=$json.'"flow":"'.$a5.'",';
        }
        if($a5==null){
            $json=$json.'"flow":"0",';
        }
        $a7=$dataY[0][Value];
        $json=$json.'"para2":"'. $a7.'",';
        $a8=$dataY[1][Value];
        $json=$json.'"para3":"'. $a8.'",';
        $a9=$dataY[2][Value];
        $json=$json.'"para5":"'. $a9.'",';
        $a10=$dataY[3][Value];
        $json=$json.'"para6":"'. $a10.'",';
        $a11=$dataY[4][Value];
        $json=$json.'"para8":"'. $a11.'",';
        $a12=$dataY[5][Value];
        $json=$json.'"para9":"'. $a12.'"},';
    }
    $json=substr($json,0,(strlen($json)-1)).']';
    print_r($json);
?>