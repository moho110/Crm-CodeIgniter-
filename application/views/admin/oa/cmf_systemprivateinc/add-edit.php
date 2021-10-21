<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_header");
?>
<div class="container">
    <div class="col-xs-12">
    <?php 
        if(!empty($success_msg)){
            echo '<div class="alert alert-success">'.$success_msg.'</div>';
        }elseif(!empty($error_msg)){
            echo '<div class="alert alert-danger">'.$error_msg.'</div>';
        }
    ?>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading"><?php echo $action; ?> 系统隐私 <a href="<?php echo site_url('/oa/CmfSystemprivateinc/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="ID">编号：</label>
                            <input type="text" class="form-control" name="ID" placeholder="Enter ID" value="<?php echo !empty($cmf_systemprivateinc['ID'])?$cmf_systemprivateinc['ID']:''; ?>">
                            <?php echo form_error('ID','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="FILE">文件：</label>
                            <input type="text" class="form-control" name="FILE" placeholder="Enter FILE" value="<?php echo !empty($cmf_systemprivateinc['FILE'])?$cmf_systemprivateinc['FILE']:''; ?>">
                            <?php echo form_error('FILE','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="MODULE">模块：</label>
                            <input type="text" class="form-control" name="MODULE" placeholder="Enter MODULE" value="<?php echo !empty($cmf_systemprivateinc['MODULE'])?$cmf_systemprivateinc['MODULE']:''; ?>">
                            <?php echo form_error('MODULE','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="DEPT_ID">部门ID：</label>
                            <input type="text" class="form-control" name="DEPT_ID" placeholder="Enter DEPT_ID" value="<?php echo !empty($cmf_systemprivateinc['DEPT_ID'])?$cmf_systemprivateinc['DEPT_ID']:''; ?>">
                            <?php echo form_error('DEPT_ID','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="DEPT_NAME">部门名称：</label>
                            <input type="text" class="form-control" name="DEPT_NAME" placeholder="Enter DEPT_NAME" value="<?php echo !empty($cmf_systemprivateinc['DEPT_NAME'])?$cmf_systemprivateinc['DEPT_NAME']:''; ?>">
                            <?php echo form_error('DEPT_NAME','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="ROLE_ID">角色ID：</label>
                            <input type="text" class="form-control" name="ROLE_ID" placeholder="Enter ROLE_ID" value="<?php echo !empty($cmf_systemprivateinc['ROLE_ID'])?$cmf_systemprivateinc['ROLE_ID']:''; ?>">
                            <?php echo form_error('ROLE_ID','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="ROLE_NAME">角色名称：</label>
                            <input type="text" class="form-control" name="ROLE_NAME" placeholder="Enter ROLE_NAME" value="<?php echo !empty($cmf_systemprivateinc['ROLE_NAME'])?$cmf_systemprivateinc['ROLE_NAME']:''; ?>">
                            <?php echo form_error('ROLE_NAME','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="USER_ID">用户ID：</label>
                            <input type="text" class="form-control" name="USER_ID" placeholder="Enter USER_ID" value="<?php echo !empty($cmf_systemprivateinc['USER_ID'])?$cmf_systemprivateinc['USER_ID']:''; ?>">
                            <?php echo form_error('USER_ID','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="USER_NAME">用户名称：</label>
                            <input type="text" class="form-control" name="USER_NAME" placeholder="Enter USER_NAME" value="<?php echo !empty($cmf_systemprivateinc['USER_NAME'])?$cmf_systemprivateinc['USER_NAME']:''; ?>">
                            <?php echo form_error('USER_NAME','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <input type="submit" name="postSubmit" class="btn btn-primary" value="提交"/>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>