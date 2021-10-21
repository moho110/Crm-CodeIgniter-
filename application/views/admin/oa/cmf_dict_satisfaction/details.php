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
            <div class="panel-heading">方便详细内容<a href="<?php echo site_url('/oa/CmfDictSatisfaction/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfDictSatisfaction['Satisfaction_ID'])?$CmfDictSatisfaction['Satisfaction_ID']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>方便：</label>
                    <p><?php echo !empty($CmfDictSatisfaction['Satisfaction'])?$CmfDictSatisfaction['Satisfaction']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>支付代码：</label>
                    <p><?php echo !empty($CmfDictSatisfaction['PY_Code'])?$CmfDictSatisfaction['PY_Code']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>