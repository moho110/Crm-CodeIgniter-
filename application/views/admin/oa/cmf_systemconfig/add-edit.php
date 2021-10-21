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
                <div class="panel-heading"><?php echo $action; ?> 系统配置 <a href="<?php echo site_url('/oa/CmfSystemconfig/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="MODULE">模块：</label>
                            <input type="text" class="form-control" name="MODULE" placeholder="Enter MODULE" value="<?php echo !empty($cmf_systemconfig['MODULE'])?$cmf_systemconfig['MODULE']:''; ?>">
                            <?php echo form_error('MODULE','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="CONTENT">内容：</label>
                            <input type="text" class="form-control" name="CONTENT" placeholder="Enter CONTENT" value="<?php echo !empty($cmf_systemconfig['CONTENT'])?$cmf_systemconfig['CONTENT']:''; ?>">
                            <?php echo form_error('CONTENT','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="UNIT">单元：</label>
                            <input type="text" class="form-control" name="UNIT" placeholder="Enter UNIT" value="<?php echo !empty($cmf_systemconfig['UNIT'])?$cmf_systemconfig['UNIT']:''; ?>">
                            <?php echo form_error('UNIT','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="STATUS">状态：</label>
                            <input type="text" class="form-control" name="STATUS" placeholder="Enter STATUS" value="<?php echo !empty($cmf_systemconfig['STATUS'])?$cmf_systemconfig['STATUS']:''; ?>">
                            <?php echo form_error('STATUS','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="MEMO">备注：</label>
                            <input type="text" class="form-control" name="MEMO" placeholder="Enter MEMO" value="<?php echo !empty($cmf_systemconfig['MEMO'])?$cmf_systemconfig['MEMO']:''; ?>">
                            <?php echo form_error('MEMO','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="SHORTCODE">短代码：</label>
                            <input type="text" class="form-control" name="SHORTCODE" placeholder="Enter SHORTCODE" value="<?php echo !empty($cmf_systemconfig['SHORTCODE'])?$cmf_systemconfig['SHORTCODE']:''; ?>">
                            <?php echo form_error('SHORTCODE','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="TRANSCODE">转换代码：</label>
                            <input type="text" class="form-control" name="TRANSCODE" placeholder="Enter TRANSCODE" value="<?php echo !empty($cmf_systemconfig['TRANSCODE'])?$cmf_systemconfig['TRANSCODE']:''; ?>">
                            <?php echo form_error('TRANSCODE','<p class="help-block text-danger">','</p>'); ?>
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