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
            <div class="panel-heading">邮件发送详细内容<a href="<?php echo site_url('/oa/CmfEmail/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfEmail['EMAIL_ID'])?$CmfEmail['EMAIL_ID']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>来自ID：</label>
                    <p><?php echo !empty($CmfEmail['FROM_ID'])?$CmfEmail['FROM_ID']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>客户：</label>
                    <p><?php echo !empty($CmfEmail['customers'])?$CmfEmail['customers']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>供应商：</label>
                    <p><?php echo !empty($CmfEmail['supplys'])?$CmfEmail['supplys']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>其他：</label>
                    <p><?php echo !empty($CmfEmail['others'])?$CmfEmail['others']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>主题：</label>
                    <p><?php echo !empty($CmfEmail['SUBJECT'])?$CmfEmail['SUBJECT']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>内容：</label>
                    <p><?php echo !empty($CmfEmail['CONTENT'])?$CmfEmail['CONTENT']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>发送时间：</label>
                    <p><?php echo date('Y年m月d日h时m分s秒', strtotime($CmfEmail['SEND_TIME'])); ?></p>
                </div>
                <div class="form-group">
                    <label>附件ID：</label>
                    <p><?php echo !empty($CmfEmail['ATTACHMENT_ID'])?$CmfEmail['ATTACHMENT_ID']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>附件名称：</label>
                    <p><?php echo !empty($CmfEmail['ATTACHMENT_NAME'])?$CmfEmail['ATTACHMENT_NAME']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>发送标识：</label>
                    <p>
                        <?php if ($CmfEmail['SEND_FLAG'] == '1') {?>
                            已发送
                        <?php } elseif ($CmfEmail['SEND_FLAG'] == '0') {?>
                            未发送
                        <?php } else {?>
                            其他类型
                        <?php } ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>