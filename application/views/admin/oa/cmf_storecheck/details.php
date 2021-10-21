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
            <div class="panel-heading">库存盘点详细内容<a href="<?php echo site_url('/oa/CmfStorecheck/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>清单ID：</label>
                    <p><?php echo !empty($CmfStorecheck['billid'])?$CmfStorecheck['billid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>主题：</label>
                    <p><?php echo !empty($CmfStorecheck['zhuti'])?$CmfStorecheck['zhuti']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>仓库ID：</label>
                    <p><?php echo !empty($CmfStorecheck['storeid'])?$CmfStorecheck['storeid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>总金额：</label>
                    <p><?php echo !empty($CmfStorecheck['totalmoney'])?$CmfStorecheck['totalmoney']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>状态：</label>
                    <p>
                        <?php if ($CmfStorecheck['state'] == '1') {?>
                            良好
                        <?php } elseif ($CmfStorecheck['state'] == '0') {?>
                            一般
                        <?php } else {?>
                            其他类型
                        <?php } ?>
                    </p>
                </div>
                <div class="form-group">
                    <label>创建人：</label>
                    <p><?php echo !empty($CmfStorecheck['createman'])?$CmfStorecheck['createman']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建时间：</label>
                    <p><?php echo !empty($CmfStorecheck['createtime'])?$CmfStorecheck['createtime']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>备注：</label>
                    <p><?php echo !empty($CmfStorecheck['memo'])?$CmfStorecheck['memo']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>