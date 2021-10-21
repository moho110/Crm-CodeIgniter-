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
            <div class="panel-heading">产品组装详细内容<a href="<?php echo site_url('/oa/CmfProductzuzhuang/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>清单ID：</label>
                    <p><?php echo !empty($CmfProductzuzhuang['billid'])?$CmfProductzuzhuang['billid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>主题：</label>
                    <p><?php echo !empty($CmfProductzuzhuang['zhuti'])?$CmfProductzuzhuang['zhuti']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>出库库存ID：</label>
                    <p><?php echo !empty($CmfProductzuzhuang['outstoreid'])?$CmfProductzuzhuang['outstoreid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>入库库存ID：</label>
                    <p><?php echo !empty($CmfProductzuzhuang['instoreid'])?$CmfProductzuzhuang['instoreid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建人：</label>
                    <p><?php echo !empty($CmfProductzuzhuang['createman'])?$CmfProductzuzhuang['createman']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建时间：</label>
                    <p><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfProductzuzhuang['createtime'])); ?></p>
                </div>
                <div class="form-group">
                    <label>总金额：</label>
                    <p><?php echo !empty($CmfProductzuzhuang['totalmoney'])?$CmfProductzuzhuang['totalmoney']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>状态：</label>
                    <p>
                        <?php if ($CmfProductzuzhuang['state'] == '1') {?>
                            良好
                        <?php } elseif ($CmfProductzuzhuang['state'] == '0') {?>
                            一般
                        <?php } else {?>
                            其他类型
                        <?php } ?>
                    </p>
                </div>
                <div class="form-group">
                    <label>出库仓库审核：</label>
                    <p>
                        <?php if ($CmfProductzuzhuang['outstoreshenhe'] == '1') {?>
                            已审核
                        <?php } elseif ($CmfProductzuzhuang['outstoreshenhe'] == '0') {?>
                            未审核
                        <?php } else {?>
                            其他类型
                        <?php } ?>
                    </p>
                </div>
                <div class="form-group">
                    <label>入库仓库审核：</label>
                    <p>
                        <?php if ($CmfProductzuzhuang['instoreshenhe'] == '1') {?>
                            已审核
                        <?php } elseif ($CmfProductzuzhuang['instoreshenhe'] == '0') {?>
                            未审核
                        <?php } else {?>
                            其他类型
                        <?php } ?>
                    </p>
                </div>
                <div class="form-group">
                    <label>出库审核时间：</label>
                    <p><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfProductzuzhuang['outshenhetime'])); ?></p>
                </div>
                <div class="form-group">
                    <label>入库审核时间：</label>
                    <p><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfProductzuzhuang['inshenhetime'])); ?></p>
                </div>
                <div class="form-group">
                    <label>备注：</label>
                    <p><?php echo !empty($CmfProductzuzhuang['memo'])?$CmfProductzuzhuang['memo']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>