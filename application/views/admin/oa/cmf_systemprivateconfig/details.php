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
            <div class="panel-heading">系统隐私配置详细内容<a href="<?php echo site_url('/oa/CmfSystemprivateconfig/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfSystemprivateconfig['ID'])?$CmfSystemprivateconfig['ID']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>分类：</label>
                    <p><?php echo !empty($CmfSystemprivateconfig['category'])?$CmfSystemprivateconfig['category']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>表：</label>
                    <p><?php echo !empty($CmfSystemprivateconfig['table'])?$CmfSystemprivateconfig['table']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>对象：</label>
                    <p><?php echo !empty($CmfSystemprivateconfig['object'])?$CmfSystemprivateconfig['object']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>视图：</label>
                    <p><?php echo !empty($CmfSystemprivateconfig['views'])?$CmfSystemprivateconfig['views']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>列：</label>
                    <p><?php echo !empty($CmfSystemprivateconfig['column'])?$CmfSystemprivateconfig['column']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>其他：</label>
                    <p><?php echo !empty($CmfSystemprivateconfig['other'])?$CmfSystemprivateconfig['other']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建人：</label>
                    <p><?php echo !empty($CmfSystemprivateconfig['creator'])?$CmfSystemprivateconfig['creator']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建时间：</label>
                    <p><?php echo !empty($CmfSystemprivateconfig['createTime'])?$CmfSystemprivateconfig['createTime']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>