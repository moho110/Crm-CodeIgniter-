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
            <div class="panel-heading">日历详细内容<a href="<?php echo site_url('/oa/CmfCalendar/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfCalendar['id'])?$CmfCalendar['id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>用户ID：</label>
                    <p><?php echo !empty($CmfCalendar['USER_ID'])?$CmfCalendar['USER_ID']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>日历时间：</label>
                    <p><?php echo !empty($CmfCalendar['CAL_TIME'])?$CmfCalendar['CAL_TIME']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>结束时间：</label>
                    <p><?php echo !empty($CmfCalendar['END_TIME'])?$CmfCalendar['END_TIME']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>日历类型：</label>
                    <p><?php echo !empty($CmfCalendar['CAL_TYPE'])?$CmfCalendar['CAL_TYPE']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>日历等级：</label>
                    <p><?php echo !empty($CmfCalendar['CAL_LEVEL'])?$CmfCalendar['CAL_LEVEL']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>内容：</label>
                    <p><?php echo !empty($CmfCalendar['CONTENT'])?$CmfCalendar['CONTENT']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>管理员ID：</label>
                    <p><?php echo !empty($CmfCalendar['MANAGER_ID'])?$CmfCalendar['MANAGER_ID']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>结束状态：</label>
                    <p><?php echo !empty($CmfCalendar['OVER_STATUS'])?$CmfCalendar['OVER_STATUS']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>是否发送短信：</label>
                    <p><?php echo !empty($CmfCalendar['ifsms'])?$CmfCalendar['ifsms']:''; ?></p>
                    <p>
                        <?php if ($CmfCalendar['ifsms'] == '1') {?>
                            已发送
                        <?php } elseif ($CmfCalendar['ifsms'] == '0') {?>
                            未发送
                    </p>
                </div>
                <div class="form-group">
                    <label>提醒时间：</label>
                    <p><?php echo !empty($CmfCalendar['tixingtime'])?$CmfCalendar['tixingtime']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>URL地址：</label>
                    <p><?php echo !empty($CmfCalendar['url'])?$CmfCalendar['url']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>关联ID：</label>
                    <p><?php echo !empty($CmfCalendar['guanlianid'])?$CmfCalendar['guanlianid']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>