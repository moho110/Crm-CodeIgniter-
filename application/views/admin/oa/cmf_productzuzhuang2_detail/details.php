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
            <div class="panel-heading">产品组装明细详细内容<a href="<?php echo site_url('/oa/CmfProductzuzhuang2Detail/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>ID：</label>
                    <p><?php echo !empty($CmfProductzuzhuang2Detail['id'])?$CmfProductzuzhuang2Detail['id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品ID：</label>
                    <p><?php echo !empty($CmfProductzuzhuang2Detail['prodid'])?$CmfProductzuzhuang2Detail['prodid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品名称：</label>
                    <p><?php echo !empty($CmfProductzuzhuang2Detail['prodname'])?$CmfProductzuzhuang2Detail['prodname']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品规格：</label>
                    <p><?php echo !empty($CmfProductzuzhuang2Detail['prodguige'])?$CmfProductzuzhuang2Detail['prodguige']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品型号：</label>
                    <p><?php echo !empty($CmfProductzuzhuang2Detail['prodxinghao'])?$CmfProductzuzhuang2Detail['prodxinghao']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品单位：</label>
                    <p><?php echo !empty($CmfProductzuzhuang2Detail['proddanwei'])?$CmfProductzuzhuang2Detail['proddanwei']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品价格：</label>
                    <p><?php echo !empty($CmfProductzuzhuang2Detail['price'])?$CmfProductzuzhuang2Detail['price']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品折扣：</label>
                    <p><?php echo !empty($CmfProductzuzhuang2Detail['zhekou'])?$CmfProductzuzhuang2Detail['zhekou']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品数量：</label>
                    <p><?php echo !empty($CmfProductzuzhuang2Detail['num'])?$CmfProductzuzhuang2Detail['num']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品备注：</label>
                    <p><?php echo !empty($CmfProductzuzhuang2Detail['beizhu'])?$CmfProductzuzhuang2Detail['beizhu']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品主ID：</label>
                    <p><?php echo !empty($CmfProductzuzhuang2Detail['mainrowid'])?$CmfProductzuzhuang2Detail['mainrowid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品金额：</label>
                    <p><?php echo !empty($CmfProductzuzhuang2Detail['jine'])?$CmfProductzuzhuang2Detail['jine']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>过往产品ID：</label>
                    <p><?php echo !empty($CmfProductzuzhuang2Detail['oldprodid'])?$CmfProductzuzhuang2Detail['oldprodid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>操作类型：</label>
                    <p><?php echo !empty($CmfProductzuzhuang2Detail['opertype'])?$CmfProductzuzhuang2Detail['opertype']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>