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
                <div class="panel-heading"><?php echo $action; ?> 呼叫处理 <a href="<?php echo site_url('/oa/CmfCallchuli/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="id">编号：</label>
                            <input  readonly type="text" class="form-control" name="id" placeholder="Enter id" value="<?php echo !empty($cmf_callchuli['id'])?$cmf_callchuli['id']:''; ?>">
                            <?php echo form_error('id','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="tel">电话号码：：</label>
                            <input type="text" class="form-control" name="tel" placeholder="Enter tel" value="<?php echo !empty($cmf_callchuli['tel'])?$cmf_callchuli['tel']:''; ?>">
                            <?php echo form_error('tel','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="customer">客户：</label>
                            <input type="text" class="form-control" name="customer" placeholder="Enter customer" value="<?php echo !empty($cmf_callchuli['customer'])?$cmf_callchuli['customer']:''; ?>">
                            <?php echo form_error('customer','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="linkman">联系人：</label>
                            <input type="text" class="form-control" name="linkman" placeholder="Enter linkman" value="<?php echo !empty($cmf_callchuli['linkman'])?$cmf_callchuli['linkman']:''; ?>">
                            <?php echo form_error('linkman','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="content">内容：</label>
                            <textarea name="content" cols="50" rows="10" style="resize: none;"><?php echo !empty($cmf_callchuli['content'])?$cmf_callchuli['content']:''; ?></textarea>
                            <?php echo form_error('content','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="createman">创建人：</label>
                            <input type="text" class="form-control" name="createman" placeholder="Enter createman" value="<?php echo !empty($cmf_callchuli['createman'])?$cmf_callchuli['createman']:''; ?>">
                            <?php echo form_error('createman','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="createtime">创建时间：</label>
                            <input readonly class="form-control" type="text" id="date-group1-4" placeholder="YYYY-MM-DD hh:mm" name="createtime">
                            <?php echo form_error('createtime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="ifchuli">是否处理：</label>
                            <input type="radio" name="ifchuli" value="1">处理
                            <input type="radio" name="ifchuli" value="0">不处理
                            <?php echo form_error('ifchuli','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="chulitime">处理时间：</label>
                            <input readonly class="form-control" type="text" id="date-group1-5" placeholder="YYYY-MM-DD hh:mm" name="chulitime">
                            <?php echo form_error('chulitime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="calltype">呼叫类型：</label>
                            <input type="radio" name="calltype" value="1">是
                            <input type="radio" name="calltype" value="0">否
                            <?php echo form_error('calltype','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="callertype">呼叫者类型：</label>
                            <input type="radio" name="callertype" value="1">是
                            <input type="radio" name="callertype" value="0">否
                            <?php echo form_error('callertype','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="customerid">客户ID：</label>
                            <input type="text" class="form-control" name="customerid" placeholder="Enter customerid" value="<?php echo !empty($cmf_callchuli['customerid'])?$cmf_callchuli['customerid']:''; ?>">
                            <?php echo form_error('customerid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="chulicontent">处理内容：</label>
                            <textarea name="chulicontent" cols="50" rows="10" style="resize: none;"><?php echo !empty($cmf_callchuli['chulicontent'])?$cmf_callchuli['chulicontent']:''; ?></textarea>
                            <?php echo form_error('chulicontent','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="linkmanid">联系人ID：</label>
                            <input type="text" class="form-control" name="linkmanid" placeholder="Enter linkmanid" value="<?php echo !empty($cmf_callchuli['linkmanid'])?$cmf_callchuli['linkmanid']:''; ?>">
                            <?php echo form_error('linkmanid','<p class="help-block text-danger">','</p>'); ?>
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