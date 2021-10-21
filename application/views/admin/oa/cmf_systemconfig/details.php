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
            <div class="panel-heading">系统配置详细内容<a href="<?php echo site_url('/oa/CmfSystemconfig/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>模块：</label>
                    <p><?php echo !empty($CmfSystemconfig['MODULE'])?$CmfSystemconfig['MODULE']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>内容：</label>
                    <p><?php echo !empty($CmfSystemconfig['CONTENT'])?$CmfSystemconfig['CONTENT']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>单元：</label>
                    <p><?php echo !empty($CmfSystemconfig['UNIT'])?$CmfSystemconfig['UNIT']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>状态：</label>
                    <p><?php echo !empty($CmfSystemconfig['STATUS'])?$CmfSystemconfig['STATUS']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>备注：</label>
                    <p><?php echo !empty($CmfSystemconfig['MEMO'])?$CmfSystemconfig['MEMO']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>短代码：</label>
                    <p><?php echo !empty($CmfSystemconfig['SHORTCODE'])?$CmfSystemconfig['SHORTCODE']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>转换代码：</label>
                    <p><?php echo !empty($CmfSystemconfig['TRANSCODE'])?$CmfSystemconfig['TRANSCODE']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>