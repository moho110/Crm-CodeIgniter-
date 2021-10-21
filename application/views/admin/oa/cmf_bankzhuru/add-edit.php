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
                <div class="panel-heading"><?php echo $action; ?> 银行 <a href="<?php echo site_url('/oa/CmfBankzhuru/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="accountid">帐户ID：</label>
                            <input type="text" class="form-control" name="accountid" placeholder="Enter accountid" value="<?php echo !empty($cmf_bankzhuru['accountid'])?$cmf_bankzhuru['accountid']:''; ?>">
                            <?php echo form_error('accountid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="jine">金额：</label>
                            <input type="text" class="form-control" name="jine" placeholder="0.0" value="<?php echo !empty($cmf_bankzhuru['jine'])?$cmf_bankzhuru['jine']:''; ?>">
                            <?php echo form_error('jine','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="userid">用户ID：</label>
                            <input type="text" class="form-control" name="userid" placeholder="Enter userid" value="<?php echo !empty($cmf_bankzhuru['userid'])?$cmf_bankzhuru['userid']:''; ?>">
                            <?php echo form_error('userid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="opertime">操作时间：</label>
                            <input readonly class="form-control" type="text" id="date-group1-4" placeholder="YYYY-MM-DD hh:mm" name="opertime">
                            <?php echo form_error('opertime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="inouttype">输入输出类型：</label>
                            <input type="radio" name="inouttype" value="1">输入
                            <input type="radio" name="inouttype" value="1">输出
                            <?php echo form_error('inouttype','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="memo">备注：</label>
                            <textarea name="memo" cols="140" rows="10" style="resize: none;">
                                <?php echo !empty($cmf_bankzhuru['memo'])?$cmf_bankzhuru['memo']:''; ?>
                            </textarea>
                            <?php echo form_error('memo','<p class="help-block text-danger">','</p>'); ?>
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