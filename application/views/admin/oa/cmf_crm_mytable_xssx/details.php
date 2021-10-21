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
            <div class="panel-heading">我的表显示位置详细内容<a href="<?php echo site_url('/oa/CmfCrmMytableXssx/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfCrmMytableXssx['Id'])?$CmfCrmMytableXssx['Id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>显示属性：</label>
                    <p><?php echo !empty($CmfCrmMytableXssx['displayAttr'])?$CmfCrmMytableXssx['displayAttr']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>备注：</label>
                    <p><?php echo !empty($CmfCrmMytableXssx['memo'])?$CmfCrmMytableXssx['memo']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建者：</label>
                    <p><?php echo !empty($CmfCrmMytableXssx['creator'])?$CmfCrmMytableXssx['creator']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建时间：</label>
                    <p><?php echo !empty($CmfCrmMytableXssx['createTime'])?$CmfCrmMytableXssx['createTime']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>