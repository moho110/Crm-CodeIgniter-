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
                <div class="panel-heading"><?php echo $action; ?> 预收款记录 <a href="<?php echo site_url('/oa/CmfAccesspreshou/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="customerid">客户ID：</label>
                            <input type="text" class="form-control" name="customerid" placeholder="Enter customerid" value="<?php echo !empty($cmf_accesspreshou['customerid'])?$cmf_accesspreshou['customerid']:''; ?>">
                            <?php echo form_error('bankid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="linkman">联系人：</label>
                            <input type="text" class="form-control" name="linkman" placeholder="Enter linkman" value="<?php echo !empty($cmf_accesspreshou['linkman'])?$cmf_accesspreshou['linkman']:''; ?>">
                            <?php echo form_error('linkman','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="curchuzhi">预支出：</label>
                            <input type="text" class="form-control" name="curchuzhi" placeholder="Enter curchuzhi" value="<?php echo !empty($cmf_accesspreshou['curchuzhi'])?$cmf_accesspreshou['curchuzhi']:''; ?>">
                            <?php echo form_error('curchuzhi','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="accountid">帐户ID：</label>
                            <input type="text" class="form-control" name="accountid" placeholder="Enter accountid" value="<?php echo !empty($cmf_accesspreshou['accountid'])?$cmf_accesspreshou['accountid']:''; ?>">
                            <?php echo form_error('accountid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="jine">金额：</label>
                            <input type="text" class="form-control" name="jine" placeholder="Enter jine" value="<?php echo !empty($cmf_accesspreshou['jine'])?$cmf_accesspreshou['jine']:''; ?>">
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
                            <input type="text" class="form-control" name="guanlianbillid" placeholder="Enter guanlianbillid" value="<?php echo !empty($cmf_accesspreshou['guanlianbillid'])?$cmf_accesspreshou['guanlianbillid']:''; ?>">
                            <?php echo form_error('guanlianbillid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="createman">创建人：</label>
                            <input type="text" class="form-control" name="createman" placeholder="Enter createman" value="<?php echo !empty($cmf_accesspreshou['createman'])?$cmf_accesspreshou['createman']:''; ?>">
                            <?php echo form_error('createman','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="createtime">创建时间：</label>
                            <input readonly class="form-control" type="text" id="date-group1-4" placeholder="YYYY-MM-DD hh:mm" name="createtime">
                            <?php echo form_error('createtime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="beizhu">备注：</label>
                            <textarea name="beizhu" cols="50" rows="10" class="form-control" style="resize: none;"><?php echo !empty($cmf_accesspreshou['beizhu'])?$cmf_accesspreshou['beizhu']:''; ?></textarea>
                            <?php echo form_error('beizhu','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="billdeptid">清单部门ID：</label>
                            <input type="text" class="form-control" name="billdeptid" placeholder="Enter billdeptid" value="<?php echo !empty($cmf_accesspreshou['billdeptid'])?$cmf_accesspreshou['billdeptid']:''; ?>">
                            <?php echo form_error('billdeptid','<p class="help-block text-danger">','</p>'); ?>
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