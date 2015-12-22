<?php
$m=M('table_acquisition');
$result3=$m->query('SELECT distinct Lo from table_acquisition where Lo is not NULL;');
$result4=$m->query('SELECT distinct Num from table_acquisition where Num is not NULL;');
for($i=0;$i<count($result3);$i++){
    if($result3[$i][Lo]!=''){
        $result1[]=$result3[$i][Lo];
    }
}
for($j=0;$j<count($result4);$j++){
    if($result4[$j][Num]!=''){
        $result2[]=$result4[$j][Num];
    }
}
$m1=M('table_parameter');
for($k=1;$k<10;$k++){
    $get['PN']=array('like','para'.$k);
    $s[]=$m1->where($get)->select();
}



?>
<div style="width:800px;margin:50px auto;">
    <div style="width:400px;float:left;">
        <div class="row">
            <div class="col-lg-3">
            </div>
            <div class="col-lg-3">
                <div class="form-group input-group">
                    <fieldset disabled="disabled"><button class="btn btn-default" id="var1" style="background-color: #eee;color:#000;">&nbsp;&nbsp;&nbsp;温度：&nbsp;&nbsp;&nbsp;<br/>上限:<?php echo $s[1][0][Value].'°C';?><br/>下限:<?php echo $s[2][0][Value].'°C';?></button></fieldset>

                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group input-group">
                    <fieldset disabled="disabled"><button class="btn btn-default" id="var2" style="background-color: #eee;color:#000;">&nbsp;&nbsp;&nbsp;压力：&nbsp;&nbsp;&nbsp;<br/>上限:<?php echo $s[4][0][Value].'N';?><br/>下限:<?php echo $s[5][0][Value].'N';?></button></fieldset>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group input-group">
                    <fieldset disabled="disabled"><button class="btn btn-default" id="var3" style="background-color: #eee;color:#000;">&nbsp;&nbsp;&nbsp;流速：&nbsp;&nbsp;&nbsp;<br/>上限:<?php echo $s[7][0][Value].'m/s';?><br/>下限:<?php echo $s[8][0][Value].'m/s';?></button></fieldset>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3" style="padding-left: 35px;">
                <div class="form-group input-group">
                    <fieldset disabled="disabled"><input type="button" id="t1" value="<?php echo $result1[0].$result2[0].'：';?>" class="btn btn-default" style="background-color: #eee;color:#000;"/></fieldset>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group input-group">
                    <input type="button" value="" class="btn btn-default" id="id1"/>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group input-group">
                    <input type="button" value="" class="btn btn-default" id="id2"/>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group input-group">
                    <input type="button" value="" class="btn btn-default" id="id3"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3" style="padding-left: 35px;">
                <div class="form-group input-group">
                    <fieldset disabled="disabled"><input type="button" id="t2" value="<?php echo $result1[0].$result2[1].'：';?>" class="btn btn-default" style="background-color: #eee;color:#000;"/></fieldset>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group input-group">
                    <input type="button" value="" class="btn btn-default" id="id4"/>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group input-group">
                    <input type="button" value="" class="btn btn-default" id="id5"/>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group input-group">
                    <input type="button" value="" class="btn btn-default" id="id6"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3" style="padding-left: 35px;">
                <div class="form-group input-group">
                    <fieldset disabled="disabled"><input type="button" id="t3" value="<?php echo $result1[0].$result2[2].'：';?>" class="btn btn-default" style="background-color: #eee;color:#000;"/></fieldset>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group input-group">
                    <input type="button" value="" class="btn btn-default" id="id7"/>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group input-group">
                    <input type="button" value="" class="btn btn-default" id="id8"/>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group input-group">
                    <input type="button" value="" class="btn btn-default" id="id9"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3" style="padding-left: 35px;">
                <div class="form-group input-group">
                    <fieldset disabled="disabled"><input type="button" id="t4" value="<?php echo $result1[0].$result2[3].'：';?>" class="btn btn-default" style="background-color: #eee;color:#000;"/></fieldset>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group input-group">
                    <input type="button" value="" class="btn btn-default" id="id10"/>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group input-group">
                    <input type="button" value="" class="btn btn-default" id="id11"/>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group input-group">
                    <input type="button" value="" class="btn btn-default" id="id12"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3" style="padding-left: 35px;">
                <div class="form-group input-group">
                    <fieldset disabled="disabled"><input type="button" id="t5" value="<?php echo $result1[0].$result2[4].'：';?>" class="btn btn-default" style="background-color: #eee;color:#000;"/></fieldset>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group input-group">
                    <input type="button" value="" class="btn btn-default" id="id13"/>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group input-group">
                    <input type="button" value="" class="btn btn-default" id="id14"/>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group input-group">
                    <input type="button" value="" class="btn btn-default" id="id15"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3" style="padding-left: 35px;">
                <div class="form-group input-group">
                    <fieldset disabled="disabled"><input type="button" id="t6" value="<?php echo $result1[0].$result2[5].'：';?>" class="btn btn-default" style="background-color: #eee;color:#000;"/></fieldset>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group input-group">
                    <input type="button" value="" class="btn btn-default" id="id16"/>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group input-group">
                    <input type="button" value="" class="btn btn-default" id="id17"/>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group input-group">
                    <input type="button" value="" class="btn btn-default" id="id18"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3" style="padding-left: 35px;">
                <div class="form-group input-group">
                    <fieldset disabled="disabled"><input type="button" id="t7" value="<?php echo $result1[0].$result2[6].'：';?>" class="btn btn-default" style="background-color: #eee;color:#000;"/></fieldset>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group input-group">
                    <input type="button" value="" class="btn btn-default" id="id19"/>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group input-group">
                    <input type="button" value="" class="btn btn-default" id="id20"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3" style="padding-left: 35px;">
                <div class="form-group input-group">
                    <fieldset disabled="disabled"><input type="button" id="t8" value="<?php echo $result1[1].$result2[0].'：';?>" class="btn btn-default" style="background-color: #eee;color:#000;"/></fieldset>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group input-group">
                    <input type="button" value="" class="btn btn-default" id="id22"/>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group input-group">
                    <input type="button" value="" class="btn btn-default" id="id23"/>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group input-group">
                    <input type="button" value="" class="btn btn-default" id="id24"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3" style="padding-left: 35px;">
                <div class="form-group input-group">
                    <fieldset disabled="disabled"><input type="button" id="t9" value="<?php echo $result1[1].$result2[1].'：';?>" class="btn btn-default" style="background-color: #eee;color:#000;"/></fieldset>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group input-group">
                    <input type="button" value="" class="btn btn-default" id="id25"/>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group input-group">
                    <input type="button" value="" class="btn btn-default" id="id26"/>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group input-group">
                    <input type="button" value="" class="btn btn-default" id="id27"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3" style="padding-left: 35px;">
                <div class="form-group input-group">
                    <fieldset disabled="disabled"><input type="button" id="t10" value="<?php echo $result1[1].$result2[2].'：';?>" class="btn btn-default" style="background-color: #eee;color:#000;"/></fieldset>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group input-group">
                    <input type="button" value="" class="btn btn-default" id="id28"/>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group input-group">
                    <input type="button" value="" class="btn btn-default" id="id29"/>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group input-group">
                    <input type="button" value="" class="btn btn-default" id="id30"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3" style="padding-left: 35px;">
                <div class="form-group input-group">
                    <fieldset disabled="disabled"><input type="button" id="t11" value="<?php echo $result1[1].$result2[3].'：';?>" class="btn btn-default" style="background-color: #eee;color:#000;"/></fieldset>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group input-group">
                    <input type="button" value="" class="btn btn-default" id="id31"/>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group input-group">
                    <input type="button" value="" class="btn btn-default" id="id32"/>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group input-group">
                    <input type="button" value="" class="btn btn-default" id="id33"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3" style="padding-left: 35px;">
                <div class="form-group input-group">
                    <fieldset disabled="disabled"><input type="button" id="t12" value="<?php echo $result1[1].$result2[4].'：';?>" class="btn btn-default" style="background-color: #eee;color:#000;"/></fieldset>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group input-group">
                    <input type="button" value="" class="btn btn-default" id="id34"/>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group input-group">
                    <input type="button" value="" class="btn btn-default" id="id35"/>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group input-group">
                    <input type="button" value="" class="btn btn-default" id="id36"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3" style="padding-left: 35px;">
                <div class="form-group input-group">
                    <fieldset disabled="disabled"><input type="button" id="t13" value="<?php echo $result1[1].$result2[5].'：';?>" class="btn btn-default" style="background-color: #eee;color:#000;"/></fieldset>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group input-group">
                    <input type="button" value="" class="btn btn-default" id="id37"/>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group input-group">
                    <input type="button" value="" class="btn btn-default" id="id38"/>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group input-group">
                    <input type="button" value="" class="btn btn-default" id="id39"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3" style="padding-left: 35px;">
                <div class="form-group input-group">
                    <fieldset disabled="disabled"><input type="button" id="t14" value="<?php echo $result1[1].$result2[6].'：';?>" class="btn btn-default" style="background-color: #eee;color:#000;"/></fieldset>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group input-group">
                    <input type="button" value="" class="btn btn-default" id="id40"/>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group input-group">
                    <input type="button" value="" class="btn btn-default" id="id41"/>
                </div>
            </div>
        </div>
    </div>
    <div style="width:400px;float:left;">
        <div class="row">
            <div class="col-lg-3">
            </div>
            <div class="col-lg-3">
                <div class="form-group input-group">
                    <fieldset disabled="disabled"><button class="btn btn-default"  style="background-color: #eee;color:#000;">&nbsp;&nbsp;&nbsp;温度：&nbsp;&nbsp;&nbsp;<br/>上限:<?php echo $s[1][0][Value].'°C';?><br/>下限:<?php echo $s[2][0][Value].'°C';?></button></fieldset>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group input-group">
                    <fieldset disabled="disabled"><button class="btn btn-default"  style="background-color: #eee;color:#000;">&nbsp;&nbsp;&nbsp;压力：&nbsp;&nbsp;&nbsp;<br/>上限:<?php echo $s[4][0][Value].'N';?><br/>下限:<?php echo $s[5][0][Value].'N';?></button></fieldset>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group input-group">
                    <fieldset disabled="disabled"><button class="btn btn-default"  style="background-color: #eee;color:#000;">&nbsp;&nbsp;&nbsp;流速：&nbsp;&nbsp;&nbsp;<br/>上限:<?php echo $s[7][0][Value].'m/s';?><br/>下限:<?php echo $s[8][0][Value].'m/s';?></button></fieldset>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3" style="padding-left: 35px;">
                <div class="form-group input-group">
                    <fieldset disabled="disabled"><input type="button" id="t15" value="<?php echo $result1[2].$result2[0].'：';?>" class="btn btn-default" style="background-color: #eee;color:#000;"/></fieldset>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group input-group">
                    <input type="button" value="" class="btn btn-default" id="id43"/>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group input-group">
                    <input type="button" value="" class="btn btn-default" id="id44"/>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group input-group">
                    <input type="button" value="" class="btn btn-default" id="id45"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3" style="padding-left: 35px;">
                <div class="form-group input-group">
                    <fieldset disabled="disabled"><input type="button" id="t16" value="<?php echo $result1[2].$result2[1].'：';?>" class="btn btn-default" style="background-color: #eee;color:#000;"/></fieldset>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group input-group">
                    <input type="button" value="" class="btn btn-default" id="id46"/>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group input-group">
                    <input type="button" value="" class="btn btn-default" id="id47"/>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group input-group">
                    <input type="button" value="" class="btn btn-default" id="id48"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3" style="padding-left: 35px;">
                <div class="form-group input-group">
                    <fieldset disabled="disabled"><input type="button" id="t17" value="<?php echo $result1[2].$result2[2].'：';?>" class="btn btn-default" style="background-color: #eee;color:#000;"/></fieldset>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group input-group">
                    <input type="button" value="" class="btn btn-default" id="id49"/>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group input-group">
                    <input type="button" value="" class="btn btn-default" id="id50"/>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group input-group">
                    <input type="button" value="" class="btn btn-default" id="id51"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3" style="padding-left: 35px;">
                <div class="form-group input-group">
                    <fieldset disabled="disabled"><input type="button" id="t18" value="<?php echo $result1[2].$result2[3].'：';?>" class="btn btn-default" style="background-color: #eee;color:#000;"/></fieldset>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group input-group">
                    <input type="button" value="" class="btn btn-default" id="id52"/>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group input-group">
                    <input type="button" value="" class="btn btn-default" id="id53"/>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group input-group">
                    <input type="button" value="" class="btn btn-default" id="id54"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3" style="padding-left: 35px;">
                <div class="form-group input-group">
                    <fieldset disabled="disabled"><input type="button" id="t19" value="<?php echo $result1[2].$result2[4].'：';?>" class="btn btn-default" style="background-color: #eee;color:#000;"/></fieldset>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group input-group">
                    <input type="button" value="" class="btn btn-default" id="id55"/>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group input-group">
                    <input type="button" value="" class="btn btn-default" id="id56"/>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group input-group">
                    <input type="button" value="" class="btn btn-default" id="id57"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3" style="padding-left: 35px;">
                <div class="form-group input-group">
                    <fieldset disabled="disabled"><input type="button" id="t20" value="<?php echo $result1[2].$result2[5].'：';?>" class="btn btn-default" style="background-color: #eee;color:#000;"/></fieldset>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group input-group">
                    <input type="button" value="" class="btn btn-default" id="id58"/>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group input-group">
                    <input type="button" value="" class="btn btn-default" id="id59"/>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group input-group">
                    <input type="button" value="" class="btn btn-default" id="id60"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3" style="padding-left: 35px;">
                <div class="form-group input-group">
                    <fieldset disabled="disabled"><input type="button" id="t21" value="<?php echo $result1[2].$result2[6].'：';?>" class="btn btn-default" style="background-color: #eee;color:#000;"/></fieldset>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group input-group">
                    <input type="button" value="" class="btn btn-default" id="id61"/>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group input-group">
                    <input type="button" value="" class="btn btn-default" id="id62"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3" style="padding-left: 35px;">
                <div class="form-group input-group">
                    <fieldset disabled="disabled"><input type="button" id="t22" value="<?php echo $result1[3].$result2[0].'：';?>" class="btn btn-default" style="background-color: #eee;color:#000;"/></fieldset>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group input-group">
                    <input type="button" value="" class="btn btn-default" id="id64"/>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group input-group">
                    <input type="button" value="" class="btn btn-default" id="id65"/>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group input-group">
                    <input type="button" value="" class="btn btn-default" id="id66"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3" style="padding-left: 35px;">
                <div class="form-group input-group">
                    <fieldset disabled="disabled"><input type="button" id="t23" value="<?php echo $result1[3].$result2[1].'：';?>" class="btn btn-default" style="background-color: #eee;color:#000;"/></fieldset>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group input-group">
                    <input type="button" value="" class="btn btn-default" id="id67"/>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group input-group">
                    <input type="button" value="" class="btn btn-default" id="id68"/>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group input-group">
                    <input type="button" value="" class="btn btn-default" id="id69"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3" style="padding-left: 35px;">
                <div class="form-group input-group">
                    <fieldset disabled="disabled"><input type="button" id="t24" value="<?php echo $result1[3].$result2[2].'：';?>" class="btn btn-default" style="background-color: #eee;color:#000;"/></fieldset>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group input-group">
                    <input type="button" value="" class="btn btn-default" id="id70"/>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group input-group">
                    <input type="button" value="" class="btn btn-default" id="id71"/>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group input-group">
                    <input type="button" value="" class="btn btn-default" id="id72"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3" style="padding-left: 35px;">
                <div class="form-group input-group">
                    <fieldset disabled="disabled"><input type="button" id="t25" value="<?php echo $result1[3].$result2[3].'：';?>" class="btn btn-default" style="background-color: #eee;color:#000;"/></fieldset>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group input-group">
                    <input type="button" value="" class="btn btn-default" id="id73"/>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group input-group">
                    <input type="button" value="" class="btn btn-default" id="id74"/>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group input-group">
                    <input type="button" value="" class="btn btn-default" id="id75"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3" style="padding-left: 35px;">
                <div class="form-group input-group">
                    <fieldset disabled="disabled"><input type="button" id="t26" value="<?php echo $result1[3].$result2[4].'：';?>" class="btn btn-default" style="background-color: #eee;color:#000;"/></fieldset>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group input-group">
                    <input type="button" value="" class="btn btn-default" id="id76"/>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group input-group">
                    <input type="button" value="" class="btn btn-default" id="id77"/>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group input-group">
                    <input type="button" value="" class="btn btn-default" id="id78"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3" style="padding-left: 35px;">
                <div class="form-group input-group">
                    <fieldset disabled="disabled"><input type="button" id="t27" value="<?php echo $result1[3].$result2[5].'：';?>" class="btn btn-default" style="background-color: #eee;color:#000;"/></fieldset>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group input-group">
                    <input type="button" value="" class="btn btn-default" id="id79"/>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group input-group">
                    <input type="button" value="" class="btn btn-default" id="id80"/>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group input-group">
                    <input type="button" value="" class="btn btn-default" id="id81"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3" style="padding-left: 35px;">
                <div class="form-group input-group">
                    <fieldset disabled="disabled"><input type="button" id="t28" value="<?php echo $result1[3].$result2[6].'：';?>" class="btn btn-default" style="background-color: #eee;color:#000;"/></fieldset>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group input-group">
                    <input type="button" value="" class="btn btn-default" id="id82"/>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group input-group">
                    <input type="button" value="" class="btn btn-default" id="id83"/>
                </div>
            </div>
        </div>
    </div>

</div>
<script src="__JSS__/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
    var obj=document.getElementById('li3');
    obj.setAttribute('class','active');
    $(function(){
        var timer=setInterval(function () {
            queryData();
        },500);
    });
    function queryData(){
        $.ajax({
            url:'?s=Forward/forward/url/warningDeal',
            type:'get',
            dataType:"json",
            success:function(data){
                $.each(data,function(i,n){
                    if(n.temp!=0){
                        document.getElementById('id'+ ((n.id)*3+1)).value= n.tem+"°C";
                    }
                    if(n.pres!=0){
                        document.getElementById('id'+ ((n.id)*3+2)).value= n.pres+"N";
                    }
                    if(n.flow!=0){
                        document.getElementById('id'+ ((n.id)*3+3)).value= n.flow+"m/s";
                    }
                    if(((n.tem)*1)>=((n.para2)*1)||((n.tem)*1)<=((n.para3)*1)){
                        if(n.temp!=0){
                            document.getElementById('id'+ ((n.id)*3+1)).setAttribute('class','btn btn-danger');
                        }
                    }else{
                        document.getElementById('id'+ ((n.id)*3+1)).setAttribute('class','btn btn-default');
                    }
                    if(((n.pres)*1)>=((n.para5)*1)||((n.pres)*1)<=((n.para6)*1)){
                        if(n.pres!=0){
                            document.getElementById('id'+ ((n.id)*3+2)).setAttribute('class','btn btn-danger');
                        }
                    }else{
                        document.getElementById('id'+ ((n.id)*3+2)).setAttribute('class','btn btn-default');
                    }
                    if(((n.flow)*1)>=((n.para2)*8)||((n.flow)*1)<=((n.para9)*1)){
                        if(n.flow!=0){
                            document.getElementById('id'+ ((n.id)*3+3)).setAttribute('class','btn btn-danger');
                        }
                    }else{
                        document.getElementById('id'+ ((n.id)*3+3)).setAttribute('class','btn btn-default');
                    }
                });
            }
        });
    }
</script>