<?php
//	$m=M('table_flag');
//	$result0=$m->query('select flag from table_flag where Flagname="Clear";');
//	
//	if($result0[0][flag]==0){
        $s=M('table_flag');
        $result=$s->query('update table_flag set Flag="1" where Flagname="Clear";');
//	}
?>