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
                <div class="panel-heading"><?php echo $action; ?> 系统代码 <a href="<?php echo site_url('/oa/CmfSysCode/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="CODE_ID">代码ID：</label>
                            <input type="text" class="form-control" name="CODE_ID" placeholder="Enter CODE_ID" value="<?php echo !empty($cmf_sys_code['CODE_ID'])?$cmf_sys_code['CODE_ID']:''; ?>">
                            <?php echo form_error('CODE_ID','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="CODE_NO">代码编号：</label>
                            <input type="text" class="form-control" name="CODE_NO" placeholder="Enter CODE_NO" value="<?php echo !empty($cmf_sys_code['CODE_NO'])?$cmf_sys_code['CODE_NO']:''; ?>">
                            <?php echo form_error('CODE_NO','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="CODE_NAME">代码名称：</label>
                            <input type="text" class="form-control" name="CODE_NAME" placeholder="Enter CODE_NAME" value="<?php echo !empty($cmf_sys_code['CODE_NAME'])?$cmf_sys_code['CODE_NAME']:''; ?>">
                            <?php echo form_error('CODE_NAME','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="CODE_ORDER">代码顺序：</label>
                            <input type="text" class="form-control" name="CODE_ORDER" placeholder="Enter CODE_ORDER" value="<?php echo !empty($cmf_sys_code['CODE_ORDER'])?$cmf_sys_code['CODE_ORDER']:''; ?>">
                            <?php echo form_error('CODE_ORDER','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="PARENT_NO">父级编号：</label>
                            <input type="text" class="form-control" name="PARENT_NO" placeholder="Enter PARENT_NO" value="<?php echo !empty($cmf_sys_code['PARENT_NO'])?$cmf_sys_code['PARENT_NO']:''; ?>">
                            <?php echo form_error('PARENT_NO','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="CODE_FLAG">代码标识：</label>
                            <input type="text" class="form-control" name="CODE_FLAG" placeholder="Enter CODE_FLAG" value="<?php echo !empty($cmf_sys_code['CODE_FLAG'])?$cmf_sys_code['CODE_FLAG']:''; ?>">
                            <?php echo form_error('CODE_FLAG','<p class="help-block text-danger">','</p>'); ?>
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