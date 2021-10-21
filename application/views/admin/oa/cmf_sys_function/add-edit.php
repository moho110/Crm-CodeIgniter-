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
                <div class="panel-heading"><?php echo $action; ?> 系统功能 <a href="<?php echo site_url('/oa/CmfSysFunction/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="FUNC_ID">功能ID：</label>
                            <input type="text" class="form-control" name="CODE_NO" placeholder="Enter CODE_NO" value="<?php echo !empty($cmf_sys_function['CODE_NO'])?$cmf_sys_function['CODE_NO']:''; ?>">
                            <?php echo form_error('CODE_NO','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="MENU_ID">菜单ID：</label>
                            <input type="text" class="form-control" name="MENU_ID" placeholder="Enter MENU_ID" value="<?php echo !empty($cmf_sys_function['MENU_ID'])?$cmf_sys_function['MENU_ID']:''; ?>">
                            <?php echo form_error('MENU_ID','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="FUNC_NAME">功能名称：</label>
                            <input type="text" class="form-control" name="FUNC_NAME" placeholder="Enter FUNC_NAME" value="<?php echo !empty($cmf_sys_function['FUNC_NAME'])?$cmf_sys_function['FUNC_NAME']:''; ?>">
                            <?php echo form_error('FUNC_NAME','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="FUNC_CODE">功能代码：</label>
                            <input type="text" class="form-control" name="FUNC_CODE" placeholder="Enter FUNC_CODE" value="<?php echo !empty($cmf_sys_function['FUNC_CODE'])?$cmf_sys_function['FUNC_CODE']:''; ?>">
                            <?php echo form_error('FUNC_CODE','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="FUNC_LINK">功能链接：</label>
                            <input type="text" class="form-control" name="FUNC_LINK" placeholder="Enter FUNC_LINK" value="<?php echo !empty($cmf_sys_function['FUNC_LINK'])?$cmf_sys_function['FUNC_LINK']:''; ?>">
                            <?php echo form_error('FUNC_LINK','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="ENGLISHNAME">英语名称：</label>
                            <input type="text" class="form-control" name="ENGLISHNAME" placeholder="Enter ENGLISHNAME" value="<?php echo !empty($cmf_sys_function['ENGLISHNAME'])?$cmf_sys_function['ENGLISHNAME']:''; ?>">
                            <?php echo form_error('ENGLISHNAME','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="UniMenu">联合菜单：</label>
                            <input type="text" class="form-control" name="UniMenu" placeholder="Enter UniMenu" value="<?php echo !empty($cmf_sys_function['UniMenu'])?$cmf_sys_function['UniMenu']:''; ?>">
                            <?php echo form_error('UniMenu','<p class="help-block text-danger">','</p>'); ?>
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