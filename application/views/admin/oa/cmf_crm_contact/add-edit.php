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
                <div class="panel-heading"><?php echo $action; ?> 联系人 <a href="<?php echo site_url('/oa/CmfCrmContact/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="id">编号：</label>
                            <input type="text" class="form-control" name="id" placeholder="Enter id" value="<?php echo !empty($cmf_crm_contact['id'])?$cmf_crm_contact['id']:''; ?>">
                            <?php echo form_error('id','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="customerid">客户ID：</label>
                            <input type="text" class="form-control" name="customerid" placeholder="Enter customerid" value="<?php echo !empty($cmf_crm_contact['customerid'])?$cmf_crm_contact['customerid']:''; ?>">
                            <?php echo form_error('customerid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="linkmanid">联系人ID：</label>
                            <input type="text" class="form-control" name="linkmanid" placeholder="Enter linkmanid" value="<?php echo !empty($cmf_crm_contact['linkmanid'])?$cmf_crm_contact['linkmanid']:''; ?>">
                            <?php echo form_error('linkmanid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="user_id">用户ID：</label>
                            <input type="text" class="form-control" name="user_id" placeholder="Enter user_id" value="<?php echo !empty($cmf_crm_contact['user_id'])?$cmf_crm_contact['user_id']:''; ?>">
                            <?php echo form_error('user_id','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="createman">创建人：</label>
                            <input type="text" class="form-control" name="createman" placeholder="Enter createman" value="<?php echo !empty($cmf_crm_contact['createman'])?$cmf_crm_contact['createman']:''; ?>">
                            <?php echo form_error('createman','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="contact">联系方式：</label>
                            <input type="text" class="form-control" name="contact" placeholder="Enter contact" value="<?php echo !empty($cmf_crm_contact['contact'])?$cmf_crm_contact['contact']:''; ?>">
                            <?php echo form_error('contact','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="chance">机会：</label>
                            <input type="text" class="form-control" name="chance" placeholder="Enter chance" value="<?php echo !empty($cmf_crm_contact['chance'])?$cmf_crm_contact['chance']:''; ?>">
                            <?php echo form_error('chance','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="stage">阶段：</label>
                            <input type="text" class="form-control" name="stage" placeholder="Enter stage" value="<?php echo !empty($cmf_crm_contact['stage'])?$cmf_crm_contact['stage']:''; ?>">
                            <?php echo form_error('stage','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="describes">描述：</label>
                            <textarea name="describes" cols="50" rows="10" style="resize: none;">
                                <?php echo !empty($cmf_crm_contact['describes'])?$cmf_crm_contact['describes']:''; ?>
                            </textarea>
                            <?php echo form_error('describes','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="createtime">创建时间：</label>
                            <input readonly class="form-control" type="text" id="date-group1-4" placeholder="YYYY-MM-DD hh:mm" name="createtime">
                            <?php echo form_error('createtime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="contacttime">联系时间：</label>
                            <input readonly class="form-control" type="text" id="create_time" placeholder="YYYY-MM-DD hh:mm" name="contacttime">
                            <?php echo form_error('contacttime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="nextcontacttime">下次联系时间：</label>
                            <input readonly class="form-control" type="text" id="date-group1-5" placeholder="YYYY-MM-DD hh:mm" name="nextcontacttime">
                            <?php echo form_error('nextcontacttime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="nextissue">下次讨论：</label>
                            <input type="text" class="form-control" name="nextissue" placeholder="Enter nextissue" value="<?php echo !empty($cmf_crm_contact['nextissue'])?$cmf_crm_contact['nextissue']:''; ?>">
                            <?php echo form_error('nextissue','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="alreadycontact">已经联系：</label>
                            <input type="text" class="form-control" name="alreadycontact" placeholder="Enter alreadycontact" value="<?php echo !empty($cmf_crm_contact['alreadycontact'])?$cmf_crm_contact['alreadycontact']:''; ?>">
                            <?php echo form_error('alreadycontact','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="public">公共资源：</label>
                            <input type="text" class="form-control" name="public" placeholder="Enter public" value="<?php echo !empty($cmf_crm_contact['public'])?$cmf_crm_contact['public']:''; ?>">
                            <?php echo form_error('public','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="priority">优先级：</label>
                            <input type="text" class="form-control" name="priority" placeholder="Enter priority" value="<?php echo !empty($cmf_crm_contact['priority'])?$cmf_crm_contact['priority']:''; ?>">
                            <?php echo form_error('priority','<p class="help-block text-danger">','</p>'); ?>
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