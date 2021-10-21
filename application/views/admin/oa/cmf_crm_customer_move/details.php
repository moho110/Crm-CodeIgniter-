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
            <div class="panel-heading">客户移除详细内容<a href="<?php echo site_url('/oa/CmfCrmCustomerMove/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfCrmCustomerMove['Id'])?$CmfCrmCustomerMove['Id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>客户ID：</label>
                    <p><?php echo !empty($CmfCrmCustomerMove['clientId'])?$CmfCrmCustomerMove['clientId']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>当前用户：</label>
                    <p><?php echo !empty($CmfCrmCustomerMove['preUser'])?$CmfCrmCustomerMove['preUser']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>下次用户：</label>
                    <p><?php echo !empty($CmfCrmCustomerMove['nextUser'])?$CmfCrmCustomerMove['nextUser']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>操作者：</label>
                    <p><?php echo !empty($CmfCrmCustomerMove['operator'])?$CmfCrmCustomerMove['operator']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>操作时间：</label>
                    <p><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfCallchuli['operateTime'])); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>