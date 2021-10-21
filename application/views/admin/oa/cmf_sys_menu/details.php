<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_header");
?>
<?php if(!empty($success_msg)){ ?>
    <div class="col-xs-12">
        <div class="alert alert-success"><?php echo $success_msg; ?></div>
    </div>
    <?php }elseif(!empty($error_msg)){ ?>
    <div class="col-xs-12">
        <div class="alert alert-danger"><?php echo $error_msg; ?></div>
    </div>
    <?php } ?>
<div class="container">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">系统菜单详细内容<a href="<?php echo site_url('/oa/CmfSysMenu/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>菜单ID：</label>
                    <p><?php echo !empty($CmfSysMenu['MENU_ID'])?$CmfSysMenu['MENU_ID']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>菜单名称：</label>
                    <p><?php echo !empty($CmfSysMenu['MENU_NAME'])?$CmfSysMenu['MENU_NAME']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>图形：</label>
                    <p><?php echo !empty($CmfSysMenu['IMAGE'])?$CmfSysMenu['IMAGE']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>英文名称：</label>
                    <p><?php echo !empty($CmfSysMenu['ENGLISHNAME'])?$CmfSysMenu['ENGLISHNAME']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>