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
            <div class="panel-heading">费用类型详细内容<a href="<?php echo site_url('/oa/CmfFeiyongtype/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfFeiyongtype['id'])?$CmfFeiyongtype['id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>类型名称：</label>
                    <p><?php echo !empty($CmfFeiyongtype['typename'])?$CmfFeiyongtype['typename']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>类别ID：</label>
                    <p><?php echo !empty($CmfFeiyongtype['classid'])?$CmfFeiyongtype['classid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>是否锁定：</label>
                    <p>
                        <?php if ($CmfFeiyongtype['iflock'] == '1') {?>
                            是
                        <?php } elseif ($CmfFeiyongtype['iflock'] == '0') {?>
                            否
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