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
            <div class="panel-heading">采购计划明细详细内容<a href="<?php echo site_url('/oa/CmfBuyplanmainMingxi/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfBuyplanmainMingxi['id'])?$CmfBuyplanmainMingxi['id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>过往产品ID：</label>
                    <p><?php echo !empty($CmfBuyplanmainMingxi['oldproductid'])?$CmfBuyplanmainMingxi['oldproductid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品ID：</label>
                    <p><?php echo !empty($CmfBuyplanmainMingxi['prodid'])?$CmfBuyplanmainMingxi['prodid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>最终价格：</label>
                    <p><?php echo !empty($CmfBuyplanmainMingxi['lastprice'])?$CmfBuyplanmainMingxi['lastprice']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品名称：</label>
                    <p><?php echo !empty($CmfBuyplanmainMingxi['prodname'])?$CmfBuyplanmainMingxi['prodname']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品数量：</label>
                    <p><?php echo !empty($CmfBuyplanmainMingxi['num'])?$CmfBuyplanmainMingxi['num']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品价格：</label>
                    <p><?php echo !empty($CmfBuyplanmainMingxi['price'])?$CmfBuyplanmainMingxi['price']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品金额：</label>
                    <p><?php echo !empty($CmfBuyplanmainMingxi['jine'])?$CmfBuyplanmainMingxi['jine']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品备注：</label>
                    <p><?php echo !empty($CmfBuyplanmainMingxi['beizhu'])?$CmfBuyplanmainMingxi['beizhu']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品主ID：</label>
                    <p><?php echo !empty($CmfBuyplanmainMingxi['mainrowid'])?$CmfBuyplanmainMingxi['mainrowid']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>