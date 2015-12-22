<layout name='muban'/>
<?php
    $m=M('table_acquisition');
    $data=$m->select();
?>
<div id="page-wrapper">
    <center><h2>采集点信息</h2></center>
    <div class="acqList">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover tablesorter">
                        <thead>
                            <tr>
                                <td>区号：</td>
                                <td>编号:</td>
                                <td>通道：</td>
                                <td>路号：</td>
                                <td>参数类型：</td>
                                <td>说明</td>
                                <td colspan="2">编辑</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                for($i=0;$i<count($data);$i++){
                                    if($data[$i]['Lo']!=''&& $data[$i]['Num']!='') {
                                        $str="<tr>";
                                        $str.="<td>".$data[$i]['Lo']."</td>";
                                        $str.="<td>".$data[$i]['Num']."</td>";
                                        $str.="<td>".$data[$i]['Ch']."</td>";
                                        $str.="<td>".$data[$i]['FBG']."</td>";
                                        if($data[$i]['MeasurandType'] === '1'){
                                            $str.="<td>温度</td>";
                                        }
                                        if($data[$i]['MeasurandType'] === '2'){
                                            $str.="<td>压力</td>";
                                        }
                                        if($data[$i]['MeasurandType'] === '3'){
                                            $str.="<td>流速</td>";
                                        }
                                        $str.="<td>".$data[$i]['Illus']."</td>";
                                        $url1="?s=BackForward/backforward/url/acqdeleteDeal/acq_AId/".$data[$i]['AId'];
                                        $str.="<td><button class='btn btn-default' onclick='javascript:var acq_AId;window.location.href=\"$url1\"'>删除</button></td>";
                                        $url2="?s=BackForward/backforward/url/acqedit/acq_AId/".$data[$i]['AId'];
                                        $str.="<td><button class='btn btn-default' onclick='javascript:var acq_AId;window.location.href=\"$url2\"'>修改</button></td>";
                                        $str.="</tr>";
                                        echo $str;
                                    }

                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
