<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_header");
?>
<?php if(!empty($success_msg)){ ?>
    <div class="col-xs-12">
        <div class="alert alert-success"><?php echo $success_msg; ?></div>
    </div>
    <?php }elseif(!empty($error_msg)){ ?>
    <div class="col-xs-12">
        <div class="alert alert-danger"><?php echo $error_msg; ?></div>
    </div>
    <?php } ?>
<div class="container">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">中层人员详细内容<a href="<?php echo site_url('/oa/CmfEduZhongcengrenyuan/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfEduZhongcengrenyuan['ID'])?$CmfEduZhongcengrenyuan['ID']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>测试名称：</label>
                    <p><?php echo !empty($CmfEduZhongcengrenyuan['testName'])?$CmfEduZhongcengrenyuan['testName']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>由测试人员：</label>
                    <p><?php echo !empty($CmfEduZhongcengrenyuan['testManBy'])?$CmfEduZhongcengrenyuan['testManBy']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>单元：</label>
                    <p><?php echo !empty($CmfEduZhongcengrenyuan['uit'])?$CmfEduZhongcengrenyuan['uit']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>职员：</label>
                    <p><?php echo !empty($CmfEduZhongcengrenyuan['staff'])?$CmfEduZhongcengrenyuan['staff']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>品德描述：</label>
                    <p><?php echo !empty($CmfEduZhongcengrenyuan['pindeDesp'])?$CmfEduZhongcengrenyuan['pindeDesp']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>自我品德评价：</label>
                    <p><?php echo !empty($CmfEduZhongcengrenyuan['pindeSelf'])?$CmfEduZhongcengrenyuan['pindeSelf']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>能力描述：</label>
                    <p><?php echo !empty($CmfEduZhongcengrenyuan['abillityDesp'])?$CmfEduZhongcengrenyuan['abillityDesp']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>自我能力评价：</label>
                    <p><?php echo !empty($CmfEduZhongcengrenyuan['abillitySelf'])?$CmfEduZhongcengrenyuan['abillitySelf']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>学习描述：</label>
                    <p><?php echo !empty($CmfEduZhongcengrenyuan['studyDesp'])?$CmfEduZhongcengrenyuan['studyDesp']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>自我学习评价：</label>
                    <p><?php echo !empty($CmfEduZhongcengrenyuan['studySelf'])?$CmfEduZhongcengrenyuan['studySelf']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>绩效描述：</label>
                    <p><?php echo !empty($CmfEduZhongcengrenyuan['jixiaoDesp'])?$CmfEduZhongcengrenyuan['jixiaoDesp']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>自我绩效评价：</label>
                    <p><?php echo !empty($CmfEduZhongcengrenyuan['jixiaoSelf'])?$CmfEduZhongcengrenyuan['jixiaoSelf']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>廉政描述：</label>
                    <p><?php echo !empty($CmfEduZhongcengrenyuan['lianzhengDesp'])?$CmfEduZhongcengrenyuan['lianzhengDesp']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>自我廉政评价：</label>
                    <p><?php echo !empty($CmfEduZhongcengrenyuan['lianzhengSelf'])?$CmfEduZhongcengrenyuan['lianzhengSelf']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>附件：</label>
                    <p><?php echo !empty($CmfEduZhongcengrenyuan['attach'])?$CmfEduZhongcengrenyuan['attach']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>