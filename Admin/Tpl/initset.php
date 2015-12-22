<layout name='muban'/>
<?php
    $m=M('table_parameter');
    $data=$m->select();
?>
<div id="page-wrapper">
    <center><h2>初值波长设置</h2></center>
    <form method="post" action="?s=BackForward/backforward/url/initSetDeal" role="form">
        <div class="initSet">
            <div class="row">
                <div class="col-lg-12"><fieldset disabled=""><p><button type="button" class="btn btn-default" style="background-color:#ccc;color:#000;" >通道1：</button></p></fieldset></div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                        <div class="form-group input-group">
                            <span class="input-group-addon">初始波长1：</span>
                            <input type="text" class="form-control" name="init1" id="init1" value="<?php echo $data[0]['Value'];?>"/>
                        </div>
                </div>
                <div class="col-lg-3">
                        <div class="form-group input-group">
                            <span class="input-group-addon">初始波长2：</span>
                            <input type="text" class="form-control" name="init2" id="init2" value="<?php echo $data[1]['Value'];?>"/>
                        </div>
                </div>
                <div class="col-lg-3">
                        <div class="form-group input-group">
                            <span class="input-group-addon">初始波长3：</span>
                            <input type="text" class="form-control" name="init3" id="init3" value="<?php echo $data[2]['Value'];?>"/>
                        </div>
                </div>
                <div class="col-lg-3">
                        <div class="form-group input-group">
                            <span class="input-group-addon">初始波长4：</span>
                            <input type="text" class="form-control" name="init4" id="init4" value="<?php echo $data[3]['Value'];?>"/>
                        </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                        <div class="form-group input-group">
                            <span class="input-group-addon">初始波长5：</span>
                            <input type="text" class="form-control" name="init5" id="init5" value="<?php echo $data[4]['Value'];?>"/>
                        </div>
                </div>
                <div class="col-lg-3">
                        <div class="form-group input-group">
                            <span class="input-group-addon">初始波长6：</span>
                            <input type="text" class="form-control" name="init6" id="init6" value="<?php echo $data[5]['Value'];?>"/>
                        </div>
                </div>
                <div class="col-lg-3">
                        <div class="form-group input-group">
                            <span class="input-group-addon">初始波长7：</span>
                            <input type="text" class="form-control" name="init7" id="init7" value="<?php echo $data[6]['Value'];?>"/>
                        </div>
                </div>
                <div class="col-lg-3">
                        <div class="form-group input-group">
                            <span class="input-group-addon">初始波长8：</span>
                            <input type="text" class="form-control" name="init8" id="init8" value="<?php echo $data[7]['Value'];?>"/>
                        </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                        <div class="form-group input-group">
                            <span class="input-group-addon">初始波长9：</span>
                            <input type="text" class="form-control" name="init9" id="init9" value="<?php echo $data[8]['Value'];?>"/>
                        </div>
                </div>
                <div class="col-lg-3">
                        <div class="form-group input-group">
                            <span class="input-group-addon">初始波长10：</span>
                            <input type="text" class="form-control" name="init10" id="init10" value="<?php echo $data[9]['Value'];?>"/>
                        </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group input-group">
                        <span class="input-group-addon">初始波长11：</span>
                        <input type="text" class="form-control" name="init11" id="init11" value="<?php echo $data[10]['Value'];?>"/>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group input-group">
                        <span class="input-group-addon">初始波长12：</span>
                        <input type="text" class="form-control" name="init12" id="init12" value="<?php echo $data[11]['Value'];?>"/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="form-group input-group">
                        <span class="input-group-addon">初始波长13：</span>
                        <input type="text" class="form-control" name="init13" id="init13" value="<?php echo $data[12]['Value'];?>"/>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group input-group">
                        <span class="input-group-addon">初始波长14：</span>
                        <input type="text" class="form-control" name="init14" id="init14" value="<?php echo $data[13]['Value'];?>"/>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group input-group">
                        <span class="input-group-addon">初始波长15：</span>
                        <input type="text" class="form-control" name="init15" id="init15" value="<?php echo $data[14]['Value'];?>"/>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group input-group">
                        <span class="input-group-addon">初始波长16：</span>
                        <input type="text" class="form-control" name="init16" id="init16" value="<?php echo $data[15]['Value'];?>"/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="form-group input-group">
                        <span class="input-group-addon">初始波长17：</span>
                        <input type="text" class="form-control" name="init17" id="init17" value="<?php echo $data[16]['Value'];?>"/>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group input-group">
                        <span class="input-group-addon">初始波长18：</span>
                        <input type="text" class="form-control" name="init18" id="init18" value="<?php echo $data[17]['Value'];?>"/>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group input-group">
                        <span class="input-group-addon">初始波长19：</span>
                        <input type="text" class="form-control" name="init19" id="init19" value="<?php echo $data[18]['Value'];?>"/>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group input-group">
                        <span class="input-group-addon">初始波长20：</span>
                        <input type="text" class="form-control" name="init20" id="init20" value="<?php echo $data[19]['Value'];?>"/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12"><fieldset disabled=""><p><button type="button" class="btn btn-default" style="background-color:#ccc;color:#000;" >通道2：</button></p></fieldset></div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="form-group input-group">
                        <span class="input-group-addon">初始波长21：</span>
                        <input type="text" class="form-control" name="init21" id="init21" value="<?php echo $data[20]['Value'];?>"/>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group input-group">
                        <span class="input-group-addon">初始波长22：</span>
                        <input type="text" class="form-control" name="init22" id="init22" value="<?php echo $data[21]['Value'];?>"/>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group input-group">
                        <span class="input-group-addon">初始波长23：</span>
                        <input type="text" class="form-control" name="init23" id="init23" value="<?php echo $data[22]['Value'];?>"/>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group input-group">
                        <span class="input-group-addon">初始波长24：</span>
                        <input type="text" class="form-control" name="init24" id="init24" value="<?php echo $data[23]['Value'];?>"/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="form-group input-group">
                        <span class="input-group-addon">初始波长25：</span>
                        <input type="text" class="form-control" name="init25" id="init25" value="<?php echo $data[24]['Value'];?>"/>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group input-group">
                        <span class="input-group-addon">初始波长26：</span>
                        <input type="text" class="form-control" name="init26" id="init26" value="<?php echo $data[25]['Value'];?>"/>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group input-group">
                        <span class="input-group-addon">初始波长27：</span>
                        <input type="text" class="form-control" name="init27" id="init27" value="<?php echo $data[26]['Value'];?>"/>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group input-group">
                        <span class="input-group-addon">初始波长28：</span>
                        <input type="text" class="form-control" name="init28" id="init28" value="<?php echo $data[27]['Value'];?>"/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="form-group input-group">
                        <span class="input-group-addon">初始波长29：</span>
                        <input type="text" class="form-control" name="init29" id="init29" value="<?php echo $data[28]['Value'];?>"/>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group input-group">
                        <span class="input-group-addon">初始波长30：</span>
                        <input type="text" class="form-control" name="init30" id="init30" value="<?php echo $data[29]['Value'];?>"/>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group input-group">
                        <span class="input-group-addon">初始波长31：</span>
                        <input type="text" class="form-control" name="init31" id="init31" value="<?php echo $data[30]['Value'];?>"/>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group input-group">
                        <span class="input-group-addon">初始波长32：</span>
                        <input type="text" class="form-control" name="init32" id="init32" value="<?php echo $data[31]['Value'];?>"/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="form-group input-group">
                        <span class="input-group-addon">初始波长33：</span>
                        <input type="text" class="form-control" name="init33" id="init33" value="<?php echo $data[32]['Value'];?>"/>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group input-group">
                        <span class="input-group-addon">初始波长34：</span>
                        <input type="text" class="form-control" name="init34" id="init34" value="<?php echo $data[33]['Value'];?>"/>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group input-group">
                        <span class="input-group-addon">初始波长35：</span>
                        <input type="text" class="form-control" name="init35" id="init35" value="<?php echo $data[34]['Value'];?>"/>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group input-group">
                        <span class="input-group-addon">初始波长36：</span>
                        <input type="text" class="form-control" name="init36" id="init36" value="<?php echo $data[35]['Value'];?>"/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="form-group input-group">
                        <span class="input-group-addon">初始波长37：</span>
                        <input type="text" class="form-control" name="init37" id="init37" value="<?php echo $data[36]['Value'];?>"/>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group input-group">
                        <span class="input-group-addon">初始波长38：</span>
                        <input type="text" class="form-control" name="init38" id="init38" value="<?php echo $data[37]['Value'];?>"/>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group input-group">
                        <span class="input-group-addon">初始波长39：</span>
                        <input type="text" class="form-control" name="init39" id="init39" value="<?php echo $data[38]['Value'];?>"/>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group input-group">
                        <span class="input-group-addon">初始波长40：</span>
                        <input type="text" class="form-control" name="init40" id="init40" value="<?php echo $data[39]['Value'];?>"/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12"><fieldset disabled=""><p><button type="button" class="btn btn-default" style="background-color:#ccc;color:#000;" >通道3：</button></p></fieldset></div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="form-group input-group">
                        <span class="input-group-addon">初始波长41：</span>
                        <input type="text" class="form-control" name="init41" id="init41" value="<?php echo $data[40]['Value'];?>"/>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group input-group">
                        <span class="input-group-addon">初始波长42：</span>
                        <input type="text" class="form-control" name="init42" id="init42" value="<?php echo $data[41]['Value'];?>"/>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group input-group">
                        <span class="input-group-addon">初始波长43：</span>
                        <input type="text" class="form-control" name="init43" id="init43" value="<?php echo $data[42]['Value'];?>"/>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group input-group">
                        <span class="input-group-addon">初始波长44：</span>
                        <input type="text" class="form-control" name="init44" id="init44" value="<?php echo $data[43]['Value'];?>"/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="form-group input-group">
                        <span class="input-group-addon">初始波长45：</span>
                        <input type="text" class="form-control" name="init45" id="init45" value="<?php echo $data[44]['Value'];?>"/>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group input-group">
                        <span class="input-group-addon">初始波长46：</span>
                        <input type="text" class="form-control" name="init46" id="init46" value="<?php echo $data[45]['Value'];?>"/>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group input-group">
                        <span class="input-group-addon">初始波长47：</span>
                        <input type="text" class="form-control" name="init47" id="init47" value="<?php echo $data[46]['Value'];?>"/>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group input-group">
                        <span class="input-group-addon">初始波长48：</span>
                        <input type="text" class="form-control" name="init48" id="init48" value="<?php echo $data[47]['Value'];?>"/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="form-group input-group">
                        <span class="input-group-addon">初始波长49：</span>
                        <input type="text" class="form-control" name="init49" id="init49" value="<?php echo $data[48]['Value'];?>"/>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group input-group">
                        <span class="input-group-addon">初始波长50：</span>
                        <input type="text" class="form-control" name="init50" id="init50" value="<?php echo $data[49]['Value'];?>"/>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group input-group">
                        <span class="input-group-addon">初始波长51：</span>
                        <input type="text" class="form-control" name="init51" id="init51" value="<?php echo $data[50]['Value'];?>"/>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group input-group">
                        <span class="input-group-addon">初始波长52：</span>
                        <input type="text" class="form-control" name="init52" id="init52" value="<?php echo $data[51]['Value'];?>"/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="form-group input-group">
                        <span class="input-group-addon">初始波长53：</span>
                        <input type="text" class="form-control" name="init53" id="init53" value="<?php echo $data[52]['Value'];?>"/>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group input-group">
                        <span class="input-group-addon">初始波长54：</span>
                        <input type="text" class="form-control" name="init54" id="init54" value="<?php echo $data[53]['Value'];?>"/>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group input-group">
                        <span class="input-group-addon">初始波长55：</span>
                        <input type="text" class="form-control" name="init55" id="init55" value="<?php echo $data[54]['Value'];?>"/>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group input-group">
                        <span class="input-group-addon">初始波长56：</span>
                        <input type="text" class="form-control" name="init56" id="init56" value="<?php echo $data[55]['Value'];?>"/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="form-group input-group">
                        <span class="input-group-addon">初始波长57：</span>
                        <input type="text" class="form-control" name="init57" id="init57" value="<?php echo $data[56]['Value'];?>"/>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group input-group">
                        <span class="input-group-addon">初始波长58：</span>
                        <input type="text" class="form-control" name="init58" id="init58" value="<?php echo $data[57]['Value'];?>"/>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group input-group">
                        <span class="input-group-addon">初始波长59：</span>
                        <input type="text" class="form-control" name="init59" id="init59" value="<?php echo $data[58]['Value'];?>"/>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group input-group">
                        <span class="input-group-addon">初始波长60：</span>
                        <input type="text" class="form-control" name="init60" id="init60" value="<?php echo $data[59]['Value'];?>"/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12"><fieldset disabled=""><p><button type="button" class="btn btn-default" style="background-color:#ccc;color:#000;" >通道4：</button></p></fieldset></div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="form-group input-group">
                        <span class="input-group-addon">初始波长61：</span>
                        <input type="text" class="form-control" name="init61" id="init61" value="<?php echo $data[60]['Value'];?>"/>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group input-group">
                        <span class="input-group-addon">初始波长62：</span>
                        <input type="text" class="form-control" name="init62" id="init62" value="<?php echo $data[61]['Value'];?>"/>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group input-group">
                        <span class="input-group-addon">初始波长63：</span>
                        <input type="text" class="form-control" name="init63" id="init63" value="<?php echo $data[62]['Value'];?>"/>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group input-group">
                        <span class="input-group-addon">初始波长64：</span>
                        <input type="text" class="form-control" name="init64" id="init64" value="<?php echo $data[63]['Value'];?>"/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="form-group input-group">
                        <span class="input-group-addon">初始波长65：</span>
                        <input type="text" class="form-control" name="init65" id="init65" value="<?php echo $data[64]['Value'];?>"/>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group input-group">
                        <span class="input-group-addon">初始波长66：</span>
                        <input type="text" class="form-control" name="init66" id="init66" value="<?php echo $data[65]['Value'];?>"/>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group input-group">
                        <span class="input-group-addon">初始波长67：</span>
                        <input type="text" class="form-control" name="init67" id="init67" value="<?php echo $data[66]['Value'];?>"/>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group input-group">
                        <span class="input-group-addon">初始波长68：</span>
                        <input type="text" class="form-control" name="init68" id="init68" value="<?php echo $data[67]['Value'];?>"/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="form-group input-group">
                        <span class="input-group-addon">初始波长69：</span>
                        <input type="text" class="form-control" name="init69" id="init69" value="<?php echo $data[68]['Value'];?>"/>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group input-group">
                        <span class="input-group-addon">初始波长70：</span>
                        <input type="text" class="form-control" name="init70" id="init70" value="<?php echo $data[69]['Value'];?>"/>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group input-group">
                        <span class="input-group-addon">初始波长71：</span>
                        <input type="text" class="form-control" name="init71" id="init71" value="<?php echo $data[70]['Value'];?>"/>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group input-group">
                        <span class="input-group-addon">初始波长72：</span>
                        <input type="text" class="form-control" name="init72" id="init72" value="<?php echo $data[71]['Value'];?>"/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="form-group input-group">
                        <span class="input-group-addon">初始波长73：</span>
                        <input type="text" class="form-control" name="init73" id="init73" value="<?php echo $data[72]['Value'];?>"/>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group input-group">
                        <span class="input-group-addon">初始波长74：</span>
                        <input type="text" class="form-control" name="init74" id="init74" value="<?php echo $data[73]['Value'];?>"/>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group input-group">
                        <span class="input-group-addon">初始波长75：</span>
                        <input type="text" class="form-control" name="init75" id="init75" value="<?php echo $data[74]['Value'];?>"/>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group input-group">
                        <span class="input-group-addon">初始波长76：</span>
                        <input type="text" class="form-control" name="init76" id="init76" value="<?php echo $data[75]['Value'];?>"/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="form-group input-group">
                        <span class="input-group-addon">初始波长77：</span>
                        <input type="text" class="form-control" name="init77" id="init77" value="<?php echo $data[76]['Value'];?>"/>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group input-group">
                        <span class="input-group-addon">初始波长78：</span>
                        <input type="text" class="form-control" name="init78" id="init78" value="<?php echo $data[77]['Value'];?>"/>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group input-group">
                        <span class="input-group-addon">初始波长79：</span>
                        <input type="text" class="form-control" name="init79" id="init79" value="<?php echo $data[78]['Value'];?>"/>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group input-group">
                        <span class="input-group-addon">初始波长80：</span>
                        <input type="text" class="form-control" name="init80" id="init80" value="<?php echo $data[79]['Value'];?>"/>
                    </div>
                </div>
            </div>
            <div style="float:left;"><button type="button" class="btn btn-primary" onclick="ClearOut()">重置</button></div>
            <div style="float:right;"><button type="submit" class="btn btn-primary">保存</button></div>
        </div>
    </form>
</div>
<script>
    function ClearOut(){
        for(var i=1;i<=80;i++){
            document.getElementById('init'+i).value=0;
        }
    }
</script>