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
                <div class="panel-heading"><?php echo $action; ?> 教育经验 <a href="<?php echo site_url('/oa/CmfHrmsEducationalexperience/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="ID">编号：</label>
                            <input readonly type="text" class="form-control" name="ID" placeholder="Enter ID" value="<?php echo !empty($cmf_hrms_educationalexperience['ID'])?$cmf_hrms_educationalexperience['ID']:''; ?>">
                            <?php echo form_error('ID','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="workId">工作ID：</label>
                            <input type="text" class="form-control" name="workId" placeholder="Enter workId" value="<?php echo !empty($cmf_hrms_educationalexperience['workId'])?$cmf_hrms_educationalexperience['workId']:''; ?>">
                            <?php echo form_error('workId','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="name">名称：</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter name" value="<?php echo !empty($cmf_hrms_educationalexperience['name'])?$cmf_hrms_educationalexperience['name']:''; ?>">
                            <?php echo form_error('name','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="inDepartment">所在部门：</label>
                            <input type="text" class="form-control" name="inDepartment" placeholder="Enter inDepartment" value="<?php echo !empty($cmf_hrms_educationalexperience['inDepartment'])?$cmf_hrms_educationalexperience['inDepartment']:''; ?>">
                            <?php echo form_error('inDepartment','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="startTime">开始时间：</label>
                            <input readonly class="form-control" type="text" id="date-group1-4" placeholder="YYYY-MM-DD hh:mm" name="startTime">
                            <?php echo form_error('startTime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="endTime">结束时间：</label>
                            <input readonly class="form-control" type="text" id="date-group1-5" placeholder="YYYY-MM-DD hh:mm" name="endTime">
                            <?php echo form_error('endTime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="school">学校：</label>
                            <input type="text" class="form-control" name="school" placeholder="Enter school" value="<?php echo !empty($cmf_hrms_educationalexperience['school'])?$cmf_hrms_educationalexperience['school']:''; ?>">
                            <?php echo form_error('school','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="professional">专业：</label>
                            <input type="text" class="form-control" name="professional" placeholder="Enter professional" value="<?php echo !empty($cmf_hrms_educationalexperience['professional'])?$cmf_hrms_educationalexperience['professional']:''; ?>">
                            <?php echo form_error('professional','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="experience">经验：</label>
                            <input type="text" class="form-control" name="experience" placeholder="Enter experience" value="<?php echo !empty($cmf_hrms_educationalexperience['experience'])?$cmf_hrms_educationalexperience['experience']:''; ?>">
                            <?php echo form_error('experience','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="proveMan">证明人：</label>
                            <input type="text" class="form-control" name="proveMan" placeholder="Enter proveMan" value="<?php echo !empty($cmf_hrms_educationalexperience['proveMan'])?$cmf_hrms_educationalexperience['proveMan']:''; ?>">
                            <?php echo form_error('proveMan','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="creator">创建者：</label>
                            <input type="text" class="form-control" name="creator" placeholder="Enter creator" value="<?php echo !empty($cmf_hrms_educationalexperience['creator'])?$cmf_hrms_educationalexperience['creator']:''; ?>">
                            <?php echo form_error('creator','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="createTime">创建时间：</label>
                            <input readonly class="form-control" type="text" id="create_time" placeholder="YYYY-MM-DD hh:mm" name="createTime">
                            <?php echo form_error('createTime','<p class="help-block text-danger">','</p>'); ?>
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