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
                <div class="panel-heading"><?php echo $action; ?> 销售机会成功率 <a href="<?php echo site_url('/oa/CmfCrmChanceRate/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="chanceRateId">编号：</label>
                            <input type="text" class="form-control" name="chanceRateId" placeholder="Enter chanceRateId" value="<?php echo !empty($cmf_crm_chance_rate['chanceRateId'])?$cmf_crm_chance_rate['chanceRateId']:''; ?>">
                            <?php echo form_error('chanceRateId','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="enable">可能性：</label>
                            <input type="text" class="form-control" name="enable" placeholder="Enter enable" value="<?php echo !empty($cmf_crm_chance_rate['enable'])?$cmf_crm_chance_rate['enable']:''; ?>">
                            <?php echo form_error('enable','<p class="help-block text-danger">','</p>'); ?>
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