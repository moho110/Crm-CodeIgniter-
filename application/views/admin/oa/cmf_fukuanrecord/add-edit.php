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
                <div class="panel-heading"><?php echo $action; ?> 付款记录 <a href="<?php echo site_url('/oa/CmfFukuanrecord/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="id">编号：</label>
                            <input  readonly type="text" class="form-control" name="id" placeholder="Enter id" value="<?php echo !empty($cmf_fukuanrecord['id'])?$cmf_fukuanrecord['id']:''; ?>">
                            <?php echo form_error('id','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="supplyid">供应商ID：</label>
                            <input type="text" class="form-control" name="supplyid" placeholder="Enter supplyid" value="<?php echo !empty($cmf_fukuanrecord['supplyid'])?$cmf_fukuanrecord['supplyid']:''; ?>">
                            <?php echo form_error('supplyid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="caigoubillid">采购清单ID：</label>
                            <input type="text" class="form-control" name="caigoubillid" placeholder="Enter caigoubillid" value="<?php echo !empty($cmf_fukuanrecord['caigoubillid'])?$cmf_fukuanrecord['caigoubillid']:''; ?>">
                            <?php echo form_error('caigoubillid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="qici">QICI：</label>
                            <input type="text" class="form-control" name="qici" placeholder="Enter qici" value="<?php echo !empty($cmf_fukuanrecord['qici'])?$cmf_fukuanrecord['qici']:''; ?>">
                            <?php echo form_error('qici','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="paydate">支付日期：</label>
                            <input readonly class="form-control" type="text" id="date-group1-4" placeholder="YYYY-MM-DD hh:mm" name="paydate">
                            <?php echo form_error('paydate','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="jine">金额：</label>
                            <input type="text" class="form-control" name="jine" placeholder="Enter jine" value="<?php echo !empty($cmf_fukuanrecord['jine'])?$cmf_fukuanrecord['jine']:''; ?>">
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
                            <input type="text" class="form-control" name="accountid" placeholder="Enter accountid" value="<?php echo !empty($cmf_fukuanrecord['accountid'])?$cmf_fukuanrecord['accountid']:''; ?>">
                            <?php echo form_error('accountid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="beizhu">备注：</label>
                            <textarea name="beizhu" cols="140" rows="10" style="resize: none;">
                                <?php echo !empty($cmf_fukuanrecord['beizhu'])?$cmf_fukuanrecord['beizhu']:''; ?>
                            </textarea>
                            <?php echo form_error('beizhu','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="createman">创建人：</label>
                            <input type="text" class="form-control" name="createman" placeholder="Enter createman" value="<?php echo !empty($cmf_fukuanrecord['createman'])?$cmf_fukuanrecord['createman']:''; ?>">
                            <?php echo form_error('createman','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="createtime">创建时间：</label>
                            <input readonly class="form-control" type="text" id="date-group1-5" placeholder="YYYY-MM-DD hh:mm" name="createtime">
                            <?php echo form_error('createtime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="guanlianplanid">关联清单ID：</label>
                            <input type="text" class="form-control" name="guanlianplanid" placeholder="Enter guanlianplanid" value="<?php echo !empty($cmf_fukuanrecord['guanlianplanid'])?$cmf_fukuanrecord['guanlianplanid']:''; ?>">
                            <?php echo form_error('guanlianplanid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="oddment">零碎业务：</label>
                            <textarea name="oddment" cols="140" rows="10" style="resize: none;">
                                <?php echo !empty($cmf_fukuanrecord['oddment'])?$cmf_fukuanrecord['oddment']:''; ?>
                            </textarea>
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