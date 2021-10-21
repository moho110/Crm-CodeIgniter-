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
                <div class="panel-heading"><?php echo $action; ?> 银行 <a href="<?php echo site_url('/oa/CmfBank/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="ROWID">ROWID</label>
                            <input type="text" class="form-control" name="ROWID" placeholder="Enter ROWID" value="<?php echo !empty($cmf_bank['ROWID'])?$cmf_bank['ROWID']:''; ?>">
                            <?php echo form_error('ROWID','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="bankid">银行ID：</label>
                            <input type="text" class="form-control" name="bankid" placeholder="Enter bankid" value="<?php echo !empty($cmf_bank['bankid'])?$cmf_bank['bankid']:''; ?>">
                            <?php echo form_error('bankid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="bankcode">银行代码：</label>
                            <input type="text" class="form-control" name="bankcode" placeholder="Enter bankcode" value="<?php echo !empty($cmf_bank['bankcode'])?$cmf_bank['bankcode']:''; ?>">
                            <?php echo form_error('bankcode','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="bankname">银行名称：</label>
                            <input type="text" class="form-control" name="bankname" placeholder="Enter bankname" value="<?php echo !empty($cmf_bank['bankname'])?$cmf_bank['bankname']:''; ?>">
                            <?php echo form_error('bankname','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="syslock">系统锁定：</label>
                            <input type="text" class="form-control" name="syslock" placeholder="Enter syslock" value="<?php echo !empty($cmf_bank['syslock'])?$cmf_bank['syslock']:''; ?>">
                            <?php echo form_error('syslock','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="jine">金额：</label>
                            <input type="text" class="form-control" name="jine" placeholder="Enter jine" value="<?php echo !empty($cmf_bank['jine'])?$cmf_bank['jine']:''; ?>">
                            <?php echo form_error('jine','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="belong">所属：</label>
                            <input type="text" class="form-control" name="belong" placeholder="Enter belong" value="<?php echo !empty($cmf_bank['belong'])?$cmf_bank['belong']:''; ?>">
                            <?php echo form_error('belong','<p class="help-block text-danger">','</p>'); ?>
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