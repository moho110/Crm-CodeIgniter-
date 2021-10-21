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
            <div class="panel-heading">仓库初始化详细内容<a href="<?php echo site_url('/oa/CmfStoreInit/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfStoreInit['id'])?$CmfStoreInit['id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品ID：</label>
                    <p><?php echo !empty($CmfStoreInit['prodid'])?$CmfStoreInit['prodid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>仓库ID：</label>
                    <p><?php echo !empty($CmfStoreInit['storeid'])?$CmfStoreInit['storeid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>价格：</label>
                    <p><?php echo !empty($CmfStoreInit['price'])?$CmfStoreInit['price']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>数量：</label>
                    <p><?php echo !empty($CmfStoreInit['num'])?$CmfStoreInit['num']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>金额：</label>
                    <p><?php echo !empty($CmfStoreInit['jine'])?$CmfStoreInit['jine']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>备注：</label>
                    <p><?php echo !empty($CmfStoreInit['memo'])?$CmfStoreInit['memo']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>标识：</label>
                    <p><?php echo !empty($CmfStoreInit['flag'])?$CmfStoreInit['flag']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品名称：</label>
                    <p><?php echo !empty($CmfStoreInit['prodname'])?$CmfStoreInit['prodname']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>规格：</label>
                    <p><?php echo !empty($CmfStoreInit['guige'])?$CmfStoreInit['guige']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>型号：</label>
                    <p><?php echo !empty($CmfStoreInit['xinghao'])?$CmfStoreInit['xinghao']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>单位：</label>
                    <p><?php echo !empty($CmfStoreInit['danwei'])?$CmfStoreInit['danwei']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>类型名称：</label>
                    <p><?php echo !empty($CmfStoreInit['typename'])?$CmfStoreInit['typename']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>