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
            <div class="panel-heading">系统隐私详细内容<a href="<?php echo site_url('/oa/CmfSystemprivateinc/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfSystemprivateinc['ID'])?$CmfSystemprivateinc['ID']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>文件：</label>
                    <p><?php echo !empty($CmfSystemprivateinc['FILE'])?$CmfSystemprivateinc['FILE']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>模块：</label>
                    <p><?php echo !empty($CmfSystemprivateinc['MODULE'])?$CmfSystemprivateinc['MODULE']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>部门ID：</label>
                    <p><?php echo !empty($CmfSystemprivateinc['DEPT_ID'])?$CmfSystemprivateinc['DEPT_ID']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>部门名称：</label>
                    <p><?php echo !empty($CmfSystemprivateinc['DEPT_NAME'])?$CmfSystemprivateinc['DEPT_NAME']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>角色ID：</label>
                    <p><?php echo !empty($CmfSystemprivateinc['ROLE_ID'])?$CmfSystemprivateinc['ROLE_ID']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>角色名称：</label>
                    <p><?php echo !empty($CmfSystemprivateinc['ROLE_NAME'])?$CmfSystemprivateinc['ROLE_NAME']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>用户ID：</label>
                    <p><?php echo !empty($CmfSystemprivateinc['USER_ID'])?$CmfSystemprivateinc['USER_ID']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>用户名称：</label>
                    <p><?php echo !empty($CmfSystemprivateinc['USER_NAME'])?$CmfSystemprivateinc['USER_NAME']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>