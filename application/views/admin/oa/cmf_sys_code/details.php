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
            <div class="panel-heading">系统代码详细内容<a href="<?php echo site_url('/oa/CmfSysCode/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>代码ID：</label>
                    <p><?php echo !empty($CmfSysCode['CODE_ID'])?$CmfSysCode['CODE_ID']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>代码编号：</label>
                    <p><?php echo !empty($CmfSysCode['CODE_NO'])?$CmfSysCode['CODE_NO']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>代码名称：</label>
                    <p><?php echo !empty($CmfSysCode['CODE_NAME'])?$CmfSysCode['CODE_NAME']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>代码顺序：</label>
                    <p><?php echo !empty($CmfSysCode['CODE_ORDER'])?$CmfSysCode['CODE_ORDER']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>父级编号：</label>
                    <p><?php echo !empty($CmfSysCode['PARENT_NO'])?$CmfSysCode['PARENT_NO']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>代码标识：</label>
                    <p><?php echo !empty($CmfSysCode['CODE_FLAG'])?$CmfSysCode['CODE_FLAG']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>