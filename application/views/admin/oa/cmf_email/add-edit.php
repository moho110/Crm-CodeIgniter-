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
                <div class="panel-heading"><?php echo $action; ?> 邮件发送 <a href="<?php echo site_url('/oa/CmfEmail/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="EMAIL_ID">编号：</label>
                            <input readonly type="text" class="form-control" name="EMAIL_ID" placeholder="Enter EMAIL_ID" value="<?php echo !empty($cmf_email['EMAIL_ID'])?$cmf_email['EMAIL_ID']:''; ?>">
                            <?php echo form_error('EMAIL_ID','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="FROM_ID">来自ID：</label>
                            <input type="text" class="form-control" name="FROM_ID" placeholder="Enter FROM_ID" value="<?php echo !empty($cmf_email['FROM_ID'])?$cmf_email['FROM_ID']:''; ?>">
                            <?php echo form_error('FROM_ID','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="customers">客户：</label>
                            <input type="text" class="form-control" name="customers" placeholder="Enter customers" value="<?php echo !empty($cmf_email['customers'])?$cmf_email['customers']:''; ?>">
                            <?php echo form_error('customers','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="supplys">供应商：</label>
                            <input type="text" class="form-control" name="supplys" placeholder="Enter supplys" value="<?php echo !empty($cmf_email['supplys'])?$cmf_email['supplys']:''; ?>">
                            <?php echo form_error('supplys','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="others">其他：</label>
                            <input type="text" class="form-control" name="others" placeholder="Enter others" value="<?php echo !empty($cmf_email['others'])?$cmf_email['others']:''; ?>">
                            <?php echo form_error('others','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="SUBJECT">主题：</label>
                            <input type="text" class="form-control" name="SUBJECT" placeholder="Enter SUBJECT" value="<?php echo !empty($cmf_email['SUBJECT'])?$cmf_email['SUBJECT']:''; ?>">
                            <?php echo form_error('SUBJECT','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="CONTENT">内容：</label>
                            <textarea name="CONTENT" cols="140" rows="10" style="resize: none;">
                                <?php echo !empty($cmf_email['CONTENT'])?$cmf_email['CONTENT']:''; ?>
                            </textarea>
                            <?php echo form_error('CONTENT','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="SEND_TIME">发送时间：</label>
                            <input readonly class="form-control" type="text" id="date-group1-4" placeholder="YYYY-MM-DD hh:mm" name="SEND_TIME">
                            <?php echo form_error('SEND_TIME','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="ATTACHMENT_ID">附件ID：</label>
                            <input type="text" class="form-control" name="ATTACHMENT_ID" placeholder="Enter ATTACHMENT_ID" value="<?php echo !empty($cmf_email['ATTACHMENT_ID'])?$cmf_email['ATTACHMENT_ID']:''; ?>">
                            <?php echo form_error('ATTACHMENT_ID','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="ATTACHMENT_NAME">附件名称：</label>
                            <input type="text" class="form-control" name="ATTACHMENT_NAME" placeholder="Enter ATTACHMENT_NAME" value="<?php echo !empty($cmf_email['ATTACHMENT_NAME'])?$cmf_email['ATTACHMENT_NAME']:''; ?>">
                            <?php echo form_error('ATTACHMENT_NAME','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="SEND_FLAG">发送标识：</label>
                            <input type="radio" name="SEND_FLAG" value="1">已发送
                            <input type="radio" name="SEND_FLAG" value="0">未发送
                            <?php echo form_error('SEND_FLAG','<p class="help-block text-danger">','</p>'); ?>
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