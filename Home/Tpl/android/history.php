<?php
$Lo=$_GET['Lo'];
$Num=$_GET['Num'];
$timebegin=$_GET['timebegin'];
$timeend=$_GET['timeend'];
//起始时间在两小时之内


if(2>(strtotime(date('Y-m-d H:i:s')) - strtotime($timebegin.':00'))/60/60){
$m=M('view_search');	
$datat = $m->query('SELECT * FROM view_search where Lo = "'.$Lo.'" and Num="'.$Num.'" and MeasurandType="1"'." and ITime > '".$timebegin.":00' and ITime<'".$timeend.":00' order by ITime asc;"); 
$datap = $m->query('SELECT * FROM view_search where Lo = "'.$Lo.'" and Num="'.$Num.'" and MeasurandType="2"'." and ITime > '".$timebegin.":00' and ITime<'".$timeend.":00' order by ITime asc;");
$dataf = $m->query('SELECT * FROM view_search where Lo = "'.$Lo.'" and Num="'.$Num.'" and MeasurandType="3"'." and ITime > '".$timebegin.":00' and ITime<'".$timeend.":00' order by ITime asc;");
$Count1=count($datat);
$Count2=count($datap);
$Count3=count($dataf);
function get_max($Count1,$Count2,$Count3)
{
    return ( $Count1 > $Count2 ? $Count1 : $Count2 ) > $Count3 ? ( $Count1 > $Count2 ? $Count1 : $Count2 ) : $Count3;
}
$Count=get_max($Count1,$Count2,$Count3); // 输出3

$json='[';
for($h=0;$h<$Count/2;$h++){
if($h!=$Count-1){
		$a1=$datat[$h][Lo];
		$json =$json.'{"Lo"'.':"'.$Lo.'",';
		$a2=$datat[$h][Num];
		$json =$json.'"num":"'. $Num.'",';
		if($datat[$h][MeasurandValue]!=NULL){
		$a3=$datat[$h][MeasurandValue];
		}
		if($datat[$h][MeasurandValue]==NULL){
		$a3="0";
		}
		$json =$json.'"tem":"'.$a3.'",';
		if($datap[$h][MeasurandValue]!=null){
		$a4=$datap[$h][MeasurandValue];
		}
		if($datap[$h][MeasurandValue]==null){
			$a4="0";
		}
		$json =$json.'"pres":"'.$a4.'",';
		if($dataf[$h][MeasurandValue]!=null){
		$a5=$dataf[$h][MeasurandValue];
		}
		if($dataf[$h][MeasurandValue]==null){
		$a5="0";
		}
		$json =$json.'"flow":"'.$a5.'",';
		if($datat[$h][ITime]!=NULL){
			$a6=$datat[$h][ITime];
		}
		if($datap[$h][ITime]!=NULL){
			$a6=$datap[$h][ITime];
		}
		if($dataf[$h][ITime]!=NULL){
			$a6=$dataf[$h][ITime];
		}
		if($datat[$h][ITime]==NULL && $datap[$h][ITime]!=NULL && $dataf[$h][ITime]!=NULL){
			$a6="0";
		}
		$json =$json.'"ts":"'.$a6.'",';
		$json =$json.'"sign":"0"},';
		
		
}
else if ($h==$Count-1){
		$a1=$datat[$h][Lo];
		$json =$json.'{"Lo"'.':"'.$Lo.'",';
		$a2=$datat[$h][Num];
		$json =$json.'"num":"'. $Num.'",';
		if($datat[$h][MeasurandValue]!=NULL){
		$a3=$datat[$h][MeasurandValue];
		}
		if($datat[$h][MeasurandValue]==NULL){
		$a3="0";
		}
		$json =$json.'"tem":"'.$a3.'",';
		if($datap[$h][MeasurandValue]!=null){
		$a4=$datap[$h][MeasurandValue];
		}
		if($datap[$h][MeasurandValue]==null){
			$a4="0";
		}
		$json =$json.'"pres":"'.$a4.'",';
		if($dataf[$h][MeasurandValue]!=null){
		$a5=$dataf[$h][MeasurandValue];
		}
		if($dataf[$h][MeasurandValue]==null){
		$a5="0";
		}
		$json =$json.'"flow":"'.$a5.'",';
		if($datat[$h][ITime]!=NULL){
			$a6=$datat[$h][ITime];
		}
		if($datap[$h][ITime]!=NULL){
			$a6=$datap[$h][ITime];
		}
		if($dataf[$h][ITime]!=NULL){
			$a6=$dataf[$h][ITime];
		}
		if($datat[$h][ITime]==NULL && $datap[$h][ITime]!=NULL && $dataf[$h][ITime]!=NULL){
			$a6="0";
		}
		$json =$json.'"ts":"'.$a6.'",';
		$json =$json.'"sign":"0"}';
}

}
$json =$json.']';
print_r($json);
	
}
//2天内分钟表
if(2>(strtotime(date('Y-m-d H:i:s')) - strtotime($timebegin.':00'))/60/60/24 ){ 
if(2<(strtotime(date('Y-m-d H:i:s')) - strtotime($timebegin.':00'))/60/60){
	
$m=M('table_min');	
$m1=M('table_acquisition');
$aidt=$m1->query('SELECT AId from table_acquisition where Lo = "'.$Lo.'" and Num="'.$Num.'" and MeasurandType="1"');
$aidp=$m1->query('SELECT AId from table_acquisition where Lo = "'.$Lo.'" and Num="'.$Num.'" and MeasurandType="2"');
$aidf=$m1->query('SELECT AId from table_acquisition where Lo = "'.$Lo.'" and Num="'.$Num.'" and MeasurandType="3"');
$datat = $m->query('SELECT * FROM table_min where AId = '.$aidt[0][AId]." and ITime > '".$timebegin.":00' and ITime<'".$timeend.":00' order by ITime asc;"); 
$datap = $m->query('SELECT * FROM table_min where AId = '.$aidp[0][AId]." and ITime > '".$timebegin.":00' and ITime<'".$timeend.":00' order by ITime asc;");
$dataf = $m->query('SELECT * FROM table_min where AId = '.$aidf[0][AId]." and ITime > '".$timebegin.":00' and ITime<'".$timeend.":00' order by ITime asc;");
$Count1=count($datat);
$Count2=count($datap);
$Count3=count($dataf);
function get_max($Count1,$Count2,$Count3)
{
    return ( $Count1 > $Count2 ? $Count1 : $Count2 ) > $Count3 ? ( $Count1 > $Count2 ? $Count1 : $Count2 ) : $Count3;
}
$Count=get_max($Count1,$Count2,$Count3); // 输出3
$json='[';
for($h=0;$h<$Count;$h++){
if($h!=$Count-1){
		$a1=$datat[$h][Lo];
		$json =$json.'{"Lo"'.':"'.$Lo.'",';
		$a2=$datat[$h][Num];
		$json =$json.'"num":"'. $Num.'",';
		if($datat[$h][MeasurandValue]!=NULL){
		$a3=$datat[$h][MeasurandValue];
		}
		if($datat[$h][MeasurandValue]==NULL){
		$a3="0";
		}
		$json =$json.'"tem":"'.$a3.'",';
		if($datap[$h][MeasurandValue]!=null){
		$a4=$datap[$h][MeasurandValue];
		}
		if($datap[$h][MeasurandValue]==null){
			$a4="0";
		}
		$json =$json.'"pres":"'.$a4.'",';
		if($dataf[$h][MeasurandValue]!=null){
		$a5=$dataf[$h][MeasurandValue];
		}
		if($dataf[$h][MeasurandValue]==null){
		$a5="0";
		}
		$json =$json.'"flow":"'.$a5.'",';
		if($datat[$h][ITime]!=NULL){
			$a6=$datat[$h][ITime];
		}
		if($datap[$h][ITime]!=NULL){
			$a6=$datap[$h][ITime];
		}
		if($dataf[$h][ITime]!=NULL){
			$a6=$dataf[$h][ITime];
		}
		if($datat[$h][ITime]==NULL && $datap[$h][ITime]!=NULL && $dataf[$h][ITime]!=NULL){
			$a6="0";
		}
		$json =$json.'"ts":"'.$a6.'",';
		$json =$json.'"sign":"1"},';
		
		
}
else if ($h==$Count-1){
		$a1=$datat[$h][Lo];
		$json =$json.'{"Lo"'.':"'.$Lo.'",';
		$a2=$datat[$h][Num];
		$json =$json.'"num":"'. $Num.'",';
		if($datat[$h][MeasurandValue]!=NULL){
		$a3=$datat[$h][MeasurandValue];
		}
		if($datat[$h][MeasurandValue]==NULL){
		$a3="0";
		}
		$json =$json.'"tem":"'.$a3.'",';
		if($datap[$h][MeasurandValue]!=null){
		$a4=$datap[$h][MeasurandValue];
		}
		if($datap[$h][MeasurandValue]==null){
			$a4="0";
		}
		$json =$json.'"pres":"'.$a4.'",';
		if($dataf[$h][MeasurandValue]!=null){
		$a5=$dataf[$h][MeasurandValue];
		}
		if($dataf[$h][MeasurandValue]==null){
		$a5="0";
		}
		$json =$json.'"flow":"'.$a5.'",';
		if($datat[$h][ITime]!=NULL){
			$a6=$datat[$h][ITime];
		}
		if($datap[$h][ITime]!=NULL){
			$a6=$datap[$h][ITime];
		}
		if($dataf[$h][ITime]!=NULL){
			$a6=$dataf[$h][ITime];
		}
		if($datat[$h][ITime]==NULL && $datap[$h][ITime]!=NULL && $dataf[$h][ITime]!=NULL){
			$a6="0";
		}
		$json =$json.'"ts":"'.$a6.'",';
		$json =$json.'"sign":"1"}';
}

}
$json =$json.']';
print_r($json);
}
}
if(2<(strtotime(date('Y-m-d H:i:s')) - strtotime($timeend.':00'))/60/60/24){
	if(7>(strtotime(date('Y-m-d H:i:s')) - strtotime($timebegin.':00'))/60/60/24){
$m=M('table_hour');	
$m1=M('table_acquisition');
$aidt=$m1->query('SELECT AId from table_acquisition where Lo = "'.$Lo.'" and Num="'.$Num.'" and MeasurandType="1"');
$aidp=$m1->query('SELECT AId from table_acquisition where Lo = "'.$Lo.'" and Num="'.$Num.'" and MeasurandType="2"');
$aidf=$m1->query('SELECT AId from table_acquisition where Lo = "'.$Lo.'" and Num="'.$Num.'" and MeasurandType="3"');
$datat = $m->query('SELECT * FROM table_hour where AId = '.$aidt[0][AId]." and ITime > '".$timebegin.":00' and ITime<'".$timeend.":00' order by ITime asc;"); 
$datap = $m->query('SELECT * FROM table_hour where AId = '.$aidp[0][AId]." and ITime > '".$timebegin.":00' and ITime<'".$timeend.":00' order by ITime asc;");
$dataf = $m->query('SELECT * FROM table_hour where AId = '.$aidf[0][AId]." and ITime > '".$timebegin.":00' and ITime<'".$timeend.":00' order by ITime asc;");
$Count1=count($datat);
$Count2=count($datap);
$Count3=count($dataf);
function get_max($Count1,$Count2,$Count3)
{
    return ( $Count1 > $Count2 ? $Count1 : $Count2 ) > $Count3 ? ( $Count1 > $Count2 ? $Count1 : $Count2 ) : $Count3;
}
$Count=get_max($Count1,$Count2,$Count3); // 输出3
		$json='[';
for($h=0;$h<$Count;$h++){
if($h!=$Count-1){
		$a1=$datat[$h][Lo];
		$json =$json.'{"Lo"'.':"'.$Lo.'",';
		$a2=$datat[$h][Num];
		$json =$json.'"num":"'. $Num.'",';
		if($datat[$h][MeasurandValue]!=NULL){
		$a3=$datat[$h][MeasurandValue];
		}
		if($datat[$h][MeasurandValue]==NULL){
		$a3="0";
		}
		$json =$json.'"tem":"'.$a3.'",';
		if($datap[$h][MeasurandValue]!=null){
		$a4=$datap[$h][MeasurandValue];
		}
		if($datap[$h][MeasurandValue]==null){
			$a4="0";
		}
		$json =$json.'"pres":"'.$a4.'",';
		if($dataf[$h][MeasurandValue]!=null){
		$a5=$dataf[$h][MeasurandValue];
		}
		if($dataf[$h][MeasurandValue]==null){
		$a5="0";
		}
		$json =$json.'"flow":"'.$a5.'",';
		if($datat[$h][ITime]!=NULL){
			$a6=$datat[$h][ITime];
		}
		if($datap[$h][ITime]!=NULL){
			$a6=$datap[$h][ITime];
		}
		if($dataf[$h][ITime]!=NULL){
			$a6=$dataf[$h][ITime];
		}
		if($datat[$h][ITime]==NULL && $datap[$h][ITime]!=NULL && $dataf[$h][ITime]!=NULL){
			$a6="0";
		}
		$json =$json.'"ts":"'.$a6.'",';
		$json =$json.'"sign":"1"},';
		
		
}
else if ($h==$Count-1){
		$a1=$datat[$h][Lo];
		$json =$json.'{"Lo"'.':"'.$Lo.'",';
		$a2=$datat[$h][Num];
		$json =$json.'"num":"'. $Num.'",';
		if($datat[$h][MeasurandValue]!=NULL){
		$a3=$datat[$h][MeasurandValue];
		}
		if($datat[$h][MeasurandValue]==NULL){
		$a3="0";
		}
		$json =$json.'"tem":"'.$a3.'",';
		if($datap[$h][MeasurandValue]!=null){
		$a4=$datap[$h][MeasurandValue];
		}
		if($datap[$h][MeasurandValue]==null){
			$a4="0";
		}
		$json =$json.'"pres":"'.$a4.'",';
		if($dataf[$h][MeasurandValue]!=null){
		$a5=$dataf[$h][MeasurandValue];
		}
		if($dataf[$h][MeasurandValue]==null){
		$a5="0";
		}
		$json =$json.'"flow":"'.$a5.'",';
		if($datat[$h][ITime]!=NULL){
			$a6=$datat[$h][ITime];
		}
		if($datap[$h][ITime]!=NULL){
			$a6=$datap[$h][ITime];
		}
		if($dataf[$h][ITime]!=NULL){
			$a6=$dataf[$h][ITime];
		}
		if($datat[$h][ITime]==NULL && $datap[$h][ITime]!=NULL && $dataf[$h][ITime]!=NULL){
			$a6="0";
		}
		$json =$json.'"ts":"'.$a6.'",';
		$json =$json.'"sign":"1"}';
}

}
$json =$json.']';
print_r($json);
}
}
if(7<=(strtotime(date('Y-m-d H:i:s')) - strtotime($timebegin.':00'))/60/60/24){
	$m=M('table_day');	
	$m1=M('table_acquisition');
	$aidt=$m1->query('SELECT AId from table_acquisition where Lo = "'.$Lo.'" and Num="'.$Num.'" and MeasurandType="1"');
	$aidp=$m1->query('SELECT AId from table_acquisition where Lo = "'.$Lo.'" and Num="'.$Num.'" and MeasurandType="2"');
	$aidf=$m1->query('SELECT AId from table_acquisition where Lo = "'.$Lo.'" and Num="'.$Num.'" and MeasurandType="3"');
	$datat = $m->query('SELECT * FROM table_day where AId = '.$aidt[0][AId]." and ITime > '".$timebegin.":00' and ITime<'".$timeend.":00' order by ITime asc;"); 
	$datap = $m->query('SELECT * FROM table_day where AId = '.$aidp[0][AId]." and ITime > '".$timebegin.":00' and ITime<'".$timeend.":00' order by ITime asc;");
	$dataf = $m->query('SELECT * FROM table_day where AId = '.$aidf[0][AId]." and ITime > '".$timebegin.":00' and ITime<'".$timeend.":00' order by ITime asc;");
	$Count1=count($datat);
	$Count2=count($datap);
	$Count3=count($dataf);
function get_max($Count1,$Count2,$Count3)
{
    return ( $Count1 > $Count2 ? $Count1 : $Count2 ) > $Count3 ? ( $Count1 > $Count2 ? $Count1 : $Count2 ) : $Count3;
}
$Count=get_max($Count1,$Count2,$Count3); // 输出3
		$json='[';
for($h=0;$h<$Count;$h++){
if($h!=$Count-1){
		$a1=$datat[$h][Lo];
		$json =$json.'{"Lo"'.':"'.$Lo.'",';
		$a2=$datat[$h][Num];
		$json =$json.'"num":"'. $Num.'",';
		if($datat[$h][MeasurandValue]!=NULL){
		$a3=$datat[$h][MeasurandValue];
		}
		if($datat[$h][MeasurandValue]==NULL){
		$a3="0";
		}
		$json =$json.'"tem":"'.$a3.'",';
		if($datap[$h][MeasurandValue]!=null){
		$a4=$datap[$h][MeasurandValue];
		}
		if($datap[$h][MeasurandValue]==null){
			$a4="0";
		}
		$json =$json.'"pres":"'.$a4.'",';
		if($dataf[$h][MeasurandValue]!=null){
		$a5=$dataf[$h][MeasurandValue];
		}
		if($dataf[$h][MeasurandValue]==null){
		$a5="0";
		}
		$json =$json.'"flow":"'.$a5.'",';
		if($datat[$h][ITime]!=NULL){
			$a6=$datat[$h][ITime];
		}
		if($datap[$h][ITime]!=NULL){
			$a6=$datap[$h][ITime];
		}
		if($dataf[$h][ITime]!=NULL){
			$a6=$dataf[$h][ITime];
		}
		if($datat[$h][ITime]==NULL && $datap[$h][ITime]!=NULL && $dataf[$h][ITime]!=NULL){
			$a6="0";
		}
		$json =$json.'"ts":"'.$a6.'",';
		$json =$json.'"sign":"1"},';
		
		
}
else if ($h==$Count-1){
		$a1=$datat[$h][Lo];
		$json =$json.'{"Lo"'.':"'.$Lo.'",';
		$a2=$datat[$h][Num];
		$json =$json.'"num":"'. $Num.'",';
		if($datat[$h][MeasurandValue]!=NULL){
		$a3=$datat[$h][MeasurandValue];
		}
		if($datat[$h][MeasurandValue]==NULL){
		$a3="0";
		}
		$json =$json.'"tem":"'.$a3.'",';
		if($datap[$h][MeasurandValue]!=null){
		$a4=$datap[$h][MeasurandValue];
		}
		if($datap[$h][MeasurandValue]==null){
			$a4="0";
		}
		$json =$json.'"pres":"'.$a4.'",';
		if($dataf[$h][MeasurandValue]!=null){
		$a5=$dataf[$h][MeasurandValue];
		}
		if($dataf[$h][MeasurandValue]==null){
		$a5="0";
		}
		$json =$json.'"flow":"'.$a5.'",';
		if($datat[$h][ITime]!=NULL){
			$a6=$datat[$h][ITime];
		}
		if($datap[$h][ITime]!=NULL){
			$a6=$datap[$h][ITime];
		}
		if($dataf[$h][ITime]!=NULL){
			$a6=$dataf[$h][ITime];
		}
		if($datat[$h][ITime]==NULL && $datap[$h][ITime]!=NULL && $dataf[$h][ITime]!=NULL){
			$a6="0";
		}
		$json =$json.'"ts":"'.$a6.'",';
		$json =$json.'"sign":"1"}';
}

}
$json =$json.']';
print_r($json);
}
?>
