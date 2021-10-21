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
            <div class="panel-heading">固定资产分组详细内容<a href="<?php echo site_url('/oa/CmfFixedassetgroup/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfFixedassetgroup['ID'])?$CmfFixedassetgroup['ID']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>名称：</label>
                    <p><?php echo !empty($CmfFixedassetgroup['Name'])?$CmfFixedassetgroup['Name']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>排序：</label>
                    <p><?php echo !empty($CmfFixedassetgroup['sort'])?$CmfFixedassetgroup['sort']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>等级类型：</label>
                    <p><?php echo !empty($CmfFixedassetgroup['preLeveType'])?$CmfFixedassetgroup['preLeveType']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>