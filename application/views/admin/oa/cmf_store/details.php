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
            <div class="panel-heading">仓储详细内容<a href="<?php echo site_url('/oa/CmfStore/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfStore['id'])?$CmfStore['id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品ID：</label>
                    <p><?php echo !empty($CmfStore['prodid'])?$CmfStore['prodid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>数量：</label>
                    <p><?php echo !empty($CmfStore['num'])?$CmfStore['num']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>价格：</label>
                    <p><?php echo !empty($CmfStore['price'])?$CmfStore['price']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>仓库ID：</label>
                    <p><?php echo !empty($CmfStore['storeid'])?$CmfStore['storeid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>备注：</label>
                    <p><?php echo !empty($CmfStore['memo'])?$CmfStore['memo']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>