<layout name='muban'/>
<?php
    $acq_AId=$_GET['acq_AId'];
    $m=M('table_acquisition');
    $where['AId']=array('like',$acq_AId);
    $data=$m->where($where)->limit(1)->find();
?>
<div id="page-wrapper">
    <center><h2>采集点修改</h2></center>
    <form method="post" action="?s=BackForward/backforward/url/acqEditDeal/acq_AId/<?php echo $acq_AId;?>">
        <div class="acqAdd">
            <p>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group input-group">
                        <span class="input-group-addon">区号：</span>
                        <input type="text" class="form-control" name="acq1" id="acq1" value="<?php echo $data['Lo'];?>"/>
                    </div>
                    <pre>区号可填范围为A~D之间的一个</pre>
                </div>
                <div class="col-lg-6">
                    <div class="form-group input-group">
                        <span class="input-group-addon">编号：</span>
                        <input type="text" class="form-control" name="acq2" id="acq2" value="<?php echo $data['Num'];?>"/>
                    </div>
                    <pre>编号可填范围为01~07之间的一个</pre>
                </div>
            </div>
            </p>
            <p>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group input-group">
                        <span class="input-group-addon">通道：</span>
                        <input type="text" class="form-control" name="acq3" id="acq3" value="<?php echo $data['Ch'];?>" disabled/>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group input-group">
                        <span class="input-group-addon">路号：</span>
                        <input type="text" class="form-control" name="acq4" id="acq4" value="<?php echo $data['FBG'];?>" disabled/>
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
                            <option <?php if($data[MeasurandType]==='1'){echo "selected='selected'";}?>>温度</option>
                            <option <?php if($data[MeasurandType]==='2'){echo "selected='selected'";}?>>压力</option>
                            <option <?php if($data[MeasurandType]==='3'){echo "selected='selected'";}?>>流速</option>
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
                        <input type="text" class="form-control" name="acq6" id="acq6" value="<?php echo $data['Illus'];?>"/>
                    </div>
                </div>
            </div>
            </p>
            <div style="float:left;"><button type="reset" class="btn btn-primary">重置</button></div>
            <div style="float:right;"><button type="submit" class="btn btn-primary">修改</button></div>
        </div>
    </form>
</div>