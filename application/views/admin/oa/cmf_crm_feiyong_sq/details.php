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
            <div class="panel-heading">费用申请详细内容<a href="<?php echo site_url('/oa/CmfCrmFeiyongSq/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfCrmFeiyongSq['listId'])?$CmfCrmFeiyongSq['listId']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>费用类型：</label>
                    <p>
                        <?php if ($CmfCrmFeiyongSq['feeType'] == '1') {?>
                            费用一
                        <?php } elseif ($CmfCrmFeiyongSq['feeType'] == '0') {?>
                            费用二
                    </p>
                </div>
                <div class="form-group">
                    <label>金额：</label>
                    <p><?php echo !empty($CmfCrmFeiyongSq['count'])?$CmfCrmFeiyongSq['count']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>费用使用：</label>
                    <p><?php echo !empty($CmfCrmFeiyongSq['feeUse'])?$CmfCrmFeiyongSq['feeUse']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>申请日期：</label>
                    <p><?php echo !empty($CmfCrmFeiyongSq['applyDate'])?$CmfCrmFeiyongSq['applyDate']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>客户名称：</label>
                    <p><?php echo !empty($CmfCrmFeiyongSq['clientName'])?$CmfCrmFeiyongSq['clientName']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>补偿人：</label>
                    <p><?php echo !empty($CmfCrmFeiyongSq['reimburseMan'])?$CmfCrmFeiyongSq['reimburseMan']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>记录人：</label>
                    <p><?php echo !empty($CmfCrmFeiyongSq['recorder'])?$CmfCrmFeiyongSq['recorder']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>是否审核：</label>
                    <p>
                        <?php if ($CmfCrmFeiyongSq['isExamine'] == '1') {?>
                            已审核
                        <?php } elseif ($CmfCrmFeiyongSq['isExamine'] == '0') {?>
                            未审核
                    </p>
                </div>
                <div class="form-group">
                    <label>审核日期：</label>
                    <p><?php echo !empty($CmfCrmFeiyongSq['examineDate'])?$CmfCrmFeiyongSq['examineDate']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>出纳：</label>
                    <p><?php echo !empty($CmfCrmFeiyongSq['cashier'])?$CmfCrmFeiyongSq['cashier']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>支付时间：</label>
                    <p><?php echo !empty($CmfCrmFeiyongSq['payTime'])?$CmfCrmFeiyongSq['payTime']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>备份：</label>
                    <p><?php echo !empty($CmfCrmFeiyongSq['bak'])?$CmfCrmFeiyongSq['bak']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>审核人：</label>
                    <p><?php echo !empty($CmfCrmFeiyongSq['examineMan'])?$CmfCrmFeiyongSq['examineMan']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建时间：</label>
                    <p><?php echo !empty($CmfCrmFeiyongSq['createTime'])?$CmfCrmFeiyongSq['createTime']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>