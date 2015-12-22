<?php
$m=M('table_acquisition');
$list = $m->query('SELECT distinct Lo from table_acquisition;');  
$list1 = $m->query('SELECT distinct Num from table_acquisition;');  
$Count=count($list);
$Count1=count($list1);
$lo=array();
$json='[';
for($h=0;$h<$Count;$h++){
		$a1=$list[$h][Lo];
		$a2=$list1[$h][Num];
if ($h!=$Count-1){
		$a1=$list[$h][Lo];
		$json =$json.'{"Lo"'.':"'.$a1.'"},';
		
}
if ($h==$Count-1){
			$a1=$list[$h][Lo];
		$json =$json.'{"Lo"'.':"'.$a1.'"}';
		
}
}
$json=$json.',';
for($h=0;$h<$Count1;$h++){
		$a2=$list1[$h][Num];
if ($h!=$Count1-1){
		$a2=$list1[$h][Num];
		$json =$json.'{"Num":"'. $a2.'"},';
}
if ($h==$Count1-1){
		$a2=$list1[$h][Num];
		$json =$json.'{"Num":"'. $a2.'"}';
		
}
}

$json =$json.']';
print_r($json);
	

?>
