<?php
    for($i=1;$i<=4;$i++){
        $user[$i]=$_POST['user'.$i];
    }
    $m=M('table_user');
    $data['Name']=$user[1];
    $data['UserName']=$user[2];
    $data['PassWord']=$user[3];
    $data['CTime']=date('Y-m-d H:i:s');
    if($user[4]==='管理员'){
        $data['UserType']=0;
    }else{
        $data['UserType']=1;
    }
    $m->add($data);
    echo '<script>alert("添加成功");window.location.href="?s=BackForward/backforward/url/useradd";</script>';

?>