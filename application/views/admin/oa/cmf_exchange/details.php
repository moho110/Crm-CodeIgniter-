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
            <div class="panel-heading">积分兑换详细内容<a href="<?php echo site_url('/oa/CmfExchange/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfExchange['ROWID'])?$CmfExchange['ROWID']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>客户ID：</label>
                    <p><?php echo !empty($CmfExchange['customid'])?$CmfExchange['customid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品ID：</label>
                    <p><?php echo !empty($CmfExchange['prodid'])?$CmfExchange['prodid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品型号：</label>
                    <p><?php echo !empty($CmfExchange['xinghao'])?$CmfExchange['xinghao']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品规格：</label>
                    <p><?php echo !empty($CmfExchange['guige'])?$CmfExchange['guige']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>集合：</label>
                    <p><?php echo !empty($CmfExchange['integral'])?$CmfExchange['integral']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建时间：</label>
                    <p><?php echo !empty($CmfExchange['createtime'])?$CmfExchange['createtime']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建人：</label>
                    <p><?php echo !empty($CmfExchange['createman'])?$CmfExchange['createman']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品名称：</label>
                    <p><?php echo !empty($CmfExchange['prodname'])?$CmfExchange['prodname']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>积分数量：</label>
                    <p><?php echo !empty($CmfExchange['exchangenum'])?$CmfExchange['exchangenum']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>库存ID：</label>
                    <p><?php echo !empty($CmfExchange['stockid'])?$CmfExchange['stockid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>备注：</label>
                    <p><?php echo !empty($CmfExchange['beizhu'])?$CmfExchange['beizhu']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>