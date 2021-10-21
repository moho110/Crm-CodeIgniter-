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
                <div class="panel-heading"><?php echo $action; ?> 人力开支 <a href="<?php echo site_url('/oa/CmfHrmsExpense/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="ID">编号：</label>
                            <input type="text" class="form-control" name="ID" placeholder="Enter ID" value="<?php echo !empty($cmf_hrms_expense['ID'])?$cmf_hrms_expense['ID']:''; ?>">
                            <?php echo form_error('ID','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="workId">工作ID：</label>
                            <input type="text" class="form-control" name="workId" placeholder="Enter workId" value="<?php echo !empty($cmf_hrms_expense['workId'])?$cmf_hrms_expense['workId']:''; ?>">
                            <?php echo form_error('workId','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="name">名称：</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter name" value="<?php echo !empty($cmf_hrms_expense['name'])?$cmf_hrms_expense['name']:''; ?>">
                            <?php echo form_error('name','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="sex">性别：</label>
                            <input type="text" class="form-control" name="sex" placeholder="Enter sex" value="<?php echo !empty($cmf_hrms_expense['sex'])?$cmf_hrms_expense['sex']:''; ?>">
                            <?php echo form_error('sex','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="inDepartment">所在部门：</label>
                            <input type="text" class="form-control" name="inDepartment" placeholder="Enter inDepartment" value="<?php echo !empty($cmf_hrms_expense['inDepartment'])?$cmf_hrms_expense['inDepartment']:''; ?>">
                            <?php echo form_error('inDepartment','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="feeType">费用类型：</label>
                            <input type="text" class="form-control" name="feeType" placeholder="Enter feeType" value="<?php echo !empty($cmf_hrms_expense['feeType'])?$cmf_hrms_expense['feeType']:''; ?>">
                            <?php echo form_error('feeType','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="feeNumber">费用数量：</label>
                            <input type="text" class="form-control" name="feeNumber" placeholder="Enter feeNumber" value="<?php echo !empty($cmf_hrms_expense['feeNumber'])?$cmf_hrms_expense['feeNumber']:''; ?>">
                            <?php echo form_error('feeNumber','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="useReason">使用理由：</label>
                            <input type="text" class="form-control" name="useReason" placeholder="Enter useReason" value="<?php echo !empty($cmf_hrms_expense['useReason'])?$cmf_hrms_expense['useReason']:''; ?>">
                            <?php echo form_error('useReason','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="creator">创建者：</label>
                            <input type="text" class="form-control" name="creator" placeholder="Enter creator" value="<?php echo !empty($cmf_hrms_expense['creator'])?$cmf_hrms_expense['creator']:''; ?>">
                            <?php echo form_error('creator','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="createTime">创建时间：</label>
                            <input type="text" class="form-control" name="createTime" placeholder="Enter createTime" value="<?php echo !empty($cmf_hrms_expense['createTime'])?$cmf_hrms_expense['createTime']:''; ?>">
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