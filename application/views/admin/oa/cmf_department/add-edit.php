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
                <div class="panel-heading"><?php echo $action; ?> 部门 <a href="<?php echo site_url('/oa/CmfDepartment/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="DEPT_NAME">部门名称：</label>
                            <input type="text" class="form-control" name="DEPT_NAME" placeholder="Enter DEPT_NAME" value="<?php echo !empty($cmf_department['DEPT_NAME'])?$cmf_department['DEPT_NAME']:''; ?>">
                            <?php echo form_error('DEPT_NAME','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="TEL_NO">电话号码：</label>
                            <input type="text" class="form-control" name="TEL_NO" placeholder="Enter TEL_NO" value="<?php echo !empty($cmf_department['TEL_NO'])?$cmf_department['TEL_NO']:''; ?>">
                            <?php echo form_error('TEL_NO','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="FAX_NO">传真号码：</label>
                            <input type="text" class="form-control" name="FAX_NO" placeholder="Enter FAX_NO" value="<?php echo !empty($cmf_department['FAX_NO'])?$cmf_department['FAX_NO']:''; ?>">
                            <?php echo form_error('FAX_NO','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="DEPT_NO">部门编号：</label>
                            <input type="text" class="form-control" name="DEPT_NO" placeholder="Enter DEPT_NO" value="<?php echo !empty($cmf_department['DEPT_NO'])?$cmf_department['DEPT_NO']:''; ?>">
                            <?php echo form_error('DEPT_NO','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="DEPT_PARENT">上级部门：</label>
                            <input type="text" class="form-control" name="DEPT_PARENT" placeholder="Enter DEPT_PARENT" value="<?php echo !empty($cmf_department['DEPT_PARENT'])?$cmf_department['DEPT_PARENT']:''; ?>">
                            <?php echo form_error('DEPT_PARENT','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="MANAGER">部门经理：</label>
                            <input type="text" class="form-control" name="MANAGER" placeholder="Enter MANAGER" value="<?php echo !empty($cmf_department['MANAGER'])?$cmf_department['MANAGER']:''; ?>">
                            <?php echo form_error('MANAGER','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="LEADER1">部门领导一：</label>
                            <input type="text" class="form-control" name="LEADER1" placeholder="Enter LEADER1" value="<?php echo !empty($cmf_department['LEADER1'])?$cmf_department['LEADER1']:''; ?>">
                            <?php echo form_error('LEADER1','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="LEADER2">部门领导二：</label>
                            <input type="text" class="form-control" name="LEADER2" placeholder="Enter LEADER2" value="<?php echo !empty($cmf_department['LEADER2'])?$cmf_department['LEADER2']:''; ?>">
                            <?php echo form_error('LEADER2','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="DEPT_FUNC">部门职能：</label>
                            <input type="text" class="form-control" name="DEPT_FUNC" placeholder="Enter DEPT_FUNC" value="<?php echo !empty($cmf_department['DEPT_FUNC'])?$cmf_department['DEPT_FUNC']:''; ?>">
                            <?php echo form_error('DEPT_FUNC','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="orderno">顺序编号：</label>
                            <input type="text" class="form-control" name="orderno" placeholder="Enter orderno" value="<?php echo !empty($cmf_department['orderno'])?$cmf_department['orderno']:''; ?>">
                            <?php echo form_error('orderno','<p class="help-block text-danger">','</p>'); ?>
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