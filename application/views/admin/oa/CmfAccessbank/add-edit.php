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
                <div class="panel-heading"><?php echo $action; ?> 银行帐户： <a href="<?php echo site_url('/oa/CmfAccessbank/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="bankid">帐户ID：</label>
                            <input type="text" class="form-control" name="bankid" placeholder="Enter bankid" value="<?php echo !empty($cmf_accessbank['bankid'])?$cmf_accessbank['bankid']:''; ?>">
                            <?php echo form_error('bankid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="oldjine">过往金额：</label>
                            <input type="text" class="form-control" name="oldjine" placeholder="Enter oldjine" value="<?php echo !empty($cmf_accessbank['oldjine'])?$cmf_accessbank['oldjine']:''; ?>">
                            <?php echo form_error('oldjine','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="jine">金额：</label>
                            <input type="text" class="form-control" name="jine" placeholder="Enter jine" value="<?php echo !empty($cmf_accessbank['jine'])?$cmf_accessbank['jine']:''; ?>">
                            <?php echo form_error('jine','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="opertype">操作类型：</label>
                            <input type="radio" name="opertype" value="1">是 
                            <input type="radio" name="opertype" value="0">否
                            <?php echo form_error('opertype','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="guanlianbillid">关联清单ID：</label>
                            <input type="text" class="form-control" name="guanlianbillid" placeholder="Enter guanlianbillid" value="<?php echo !empty($cmf_accessbank['guanlianbillid'])?$cmf_accessbank['guanlianbillid']:''; ?>">
                            <?php echo form_error('guanlianbillid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="createman">创建人：</label>
                            <input type="text" class="form-control" name="createman" placeholder="Enter createman" value="<?php echo !empty($cmf_accessbank['createman'])?$cmf_accessbank['createman']:''; ?>">
                            <?php echo form_error('createman','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="createtime">创建时间：</label>
                            <input readonly class="form-control" type="text" id="date-group1-4" placeholder="YYYY-MM-DD hh:mm" name="createtime">
                            <?php echo form_error('createtime','<p class="help-block text-danger">','</p>'); ?>
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