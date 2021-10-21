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
                <div class="panel-heading"><?php echo $action; ?> 系统单日志 <a href="<?php echo site_url('/oa/CmfSystemLog/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="system_log_id">编号：</label>
                            <input type="text" class="form-control" name="system_log_id" placeholder="Enter system_log_id" value="<?php echo !empty($cmf_system_log['system_log_id'])?$cmf_system_log['system_log_id']:''; ?>">
                            <?php echo form_error('system_log_id','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="loginaction">活动登陆：</label>
                            <input type="text" class="form-control" name="loginaction" placeholder="Enter loginaction" value="<?php echo !empty($cmf_system_log['loginaction'])?$cmf_system_log['loginaction']:''; ?>">
                            <?php echo form_error('loginaction','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="DATE">日期：</label>
                            <input type="text" class="form-control" name="DATE" placeholder="Enter DATE" value="<?php echo !empty($cmf_system_log['DATE'])?$cmf_system_log['DATE']:''; ?>">
                            <?php echo form_error('DATE','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="REMOTE_ADDR">远程地址：</label>
                            <input type="text" class="form-control" name="REMOTE_ADDR" placeholder="Enter REMOTE_ADDR" value="<?php echo !empty($cmf_system_log['REMOTE_ADDR'])?$cmf_system_log['REMOTE_ADDR']:''; ?>">
                            <?php echo form_error('REMOTE_ADDR','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="HTTP_USER_AGENT">用户代理：</label>
                            <input type="text" class="form-control" name="HTTP_USER_AGENT" placeholder="Enter HTTP_USER_AGENT" value="<?php echo !empty($cmf_system_log['HTTP_USER_AGENT'])?$cmf_system_log['HTTP_USER_AGENT']:''; ?>">
                            <?php echo form_error('HTTP_USER_AGENT','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="QUERY_STRING">查询字串：</label>
                            <input type="text" class="form-control" name="QUERY_STRING" placeholder="Enter QUERY_STRING" value="<?php echo !empty($cmf_system_log['QUERY_STRING'])?$cmf_system_log['QUERY_STRING']:''; ?>">
                            <?php echo form_error('QUERY_STRING','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="SCRIPT_NAME">脚本名称：</label>
                            <input type="text" class="form-control" name="SCRIPT_NAME" placeholder="Enter SCRIPT_NAME" value="<?php echo !empty($cmf_system_log['SCRIPT_NAME'])?$cmf_system_log['SCRIPT_NAME']:''; ?>">
                            <?php echo form_error('SCRIPT_NAME','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="USERID">用户ID：</label>
                            <input type="text" class="form-control" name="USERID" placeholder="Enter USERID" value="<?php echo !empty($cmf_system_log['USERID'])?$cmf_system_log['USERID']:''; ?>">
                            <?php echo form_error('USERID','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="SQLTEXT">SQL查询：</label>
                            <input type="text" class="form-control" name="SQLTEXT" placeholder="Enter SQLTEXT" value="<?php echo !empty($cmf_system_log['SQLTEXT'])?$cmf_system_log['SQLTEXT']:''; ?>">
                            <?php echo form_error('SQLTEXT','<p class="help-block text-danger">','</p>'); ?>
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