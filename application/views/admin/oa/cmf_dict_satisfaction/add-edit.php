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
                <div class="panel-heading"><?php echo $action; ?> 方便 <a href="<?php echo site_url('/oa/CmfDictSatisfaction/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="Satisfaction_ID">编号：</label>
                            <input type="text" class="form-control" name="Satisfaction_ID" placeholder="Enter Satisfaction_ID" value="<?php echo !empty($cmf_dict_satisfaction['Satisfaction_ID'])?$cmf_dict_satisfaction['Satisfaction_ID']:''; ?>">
                            <?php echo form_error('Satisfaction_ID','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="Satisfaction">方便：</label>
                            <input type="text" class="form-control" name="Satisfaction" placeholder="Enter Satisfaction" value="<?php echo !empty($cmf_dict_satisfaction['Satisfaction'])?$cmf_dict_satisfaction['Satisfaction']:''; ?>">
                            <?php echo form_error('Satisfaction','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="PY_Code">支付代码：</label>
                            <input type="text" class="form-control" name="PY_Code" placeholder="Enter PY_Code" value="<?php echo !empty($cmf_dict_satisfaction['PY_Code'])?$cmf_dict_satisfaction['PY_Code']:''; ?>">
                            <?php echo form_error('PY_Code','<p class="help-block text-danger">','</p>'); ?>
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