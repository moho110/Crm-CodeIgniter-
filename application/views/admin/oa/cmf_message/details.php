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
            <div class="panel-heading">消息详细内容<a href="<?php echo site_url('/oa/CmfMessage/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfMessage['id'])?$CmfMessage['id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>用户ID：</label>
                    <p><?php echo !empty($CmfMessage['userid'])?$CmfMessage['userid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>消息类型：</label>
                    <p><?php echo !empty($CmfMessage['msgtype'])?$CmfMessage['msgtype']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>内容：</label>
                    <p><?php echo !empty($CmfMessage['content'])?$CmfMessage['content']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>URL地址：</label>
                    <p><?php echo !empty($CmfMessage['url'])?$CmfMessage['url']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>关联ID：</label>
                    <p><?php echo !empty($CmfMessage['guanlianid'])?$CmfMessage['guanlianid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建时间：</label>
                    <p><?php echo !empty($CmfMessage['createtime'])?$CmfMessage['createtime']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>读取时间：</label>
                    <p><?php echo !empty($CmfMessage['readtime'])?$CmfMessage['readtime']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>标识：</label>
                    <p><?php echo !empty($CmfMessage['flag'])?$CmfMessage['flag']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>时间：</label>
                    <p><?php echo !empty($CmfMessage['attime'])?$CmfMessage['attime']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>