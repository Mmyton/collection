<?php
    $m=M('table_acquisition');
    $result3=$m->query('SELECT distinct Lo from table_acquisition where Lo is not NULL;');
    $result4=$m->query('SELECT distinct Num from table_acquisition where Num is not NULL;');
    $result5=$m->query('SELECT distinct Ch from table_acquisition where Ch is not NULL;');
    $result6=$m->query('SELECT distinct FBG from table_acquisition where FBG is not NULL;');
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

?>
<layout name='muban'/>
<div id="page-wrapper">
    <center><h2>采集点添加</h2></center>
    <form method="post" action="?s=BackForward/backforward/url/acqAddDeal">
        <div class="acqAdd">
            <p>
                <div class="row">
                    <div class="col-lg-6">
                            <div class="form-group input-group">
                                <span class="input-group-addon">区号：</span>
                                <select class="form-control" id="acq1" name="acq1">
                                    <?php
                                        for($i=0;$i<count($result3);$i++){
                                            $str='<option>'.$result3[$i][Lo].'</option>';
                                            if($result3[$i][Lo]!=''&& $result3[$i][Lo]!=NULL){
                                                echo $str;
                                            }
                                        }
                                    ?>
                                </select>
                            </div>
                    </div>
                    <div class="col-lg-6">
                            <div class="form-group input-group">
                                <span class="input-group-addon">编号：</span>
                                <select class="form-control" id="acq2" name="acq2">
                                    <?php
                                    for($i=0;$i<count($result4);$i++){
                                        $str='<option>'.$result4[$i][Num].'</option>';
                                        if($result4[$i][Num]!=''&& $result4[$i][Num]!=NULL){
                                            echo $str;
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                    </div>
                </div>
            </p>
            <p>
                <div class="row">
                    <div class="col-lg-6">
                            <div class="form-group input-group">
                                <span class="input-group-addon">通道：</span>
                                <select class="form-control" id="acq3" name="acq3">
                                    <?php
                                    for($i=0;$i<count($result5);$i++){
                                        $str='<option>'.$result5[$i][Ch].'</option>';
                                        if($result5[$i][Ch]!=''&& $result5[$i][Ch]!=NULL){
                                            echo $str;
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                    </div>
                    <div class="col-lg-6">
                            <div class="form-group input-group">
                                <span class="input-group-addon">路号：</span>
                                <select class="form-control" id="acq4" name="acq4">
                                    <?php
                                    for($i=0;$i<count($result6);$i++){
                                        $str='<option>'.$result6[$i][FBG].'</option>';
                                        if($result6[$i][FBG]!=''&& $result6[$i][FBG]!=NULL){
                                            echo $str;
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                    </div>
                </div>
            </p>
            <p>
                <div class="row">
                    <div class="col-lg-12">
                            <div class="form-group input-group">
                                <span class="input-group-addon">参数类型：</span>
                                <select class="form-control" name="acq5" id="acq5">
                                    <option>温度</option>
                                    <option>压力</option>
                                    <option>流速</option>
                                </select>
                            </div>
                    </div>

                </div>
            </p>
            <p>
                <div class="row">
                    <div class="col-lg-12">
                            <div class="form-group input-group">
                                <span class="input-group-addon">说明：</span>
                                <input type="text" class="form-control" name="acq6" id="acq6"/>
                            </div>
                    </div>
                </div>
            </p>
            <div style="float:left;"><button type="reset" class="btn btn-primary">重置</button></div>
            <div style="float:right;"><button type="submit" class="btn btn-primary">保存</button></div>
        </div>
    </form>
</div>