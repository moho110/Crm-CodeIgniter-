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
                <div class="panel-heading"><?php echo $action; ?> 人力档案录用 <a href="<?php echo site_url('/oa/CmfHrmsFileLuyong/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="Id">编号：</label>
                            <input type="text" class="form-control" name="Id" placeholder="Enter Id" value="<?php echo !empty($cmf_hrms_file_luyong['Id'])?$cmf_hrms_file_luyong['Id']:''; ?>">
                            <?php echo form_error('Id','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="Name">名称：</label>
                            <input type="text" class="form-control" name="Name" placeholder="Enter Name" value="<?php echo !empty($cmf_hrms_file_luyong['Name'])?$cmf_hrms_file_luyong['Name']:''; ?>">
                            <?php echo form_error('Name','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="sex">性别：</label>
                            <input type="text" class="form-control" name="sex" placeholder="Enter sex" value="<?php echo !empty($cmf_hrms_file_luyong['sex'])?$cmf_hrms_file_luyong['sex']:''; ?>">
                            <?php echo form_error('sex','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="birthday">生日：</label>
                            <input type="text" class="form-control" name="birthday" placeholder="Enter birthday" value="<?php echo !empty($cmf_hrms_file_luyong['birthday'])?$cmf_hrms_file_luyong['birthday']:''; ?>">
                            <?php echo form_error('birthday','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="national">国籍：</label>
                            <input type="text" class="form-control" name="national" placeholder="Enter national" value="<?php echo !empty($cmf_hrms_file_luyong['national'])?$cmf_hrms_file_luyong['national']:''; ?>">
                            <?php echo form_error('national','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="political">政治面貌：</label>
                            <input type="text" class="form-control" name="political" placeholder="Enter political" value="<?php echo !empty($cmf_hrms_file_luyong['political'])?$cmf_hrms_file_luyong['political']:''; ?>">
                            <?php echo form_error('political','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="IDNo">身份证号码：</label>
                            <input type="text" class="form-control" name="IDNo" placeholder="Enter IDNo" value="<?php echo !empty($cmf_hrms_file_luyong['IDNo'])?$cmf_hrms_file_luyong['IDNo']:''; ?>">
                            <?php echo form_error('IDNo','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="jiguan">籍贯：</label>
                            <input type="text" class="form-control" name="jiguan" placeholder="Enter jiguan" value="<?php echo !empty($cmf_hrms_file_luyong['jiguan'])?$cmf_hrms_file_luyong['jiguan']:''; ?>">
                            <?php echo form_error('jiguan','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="college">院校：</label>
                            <input type="text" class="form-control" name="college" placeholder="Enter college" value="<?php echo !empty($cmf_hrms_file_luyong['college'])?$cmf_hrms_file_luyong['college']:''; ?>">
                            <?php echo form_error('college','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="studyExp">学习经历：</label>
                            <input type="text" class="form-control" name="studyExp" placeholder="Enter studyExp" value="<?php echo !empty($cmf_hrms_file_luyong['studyExp'])?$cmf_hrms_file_luyong['studyExp']:''; ?>">
                            <?php echo form_error('studyExp','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="staffName">职员名称：</label>
                            <input type="text" class="form-control" name="staffName" placeholder="Enter staffName" value="<?php echo !empty($cmf_hrms_file_luyong['staffName'])?$cmf_hrms_file_luyong['staffName']:''; ?>">
                            <?php echo form_error('staffName','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="professional">专业：</label>
                            <input type="text" class="form-control" name="professional" placeholder="Enter professional" value="<?php echo !empty($cmf_hrms_file_luyong['professional'])?$cmf_hrms_file_luyong['professional']:''; ?>">
                            <?php echo form_error('professional','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="email">电子邮件：</label>
                            <input type="text" class="form-control" name="email" placeholder="Enter email" value="<?php echo !empty($cmf_hrms_file_luyong['email'])?$cmf_hrms_file_luyong['email']:''; ?>">
                            <?php echo form_error('email','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="creator">创建人：</label>
                            <input type="text" class="form-control" name="creator" placeholder="Enter creator" value="<?php echo !empty($cmf_hrms_file_luyong['creator'])?$cmf_hrms_file_luyong['creator']:''; ?>">
                            <?php echo form_error('creator','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="createTime">创建时间：</label>
                            <input type="text" class="form-control" name="createTime" placeholder="Enter createTime" value="<?php echo !empty($cmf_hrms_file_luyong['createTime'])?$cmf_hrms_file_luyong['createTime']:''; ?>">
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