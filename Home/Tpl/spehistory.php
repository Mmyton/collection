<layout name='header'/>
<?php
    $m=M('table_acquisition');
    $result1=$m->query('SELECT distinct Ch from table_acquisition;');
    $h1=count($result1);
?>
<div id="map">
    <div class="map_left" id="container">
    </div>
    <div class="map_right">
        <form>
            <div class="form-group input-group">
                <span class="input-group-addon">通道：</span>
                <select class="form-control" id="Ch">
                    <?php
                    for($i=0;$i<$h1;$i++){
                        $str='<option>'.$result1[$i]['Ch'].'</option>';
                        if($result1[$i]['Ch']!=''){
                            echo $str;
                        }
                    }
                    ?>
                </select>
            </div>
            <div>
                <p>
                    开始时间：<input class="laydate-icon" id="StartTime" style="width:230px; margin-right:10px;list-style-type: none;"/>
                </p>
                <p>
                    结束时间：<input class="laydate-icon" id="StopTime" style="width:230px;list-style-type: none;"/>
                </p>

                <script>
                    var start = {
                        elem: '#StartTime',
                        format: 'YYYY-MM-DD hh:mm:ss',
                        min: '1970-06-16 23:59:59', //设定最小日期为当前日期
                        max: '2099-06-16 23:59:59', //最大日期
                        istime: true,
                        istoday: false,
                        choose: function(datas){
                            end.min = datas; //开始日选好后，重置结束日的最小日期
                            end.start = datas //将结束日的初始值设定为开始日
                        }
                    };
                    var end = {
                        elem: '#StopTime',
                        format: 'YYYY-MM-DD hh:mm:ss',
                        min: '1970-06-16 23:59:59',
                        max: '2099-06-16 23:59:59',
                        istime: true,
                        istoday: false,
                        choose: function(datas){
                            start.max = datas; //结束日选好后，重置开始日的最大日期
                        }
                    };
                    laydate(start);
                    laydate(end);
                </script>
            </div>
        </form>
        <p>
            <button class="btn btn-default" id="btn">确定</button>
        </p>
        <p>
            <button class="btn btn-default" id="btn1">保持</button>
        </p>
    </div>
</div>
<script src="__JSS__/jquery-2.1.3.min.js" type="text/javascript"></script>
<script src="__JSS__/highcharts.js" type="text/javascript"></script>
<!--<script src="__JSS__/time/jquery.js"></script>-->
<!--<script src="__JSS__/time/jquery.datetimepicker.js"></script>-->
<script>
//    $('#StartTime').datetimepicker();
//    $('#StopTime').datetimepicker();
    var obj=document.getElementById('li2');
    obj.setAttribute('class','active');
    var options={
        chart:{
            renderTo:'container',
            type:'line'
        },
        title:{
            text:'历史光谱显示',
            x:-30
        },
        xAxis:{
            tickInterval:300,
            title:{
                text:'波长(nm)'
            }
        },
        yAxis:{
            title:{
                text:'Spectrum(mW)'
            },
            plotLines:[{
                value:0,
                width:1,
                color:'#808080'
            }]
        },
        series:[{
            name:'光谱'
        }],
        tooltip:{
            valueSuffix:'mW'
        },
        plotOptions:{
            line:{
                dataLabels:{
                    enabled:false
                },
                animation:false
            },
            series:{
                marker:{
                    enabled:false
                }
            }
        },
        credits:{
            enabled:false
        }
    };
    var cs=0;
    var datas=[];
    var categories=[];
    var m=0;
    var StopAjax;
    var h;
    var k=false;
    function InsertData(a,b,c){
        $.ajax({
            url:'?s=Forward/forward/url/speDeal/Ch/'+a+'/StartTime/'+b+'/StopTime/'+c,
            type:'get',
            dataType:"json",
            success:function(data){
                m=data;
            }
        });
    }
    function queryData(Ch,StartTime,StopTime){
        StopAjax=$.ajax({
                    url:'?s=Forward/forward/url/spehistoryDeal/Ch/'+Ch+'/StartTime/'+StartTime+'/StopTime/'+StopTime,
                    type:'get',
                    dataType:"json",
                    beforeSend:function(){
                        $("#btn").attr('disabled', 'disabled');
                        $("#btn").text("正在获取数据中......")
                    },
                    complete:function(){
                         $("#btn").removeAttr('disabled');
                         $("#btn").text("确定");
                    },
                    error:function(){
                          if(k==false){
                              alert("该时段没有数据");
                              k=true;
                          }
                    },
                    success:function(data){
                        var timer=setInterval(function(){
                            k=true;
                            datas=[];
                            categories=[];
                            if(m!=0&&cs==m){
                                cs=0;
                                h=0;
                            }
                            for(var i=h;i<data.length;i++) {
                                if (data[i]['id'] === cs) {
                                    categories.push((((data[i]['x']) * 1).toFixed(2)) * 1);
                                    datas.push((((data[i]['y']) * 1).toFixed(2)) * 1);
                                    options.title.text = "第" + (parseInt(Ch) + 1) + "通道 光谱历史曲线  " + data[i]['STime'] + " 共" + m + "帧";
                                }
                                if(data[i]['id']!=cs){
                                    h=i;
                                    cs++;
                                    break;
                                }
                                if(i===(data.length-1)){
                                    cs++;
                                }
                            }
                            options.xAxis.categories=categories;
                            options.series[0].data=datas;
                            var chart=new Highcharts.Chart(options);
                        },2000);
                        $('#btn1').click(function(){
                           clearInterval(timer);
                        });
                        $('#Ch').change(function(){
                            clearInterval(timer);
                        });
                        $('#StartTime').change(function(){
                            clearInterval(timer);
                        });
                        $('#StopTime').change(function(){
                            clearInterval(timer);
                        });

                    }
        });
    }
    $(function(){
        $("#btn").click(function () {
            cs=0;
            h=0;
            a=0;
            k=false;
            datas=[];
            categories=[];
            options.xAxis.categories=[];
            options.series[0].data=[];
            var Ch=$('#Ch').val();
            var StartTime=$('#StartTime').val();
            var StopTime=$('#StopTime').val();
            if(StartTime==""||StopTime==""){
                alert("时间没有选择");
                
            }else{
                InsertData(Ch,StartTime,StopTime);
                //确定m的值
				if(window.confirm('确定时间')){
				queryData(Ch,StartTime,StopTime);
              }else{
                 return false;
             }
            }

        });
    });
</script>
