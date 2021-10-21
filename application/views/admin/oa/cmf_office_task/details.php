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
            <div class="panel-heading">办公任务详细内容<a href="<?php echo site_url('/oa/CmfOfficeTask/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>任务ID：</label>
                    <p><?php echo !empty($CmfOfficeTask['TASK_ID'])?$CmfOfficeTask['TASK_ID']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>任务类型：</label>
                    <p><?php echo !empty($CmfOfficeTask['TASK_TYPE'])?$CmfOfficeTask['TASK_TYPE']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>时间：</label>
                    <p><?php echo !empty($CmfOfficeTask['INTERVAL'])?$CmfOfficeTask['INTERVAL']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>执行时间：</label>
                    <p><?php echo !empty($CmfOfficeTask['EXEC_TIME'])?$CmfOfficeTask['EXEC_TIME']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>最后执行：</label>
                    <p><?php echo !empty($CmfOfficeTask['LAST_EXEC'])?$CmfOfficeTask['LAST_EXEC']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>任务URL：</label>
                    <p><?php echo !empty($CmfOfficeTask['TASK_URL'])?$CmfOfficeTask['TASK_URL']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>任务名称：</label>
                    <p><?php echo !empty($CmfOfficeTask['TASK_NAME'])?$CmfOfficeTask['TASK_NAME']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>任务排序：</label>
                    <p><?php echo !empty($CmfOfficeTask['TASK_DESC'])?$CmfOfficeTask['TASK_DESC']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>任务代码：</label>
                    <p><?php echo !empty($CmfOfficeTask['TASK_CODE'])?$CmfOfficeTask['TASK_CODE']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>用户标识：</label>
                    <p><?php echo !empty($CmfOfficeTask['USE_FLAG'])?$CmfOfficeTask['USE_FLAG']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>系统任务：</label>
                    <p><?php echo !empty($CmfOfficeTask['SYS_TASK'])?$CmfOfficeTask['SYS_TASK']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>