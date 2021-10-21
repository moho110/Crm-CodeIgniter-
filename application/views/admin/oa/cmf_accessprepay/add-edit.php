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
                <div class="panel-heading"><?php echo $action; ?> CmfAccessprepay <a href="<?php echo site_url('/oa/CmfAccessprepay'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="supplyid">供应商ID：</label>
                            <input type="text" class="form-control" name="supplyid" placeholder="输入供应商ID" value="<?php echo !empty($cmf_accessprepay['supplyid'])?$cmf_accessprepay['supplyid']:''; ?>">
                            <?php echo form_error('supplyid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="linkmanid">联系人ID：</label>
                            <input type="text" class="form-control" name="linkmanid" placeholder="输入联系人ID" value="<?php echo !empty($cmf_accessprepay['linkmanid'])?$cmf_accessprepay['linkmanid']:''; ?>">
                            <?php echo form_error('linkmanid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="curchuzhi">预支出：</label>
                            <input type="text" class="form-control" name="curchuzhi" placeholder="Enter curchuzhi" value="<?php echo !empty($cmf_accessprepay['curchuzhi'])?$cmf_accessprepay['curchuzhi']:''; ?>">
                            <?php echo form_error('curchuzhi','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="jine">金额：</label>
                            <input type="jine" class="form-control" name="jine" placeholder="Enter jine" value="<?php echo !empty($cmf_accessprepay['jine'])?$cmf_accessprepay['jine']:''; ?>">
                            <?php echo form_error('jine','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="createman">创建人：</label>
                            <input type="text" class="form-control" name="createman" placeholder="Enter createman" value="<?php echo !empty($cmf_accessprepay['createman'])?$cmf_accessprepay['createman']:''; ?>">
                            <?php echo form_error('createman','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="title">操作类型：</label>
                            <input type="radio" name="opertype" value="1">是
                            <input type="radio" name="opertype" value="0">否
                            <?php echo form_error('opertype','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="title">关联清单ID：</label>
                            <input type="text" class="form-control" name="guanlianbillid" placeholder="Enter guanlianbillid" value="<?php echo !empty($cmf_accessprepay['guanlianbillid'])?$cmf_accessprepay['guanlianbillid']:''; ?>">
                            <?php echo form_error('guanlianbillid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="title">清单部门ID：</label>
                            <input type="text" class="form-control" name="billdeptid" placeholder="Enter billdeptid" value="<?php echo !empty($cmf_accessprepay['billdeptid'])?$cmf_accessprepay['billdeptid']:''; ?>">
                            <?php echo form_error('billdeptid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="title">帐户ID：</label>
                            <input type="text" class="form-control" name="accountid" placeholder="Enter accountid" value="<?php echo !empty($cmf_accessprepay['accountid'])?$cmf_accessprepay['accountid']:''; ?>">
                            <?php echo form_error('accountid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="title">创建时间：</label>
                            <input readonly class="form-control" type="text" id="date-group1-4" placeholder="YYYY-MM-DD hh:mm" name="createtime">
                            <?php echo form_error('createtime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="beizhu">备注：</label>
                            <textarea name="beizhu" cols="50" rows="10" class="form-control" style="resize: none;"><?php echo !empty($cmf_accessprepay['beizhu'])?$cmf_accessprepay['beizhu']:''; ?>
                            <?php echo form_error('beizhu','<p class="help-block text-danger">','</p>'); ?></textarea>
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