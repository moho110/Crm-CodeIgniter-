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
            <div class="panel-heading">供应商产品详细内容<a href="<?php echo site_url('/oa/CmfSupplyproduct/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfSupplyproduct['rowid'])?$CmfSupplyproduct['rowid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>用户ID：</label>
                    <p><?php echo !empty($CmfSupplyproduct['user_id'])?$CmfSupplyproduct['user_id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>供应商ID：</label>
                    <p><?php echo !empty($CmfSupplyproduct['supplyid'])?$CmfSupplyproduct['supplyid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品ID：</label>
                    <p><?php echo !empty($CmfSupplyproduct['productid'])?$CmfSupplyproduct['productid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品价格：</label>
                    <p><?php echo !empty($CmfSupplyproduct['productprice'])?$CmfSupplyproduct['productprice']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>价格日期：</label>
                    <p><?php echo !empty($CmfSupplyproduct['pricedate'])?$CmfSupplyproduct['pricedate']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>Explianstr：</label>
                    <p><?php echo !empty($CmfSupplyproduct['explianstr'])?$CmfSupplyproduct['explianstr']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>用户标识：</label>
                    <p><?php echo !empty($CmfSupplyproduct['user_flag'])?$CmfSupplyproduct['user_flag']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>回收站：</label>
                    <p><?php echo !empty($CmfSupplyproduct['cycle'])?$CmfSupplyproduct['cycle']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>附件：</label>
                    <p><?php echo !empty($CmfSupplyproduct['fujian'])?$CmfSupplyproduct['fujian']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>