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
                <div class="panel-heading"><?php echo $action; ?> 日历 <a href="<?php echo site_url('/oa/CmfCalendar/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="id">编号：</label>
                            <input type="text" class="form-control" name="id" placeholder="Enter id" value="<?php echo !empty($cmf_calendar['id'])?$cmf_calendar['id']:''; ?>">
                            <?php echo form_error('id','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="USER_ID">用户ID：</label>
                            <input type="text" class="form-control" name="USER_ID" placeholder="Enter USER_ID" value="<?php echo !empty($cmf_calendar['USER_ID'])?$cmf_calendar['USER_ID']:''; ?>">
                            <?php echo form_error('USER_ID','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="CAL_TIME">日历时间：</label>
                            <input readonly class="form-control" type="text" id="date-group1-4" placeholder="YYYY-MM-DD hh:mm" name="CAL_TIME">
                            <?php echo form_error('CAL_TIME','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="END_TIME">结束时间：</label>
                            <input readonly class="form-control" type="text" id="date-group1-5" placeholder="YYYY-MM-DD hh:mm" name="CAL_TIME">
                            <?php echo form_error('END_TIME','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="CAL_TYPE">日历类型：</label>
                            <input type="radio" name="CAL_TYPE" value="1">日历
                            <input type="radio" name="CAL_TYPE" value="0">万年历
                            <?php echo form_error('CAL_TYPE','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="CAL_LEVEL">日历等级：</label>
                            <input type="text" class="form-control" name="CAL_LEVEL" placeholder="Enter CAL_LEVEL" value="<?php echo !empty($cmf_calendar['CAL_LEVEL'])?$cmf_calendar['CAL_LEVEL']:''; ?>">
                            <?php echo form_error('CAL_LEVEL','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="CONTENT">内容：</label>
                            <textarea name="CONTENT" cols="50" rows="10" style="resize: none;">
                                <?php echo !empty($cmf_calendar['CONTENT'])?$cmf_calendar['CONTENT']:''; ?>
                            </textarea>
                            <?php echo form_error('CONTENT','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="MANAGER_ID">管理员ID：</label>
                            <input type="text" class="form-control" name="MANAGER_ID" placeholder="Enter MANAGER_ID" value="<?php echo !empty($cmf_calendar['MANAGER_ID'])?$cmf_calendar['MANAGER_ID']:''; ?>">
                            <?php echo form_error('MANAGER_ID','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="OVER_STATUS">结束状态：</label>
                            <input type="radio" name="OVER_STATUS" value="1">良好
                            <input type="radio" name="OVER_STATUS" value="0">不良好
                            <?php echo form_error('OVER_STATUS','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="ifsms">是否发送短信：</label>
                            <input type="radio" name="ifsms" value="1">发送
                            <input type="radio" name="ifsms" value="0">不发送
                            <?php echo form_error('ifsms','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="tixingtime">提醒时间：</label>
                            <input readonly class="form-control" type="text" id="create_time" placeholder="YYYY-MM-DD hh:mm" name="tixingtime">
                            <?php echo form_error('tixingtime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="url">URL地址：</label>
                            <input type="text" class="form-control" name="url" placeholder="Enter url" value="<?php echo !empty($cmf_calendar['url'])?$cmf_calendar['url']:''; ?>">
                            <?php echo form_error('url','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="guanlianid">关联ID：</label>
                            <input type="text" class="form-control" name="guanlianid" placeholder="Enter guanlianid" value="<?php echo !empty($cmf_calendar['guanlianid'])?$cmf_calendar['guanlianid']:''; ?>">
                            <?php echo form_error('guanlianid','<p class="help-block text-danger">','</p>'); ?>
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