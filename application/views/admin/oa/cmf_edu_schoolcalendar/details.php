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
            <div class="panel-heading">学校日历详细内容<a href="<?php echo site_url('/oa/CmfEduSchoolcalendar/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfEduSchoolcalendar['Id'])?$CmfEduSchoolcalendar['Id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>假期：</label>
                    <p><?php echo !empty($CmfEduSchoolcalendar['holiday'])?$CmfEduSchoolcalendar['holiday']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>开始时间：</label>
                    <p><?php echo !empty($CmfEduSchoolcalendar['startTime'])?$CmfEduSchoolcalendar['startTime']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>结束时间：</label>
                    <p><?php echo !empty($CmfEduSchoolcalendar['endTime'])?$CmfEduSchoolcalendar['endTime']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>学期：</label>
                    <p><?php echo !empty($CmfEduSchoolcalendar['term'])?$CmfEduSchoolcalendar['term']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>