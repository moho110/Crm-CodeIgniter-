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
                <div class="panel-heading"><?php echo $action; ?> 学校日历 <a href="<?php echo site_url('/oa/CmfEduSchoolcalendar/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="Id">编号：</label>
                            <input type="text" class="form-control" name="Id" placeholder="Enter Id" value="<?php echo !empty($cmf_edu_schoolcalendar['Id'])?$cmf_edu_schoolcalendar['Id']:''; ?>">
                            <?php echo form_error('Id','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="holiday">假期：</label>
                            <input type="text" class="form-control" name="holiday" placeholder="Enter holiday" value="<?php echo !empty($cmf_edu_schoolcalendar['holiday'])?$cmf_edu_schoolcalendar['holiday']:''; ?>">
                            <?php echo form_error('holiday','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="startTime">开始时间：</label>
                            <input type="text" class="form-control" name="startTime" placeholder="Enter startTime" value="<?php echo !empty($cmf_edu_schoolcalendar['startTime'])?$cmf_edu_schoolcalendar['startTime']:''; ?>">
                            <?php echo form_error('startTime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="endTime">结束时间：</label>
                            <input type="text" class="form-control" name="endTime" placeholder="Enter endTime" value="<?php echo !empty($cmf_edu_schoolcalendar['endTime'])?$cmf_edu_schoolcalendar['endTime']:''; ?>">
                            <?php echo form_error('endTime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="term">学期：</label>
                            <input type="text" class="form-control" name="term" placeholder="Enter term" value="<?php echo !empty($cmf_edu_schoolcalendar['term'])?$cmf_edu_schoolcalendar['term']:''; ?>">
                            <?php echo form_error('term','<p class="help-block text-danger">','</p>'); ?>
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