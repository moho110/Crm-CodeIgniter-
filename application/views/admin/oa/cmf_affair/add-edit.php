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
                <div class="panel-heading"><?php echo $action; ?> 事务 <a href="<?php echo site_url('/oa/CmfAffair/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="AFF_ID">事务ID：</label>
                            <input type="text" class="form-control" name="AFF_ID" placeholder="Enter AFF_ID" value="<?php echo !empty($cmf_affair['AFF_ID'])?$cmf_affair['AFF_ID']:''; ?>">
                            <?php echo form_error('AFF_ID','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="USER_ID">用户ID：</label>
                            <input type="text" class="form-control" name="USER_ID" placeholder="Enter USER_ID" value="<?php echo !empty($cmf_affair['USER_ID'])?$cmf_affair['USER_ID']:''; ?>">
                            <?php echo form_error('USER_ID','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="BEGIN_TIME">开始时间：</label>
                            <input readonly class="form-control" type="text" id="date-group1-4" placeholder="YYYY-MM-DD hh:mm" name="BEGIN_TIME">
                            <?php echo form_error('BEGIN_TIME','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="END_TIME">结束时间：</label>
                            <input readonly class="form-control" type="text" id="#date-group1-5" placeholder="YYYY-MM-DD hh:mm" name="END_TIME">
                            <?php echo form_error('END_TIME','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="TYPE">类型：</label>
                            <input type="text" class="form-control" name="TYPE" placeholder="Enter TYPE" value="<?php echo !empty($cmf_affair['TYPE'])?$cmf_affair['TYPE']:''; ?>">
                            <?php echo form_error('TYPE','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="REMIND_DATE">其他日期：</label>
                            <input readonly class="form-control" type="text" id="#date-group1-2" placeholder="YYYY-MM-DD hh:mm" name="END_TIME">
                            <?php echo form_error('REMIND_DATE','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="REMIND_TIME">其他时间：</label>
                            <input readonly class="form-control" type="text" id="#create_time" placeholder="YYYY-MM-DD hh:mm" name="REMIND_TIME">
                            <?php echo form_error('REMIND_TIME','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="CONTENT">内容：</label>
                            <textarea name="CONTENT" cols="100" rows="10" style="resize: none;">
                                <?php echo !empty($cmf_affair['CONTENT'])?$cmf_affair['CONTENT']:''; ?>
                            </textarea>
                            <?php echo form_error('CONTENT','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="LAST_REMIND">最后其他：</label>
                            <input type="text" class="form-control" name="LAST_REMIND" placeholder="Enter LAST_REMIND" value="<?php echo !empty($cmf_affair['LAST_REMIND'])?$cmf_affair['LAST_REMIND']:''; ?>">
                            <?php echo form_error('LAST_REMIND','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="SMS2_REMIND">短信其他：</label>
                            <input type="text" class="form-control" name="SMS2_REMIND" placeholder="Enter SMS2_REMIND" value="<?php echo !empty($cmf_affair['SMS2_REMIND'])?$cmf_affair['SMS2_REMIND']:''; ?>">
                            <?php echo form_error('SMS2_REMIND','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="LAST_SMS2_REMIND">最后短信其他：</label>
                            <input type="text" class="form-control" name="LAST_SMS2_REMIND" placeholder="Enter LAST_SMS2_REMIND" value="<?php echo !empty($cmf_affair['LAST_SMS2_REMIND'])?$cmf_affair['LAST_SMS2_REMIND']:''; ?>">
                            <?php echo form_error('LAST_SMS2_REMIND','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="MANAGER_ID">管理者ID：</label>
                            <input type="text" class="form-control" name="MANAGER_ID" placeholder="Enter MANAGER_ID" value="<?php echo !empty($cmf_affair['MANAGER_ID'])?$cmf_affair['MANAGER_ID']:''; ?>">
                            <?php echo form_error('MANAGER_ID','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <input type="submit" name="postSubmit" class="btn btn-primary" value="Submit"/>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>