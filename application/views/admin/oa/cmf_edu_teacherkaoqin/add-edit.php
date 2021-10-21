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
                <div class="panel-heading"><?php echo $action; ?> 教师考勤 <a href="<?php echo site_url('/oa/CmfEduTeacherkaoqin/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="Id">Id</label>
                            <input type="text" class="form-control" name="Id" placeholder="Enter Id" value="<?php echo !empty($cmf_edu_teacherkaoqin['Id'])?$cmf_edu_teacherkaoqin['Id']:''; ?>">
                            <?php echo form_error('Id','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="teacherUserName">银行ID：</label>
                            <input type="text" class="form-control" name="teacherUserName" placeholder="Enter teacherUserName" value="<?php echo !empty($cmf_edu_teacherkaoqin['teacherUserName'])?$cmf_edu_teacherkaoqin['teacherUserName']:''; ?>">
                            <?php echo form_error('teacherUserName','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="teacherName">银行代码：</label>
                            <input type="text" class="form-control" name="teacherName" placeholder="Enter teacherName" value="<?php echo !empty($cmf_edu_teacherkaoqin['teacherName'])?$cmf_edu_teacherkaoqin['teacherName']:''; ?>">
                            <?php echo form_error('teacherName','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="dutyDate">银行名称：</label>
                            <input type="text" class="form-control" name="dutyDate" placeholder="Enter dutyDate" value="<?php echo !empty($cmf_edu_teacherkaoqin['dutyDate'])?$cmf_edu_teacherkaoqin['dutyDate']:''; ?>">
                            <?php echo form_error('dutyDate','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="cardTime">系统锁定：</label>
                            <input type="text" class="form-control" name="cardTime" placeholder="Enter cardTime" value="<?php echo !empty($cmf_edu_teacherkaoqin['cardTime'])?$cmf_edu_teacherkaoqin['cardTime']:''; ?>">
                            <?php echo form_error('cardTime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="dutyId">金额：</label>
                            <input type="text" class="form-control" name="dutyId" placeholder="Enter dutyId" value="<?php echo !empty($cmf_edu_teacherkaoqin['dutyId'])?$cmf_edu_teacherkaoqin['dutyId']:''; ?>">
                            <?php echo form_error('dutyId','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="dutyPosition">所属：</label>
                            <input type="text" class="form-control" name="dutyPosition" placeholder="Enter dutyPosition" value="<?php echo !empty($cmf_edu_teacherkaoqin['dutyPosition'])?$cmf_edu_teacherkaoqin['dutyPosition']:''; ?>">
                            <?php echo form_error('dutyPosition','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="dutyIP">所属：</label>
                            <input type="text" class="form-control" name="dutyIP" placeholder="Enter dutyIP" value="<?php echo !empty($cmf_edu_teacherkaoqin['dutyIP'])?$cmf_edu_teacherkaoqin['dutyIP']:''; ?>">
                            <?php echo form_error('dutyIP','<p class="help-block text-danger">','</p>'); ?>
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