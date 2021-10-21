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
                <div class="panel-heading"><?php echo $action; ?> 消息 <a href="<?php echo site_url('/oa/CmfMessage/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="id">编号：</label>
                            <input type="text" class="form-control" name="id" placeholder="Enter id" value="<?php echo !empty($cmf_message['id'])?$cmf_message['id']:''; ?>">
                            <?php echo form_error('id','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="userid">用户ID：</label>
                            <input type="text" class="form-control" name="userid" placeholder="Enter userid" value="<?php echo !empty($cmf_message['userid'])?$cmf_message['userid']:''; ?>">
                            <?php echo form_error('userid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="msgtype">消息类型：</label>
                            <input type="text" class="form-control" name="msgtype" placeholder="Enter msgtype" value="<?php echo !empty($cmf_message['msgtype'])?$cmf_message['msgtype']:''; ?>">
                            <?php echo form_error('msgtype','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="content">内容：</label>
                            <input type="text" class="form-control" name="content" placeholder="Enter content" value="<?php echo !empty($cmf_message['content'])?$cmf_message['content']:''; ?>">
                            <?php echo form_error('content','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="url">URL地址：</label>
                            <input type="text" class="form-control" name="url" placeholder="Enter url" value="<?php echo !empty($cmf_message['url'])?$cmf_message['url']:''; ?>">
                            <?php echo form_error('url','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="guanlianid">关联ID：</label>
                            <input type="text" class="form-control" name="guanlianid" placeholder="Enter guanlianid" value="<?php echo !empty($cmf_message['guanlianid'])?$cmf_message['guanlianid']:''; ?>">
                            <?php echo form_error('guanlianid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="createtime">创建时间：</label>
                            <input type="text" class="form-control" name="createtime" placeholder="Enter createtime" value="<?php echo !empty($cmf_message['createtime'])?$cmf_message['createtime']:''; ?>">
                            <?php echo form_error('createtime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="readtime">读取时间：</label>
                            <input type="text" class="form-control" name="readtime" placeholder="Enter readtime" value="<?php echo !empty($cmf_message['readtime'])?$cmf_message['readtime']:''; ?>">
                            <?php echo form_error('readtime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="flag">标识：</label>
                            <input type="text" class="form-control" name="flag" placeholder="Enter flag" value="<?php echo !empty($cmf_message['flag'])?$cmf_message['flag']:''; ?>">
                            <?php echo form_error('flag','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="attime">时间：</label>
                            <input type="text" class="form-control" name="attime" placeholder="Enter attime" value="<?php echo !empty($cmf_message['attime'])?$cmf_message['attime']:''; ?>">
                            <?php echo form_error('attime','<p class="help-block text-danger">','</p>'); ?>
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