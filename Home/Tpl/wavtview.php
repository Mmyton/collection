<layout name='header'/>
<?php
    $m=M('table_acquisition');
    $result1=$m->query('SELECT distinct Ch from table_acquisition;');
    $result2=$m->query('SELECT distinct FBG from table_acquisition;');
    $h1=count($result1);
    $h2=count($result2);
?>
    <div id="map">
        <div class="map_left" id="container">
        </div>
        <div class="map_right">
            <form>
                <div class="form-group input-group">
                    <span class="input-group-addon" id="wz">当前波长：</span>
                    <input type="text" class="form-control" id="Dqb"/>
                </div>
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
                <div class="form-group input-group">
                    <span class="input-group-addon" >传感器编号：</span>
                    <select class="form-control" id="FBG">
                        <?php
                            for($i=0;$i<$h2;$i++){
                                $str='<option>'.$result2[$i]['FBG'].'</option>';
                                if($result2[$i]['FBG']!=''){
                                    echo $str;
                                }
                            }
                        ?>
                    </select>
                </div>
            </form>
            <p>
                <button class="btn btn-default" id="btn">确定</button>
            </p>
        </div>
    </div>
<script src="__JSS__/jquery-2.1.3.min.js" type="text/javascript"></script>
<script src="__JSS__/highcharts.js" type="text/javascript"></script>
<script>
    var obj=document.getElementById('li1');
    obj.setAttribute('class','active');
    var obj2=document.getElementById('Dqb');
    var options={
        chart:{
            renderTo:'container',
            type:'line'
        },
        title:{
            text:'实时波长数据显示',
            x:-30
        },
        xAxis:{
            title:{
                text:'时间(s)'
            }
        },
        yAxis:{
            title:{
                text:'Wavelength(nm)'
            },
            plotLines:[{
                value:0,
                width:1,
                color:'#808080'
            }]
        },
        series:[{
            name:'波长'
        }],
        tooltip:{
            valueSuffix:'nm'
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
    var datas=[];
    var In='';
    var Ch;
    var FBG;
    var k=0;//标志每次点击按钮时触发一次事件
    $(function(){
        $("#btn").click(function () {
        	k=0;
        	datas=[];
        	Ch=$('#Ch').val();
            FBG=$('#FBG').val();
            document.getElementById('Dqb').innerHtml='';
            var timer=setInterval(function () {
           	 if(k==20){
                    	window.clearInterval(timer); //定时器
                       alert('此通道没有温度传感器或者数据错误');
                    }
           	 if(k!=20){
               queryData();
           	 }
           },100);
        });
    });
    function queryData(){
       
        $.ajax({
            url:'?s=Forward/forward/url/wavtviewDeal/Ch/'+Ch+'/FBG/'+FBG,
            type:'get',
            dataType:"json",
            success:function(data){
                $.each(data,function(i,n){
                    if(n.InfoId!=In){
                        In= n.InfoId;
                        datas.push((((n.WaveLength)*1).toFixed(6))*1);
                    }
                    if(n.InfoId=='-7'){
                    	k++;
                    }
                    obj2.value=(((n.WaveLength)*1).toFixed(6))*1+'nm';
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
