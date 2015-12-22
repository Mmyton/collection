<?php
    $Ch=$_GET['Ch'];
    $StartTime=$_GET['StartTime'];
    $StopTime=$_GET['StopTime'];
    $m=M('table_spectrum');
    $result2=$m->query("SELECT distinct STime from table_spectrum where Ch='".$Ch."'and STime>='".$StartTime."' and STime<='".$StopTime."';");
    $h2=count($result2);
    echo json_encode($h2);
?>