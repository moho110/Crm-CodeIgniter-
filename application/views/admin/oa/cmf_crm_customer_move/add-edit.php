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
                <div class="panel-heading"><?php echo $action; ?> 客户移除 <a href="<?php echo site_url('/oa/CmfCrmCustomerMove/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="Id">编号：</label>
                            <input type="text" class="form-control" name="Id" placeholder="Enter Id" value="<?php echo !empty($cmf_crm_customer_move['Id'])?$cmf_crm_customer_move['Id']:''; ?>">
                            <?php echo form_error('Id','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="clientId">客户ID：</label>
                            <input type="text" class="form-control" name="clientId" placeholder="Enter clientId" value="<?php echo !empty($cmf_crm_customer_move['clientId'])?$cmf_crm_customer_move['clientId']:''; ?>">
                            <?php echo form_error('clientId','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="preUser">当前用户：</label>
                            <input type="text" class="form-control" name="preUser" placeholder="Enter preUser" value="<?php echo !empty($cmf_crm_customer_move['preUser'])?$cmf_crm_customer_move['preUser']:''; ?>">
                            <?php echo form_error('preUser','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="nextUser">下次用户：</label>
                            <input type="text" class="form-control" name="nextUser" placeholder="Enter nextUser" value="<?php echo !empty($cmf_crm_customer_move['nextUser'])?$cmf_crm_customer_move['nextUser']:''; ?>">
                            <?php echo form_error('nextUser','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="operator">操作者：</label>
                            <input type="text" class="form-control" name="operator" placeholder="Enter operator" value="<?php echo !empty($cmf_crm_customer_move['operator'])?$cmf_crm_customer_move['operator']:''; ?>">
                            <?php echo form_error('operator','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="operateTime">操作时间：</label>
                            <input readonly class="form-control" type="text" id="date-group1-4" placeholder="YYYY-MM-DD hh:mm" name="operateTime">
                            <?php echo form_error('operateTime','<p class="help-block text-danger">','</p>'); ?>
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