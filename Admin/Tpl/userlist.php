<layout name='muban'/>
<?php
$m=M('table_user');
$data=$m->select();
?>
<div id="page-wrapper">
    <center><h2>用户信息</h2></center>
    <div class="acqList">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover tablesorter">
                        <thead>
                        <tr>
                            <td>姓名：</td>
                            <td>用户名:</td>
                            <td>创建时间：</td>
                            <td colspan="2">编辑：</td>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        for($i=0;$i<count($data);$i++){
                            ?>
                            <tr>
                                <td><?php echo $data[$i]['Name'];?></td>
                                <td><?php echo $data[$i]['UserName'];?></td>
                                <td><?php echo $data[$i]['CTime'];?></td>
                                <td><button class="btn btn-default" onclick="javascript:var UserId;window.location.href='?s=BackForward/backforward/url/userdeleteDeal/UserId/<?php echo $data[$i]['UserId'];?>'">删除</button></td>
                                <td><button class="btn btn-default" onclick="javascript:var UserId;window.location.href='?s=BackForward/backforward/url/useredit/UserId/<?php echo $data[$i]['UserId'];?>'" >修改</button></td>
                            </tr>
                        <?php
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>