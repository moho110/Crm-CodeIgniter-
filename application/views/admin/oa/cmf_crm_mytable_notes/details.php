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
            <div class="panel-heading">我的表便签详细内容<a href="<?php echo site_url('/oa/CmfCrmMytableNotes/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfCrmMytableNotes['Id'])?$CmfCrmMytableNotes['Id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>便签内容：</label>
                    <p><?php echo !empty($CmfCrmMytableNotes['noteContent'])?$CmfCrmMytableNotes['noteContent']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建ID：</label>
                    <p><?php echo !empty($CmfCrmMytableNotes['createId'])?$CmfCrmMytableNotes['createId']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建时间：</label>
                    <p><?php echo !empty($CmfCrmMytableNotes['createTime'])?$CmfCrmMytableNotes['createTime']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>