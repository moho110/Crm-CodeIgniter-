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
            <div class="panel-heading">客户区域详细内容<a href="<?php echo site_url('/oa/CmfCustomerarea/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfCustomerarea['ROWID'])?$CmfCustomerarea['ROWID']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>名称：</label>
                    <p><?php echo !empty($CmfCustomerarea['name'])?$CmfCustomerarea['name']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>用户ID：</label>
                    <p><?php echo !empty($CmfCustomerarea['user_id'])?$CmfCustomerarea['user_id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>ID：</label>
                    <p><?php echo !empty($CmfCustomerarea['id'])?$CmfCustomerarea['id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>用户标识：</label>
                    <p>
                        <?php if ($CmfCustomerarea['user_flag'] == '1') {?>
                            保留
                        <?php } elseif ($CmfCustomerarea['user_flag'] == '0') {?>
                            删除
                        <?php } else {?>
                            其他类型
                        <?php } ?>
                    </p>
                </div>
                <div class="form-group">
                    <label>等级编号：</label>
                    <p><?php echo !empty($CmfCustomerarea['leverno'])?$CmfCustomerarea['leverno']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>