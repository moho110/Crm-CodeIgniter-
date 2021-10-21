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
                <div class="panel-heading"><?php echo $action; ?> 汇款记录 <a href="<?php echo site_url('/oa/CmfBank/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="id">编号：</label>
                            <input readonly type="text" class="form-control" name="id" placeholder="Enter id" value="<?php echo !empty($cmf_huikuanrecord['id'])?$cmf_huikuanrecord['id']:''; ?>">
                            <?php echo form_error('id','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="customerid">客户ID：</label>
                            <input type="text" class="form-control" name="customerid" placeholder="Enter customerid" value="<?php echo !empty($cmf_huikuanrecord['customerid'])?$cmf_huikuanrecord['customerid']:''; ?>">
                            <?php echo form_error('customerid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="dingdanbillid">订单清单ID：</label>
                            <input type="text" class="form-control" name="dingdanbillid" placeholder="Enter dingdanbillid" value="<?php echo !empty($cmf_huikuanrecord['dingdanbillid'])?$cmf_huikuanrecord['dingdanbillid']:''; ?>">
                            <?php echo form_error('dingdanbillid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="qici">QICI：</label>
                            <input type="text" class="form-control" name="qici" placeholder="Enter qici" value="<?php echo !empty($cmf_huikuanrecord['qici'])?$cmf_huikuanrecord['qici']:''; ?>">
                            <?php echo form_error('qici','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="paydate">支付日期：</label>
                            <input readonly class="form-control" type="text" id="date-group1-4" placeholder="YYYY-MM-DD hh:mm" name="paydate">
                            <?php echo form_error('paydate','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="jine">金额：</label>
                            <input type="text" class="form-control" name="jine" placeholder="Enter jine" value="<?php echo !empty($cmf_huikuanrecord['jine'])?$cmf_huikuanrecord['jine']:''; ?>">
                            <?php echo form_error('jine','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="ifkaipiao">是否开票：</label>
                            <input type="radio" name="ifkaipiao" value="1">是
                            <input type="radio" name="ifkaipiao" value="0">否
                            <?php echo form_error('ifkaipiao','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="accountid">帐户ID：</label>
                            <input type="text" class="form-control" name="accountid" placeholder="Enter accountid" value="<?php echo !empty($cmf_huikuanrecord['accountid'])?$cmf_huikuanrecord['accountid']:''; ?>">
                            <?php echo form_error('accountid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="beizhu">备注：</label>
                            <textarea name="beizhu" cols="140" rows="10" style="resize: none;">
                                <?php echo !empty($cmf_huikuanrecord['beizhu'])?$cmf_huikuanrecord['beizhu']:''; ?>
                            </textarea>
                            <?php echo form_error('beizhu','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="createman">创建人：</label>
                            <input type="text" class="form-control" name="createman" placeholder="Enter createman" value="<?php echo !empty($cmf_huikuanrecord['createman'])?$cmf_huikuanrecord['createman']:''; ?>">
                            <?php echo form_error('createman','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="createtime">创建时间：</label>
                            <input readonly class="form-control" type="text" id="date-group1-5" placeholder="YYYY-MM-DD hh:mm" name="createtime">
                            <?php echo form_error('createtime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="guanlianplanid">关联计划ID：</label>
                            <input type="text" class="form-control" name="guanlianplanid" placeholder="Enter guanlianplanid" value="<?php echo !empty($cmf_huikuanrecord['guanlianplanid'])?$cmf_huikuanrecord['guanlianplanid']:''; ?>">
                            <?php echo form_error('guanlianplanid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="oddment">零碎业务：</label>
                            <input type="text" class="form-control" name="oddment" placeholder="Enter oddment" value="<?php echo !empty($cmf_huikuanrecord['oddment'])?$cmf_huikuanrecord['oddment']:''; ?>">
                            <?php echo form_error('oddment','<p class="help-block text-danger">','</p>'); ?>
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