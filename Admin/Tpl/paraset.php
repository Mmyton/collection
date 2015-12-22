<layout name='muban'/>
<?php
    $m=M('table_parameter');
    $data=$m->select();
//    var_dump($data);
?>
<div id="page-wrapper">
    <center><h2>相关参数设置</h2></center>
    <form method="post" action="?s=BackForward/backforward/url/parasetdeal" role="form">
        <div class="paraSet">
            <div class="row">
                <div class="col-lg-12"><fieldset disabled=""><p><button type="button" class="btn btn-default" style="background-color:#ccc;color:#000;" >温度参数设置：</button></p></fieldset></div>
            </div>
            <div class="form">
               <div class="row">
                   <div class="col-lg-4">
                           <div class="form-group input-group">
                               <span class="input-group-addon">温度转换系数：</span>
                               <input type="text" class="form-control" name="para1" id="para1" value="<?php echo $data[80]['Value'];?>"/>
                           </div>
                   </div>
                   <div class="col-lg-4">
                           <div class="form-group input-group">
                               <span class="input-group-addon">报警阈值上限：</span>
                               <input type="text" class="form-control" name="para2" id="para2" value="<?php echo $data[81]['Value'];?>"/>
                           </div>
                   </div>
                   <div class="col-lg-4">
                           <div class="form-group input-group">
                               <span class="input-group-addon">报警阈值下限：</span>
                               <input type="text" class="form-control" name="para3" id="para3" value="<?php echo $data[82]['Value'];?>"/>
                           </div>
                   </div>
               </div>
            </div>
            <div class="row">
                <div class="col-lg-12"><fieldset disabled=""><p><button type="button" class="btn btn-default" style="background-color:#ccc;color:#000;" >压力参数设置：</button></p></fieldset></div>
            </div>
            <div class="form">
                <div class="row">
                    <div class="col-lg-4">
                            <div class="form-group input-group">
                                <span class="input-group-addon">压力转换系数：</span>
                                <input type="text" class="form-control" name="para4" id="para4" value="<?php echo $data[83]['Value'];?>"/>
                            </div>
                    </div>
                    <div class="col-lg-4">
                            <div class="form-group input-group">
                                <span class="input-group-addon">报警阈值上限：</span>
                                <input type="text" class="form-control" name="para5" id="para5" value="<?php echo $data[84]['Value'];?>"/>
                            </div>
                    </div>
                    <div class="col-lg-4">
                            <div class="form-group input-group">
                                <span class="input-group-addon">报警阈值下限：</span>
                                <input type="text" class="form-control" name="para6" id="para6" value="<?php echo $data[85]['Value'];?>"/>
                            </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12"><fieldset disabled=""><p><button type="button" class="btn btn-default" style="background-color:#ccc;color:#000;" >流速参数设置：</button></p></fieldset></div>
            </div>
            <div class="form">
                <div class="row">
                    <div class="col-lg-4">
                            <div class="form-group input-group">
                                <span class="input-group-addon">流速转换系数：</span>
                                <input type="text" class="form-control" name="para7" id="para7" value="<?php echo $data[86]['Value'];?>"/>
                            </div>
                    </div>
                    <div class="col-lg-4">
                            <div class="form-group input-group">
                                <span class="input-group-addon">报警阈值上限：</span>
                                <input type="text" class="form-control" name="para8" id="para8" value="<?php echo $data[87]['Value'];?>"/>
                            </div>
                    </div>
                    <div class="col-lg-4">
                            <div class="form-group input-group">
                                <span class="input-group-addon">报警阈值下限：</span>
                                <input type="text" class="form-control" name="para9" id="para9" value="<?php echo $data[88]['Value'];?>"/>
                            </div>
                    </div>
                </div>
            </div>
            <div style="float:left;"><button type="button" class="btn btn-primary" onclick="ClearOut()">重置</button></div>
            <div style="float:right;"><button type="submit" class="btn btn-primary">保存</button></div>
        </div>
    </form>
</div>
<script>
    function ClearOut(){
        for(var i=1;i<=9;i++){
            document.getElementById('para'+i).value=0;
        }
    }
</script>
