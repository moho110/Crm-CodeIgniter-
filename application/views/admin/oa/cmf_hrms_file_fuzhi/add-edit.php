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
                <div class="panel-heading"><?php echo $action; ?> 人力复职档案 <a href="<?php echo site_url('/oa/CmfHrmsFileFuzhi/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="ID">编号：</label>
                            <input readonly type="text" class="form-control" name="ID" placeholder="Enter ID" value="<?php echo !empty($cmf_hrms_file_fuzhi['ID'])?$cmf_hrms_file_fuzhi['ID']:''; ?>">
                            <?php echo form_error('ID','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="workId">工作ID：</label>
                            <input type="text" class="form-control" name="workId" placeholder="Enter workId" value="<?php echo !empty($cmf_hrms_file_fuzhi['workId'])?$cmf_hrms_file_fuzhi['workId']:''; ?>">
                            <?php echo form_error('workId','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="name">名称：</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter name" value="<?php echo !empty($cmf_hrms_file_fuzhi['name'])?$cmf_hrms_file_fuzhi['name']:''; ?>">
                            <?php echo form_error('name','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="inDepartment">所在部门：</label>
                            <input type="text" class="form-control" name="inDepartment" placeholder="Enter inDepartment" value="<?php echo !empty($cmf_hrms_file_fuzhi['inDepartment'])?$cmf_hrms_file_fuzhi['inDepartment']:''; ?>">
                            <?php echo form_error('inDepartment','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="sex">性别：</label>
                            <input type="radio" name="sex" value="1">男
                            <input type="radio" name="sex" value="0">女
                            <?php echo form_error('sex','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="birthday">生日：</label>
                            <input readonly class="form-control" type="text" id="date-group1-4" placeholder="YYYY-MM-DD hh:mm" name="birthday">
                            <?php echo form_error('birthday','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="telephone">电话号码：</label>
                            <input type="text" class="form-control" name="telephone" placeholder="Enter telephone" value="<?php echo !empty($cmf_hrms_file_fuzhi['telephone'])?$cmf_hrms_file_fuzhi['telephone']:''; ?>">
                            <?php echo form_error('telephone','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="studyExp">学习经验：</label>
                            <textarea name="studyExp" cols="140" rows="10" style="resize: none;">
                                <?php echo !empty($cmf_hrms_file_fuzhi['studyExp'])?$cmf_hrms_file_fuzhi['studyExp']:''; ?>
                            </textarea>
                            <?php echo form_error('studyExp','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="national">国籍：</label>
                            <input type="text" class="form-control" name="national" placeholder="Enter national" value="<?php echo !empty($cmf_hrms_file_fuzhi['national'])?$cmf_hrms_file_fuzhi['national']:''; ?>">
                            <?php echo form_error('national','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="memo">备注：</label>
                            <textarea name="memo" cols="140" rows="10" style="resize: none;">
                                <?php echo !empty($cmf_hrms_file_fuzhi['memo'])?$cmf_hrms_file_fuzhi['memo']:''; ?>
                            </textarea>
                            <?php echo form_error('memo','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="recoverDate">复职日期：</label>
                            <input readonly class="form-control" type="text" id="date-group1-5" placeholder="YYYY-MM-DD hh:mm" name="recoverDate">
                            <?php echo form_error('recoverDate','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="creator">创建人：</label>
                            <input type="text" class="form-control" name="creator" placeholder="Enter creator" value="<?php echo !empty($cmf_hrms_file_fuzhi['creator'])?$cmf_hrms_file_fuzhi['creator']:''; ?>">
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