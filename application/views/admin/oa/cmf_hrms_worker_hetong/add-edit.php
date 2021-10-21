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
                <div class="panel-heading"><?php echo $action; ?> 工作人员合同 <a href="<?php echo site_url('/oa/CmfHrmsWorkerHetong/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="ID">编号：</label>
                            <input  readonly type="text" class="form-control" name="ID" placeholder="Enter ID" value="<?php echo !empty($cmf_hrms_worker_hetong['ID'])?$cmf_hrms_worker_hetong['ID']:''; ?>">
                            <?php echo form_error('ID','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="workId">工作ID：</label>
                            <input type="text" class="form-control" name="workId" placeholder="Enter workId" value="<?php echo !empty($cmf_hrms_worker_hetong['workId'])?$cmf_hrms_worker_hetong['workId']:''; ?>">
                            <?php echo form_error('workId','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="name">名称：</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter name" value="<?php echo !empty($cmf_hrms_worker_hetong['name'])?$cmf_hrms_worker_hetong['name']:''; ?>">
                            <?php echo form_error('name','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="inDepartment">所在部门：</label>
                            <input type="text" class="form-control" name="inDepartment" placeholder="Enter inDepartment" value="<?php echo !empty($cmf_hrms_worker_hetong['inDepartment'])?$cmf_hrms_worker_hetong['inDepartment']:''; ?>">
                            <?php echo form_error('inDepartment','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="signTime">登陆时间：</label>
                            <input readonly class="form-control" type="text" id="date-group1-4" placeholder="YYYY-MM-DD hh:mm" name="signTime">
                            <?php echo form_error('signTime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="endTime">结束时间：</label>
                            <input readonly class="form-control" type="text" id="date-group1-5" placeholder="YYYY-MM-DD hh:mm" name="endTime">
                            <?php echo form_error('endTime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="workedYear">工作年限：</label>
                            <input type="text" class="form-control" name="workedYear" placeholder="Enter workedYear" value="<?php echo !empty($cmf_hrms_worker_hetong['workedYear'])?$cmf_hrms_worker_hetong['workedYear']:''; ?>">
                            <?php echo form_error('workedYear','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="creator">创建人：</label>
                            <input type="text" class="form-control" name="creator" placeholder="Enter creator" value="<?php echo !empty($cmf_hrms_worker_hetong['creator'])?$cmf_hrms_worker_hetong['creator']:''; ?>">
                            <?php echo form_error('creator','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="createTime">创建时间：</label>
                            <input readonly class="form-control" type="text" id="create_time" placeholder="YYYY-MM-DD hh:mm" name="endTime">
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