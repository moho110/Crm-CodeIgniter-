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
            <div class="panel-heading">证照类型详细内容<a href="<?php echo site_url('/oa/CmfCertificatetype/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfCertificatetype['ROWID'])?$CmfCertificatetype['ROWID']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>证照名称：</label>
                    <p><?php echo !empty($CmfCertificatetype['name'])?$CmfCertificatetype['name']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>用户ID：</label>
                    <p><?php echo !empty($CmfCertificatetype['user_id'])?$CmfCertificatetype['user_id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>证照代码：</label>
                    <p><?php echo !empty($CmfCertificatetype['code'])?$CmfCertificatetype['code']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>用户标识：</label>
                    <p>
                        <?php if ($CmfCertificatetype['user_flag'] == '1') {?>
                            保留
                        <?php } elseif ($CmfCertificatetype['user_flag'] == '0') {?>
                            删除
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