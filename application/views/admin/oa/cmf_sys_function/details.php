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
            <div class="panel-heading">系统功能详细内容<a href="<?php echo site_url('/oa/CmfSysFunction/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>功能ID：</label>
                    <p><?php echo !empty($CmfSysFunction['FUNC_ID'])?$CmfSysFunction['FUNC_ID']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>菜单ID：</label>
                    <p><?php echo !empty($CmfSysFunction['MENU_ID'])?$CmfSysFunction['MENU_ID']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>功能名称：</label>
                    <p><?php echo !empty($CmfSysFunction['FUNC_NAME'])?$CmfSysFunction['FUNC_NAME']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>功能代码：</label>
                    <p><?php echo !empty($CmfSysFunction['FUNC_CODE'])?$CmfSysFunction['FUNC_CODE']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>功能链接：</label>
                    <p><?php echo !empty($CmfSysFunction['FUNC_LINK'])?$CmfSysFunction['FUNC_LINK']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>英语名称：</label>
                    <p><?php echo !empty($CmfSysFunction['ENGLISHNAME'])?$CmfSysFunction['ENGLISHNAME']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>联合菜单：</label>
                    <p><?php echo !empty($CmfSysFunction['UniMenu'])?$CmfSysFunction['UniMenu']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>