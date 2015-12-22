<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>光纤传感监测系统登录界面</title>
    <load href="__CSS__/login.css"/>
</head>
<body>
    <div class="top_div"><p>光纤传感监测系统登录界面</p></div>
    <div class="top_body">
        <div style="width:165px;height:96px;position:absolute;">
            <div class="tou"></div>
            <div class="initial_left_hand" id="left_hand"></div>
            <div class="initial_right_hand" id="right_hand"></div>
        </div>
        <form action="?s=BackForward/backforward/url/pipei" method="post" >
            <P style="padding: 30px 0px 10px; position: relative;">
		        <SPAN class="u_logo"></SPAN>
                <INPUT name="userName" class="ipt" type="text" placeholder="请输入用户名" value="">
            </P>
            <p style="position:relative;">
                <span class="p_logo"></span>
                <input name="userPassword" type="password" id="password" class="ipt" placeholder="请输入密码" value="">
            </p>
            <div id="div1">
                <p style="margin:0px 35px 20px 45px;">
                    <span style="float:left;">
                        <a style="color:rgb(204,204,204);" id="fp"; href="#">忘记密码？</a>
                    </span>
                    <span style="float:right">
                        <button type="submit" style="background: rgb(0, 142, 173); padding: 7px 10px; border-radius: 4px; border: 1px solid rgb(26, 117, 152); border-image: none; color: rgb(255, 255, 255); font-weight: bold;"
                       >登录</button>
                    </span>
                </p>
            </div>
        </form>
    </div>
    <div class="copyWright">
<!--        <p>地址：福建省厦门市思明区海韵校区光波所506 邮编：361005 电话：0592-2186259 传真：0592-2094971 电子信箱：YJSY@XMU.EDU.CN</p>-->
<!--        <p>GRADUATE SCHOOL, XIAMEN UNIVERSITY, 361005 FUJIAN PROVINCE, P. R. CHINA TEL:+(86)592-2186259 FAX:+(86)592-2094971 EMAIL:YJSY@XMU.EDU.CN</p>-->
        <p>厦门大学光波所©版权所有 2015 厦门大学网站备案号 D200041</p>
        <p>©2015 GRADUATE SCHOOL, XIAMEN UNIVERSITY. ALL RIGHTS RESERVED.</p>
    </div>
</body>
</html>
<?php
session($name='sign',$value='result_out');
?>
