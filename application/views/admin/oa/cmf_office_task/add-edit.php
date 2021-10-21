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
                <div class="panel-heading"><?php echo $action; ?> 办公任务 <a href="<?php echo site_url('/oa/CmfOfficeTask/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="TASK_ID">任务ID：</label>
                            <input type="text" class="form-control" name="TASK_ID" placeholder="Enter TASK_ID" value="<?php echo !empty($cmf_office_task['TASK_ID'])?$cmf_office_task['TASK_ID']:''; ?>">
                            <?php echo form_error('TASK_ID','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="TASK_TYPE">任务类型：</label>
                            <input type="text" class="form-control" name="TASK_TYPE" placeholder="Enter TASK_TYPE" value="<?php echo !empty($cmf_office_task['TASK_TYPE'])?$cmf_office_task['TASK_TYPE']:''; ?>">
                            <?php echo form_error('TASK_TYPE','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="INTERVAL">时间：</label>
                            <input type="text" class="form-control" name="INTERVAL" placeholder="Enter INTERVAL" value="<?php echo !empty($cmf_office_task['INTERVAL'])?$cmf_office_task['INTERVAL']:''; ?>">
                            <?php echo form_error('INTERVAL','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="EXEC_TIME">执行时间：</label>
                            <input type="text" class="form-control" name="EXEC_TIME" placeholder="Enter EXEC_TIME" value="<?php echo !empty($cmf_office_task['EXEC_TIME'])?$cmf_office_task['EXEC_TIME']:''; ?>">
                            <?php echo form_error('EXEC_TIME','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="LAST_EXEC">最后执行：</label>
                            <input type="text" class="form-control" name="LAST_EXEC" placeholder="Enter LAST_EXEC" value="<?php echo !empty($cmf_office_task['LAST_EXEC'])?$cmf_office_task['LAST_EXEC']:''; ?>">
                            <?php echo form_error('LAST_EXEC','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="TASK_URL">任务URL：</label>
                            <input type="text" class="form-control" name="TASK_URL" placeholder="Enter TASK_URL" value="<?php echo !empty($cmf_office_task['TASK_URL'])?$cmf_office_task['TASK_URL']:''; ?>">
                            <?php echo form_error('TASK_URL','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="TASK_NAME">任务名称：</label>
                            <input type="text" class="form-control" name="TASK_NAME" placeholder="Enter TASK_NAME" value="<?php echo !empty($cmf_office_task['TASK_NAME'])?$cmf_office_task['TASK_NAME']:''; ?>">
                            <?php echo form_error('TASK_NAME','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="TASK_DESC">任务排序：</label>
                            <input type="text" class="form-control" name="TASK_DESC" placeholder="Enter TASK_DESC" value="<?php echo !empty($cmf_office_task['TASK_DESC'])?$cmf_office_task['TASK_DESC']:''; ?>">
                            <?php echo form_error('TASK_DESC','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="TASK_CODE">任务代码：</label>
                            <input type="text" class="form-control" name="TASK_CODE" placeholder="Enter TASK_CODE" value="<?php echo !empty($cmf_office_task['TASK_CODE'])?$cmf_office_task['TASK_CODE']:''; ?>">
                            <?php echo form_error('TASK_CODE','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="USE_FLAG">用户标识：</label>
                            <input type="text" class="form-control" name="USE_FLAG" placeholder="Enter USE_FLAG" value="<?php echo !empty($cmf_office_task['USE_FLAG'])?$cmf_office_task['USE_FLAG']:''; ?>">
                            <?php echo form_error('USE_FLAG','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="SYS_TASK">系统任务：</label>
                            <input type="text" class="form-control" name="SYS_TASK" placeholder="Enter SYS_TASK" value="<?php echo !empty($cmf_office_task['SYS_TASK'])?$cmf_office_task['SYS_TASK']:''; ?>">
                            <?php echo form_error('SYS_TASK','<p class="help-block text-danger">','</p>'); ?>
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