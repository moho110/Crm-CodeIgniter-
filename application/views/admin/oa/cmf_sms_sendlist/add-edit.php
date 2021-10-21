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
                <div class="panel-heading"><?php echo $action; ?> 短信列表 <a href="<?php echo site_url('/oa/CmfSmsSendlist/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="msg">消息：</label>
                            <input type="text" class="form-control" name="msg" placeholder="Enter msg" value="<?php echo !empty($cmf_sms_sendlist['msg'])?$cmf_sms_sendlist['msg']:''; ?>">
                            <?php echo form_error('msg','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="nowtime">现在时间：</label>
                            <input readonly class="form-control" type="text" id="date-group1-4" placeholder="YYYY-MM-DD hh:mm" name="nowtime">
                            <?php echo form_error('nowtime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="attime">进行时间：</label>
                            <input readonly class="form-control" type="text" id="date-group1-5" placeholder="YYYY-MM-DD hh:mm" name="attime">
                            <?php echo form_error('attime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="destcount">目标数：</label>
                            <input type="text" class="form-control" name="destcount" placeholder="Enter destcount" value="<?php echo !empty($cmf_sms_sendlist['destcount'])?$cmf_sms_sendlist['destcount']:''; ?>">
                            <?php echo form_error('destcount','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="result">结果：</label>
                            <input type="text" class="form-control" name="result" placeholder="Enter result" value="<?php echo !empty($cmf_sms_sendlist['result'])?$cmf_sms_sendlist['result']:''; ?>">
                            <?php echo form_error('result','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="errmsg">错误消息：</label>
                            <input type="text" class="form-control" name="errmsg" placeholder="Enter errmsg" value="<?php echo !empty($cmf_sms_sendlist['errmsg'])?$cmf_sms_sendlist['errmsg']:''; ?>">
                            <?php echo form_error('errmsg','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="trytimes">尝试次数：</label>
                            <input type="text" class="form-control" name="trytimes" placeholder="Enter trytimes" value="<?php echo !empty($cmf_sms_sendlist['trytimes'])?$cmf_sms_sendlist['trytimes']:''; ?>">
                            <?php echo form_error('trytimes','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="userid">用户ID：</label>
                            <input type="text" class="form-control" name="userid" placeholder="Enter userid" value="<?php echo !empty($cmf_sms_sendlist['userid'])?$cmf_sms_sendlist['userid']:''; ?>">
                            <?php echo form_error('userid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="batchid">批次ID：</label>
                            <input type="text" class="form-control" name="batchid" placeholder="Enter batchid" value="<?php echo !empty($cmf_sms_sendlist['batchid'])?$cmf_sms_sendlist['batchid']:''; ?>">
                            <?php echo form_error('batchid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="destid">目标ID：</label>
                            <input type="text" class="form-control" name="destid" placeholder="Enter destid" value="<?php echo !empty($cmf_sms_sendlist['destid'])?$cmf_sms_sendlist['destid']:''; ?>">
                            <?php echo form_error('destid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="leftcount">数量：</label>
                            <input type="text" class="form-control" name="leftcount" placeholder="Enter leftcount" value="<?php echo !empty($cmf_sms_sendlist['leftcount'])?$cmf_sms_sendlist['leftcount']:''; ?>">
                            <?php echo form_error('leftcount','<p class="help-block text-danger">','</p>'); ?>
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