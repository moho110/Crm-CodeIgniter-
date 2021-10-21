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
                <div class="panel-heading"><?php echo $action; ?> 系统语言 <a href="<?php echo site_url('/oa/CmfSystemlang/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="systemlangid">系统语言ID：</label>
                            <input type="text" class="form-control" name="systemlangid" placeholder="Enter systemlangid" value="<?php echo !empty($cmf_systemlang['systemlangid'])?$cmf_systemlang['systemlangid']:''; ?>">
                            <?php echo form_error('systemlangid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="fieldname">字段名称：</label>
                            <input type="text" class="form-control" name="fieldname" placeholder="Enter fieldname" value="<?php echo !empty($cmf_systemlang['fieldname'])?$cmf_systemlang['fieldname']:''; ?>">
                            <?php echo form_error('fieldname','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="tablename">表名称：</label>
                            <input type="text" class="form-control" name="tablename" placeholder="Enter tablename" value="<?php echo !empty($cmf_systemlang['tablename'])?$cmf_systemlang['tablename']:''; ?>">
                            <?php echo form_error('tablename','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="chinese">汉字：</label>
                            <input type="text" class="form-control" name="chinese" placeholder="Enter chinese" value="<?php echo !empty($cmf_systemlang['chinese'])?$cmf_systemlang['chinese']:''; ?>">
                            <?php echo form_error('chinese','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="english">英文：</label>
                            <input type="text" class="form-control" name="english" placeholder="Enter english" value="<?php echo !empty($cmf_systemlang['english'])?$cmf_systemlang['english']:''; ?>">
                            <?php echo form_error('english','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="remark">备注：</label>
                            <input type="text" class="form-control" name="remark" placeholder="Enter remark" value="<?php echo !empty($cmf_systemlang['remark'])?$cmf_systemlang['remark']:''; ?>">
                            <?php echo form_error('remark','<p class="help-block text-danger">','</p>'); ?>
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