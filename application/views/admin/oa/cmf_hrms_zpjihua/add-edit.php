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
                <div class="panel-heading"><?php echo $action; ?> 招聘计划 <a href="<?php echo site_url('/oa/CmfHrmsZpjihua/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="ID">编号：</label>
                            <input type="text" class="form-control" name="ID" placeholder="Enter ID" value="<?php echo !empty($cmf_hrms_zpjihua['ID'])?$cmf_hrms_zpjihua['ID']:''; ?>">
                            <?php echo form_error('ID','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="departName">部门名称：</label>
                            <input type="text" class="form-control" name="departName" placeholder="Enter departName" value="<?php echo !empty($cmf_hrms_zpjihua['departName'])?$cmf_hrms_zpjihua['departName']:''; ?>">
                            <?php echo form_error('departName','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="desp">描述：</label>
                            <input type="text" class="form-control" name="desp" placeholder="Enter desp" value="<?php echo !empty($cmf_hrms_zpjihua['desp'])?$cmf_hrms_zpjihua['desp']:''; ?>">
                            <?php echo form_error('desp','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="need">需求：</label>
                            <input type="text" class="form-control" name="need" placeholder="Enter need" value="<?php echo !empty($cmf_hrms_zpjihua['need'])?$cmf_hrms_zpjihua['need']:''; ?>">
                            <?php echo form_error('need','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="personNumber">人员名称：</label>
                            <input type="text" class="form-control" name="personNumber" placeholder="Enter personNumber" value="<?php echo !empty($cmf_hrms_zpjihua['personNumber'])?$cmf_hrms_zpjihua['personNumber']:''; ?>">
                            <?php echo form_error('personNumber','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="startTime">开始时间：</label>
                            <input type="text" class="form-control" name="startTime" placeholder="Enter startTime" value="<?php echo !empty($cmf_hrms_zpjihua['startTime'])?$cmf_hrms_zpjihua['startTime']:''; ?>">
                            <?php echo form_error('startTime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="endTime">结束时间：</label>
                            <input type="text" class="form-control" name="endTime" placeholder="Enter endTime" value="<?php echo !empty($cmf_hrms_zpjihua['endTime'])?$cmf_hrms_zpjihua['endTime']:''; ?>">
                            <?php echo form_error('endTime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="applyMan">申请人：</label>
                            <input type="text" class="form-control" name="applyMan" placeholder="Enter applyMan" value="<?php echo !empty($cmf_hrms_zpjihua['applyMan'])?$cmf_hrms_zpjihua['applyMan']:''; ?>">
                            <?php echo form_error('applyMan','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="applyTime">申请时间：</label>
                            <input type="text" class="form-control" name="applyTime" placeholder="Enter applyTime" value="<?php echo !empty($cmf_hrms_zpjihua['applyTime'])?$cmf_hrms_zpjihua['applyTime']:''; ?>">
                            <?php echo form_error('applyTime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="exMan">审核人：</label>
                            <input type="text" class="form-control" name="exMan" placeholder="Enter exMan" value="<?php echo !empty($cmf_hrms_zpjihua['exMan'])?$cmf_hrms_zpjihua['exMan']:''; ?>">
                            <?php echo form_error('exMan','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="exTime">审核时间：</label>
                            <input type="text" class="form-control" name="exTime" placeholder="Enter exTime" value="<?php echo !empty($cmf_hrms_zpjihua['exTime'])?$cmf_hrms_zpjihua['exTime']:''; ?>">
                            <?php echo form_error('exTime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="exStatus">审核状态：</label>
                            <input type="text" class="form-control" name="exStatus" placeholder="Enter exStatus" value="<?php echo !empty($cmf_hrms_zpjihua['exStatus'])?$cmf_hrms_zpjihua['exStatus']:''; ?>">
                            <?php echo form_error('exStatus','<p class="help-block text-danger">','</p>'); ?>
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