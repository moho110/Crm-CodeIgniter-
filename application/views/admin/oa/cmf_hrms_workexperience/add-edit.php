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
                <div class="panel-heading"><?php echo $action; ?> 工作人员经验 <a href="<?php echo site_url('/oa/CmfHrmsWorkexperience/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="ID">编号：</label>
                            <input  readonly type="text" class="form-control" name="ID" placeholder="Enter ID" value="<?php echo !empty($cmf_hrms_workexperience['ID'])?$cmf_hrms_workexperience['ID']:''; ?>">
                            <?php echo form_error('ID','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="workId">工作ID：</label>
                            <input type="text" class="form-control" name="workId" placeholder="Enter workId" value="<?php echo !empty($cmf_hrms_workexperience['workId'])?$cmf_hrms_workexperience['workId']:''; ?>">
                            <?php echo form_error('workId','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="name">名称：</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter name" value="<?php echo !empty($cmf_hrms_workexperience['name'])?$cmf_hrms_workexperience['name']:''; ?>">
                            <?php echo form_error('name','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="inDepartment">所在部门：</label>
                            <input type="text" class="form-control" name="inDepartment" placeholder="Enter inDepartment" value="<?php echo !empty($cmf_hrms_workexperience['inDepartment'])?$cmf_hrms_workexperience['inDepartment']:''; ?>">
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
                            <label for="company">公司：</label>
                            <input type="text" class="form-control" name="company" placeholder="Enter company" value="<?php echo !empty($cmf_hrms_workexperience['company'])?$cmf_hrms_workexperience['company']:''; ?>">
                            <?php echo form_error('company','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="department">部门：</label>
                            <input type="text" class="form-control" name="department" placeholder="Enter department" value="<?php echo !empty($cmf_hrms_workexperience['department'])?$cmf_hrms_workexperience['department']:''; ?>">
                            <?php echo form_error('department','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="staff">职员：</label>
                            <input type="text" class="form-control" name="staff" placeholder="Enter staff" value="<?php echo !empty($cmf_hrms_workexperience['staff'])?$cmf_hrms_workexperience['staff']:''; ?>">
                            <?php echo form_error('staff','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="proveMan">证明人：</label>
                            <input type="text" class="form-control" name="proveMan" placeholder="Enter proveMan" value="<?php echo !empty($cmf_hrms_workexperience['proveMan'])?$cmf_hrms_workexperience['proveMan']:''; ?>">
                            <?php echo form_error('proveMan','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="memo">备注：</label>
                            <textarea name="memo" cols="140" rows="10" style="resize: none;">
                                <?php echo !empty($cmf_hrms_workexperience['memo'])?$cmf_hrms_workexperience['memo']:''; ?>
                            </textarea>
                            <?php echo form_error('memo','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="creator">创建人：</label>
                            <input type="text" class="form-control" name="creator" placeholder="Enter creator" value="<?php echo !empty($cmf_hrms_workexperience['creator'])?$cmf_hrms_workexperience['creator']:''; ?>">
                            <?php echo form_error('creator','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="createTime">创建时间：</label>
                            <input readonly class="form-control" type="text" id="create_time" placeholder="YYYY-MM-DD hh:mm" name="createTime">
                            <?php echo form_error('createTime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="quitReason">辞职理由：</label>
                            <textarea name="quitReason" cols="140" rows="10" style="resize: none;">
                                <?php echo !empty($cmf_hrms_workexperience['quitReason'])?$cmf_hrms_workexperience['quitReason']:''; ?>
                            </textarea>
                            <?php echo form_error('quitReason','<p class="help-block text-danger">','</p>'); ?>
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