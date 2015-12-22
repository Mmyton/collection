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
                <div class="form-group">
                    <div>是否存储当前数据：</div>
                    <label class="radio-inline">
                        <input type="radio" name="sr" id="sr1" value="1"> 是
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="sr" id="sr2" value="0" checked> 否
                    </label>
                </div>
                <div>
                    <p>
                        结束时间：<input class="laydate-icon" id="setTime" style="width:230px; margin-right:10px;list-style-type: none;"/>
                    </p>
                    <script>
                        var start = {
                            elem: '#setTime',
                            format: 'YYYY-MM-DD hh:mm:ss',
                            min: '1970-06-16 23:59:59', //设定最小日期为当前日期
                            max: '2099-06-16 23:59:59', //最大日期
                            istime: true,
                            istoday: false,
                        };
                        laydate(start);
                    </script>
                </div>
            </form>
            <p>
                <button class="btn btn-default" id="btn">确定</button>
            </p>
        </div>
    </div>
<script src="__JSS__/jquery-2.1.3.min.js" type="text/javascript"></script>
<script src="__JSS__/highcharts.js" type="text/javascript"></script>
<!--<script src="__JSS__/time/jquery.js"></script>-->
<!--<script src="__JSS__/time/jquery.datetimepicker.js"></script>-->
<script>
//    $('#setTime').datetimepicker();
    var obj=document.getElementById('li1');
    obj.setAttribute('class','active');
    var options={
        chart:{
            renderTo:'container',
            type:'line'
        },
        title:{
            text:'实时光谱显示',
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
    var datas=[];
    var categories=[];
    $(function(){
        $("#btn").click(function () {
        	datas=[];
            categories=[];
            var timer=setInterval(function () {
             queryData();
            },200);
        });
    });

    function queryData(){
        var Ch=$('#Ch').val();
        var SR=$('input:radio[name="sr"]:checked').val();
        var SetTime=$('#setTime').val();
        $.ajax({
            url:'?s=Forward/forward/url/spetviewDeal/Ch/'+Ch+'/SR/'+SR+'/SetTime/'+SetTime,
            type:'get',
            dataType:'json',
            success:function(data){
                $.each(data,function(i,n){
                    categories[i]= (((n.x)*1).toFixed(2))*1;
                    datas[i]=(((n.y)*1).toFixed(2))*1;
                });
                    options.xAxis.categories=categories;
                    options.series[0].data=datas;
                    var chart=new Highcharts.Chart(options);
            }
//        error:function(){
//            	window.clearInterval(timer);
//            	 alert('没有数据');
//                }
        });
    }
</script>

