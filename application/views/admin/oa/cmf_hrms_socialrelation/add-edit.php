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
                <div class="panel-heading"><?php echo $action; ?> 社会关系 <a href="<?php echo site_url('/oa/CmfHrmsSocialrelation/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="ID">编号：</label>
                            <input readonly type="text" class="form-control" name="ID" placeholder="Enter ID" value="<?php echo !empty($cmf_hrms_socialrelation['ID'])?$cmf_hrms_socialrelation['ID']:''; ?>">
                            <?php echo form_error('ID','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="relation">关系：</label>
                            <input type="text" class="form-control" name="relation" placeholder="Enter relation" value="<?php echo !empty($cmf_hrms_socialrelation['relation'])?$cmf_hrms_socialrelation['relation']:''; ?>">
                            <?php echo form_error('relation','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="name">名称：</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter name" value="<?php echo !empty($cmf_hrms_socialrelation['name'])?$cmf_hrms_socialrelation['name']:''; ?>">
                            <?php echo form_error('name','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="political">政治面貌：</label>
                            <input type="text" class="form-control" name="political" placeholder="Enter political" value="<?php echo !empty($cmf_hrms_socialrelation['political'])?$cmf_hrms_socialrelation['political']:''; ?>">
                            <?php echo form_error('political','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="company">公司：</label>
                            <input type="text" class="form-control" name="company" placeholder="Enter company" value="<?php echo !empty($cmf_hrms_socialrelation['company'])?$cmf_hrms_socialrelation['company']:''; ?>">
                            <?php echo form_error('company','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="staff">职员：</label>
                            <input type="text" class="form-control" name="staff" placeholder="Enter staff" value="<?php echo !empty($cmf_hrms_socialrelation['staff'])?$cmf_hrms_socialrelation['staff']:''; ?>">
                            <?php echo form_error('staff','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="creator">创建人：</label>
                            <input type="text" class="form-control" name="creator" placeholder="Enter creator" value="<?php echo !empty($cmf_hrms_socialrelation['creator'])?$cmf_hrms_socialrelation['creator']:''; ?>">
                            <?php echo form_error('creator','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="createTime">创建时间：</label>
                            <input readonly class="form-control" type="text" id="date-group1-4" placeholder="YYYY-MM-DD hh:mm" name="createTime">
                            <?php echo form_error('createTime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="workId">工作ID：</label>
                            <input type="text" class="form-control" name="workId" placeholder="Enter workId" value="<?php echo !empty($cmf_hrms_socialrelation['workId'])?$cmf_hrms_socialrelation['workId']:''; ?>">
                            <?php echo form_error('workId','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="named">命名：</label>
                            <input type="text" class="form-control" name="named" placeholder="Enter named" value="<?php echo !empty($cmf_hrms_socialrelation['named'])?$cmf_hrms_socialrelation['named']:''; ?>">
                            <?php echo form_error('named','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="inDepartment">所在部门：</label>
                            <input type="text" class="form-control" name="inDepartment" placeholder="Enter inDepartment" value="<?php echo !empty($cmf_hrms_socialrelation['inDepartment'])?$cmf_hrms_socialrelation['inDepartment']:''; ?>">
                            <?php echo form_error('inDepartment','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="workAddress">工作地址：</label>
                            <input type="text" class="form-control" name="workAddress" placeholder="Enter workAddress" value="<?php echo !empty($cmf_hrms_socialrelation['workAddress'])?$cmf_hrms_socialrelation['workAddress']:''; ?>">
                            <?php echo form_error('workAddress','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="telephone">电话号码：</label>
                            <input type="text" class="form-control" name="telephone" placeholder="Enter telephone" value="<?php echo !empty($cmf_hrms_socialrelation['telephone'])?$cmf_hrms_socialrelation['telephone']:''; ?>">
                            <?php echo form_error('telephone','<p class="help-block text-danger">','</p>'); ?>
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