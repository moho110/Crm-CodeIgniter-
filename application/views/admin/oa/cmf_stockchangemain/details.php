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
            <div class="panel-heading">库存更换详细内容<a href="<?php echo site_url('/oa/CmfStockchangemain/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>清单ID：</label>
                    <p><?php echo !empty($CmfStockchangemain['billid'])?$CmfStockchangemain['billid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>主题：</label>
                    <p><?php echo !empty($CmfStockchangemain['zhuti'])?$CmfStockchangemain['zhuti']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建人：</label>
                    <p><?php echo !empty($CmfStockchangemain['createman'])?$CmfStockchangemain['createman']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建时间：</label>
                    <p><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfStockchangemain['createtime'])); ?></p>
                </div>
                <div class="form-group">
                    <label>出库ID：</label>
                    <p><?php echo !empty($CmfStockchangemain['outstoreid'])?$CmfStockchangemain['outstoreid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>入库ID：</label>
                    <p><?php echo !empty($CmfStockchangemain['instoreid'])?$CmfStockchangemain['instoreid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>状态：</label>
                    <p>
                        <?php if ($CmfStockchangemain['state'] == '1') {?>
                            良好
                        <?php } elseif ($CmfStockchangemain['state'] == '0') {?>
                            一般
                        <?php } else {?>
                            其他类型
                        <?php } ?>
                    </p>
                </div>
                <div class="form-group">
                    <label>出库审核：</label>
                    <p>
                        <?php if ($CmfStockchangemain['outstoreshenhe'] == '1') {?>
                            已审核
                        <?php } elseif ($CmfStockchangemain['outstoreshenhe'] == '0') {?>
                            未审核
                        <?php } else {?>
                            其他类型
                        <?php } ?>
                    </p>
                </div>
                <div class="form-group">
                    <label>入库审核：</label>
                    <p>
                        <?php if ($CmfStockchangemain['instoreshenhe'] == '1') {?>
                            已审核
                        <?php } elseif ($CmfStockchangemain['instoreshenhe'] == '0') {?>
                            未审核
                        <?php } else {?>
                            其他类型
                        <?php } ?>
                    </p>
                </div>
                <div class="form-group">
                    <label>出库审核时间：</label>
                    <p><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfStockchangemain['outshenhetime'])); ?></p>
                </div>
                <div class="form-group">
                    <label>入库审核时间：</label>
                    <p><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfStockchangemain['inshenhetime'])); ?></p>
                </div>
                <div class="form-group">
                    <label>备注：</label>
                    <p><?php echo !empty($CmfStockchangemain['memo'])?$CmfStockchangemain['memo']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>总金额：</label>
                    <p><?php echo !empty($CmfStockchangemain['totalmoney'])?$CmfStockchangemain['totalmoney']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>