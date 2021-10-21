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
                <div class="panel-heading"><?php echo $action; ?> 系统菜单 <a href="<?php echo site_url('/oa/CmfSysMenu/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="MENU_ID">菜单ID：</label>
                            <input type="text" class="form-control" name="MENU_ID" placeholder="Enter MENU_ID" value="<?php echo !empty($cmf_sys_menu['MENU_ID'])?$cmf_sys_menu['MENU_ID']:''; ?>">
                            <?php echo form_error('MENU_ID','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="MENU_NAME">菜单名称：</label>
                            <input type="text" class="form-control" name="MENU_NAME" placeholder="Enter MENU_NAME" value="<?php echo !empty($cmf_sys_menu['MENU_NAME'])?$cmf_sys_menu['MENU_NAME']:''; ?>">
                            <?php echo form_error('MENU_NAME','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="IMAGE">图形：</label>
                            <input type="text" class="form-control" name="IMAGE" placeholder="Enter IMAGE" value="<?php echo !empty($cmf_sys_menu['IMAGE'])?$cmf_sys_menu['IMAGE']:''; ?>">
                            <?php echo form_error('IMAGE','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="ENGLISHNAME">英文名称：</label>
                            <input type="text" class="form-control" name="ENGLISHNAME" placeholder="Enter ENGLISHNAME" value="<?php echo !empty($cmf_sys_menu['ENGLISHNAME'])?$cmf_sys_menu['ENGLISHNAME']:''; ?>">
                            <?php echo form_error('ENGLISHNAME','<p class="help-block text-danger">','</p>'); ?>
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