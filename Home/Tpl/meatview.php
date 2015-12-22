<?php
    $m=M('table_acquisition');
    $result1=$m->query('SELECT distinct Lo from table_acquisition;');
    $result2=$m->query('SELECT distinct Num from table_acquisition;');
    $h1=count($result1);
    $h2=count($result2);
?>
<div id="map">
    <div class="map_left" id="container">
    </div>
    <div class="map_right">
        <form>
            <div class="form-group input-group">
                <span class="input-group-addon" id="wz">当前温度：</span>
                <input type="text" class="form-control" id="Dqz"/>
            </div>
            <div class="form-group input-group">
                <span class="input-group-addon">区号：</span>
                <select class="form-control" id="Lo">
                    <?php
                    for($i=0;$i<$h1;$i++){
                        $str='<option>'.$result1[$i]['Lo'].'</option>';
                        if($result1[$i]['Lo']!=''){
                            echo $str;
                        }
                    }
                    ?>
                </select>
            </div>
            <div class="form-group input-group">
                <span class="input-group-addon">编号：</span>
                <select class="form-control" id="Num">
                    <?php
                    for($i=0;$i<$h2;$i++){
                        $str='<option>'.$result2[$i]['Num'].'</option>';
                        if($result2[$i]['Num']!=''){
                            echo $str;
                        }
                    }
                    ?>
                </select>
            </div>
            <div class="form-group input-group">
                <span class="input-group-addon">被测量：</span>
                <select class="form-control" id="MeasurandName">
                    <option>温度</option>
                    <option>压力</option>
                    <option>流速</option>
                </select>
            </div>
        </form>
        <button class="btn btn-default" id="btn1">确定</button>
    </div>
</div>
<script src="__JSS__/jquery.min.js" type="text/javascript"></script>
<script src="__JSS__/highcharts.js" type="text/javascript"></script>
<script>
    var obj=document.getElementById('li1');
    obj.setAttribute('class','active');
    var obj2=document.getElementById('Dqz');
    var obj3=document.getElementById('wz');
    var options={
        chart:{
            renderTo:'container',
            type:'line'
        },
        title:{
            text:'实时温度曲线',
            x:-30
        },
        xAxis:{
            title:{
                text:'时间(s)'
            }
        },
        yAxis:{
            title:{
                text:'temperature(°C)'
            },
            plotLines:[{
                value:0,
                width:1,
                color:'#808080'
            }]
        },
        series:[{
            name:'温度'
        }],
        tooltip:{
            valueSuffix:'°C'
        },
        plotOptions:{
            line:{
                lineWidth:1,
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
    var datas=[];
    var categories=[];
    var In='';
    var Lo;
    var Num;
    var MeasurandName,MeasurandType;
    var k=0;//标志每次点击按钮时触发一次事件
    $(function(){
        $("#btn1").click(function () {
        	k=0;
            datas=[];
            Lo=$('#Lo').val();
            Num=$('#Num').val();
            MeasurandName=$('#MeasurandName').val();
            document.getElementById('Dqz').innerHtml='';
            var timer=setInterval(function () {
            	 if(k==20){
                     	window.clearInterval(timer); //定时器
                        alert('此通道没有温度传感器或者数据错误');
                     }
            	 if(k!=20){
                queryData();
            	 }
            },150);
        });
    });

    function queryData(){
        if(MeasurandName==='温度'){
            MeasurandType=1;
            obj3.innerHTML='当前温度：';
            options.title.text="温度实时曲线";
            options.yAxis.title.text="temperature(°C)";
            options.series[0].name="温度";
            options.tooltip.valueSuffix="°C";
        }else if(MeasurandName==='压力'){
            MeasurandType=2;
            obj3.innerHTML='当前压力：';
            options.title.text="压力实时曲线";
            options.yAxis.title.text="pressure(N)";
            options.series[0].name="压力";
            options.tooltip.valueSuffix="N";
        }else if(MeasurandName==='流速'){
            MeasurandType=3;
            obj3.innerHTML='当前流速：';
            options.title.text="流速实时曲线";
            options.yAxis.title.text="speed(m/s)";
            options.series[0].name="流速";
            options.tooltip.valueSuffix="m/s";
        }
        $.ajax({
            url:'?s=Forward/forward/url/adminHomeDeal/Lo/'+Lo+'/Num/'+Num+'/MeasurandType/'+MeasurandType,
            type:'get',
            dataType:"json",
            success:function(data){
                $.each(data,function(i,n){
                    if(n.InfoId!=In){
                        In= n.InfoId;
                        datas.push((((n.MeasurandValue)*1).toFixed(6))*1);
                    }
                    if(n.InfoId=='-7'){
                    	k++;
                    }
                    if(MeasurandName==='温度'){
                        obj2.value=(((n.MeasurandValue)*1).toFixed(6))*1+'°C';
                        
                    }else if(MeasurandName==='压力'){
                        obj2.value=(((n.MeasurandValue)*1).toFixed(6))*1+'N';
                        
                    }else if(MeasurandName==='流速'){
                        obj2.value=(((n.MeasurandValue)*1).toFixed(6))*1+'m/s';
                        
                    }
                    if(datas.length>50){
                        datas.shift();
                    }
                });
                options.series[0].data=datas;
                var chart=new Highcharts.Chart(options);

            }
        });
    }
</script>
