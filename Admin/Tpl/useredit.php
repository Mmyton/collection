<layout name='muban'/>
<?php
$UserId=$_GET['UserId'];
$m=M('table_user');
$where['UserId']=array('like',$UserId);
$data=$m->where($where)->limit(1)->find();
?>
<div id="page-wrapper">
    <center><h2>用户信息修改</h2></center>
    <form method="post" action="?s=BackForward/backforward/url/userEditDeal/UserId/<?php echo $UserId;?>" role="form">
        <div class="userAdd">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group input-group">
                        <span class="input-group-addon">姓名：</span>
                        <input type="text" class="form-control" name="user1" id="user1" value="<?php echo $data['Name'];?>" disabled/>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group input-group">
                        <span class="input-group-addon">用户名：</span>
                        <input type="text" class="form-control" name="user2" id="user2" value="<?php echo $data['UserName'];?>"/>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group input-group">
                        <span class="input-group-addon">密码：</span>
                        <input type="text" class="form-control" name="user3" id="user3" value="<?php echo $data['PassWord'];?>"/>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group input-group">
                        <span class="input-group-addon">权限选择：</span>
                        <select class="form-control" name="user4" id="user4">
                            <option <?php if($data[UserType]==='0'){echo "selected='selected'";}?>>管理员</option>
                            <option <?php if($data[UserType]==='1'){echo "selected='selected'";}?>>普通用户</option>
                        </select>
                    </div>
                </div>
            </div>
            <div style="float:left;">
                <input type="reset" name="button" id="button" class="btn btn-primary" value="重置"/>
            </div>
            <div style="float:right;"><button type="submit" class="btn btn-primary">修改</button></div>
        </div>
    </form>
</div>
<script>

</script>