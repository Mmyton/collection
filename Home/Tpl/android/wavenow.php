<?php
$m=M('view_search');  
$n=M('table_parameter');
$Lo=$_GET['Lo'];
$Num=$_GET['Num'];

$datat = $m->where('Lo = "'.$Lo. '" and Num="'.$Num.'" and MeasurandType="1"')->limit(1)->select(); 
$datap = $m->where('Lo = "'.$Lo. '" and Num="'.$Num.'" and MeasurandType="2"')->limit(1)->select(); 
$dataf = $m->where('Lo = "'.$Lo. '" and Num="'.$Num.'" and MeasurandType="3"')->limit(1)->select(); 
$dataY = $n->where('PN = "para2" or PN="para3" or PN="para5" or PN="para6" or PN = "para8" or PN="para9"')->select();
$json='[';
		$a=$datat[0][InfoId];
		$json =$json.'{"InfoId"'.':"'.$a.'",';
		$a1=$datat[0][Lo];
		$json =$json.'"Lo"'.':"'.$Lo.'",';
		$a2=$datat[0][Num];
		$json =$json.'"num":"'. $Num.'",';
		$a3=$datat[0][WaveLength];
		if($a3!=null){
		$json =$json.'"tem":"'.$a3.'",';
		}
		if($a3==NULL){
		$json =$json.'"tem":"0",';
		}
		$a4=$datap[0][WaveLength];
		if($a4!=null){
		$json =$json.'"pres":"'.$a4.'",';
		}
		if($a4==null){
		$json =$json.'"pres":"0",';	
		}
		$a5=$dataf[0][WaveLength];
		if($a5!=null){
		$json =$json.'"flow":"'.$a5.'",';
		}
		if($a5==null){
		$json =$json.'"flow":"0",';
		}
		$a6=$datat[0][ITime];
		if($a6==null){
			$a6=$datap[0][ITime];
			if($a6==null){
				$a6=$dataf[0][ITime];
			}
		}
		$json =$json.'"ts":"'.$a6.'",';
		$a7=$dataY[0][Value];
		$json =$json.'"para2":"'. $a7.'",';
		$a8=$dataY[1][Value];
		$json =$json.'"para3":"'. $a8.'",';
		$a9=$dataY[2][Value];
		$json =$json.'"para5":"'. $a9.'",';
		$a10=$dataY[3][Value];
		$json =$json.'"para6":"'. $a10.'",';
		$a11=$dataY[4][Value];
		$json =$json.'"para8":"'. $a11.'",';
		$a12=$dataY[5][Value];
		$json =$json.'"para9":"'. $a12.'"}';
$json =$json.']';
print_r($json);

?>