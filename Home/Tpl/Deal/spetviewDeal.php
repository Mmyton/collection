<?php
$m1=M('table_flag');
$result1=$m1->query('select flag from table_flag where Flagname="Table";');
//if($result1[0][flag]==0){
    $Ch=$_GET['Ch'];
    $result=$m1->query('update table_flag set flag='.$Ch.' where Flagname="SC";');
    $SR=$_GET['SR'];
    $SetTime=$_GET['SetTime'];
    if($SR==true){
        $s=M('table_flag');
        $s->query('update table_flag set flag=1 where Flagname="SR";');
    }else if($SR==false){
        $s=M('table_flag');
        $s->query('update table_flag set flag=0 where Flagname="SR";');
    }
    if($SetTime!=null){
        $unixTime=strtotime($SetTime);
        $s->query("update table_flag set flag='".$unixTime."' where Flagname='ST';");
    }
    $m=M('table_tempspec'.$result1[0][flag]);
    $result=$m->query('select * from table_tempspec'.$result1[0][flag].' where Ch="'.$Ch.'";');
    echo json_encode($result);
//}
?>
