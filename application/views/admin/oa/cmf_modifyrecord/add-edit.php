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
                <div class="panel-heading"><?php echo $action; ?> 修改记录 <a href="<?php echo site_url('/oa/CmfModifyrecord/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="id">编号：</label>
                            <input type="text" class="form-control" name="id" placeholder="Enter id" value="<?php echo !empty($cmf_modifyrecord['id'])?$cmf_modifyrecord['id']:''; ?>">
                            <?php echo form_error('id','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="tablename">表名：</label>
                            <input type="text" class="form-control" name="tablename" placeholder="Enter tablename" value="<?php echo !empty($cmf_modifyrecord['tablename'])?$cmf_modifyrecord['tablename']:''; ?>">
                            <?php echo form_error('tablename','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="keyfield">键字段：</label>
                            <input type="text" class="form-control" name="keyfield" placeholder="Enter keyfield" value="<?php echo !empty($cmf_modifyrecord['keyfield'])?$cmf_modifyrecord['keyfield']:''; ?>">
                            <?php echo form_error('keyfield','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="keyvalue">键值：</label>
                            <input type="text" class="form-control" name="keyvalue" placeholder="Enter keyvalue" value="<?php echo !empty($cmf_modifyrecord['keyvalue'])?$cmf_modifyrecord['keyvalue']:''; ?>">
                            <?php echo form_error('keyvalue','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="createman">创建人：</label>
                            <input type="text" class="form-control" name="createman" placeholder="Enter createman" value="<?php echo !empty($cmf_modifyrecord['createman'])?$cmf_modifyrecord['createman']:''; ?>">
                            <?php echo form_error('createman','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="modifycontent">修改内容：</label>
                            <input type="text" class="form-control" name="modifycontent" placeholder="Enter modifycontent" value="<?php echo !empty($cmf_modifyrecord['modifycontent'])?$cmf_modifyrecord['modifycontent']:''; ?>">
                            <?php echo form_error('modifycontent','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="createtime">创建时间：</label>
                            <input type="text" class="form-control" name="createtime" placeholder="Enter createtime" value="<?php echo !empty($cmf_modifyrecord['createtime'])?$cmf_modifyrecord['createtime']:''; ?>">
                            <?php echo form_error('createtime','<p class="help-block text-danger">','</p>'); ?>
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