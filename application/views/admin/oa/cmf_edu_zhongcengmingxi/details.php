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
            <div class="panel-heading">中层明细详细内容<a href="<?php echo site_url('/oa/CmfEduZhongcengmingxi/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfEduZhongcengmingxi['ID'])?$CmfEduZhongcengmingxi['ID']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>测试名称：</label>
                    <p><?php echo !empty($CmfEduZhongcengmingxi['testName'])?$CmfEduZhongcengmingxi['testName']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>由测试人员：</label>
                    <p><?php echo !empty($CmfEduZhongcengmingxi['testManBy'])?$CmfEduZhongcengmingxi['testManBy']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>单元：</label>
                    <p><?php echo !empty($CmfEduZhongcengmingxi['uit'])?$CmfEduZhongcengmingxi['uit']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>职员：</label>
                    <p><?php echo !empty($CmfEduZhongcengmingxi['staff'])?$CmfEduZhongcengmingxi['staff']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>品德评估：</label>
                    <p><?php echo !empty($CmfEduZhongcengmingxi['pindeEvl'])?$CmfEduZhongcengmingxi['pindeEvl']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>品德备注：</label>
                    <p><?php echo !empty($CmfEduZhongcengmingxi['pindeMemo'])?$CmfEduZhongcengmingxi['pindeMemo']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>能力评价：</label>
                    <p><?php echo !empty($CmfEduZhongcengmingxi['abillityPingjia'])?$CmfEduZhongcengmingxi['abillityPingjia']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>能力备注：</label>
                    <p><?php echo !empty($CmfEduZhongcengmingxi['abillityMemo'])?$CmfEduZhongcengmingxi['abillityMemo']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>学习评价：</label>
                    <p><?php echo !empty($CmfEduZhongcengmingxi['studyPingjia'])?$CmfEduZhongcengmingxi['studyPingjia']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>绩效评价：</label>
                    <p><?php echo !empty($CmfEduZhongcengmingxi['jixiaoPingjia'])?$CmfEduZhongcengmingxi['jixiaoPingjia']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>学习备注：</label>
                    <p><?php echo !empty($CmfEduZhongcengmingxi['studyMemo'])?$CmfEduZhongcengmingxi['studyMemo']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>绩效备注：</label>
                    <p><?php echo !empty($CmfEduZhongcengmingxi['jixiaoMemo'])?$CmfEduZhongcengmingxi['jixiaoMemo']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>廉政评价：</label>
                    <p><?php echo !empty($CmfEduZhongcengmingxi['lianzhengPingjia'])?$CmfEduZhongcengmingxi['lianzhengPingjia']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>廉政备注：</label>
                    <p><?php echo !empty($CmfEduZhongcengmingxi['lianzhengMemo'])?$CmfEduZhongcengmingxi['lianzhengMemo']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>评价人：</label>
                    <p><?php echo !empty($CmfEduZhongcengmingxi['PingjiaMan'])?$CmfEduZhongcengmingxi['PingjiaMan']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>评价时间：</label>
                    <p><?php echo !empty($CmfEduZhongcengmingxi['pingjiaTime'])?$CmfEduZhongcengmingxi['pingjiaTime']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>