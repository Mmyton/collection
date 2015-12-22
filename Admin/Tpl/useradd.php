<layout name='muban'/>
<div id="page-wrapper">
    <center><h2>用户添加</h2></center>
    <form method="post" action="?s=BackForward/backforward/url/userAddDeal" role="form">
        <div class="userAdd">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group input-group">
                        <span class="input-group-addon">姓名：</span>
                        <input type="text" class="form-control" name="user1" id="user1"/>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group input-group">
                        <span class="input-group-addon">用户名：</span>
                        <input type="text" class="form-control" name="user2" id="user2"/>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group input-group">
                        <span class="input-group-addon">密码：</span>
                        <input type="text" class="form-control" name="user3" id="user3"/>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group input-group">
                        <span class="input-group-addon">权限选择：</span>
                        <select class="form-control" name="user4" id="user4">
                            <option>管理员</option>
                            <option>普通用户</option>
                        </select>
                    </div>
                </div>
            </div>
            <div style="float:left;"><button type="reset" class="btn btn-primary">重置</button></div>
            <div style="float:right;"><button type="submit" class="btn btn-primary">保存</button></div>
        </div>
    </form>
</div>