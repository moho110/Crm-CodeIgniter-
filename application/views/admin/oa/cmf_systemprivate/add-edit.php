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
                <div class="panel-heading"><?php echo $action; ?> 系统隐私 <a href="<?php echo site_url('/oa/CmfSystemprivate/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="ID">编号：</label>
                            <input type="text" class="form-control" name="ID" placeholder="Enter ID" value="<?php echo !empty($cmf_systemprivate['ID'])?$cmf_systemprivate['ID']:''; ?>">
                            <?php echo form_error('ID','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="NAME">名称：</label>
                            <input type="text" class="form-control" name="NAME" placeholder="Enter NAME" value="<?php echo !empty($cmf_systemprivate['NAME'])?$cmf_systemprivate['NAME']:''; ?>">
                            <?php echo form_error('NAME','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="CONTENT">内容：</label>
                            <input type="text" class="form-control" name="CONTENT" placeholder="Enter CONTENT" value="<?php echo !empty($cmf_systemprivate['CONTENT'])?$cmf_systemprivate['CONTENT']:''; ?>">
                            <?php echo form_error('CONTENT','<p class="help-block text-danger">','</p>'); ?>
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