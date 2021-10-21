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
            <div class="panel-heading">回收站详细内容<a href="<?php echo site_url('/oa/CmfRecycleBin/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfRecycleBin['id'])?$CmfRecycleBin['id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>对象ID：</label>
                    <p><?php echo !empty($CmfRecycleBin['object_id'])?$CmfRecycleBin['object_id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建时间：</label>
                    <p><?php echo !empty($CmfRecycleBin['create_time'])?$CmfRecycleBin['create_time']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>表名称：</label>
                    <p><?php echo !empty($CmfRecycleBin['table_name'])?$CmfRecycleBin['table_name']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>名称：</label>
                    <p><?php echo !empty($CmfRecycleBin['name'])?$CmfRecycleBin['name']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>用户ID：</label>
                    <p><?php echo !empty($CmfRecycleBin['user_id'])?$CmfRecycleBin['user_id']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>