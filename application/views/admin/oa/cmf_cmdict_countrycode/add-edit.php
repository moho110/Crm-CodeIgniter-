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
                <div class="panel-heading"><?php echo $action; ?> 国家代码 <a href="<?php echo site_url('/oa/CmfBank/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="countryID">编号：</label>
                            <input type="text" class="form-control" name="countryID" placeholder="Enter countryID" value="<?php echo !empty($cmf_cmdict_couCmfCmdictCountrycode['countryID'])?$cmf_cmdict_couCmfCmdictCountrycode['countryID']:''; ?>">
                            <?php echo form_error('countryID','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="countryName">国家名称：</label>
                            <input type="text" class="form-control" name="countryName" placeholder="Enter countryName" value="<?php echo !empty($cmf_cmdict_couCmfCmdictCountrycode['countryName'])?$cmf_cmdict_couCmfCmdictCountrycode['countryName']:''; ?>">
                            <?php echo form_error('countryName','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="countryCode">国家代码：</label>
                            <input type="text" class="form-control" name="countryCode" placeholder="Enter countryCode" value="<?php echo !empty($cmf_cmdict_couCmfCmdictCountrycode['countryCode'])?$cmf_cmdict_couCmfCmdictCountrycode['countryCode']:''; ?>">
                            <?php echo form_error('countryCode','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="postCode">邮政编码：</label>
                            <input type="text" class="form-control" name="postCode" placeholder="Enter postCode" value="<?php echo !empty($cmf_cmdict_couCmfCmdictCountrycode['postCode'])?$cmf_cmdict_couCmfCmdictCountrycode['postCode']:''; ?>">
                            <?php echo form_error('postCode','<p class="help-block text-danger">','</p>'); ?>
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