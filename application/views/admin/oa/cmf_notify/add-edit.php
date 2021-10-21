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
                <div class="panel-heading"><?php echo $action; ?> 通知 <a href="<?php echo site_url('/oa/CmfNotify/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="title">标题：</label>
                            <input type="text" class="form-control" name="title" placeholder="Enter title" value="<?php echo !empty($cmf_notify['title'])?$cmf_notify['title']:''; ?>">
                            <?php echo form_error('title','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="content">内容：</label>
                            <textarea name="content" cols="140" rows="10" style="resize: none;">
                                <?php echo !empty($cmf_notify['content'])?$cmf_notify['content']:''; ?>
                            </textarea>
                            <?php echo form_error('content','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="to_user">发送用户：</label>
                            <input type="text" class="form-control" name="to_user" placeholder="Enter to_user" value="<?php echo !empty($cmf_notify['to_user'])?$cmf_notify['to_user']:''; ?>">
                            <?php echo form_error('to_user','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="from_user">来自用户：</label>
                            <input type="text" class="form-control" name="from_user" placeholder="Enter from_user" value="<?php echo !empty($cmf_notify['from_user'])?$cmf_notify['from_user']:''; ?>">
                            <?php echo form_error('from_user','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="ATTACHMENT">附件：</label>
                            <input type="text" class="form-control" name="ATTACHMENT" placeholder="Enter ATTACHMENT" value="<?php echo !empty($cmf_notify['ATTACHMENT'])?$cmf_notify['ATTACHMENT']:''; ?>">
                            <?php echo form_error('ATTACHMENT','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="createtime">创建时间：</label>
                            <input readonly class="form-control" type="text" id="date-group1-4" placeholder="YYYY-MM-DD hh:mm" name="createtime">
                            <?php echo form_error('createtime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="ifread">是否读取：</label>
                            <input type="radio" name="ifread" value="1">是
                            <input type="radio" name="ifread" value="0">否
                            <?php echo form_error('ifread','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="ifsms">是否短信：</label>
                            <input type="radio" name="ifsms" value="1">是
                            <input type="radio" name="ifsms" value="0">否
                            <?php echo form_error('ifsms','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="grade">等级：</label>
                            <input type="text" class="form-control" name="grade" placeholder="Enter grade" value="<?php echo !empty($cmf_notify['grade'])?$cmf_notify['grade']:''; ?>">
                            <?php echo form_error('grade','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="ifemail">是否发送邮件：</label>
                            <input type="radio" name="ifemail" value="1">是
                            <input type="radio" name="ifemail" value="0">否
                            <?php echo form_error('ifemail','<p class="help-block text-danger">','</p>'); ?>
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