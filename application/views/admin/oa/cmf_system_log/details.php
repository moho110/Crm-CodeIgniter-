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
            <div class="panel-heading">系统单日志详细内容<a href="<?php echo site_url('/oa/CmfSystemLog/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfSystemLog['system_log_id'])?$CmfSystemLog['system_log_id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>活动登陆：</label>
                    <p><?php echo !empty($CmfSystemLog['loginaction'])?$CmfSystemLog['loginaction']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>日期：</label>
                    <p><?php echo !empty($CmfSystemLog['DATE'])?$CmfSystemLog['DATE']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>远程地址：</label>
                    <p><?php echo !empty($CmfSystemLog['REMOTE_ADDR'])?$CmfSystemLog['REMOTE_ADDR']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>用户代理：</label>
                    <p><?php echo !empty($CmfSystemLog['HTTP_USER_AGENT'])?$CmfSystemLog['HTTP_USER_AGENT']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>查询字串：</label>
                    <p><?php echo !empty($CmfSystemLog['QUERY_STRING'])?$CmfSystemLog['QUERY_STRING']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>脚本名称：</label>
                    <p><?php echo !empty($CmfSystemLog['SCRIPT_NAME'])?$CmfSystemLog['SCRIPT_NAME']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>用户ID：</label>
                    <p><?php echo !empty($CmfSystemLog['USERID'])?$CmfSystemLog['USERID']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>SQL查询：</label>
                    <p><?php echo !empty($CmfSystemLog['SQLTEXT'])?$CmfSystemLog['SQLTEXT']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>