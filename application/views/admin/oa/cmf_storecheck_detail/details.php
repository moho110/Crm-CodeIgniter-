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
            <div class="panel-heading">库存盘点明细详细内容<a href="<?php echo site_url('/oa/CmfStorecheckDetail/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfStorecheckDetail['id'])?$CmfStorecheckDetail['id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品ID：</label>
                    <p><?php echo !empty($CmfStorecheckDetail['prodid'])?$CmfStorecheckDetail['prodid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品名称：</label>
                    <p><?php echo !empty($CmfStorecheckDetail['prodname'])?$CmfStorecheckDetail['prodname']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品规格：</label>
                    <p><?php echo !empty($CmfStorecheckDetail['prodguige'])?$CmfStorecheckDetail['prodguige']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品型号：</label>
                    <p><?php echo !empty($CmfStorecheckDetail['prodxinghao'])?$CmfStorecheckDetail['prodxinghao']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品单位：</label>
                    <p><?php echo !empty($CmfStorecheckDetail['proddanwei'])?$CmfStorecheckDetail['proddanwei']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品价格：</label>
                    <p><?php echo !empty($CmfStorecheckDetail['price'])?$CmfStorecheckDetail['price']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品折扣：</label>
                    <p><?php echo !empty($CmfStorecheckDetail['zhekou'])?$CmfStorecheckDetail['zhekou']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品数量：</label>
                    <p><?php echo !empty($CmfStorecheckDetail['num'])?$CmfStorecheckDetail['num']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品备注：</label>
                    <p><?php echo !empty($CmfStorecheckDetail['beizhu'])?$CmfStorecheckDetail['beizhu']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品主ID：</label>
                    <p><?php echo !empty($CmfStorecheckDetail['mainrowid'])?$CmfStorecheckDetail['mainrowid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品金额：</label>
                    <p><?php echo !empty($CmfStorecheckDetail['jine'])?$CmfStorecheckDetail['jine']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>过往产品ID：</label>
                    <p><?php echo !empty($CmfStorecheckDetail['oldprodid'])?$CmfStorecheckDetail['oldprodid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>操作类型：</label>
                    <p><?php echo !empty($CmfStorecheckDetail['opertype'])?$CmfStorecheckDetail['opertype']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>