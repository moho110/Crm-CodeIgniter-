<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_header");
?>
<?php if(!empty($success_msg)){ ?>
    <div class="col-xs-12">
        <div class="alert alert-success"><?php echo $success_msg; ?></div>
    </div>
    <?php }elseif(!empty($error_msg)){ ?>
    <div class="col-xs-12">
        <div class="alert alert-danger"><?php echo $error_msg; ?></div>
    </div>
    <?php } ?>
<div class="container">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">国家代码详细内容<a href="<?php echo site_url('/oa/CmfCmdictCountrycode/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfCmdictCountrycode['countryID'])?$CmfCmdictCountrycode['countryID']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>国家名称：</label>
                    <p><?php echo !empty($CmfCmdictCountrycode['countryName'])?$CmfCmdictCountrycode['countryName']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>国家代码：</label>
                    <p><?php echo !empty($CmfCmdictCountrycode['countryCode'])?$CmfCmdictCountrycode['countryCode']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>邮政编码：</label>
                    <p><?php echo !empty($CmfCmdictCountrycode['postCode'])?$CmfCmdictCountrycode['postCode']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>