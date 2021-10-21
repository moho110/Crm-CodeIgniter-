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
            <div class="panel-heading">修改记录详细内容<a href="<?php echo site_url('/oa/CmfModifyrecord/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfModifyrecord['id'])?$CmfModifyrecord['id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>表名：</label>
                    <p><?php echo !empty($CmfModifyrecord['tablename'])?$CmfModifyrecord['tablename']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>键字段：</label>
                    <p><?php echo !empty($CmfModifyrecord['keyfield'])?$CmfModifyrecord['keyfield']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>键值：</label>
                    <p><?php echo !empty($CmfModifyrecord['keyvalue'])?$CmfModifyrecord['keyvalue']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建人：</label>
                    <p><?php echo !empty($CmfModifyrecord['createman'])?$CmfModifyrecord['createman']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>修改内容：</label>
                    <p><?php echo !empty($CmfModifyrecord['modifycontent'])?$CmfModifyrecord['modifycontent']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建时间：</label>
                    <p><?php echo !empty($CmfModifyrecord['createtime'])?$CmfModifyrecord['createtime']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>