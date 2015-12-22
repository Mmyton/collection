<?php
    $Ch=$_GET['Ch'];
    $StartTime=$_GET['StartTime'];
    $StopTime=$_GET['StopTime'];
    $m=M('table_spectrum');
    $result=$m->query("SELECT * from table_spectrum where Ch='".$Ch."'and STime>='".$StartTime."' and STime<='".$StopTime."';");
    $h=count($result);
    $result1=$m->query("SELECT distinct STime from table_spectrum where Ch='".$Ch."' and STime>='".$StartTime."' and STime<='".$StopTime."';");
    $h1=count($result1);
    if($h!=0&&$h1!=0){
        for($j=0;$j<=$h1;$j++){
            for($i=0;$i<$h;$i++){
                if(strtotime($result[$i]['STime'])==strtotime($result1[$j]['STime'])){
                    $result[$i]['id']=$j;
                    $data[]=$result[$i];
                }
            }
        }
        echo json_encode($data);
    }

?>