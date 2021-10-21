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
            <div class="panel-heading">产品组装明细详细内容<a href="<?php echo site_url('/oa/CmfProductzuzhuangDetail/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>ID：</label>
                    <p><?php echo !empty($CmfProductzuzhuangDetail['id'])?$CmfProductzuzhuangDetail['id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品ID：</label>
                    <p><?php echo !empty($CmfProductzuzhuangDetail['prodid'])?$CmfProductzuzhuangDetail['prodid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品名称：</label>
                    <p><?php echo !empty($CmfProductzuzhuangDetail['prodname'])?$CmfProductzuzhuangDetail['prodname']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品规格：</label>
                    <p><?php echo !empty($CmfProductzuzhuangDetail['prodguige'])?$CmfProductzuzhuangDetail['prodguige']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品型号：</label>
                    <p><?php echo !empty($CmfProductzuzhuangDetail['prodxinghao'])?$CmfProductzuzhuangDetail['prodxinghao']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品单位：</label>
                    <p><?php echo !empty($CmfProductzuzhuangDetail['proddanwei'])?$CmfProductzuzhuangDetail['proddanwei']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品价格：</label>
                    <p><?php echo !empty($CmfProductzuzhuangDetail['price'])?$CmfProductzuzhuangDetail['price']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品折扣：</label>
                    <p><?php echo !empty($CmfProductzuzhuangDetail['zhekou'])?$CmfProductzuzhuangDetail['zhekou']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品数量：</label>
                    <p><?php echo !empty($CmfProductzuzhuangDetail['num'])?$CmfProductzuzhuangDetail['num']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品备注：</label>
                    <p><?php echo !empty($CmfProductzuzhuangDetail['beizhu'])?$CmfProductzuzhuangDetail['beizhu']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品主ID：</label>
                    <p><?php echo !empty($CmfProductzuzhuangDetail['mainrowid'])?$CmfProductzuzhuangDetail['mainrowid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品金额：</label>
                    <p><?php echo !empty($CmfProductzuzhuangDetail['jine'])?$CmfProductzuzhuangDetail['jine']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>过往产品ID：</label>
                    <p><?php echo !empty($CmfProductzuzhuangDetail['oldprodid'])?$CmfProductzuzhuangDetail['oldprodid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>操作类型：</label>
                    <p>
                        <?php if ($CmfProductzuzhuangDetail['opertype'] == '1') {?>
                            保留
                        <?php } elseif ($CmfProductzuzhuangDetail['opertype'] == '0') {?>
                            删除
                        <?php } else {?>
                            其他类型
                        <?php } ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>