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
            <div class="panel-heading">我的表详细内容<a href="<?php echo site_url('/oa/CmfCrmMytable/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfCrmMytable['Id'])?$CmfCrmMytable['Id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>模块ID：</label>
                    <p><?php echo !empty($CmfCrmMytable['moduleId'])?$CmfCrmMytable['moduleId']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>模块名称：</label>
                    <p><?php echo !empty($CmfCrmMytable['moduleName'])?$CmfCrmMytable['moduleName']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>模块位置：</label>
                    <p><?php echo !empty($CmfCrmMytable['modulePosition'])?$CmfCrmMytable['modulePosition']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>模块属性：</label>
                    <p><?php echo !empty($CmfCrmMytable['moduleAttr'])?$CmfCrmMytable['moduleAttr']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>显示行号：</label>
                    <p><?php echo !empty($CmfCrmMytable['displayLineNumber'])?$CmfCrmMytable['displayLineNumber']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>滚动显示：</label>
                    <p><?php echo !empty($CmfCrmMytable['scrollDisplay'])?$CmfCrmMytable['scrollDisplay']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建者：</label>
                    <p><?php echo !empty($CmfCrmMytable['creator'])?$CmfCrmMytable['creator']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建时间：</label>
                    <p><?php echo date('Y年m月d日h时m分s秒', strtotime($CmfCrmMytable['createTime'])); ?></p>
                </div>
                <div class="form-group">
                    <label>备份：</label>
                    <p><?php echo !empty($CmfCrmMytable['memo'])?$CmfCrmMytable['memo']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>