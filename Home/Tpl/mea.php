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
                <span class="input-group-addon">区域：</span>
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
                        format: 'YYYY-MM-DD hh:mm',
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
                        format: 'YYYY-MM-DD hh:mm',
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
        <p><input type="button" class="btn btn-default" id="btn" value="确定"/></p>
    </div>
</div>
<script src="__JSS__/jquery-2.1.3.min.js" type="text/javascript" charset="UTF-8"></script>
<script src="__JSS__/highstock.js" type="text/javascript" ></script>
<!--<script src="__JSS__/time/jquery.js"></script>-->
<!--<script src="__JSS__/time/jquery.datetimepicker.js"></script>-->

<script>
//    $('#StartTime').datetimepicker();
//    $('#StopTime').datetimepicker();
    var obj=document.getElementById('li2');
    obj.setAttribute('class','active');
    $(function(){
        $("#btn").click(function () {
            datas=[];
            categories=[];
           
            if(document.getElementById('StartTime').value=="" || document.getElementById('StopTime').value=="")
            {
            	  alert('时间没有选择');
            	  k=false;
            	  window.clearInterval(timer); //定时器
             }
             if(document.getElementById('StartTime').value!="" && document.getElementById('StopTime').value!="")
                {
            	 queryData();
                }
        });
    });
    function timeToM(datetime){
        var hour = datetime.substr(11, 2);
        var min = datetime.substr(14, 2);
        var mon =datetime.substr(5, 1)+((datetime.substr(6, 1))*1-1);
        var day = datetime.substr(8, 2);
        var year = datetime.substr(0, 4);
        var unixtime=Date.UTC(year,mon,day,hour,min);
        return unixtime;
    }
    function timeToH(datetime){
        var hour = datetime.substr(11, 2);
        var mon =datetime.substr(5, 1)+((datetime.substr(6, 1))*1-1);
        var day = datetime.substr(8, 2);
        var year = datetime.substr(0, 4);
        var unixtime=Date.UTC(year,mon,day,hour);
        return unixtime;
    }
    function timeToD(datetime){
        var mon =datetime.substr(5, 1)+((datetime.substr(6, 1))*1-1);
        var day = datetime.substr(8, 2);
        var year = datetime.substr(0, 4);
        var unixtime=Date.UTC(year,mon,day);
        return unixtime;
    }
    function getUTCTime(obj){
        var unixtime=Date.UTC(obj.getFullYear(),obj.getMonth(),obj.getDate(),obj.getHours(),obj.getMinutes(),obj.getSeconds());
        return unixtime;
    }
    var timeResult1;
    var timeResult2;
    var datas=[];
    var categories=[];
    var options={
        chart:{
            renderTo:'container',
            type:'line'
        },
        title:{
            text:'温度历史曲线',
            x:-30
        },
        xAxis:{
            tickInterval:500,
            title:{
                text:'时间'
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
        },
        legend: {
            enabled: false
        }
    };
    function queryData() {
        var MeasurandType;
        var Lo=$('#Lo').val();
        var Num=$('#Num').val();
        var MeasurandName=$('#MeasurandName').val();
        if(MeasurandName=='温度'){
            MeasurandType=1;
            options.title.text="温度历史曲线";
            options.yAxis.title.text="temperature(°C)";
            options.series[0].name="温度";
            options.tooltip.valueSuffix="°C";
        }else if(MeasurandName=='压力'){
            MeasurandType=2;
            options.title.text="压力历史曲线";
            options.yAxis.title.text="pressure(N)";
            options.series[0].name="压力";
            options.tooltip.valueSuffix="N";
        }else if(MeasurandName=='流速'){
            MeasurandType=3;
            options.title.text="流速历史曲线";
            options.yAxis.title.text="speed(m/s)";
            options.series[0].name="流速";
            options.tooltip.valueSuffix="m/s";
        }
        var StartTime=$('#StartTime').val();
        var StopTime=$('#StopTime').val();
        timeResult1=Math.floor((timeToM(StopTime)-timeToM(StartTime))/1000/3600);
        timeResult2=Math.floor(timeResult1/24);
        $.getJSON('?s=Forward/forward/url/meahistoryDeal/Lo/'+Lo+'/Num/'+Num+'/MeasurandType/'+MeasurandType+'/StartTime/'+StartTime+'/StopTime/'+StopTime,function(data){
//        	 alert(timeToM(data[0][0]));
//             alert(timeToH(data[0][0]));
//             alert(timeToD(data[0][0]));
              if(timeResult1<=2){
                var h=data.length;
               
                for(var i=0;i<h;i++){
                    datas.push((data[i]['MeasurandValue'])*1);
                    categories.push(data[i]['ITime']);
                }
                options.xAxis.categories = categories;
                options.series[0].data=datas;
                var chart=new Highcharts.Chart(options);
            }else{
               
                if(timeResult1>2&&timeResult2<=2){
                	 if(timeToM(data[0][0])!=28800000){
                    for(var i=0;i<data.length;i++){
                        data[i][0]=timeToM(data[i][0]);
                    }
                }
                	 else if(timeToM(data[0][0])==28800000){
                		 if(window.confirm('没有数据')){
                			 location.reload(true);
                           }else{
                              return false;
                          }
                         }
                }
                
                if(timeResult2>2&&timeResult2<=7){
                	if(timeToH(data[0][0])!=28800000){
                    for(var i=0;i<data.length;i++){
                        data[i][0]=timeToH(data[i][0]);
                    }
                }
                	else if(timeToH(data[0][0])==28800000){
                		if(window.confirm('没有数据')){
                			location.reload(true);
                          }else{
                             return false;
                         }
                        }
                }
               
                if(timeResult2>7){
                	if(timeToD(data[0][0])!=0){
                    for(var i=0;i<data.length;i++){
                        data[i][0]=timeToD(data[i][0]);
                    }
                }
                	else if(timeToD(data[0][0])==0){
                		if(window.confirm('没有数据')){
                			location.reload(true);
                          }else{
                             return false;
                         }
                        }
                }
                $('#container').highcharts('StockChart',{
                    title: {
                        text:MeasurandName+'历史数据'
                    },
                    rangeSelector : {
                        buttonSpacing:40,
                        buttons : [{
                            type : 'minute',
                            count : 10,
                            text : '10m'
                        },{
                            type:'minute',
                            count:20,
                            text:'20m'
                        },{
                            type:'minute',
                            count:30,
                            text:'30m'
                        },{
                            type:'hour',
                            count:1,
                            text:'1h'
                        },{
                            type:'hour',
                            count:2,
                            text:'2h'
                        },{
                            type:'day',
                            count:10,
                            text:'10d'
                        }],
                        selected : 2,
                        inputEnabled : false
                    },
                    plotOptions: {
                        //修改蜡烛颜色
                        candlestick: {
                            color: '#33AA11',
                            upColor: '#33AA11',
                            lineColor: '#33AA11',
                            upLineColor: '#33AA11',
                            maker:{
                                states:{
                                    hover:{
                                        enabled:false
                                    }
                                }
                            }
                        },
                        //去掉曲线和蜡烛上的hover事件
                        series: {
                            states: {
                                hover: {
                                    enabled: false
                                }
                            },
                            line: {
                                marker: {
                                    enabled: false
                                }
                            }
                        }
                    },
                    tooltip:{
                        formatter:function(){
                            var tip= '<b>'+ Highcharts.dateFormat('%Y-%m-%d  %A', this.x) +'</b><br/>';
                            if(MeasurandName=='温度'){
                                tip+=MeasurandName+"<br/>";
                                tip+='最大值：'+this.points[0].point.high.toFixed(3)+"°C"+"<br/>";
                                tip+='最小值：'+this.points[0].point.low.toFixed(3)+"°C"+"<br/>";
                            }else if(MeasurandName=='压力'){
                                tip+=MeasurandName+"<br/>";
                                tip+='最大值：'+this.points[0].point.high.toFixed(3)+"N"+"<br/>";
                                tip+='最小值：'+this.points[0].point.low.toFixed(3)+"N"+"<br/>";
                            }else if(MeasurandName=='流速'){
                                tip+=MeasurandName+"<br/>";
                                tip+='最大值：'+this.points[0].point.high.toFixed(3)+"m/s"+"<br/>";
                                tip+='最小值：'+this.points[0].point.low.toFixed(3)+"m/s"+"<br/>";
                            }

                            return tip;
                        }
                    },
                    credits:{
                        enabled:false
                    },
                    series : [{
                        name : 'temperature',
                        type: 'candlestick',
                        data : data,
                        tooltip: {
                            valueDecimals: 100
                        }
                    }]
                });
            }

        });
    }
</script>
