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
            <div class="panel-heading">系统语言详细内容<a href="<?php echo site_url('/oa/CmfSystemlang/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>系统语言ID：</label>
                    <p><?php echo !empty($CmfSystemlang['systemlangid'])?$CmfSystemlang['systemlangid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>字段名称：</label>
                    <p><?php echo !empty($CmfSystemlang['fieldname'])?$CmfSystemlang['fieldname']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>表名称：</label>
                    <p><?php echo !empty($CmfSystemlang['tablename'])?$CmfSystemlang['tablename']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>汉字：</label>
                    <p><?php echo !empty($CmfSystemlang['chinese'])?$CmfSystemlang['chinese']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>英文：</label>
                    <p><?php echo !empty($CmfSystemlang['english'])?$CmfSystemlang['english']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>备注：</label>
                    <p><?php echo !empty($CmfSystemlang['remark'])?$CmfSystemlang['remark']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>