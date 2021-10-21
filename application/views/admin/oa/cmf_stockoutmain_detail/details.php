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
            <div class="panel-heading">出库明细详细内容<a href="<?php echo site_url('/oa/CmfStockoutmainDetail/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfStockoutmainDetail['id'])?$CmfStockoutmainDetail['id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品ID：</label>
                    <p><?php echo !empty($CmfStockoutmainDetail['prodid'])?$CmfStockoutmainDetail['prodid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品名称：</label>
                    <p><?php echo !empty($CmfStockoutmainDetail['prodname'])?$CmfStockoutmainDetail['prodname']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品规格：</label>
                    <p><?php echo !empty($CmfStockoutmainDetail['prodguige'])?$CmfStockoutmainDetail['prodguige']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品型号：</label>
                    <p><?php echo !empty($CmfStockoutmainDetail['prodxinghao'])?$CmfStockoutmainDetail['prodxinghao']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品单位：</label>
                    <p><?php echo !empty($CmfStockoutmainDetail['proddanwei'])?$CmfStockoutmainDetail['proddanwei']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品价格：</label>
                    <p><?php echo !empty($CmfStockoutmainDetail['price'])?$CmfStockoutmainDetail['price']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品折扣：</label>
                    <p><?php echo !empty($CmfStockoutmainDetail['zhekou'])?$CmfStockoutmainDetail['zhekou']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品数量：</label>
                    <p><?php echo !empty($CmfStockoutmainDetail['num'])?$CmfStockoutmainDetail['num']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品备注：</label>
                    <p><?php echo !empty($CmfStockoutmainDetail['beizhu'])?$CmfStockoutmainDetail['beizhu']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品主ID：</label>
                    <p><?php echo !empty($CmfStockoutmainDetail['mainrowid'])?$CmfStockoutmainDetail['mainrowid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品金额：</label>
                    <p><?php echo !empty($CmfStockoutmainDetail['jine'])?$CmfStockoutmainDetail['jine']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品平均价格：</label>
                    <p><?php echo !empty($CmfStockoutmainDetail['avgprice'])?$CmfStockoutmainDetail['avgprice']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品利润：</label>
                    <p><?php echo !empty($CmfStockoutmainDetail['lirun'])?$CmfStockoutmainDetail['lirun']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>