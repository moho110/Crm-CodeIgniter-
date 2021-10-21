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
            <div class="panel-heading">客户方案详细内容<a href="<?php echo site_url('/oa/CmfCustomerFangan/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfCustomerFangan['id'])?$CmfCustomerFangan['id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>主题：</label>
                    <p><?php echo !empty($CmfCustomerFangan['zhuti'])?$CmfCustomerFangan['zhuti']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>客户ID：</label>
                    <p><?php echo !empty($CmfCustomerFangan['customerid'])?$CmfCustomerFangan['customerid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>机会ID：</label>
                    <p><?php echo !empty($CmfCustomerFangan['chanceid'])?$CmfCustomerFangan['chanceid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>内容：</label>
                    <p><?php echo !empty($CmfCustomerFangan['content'])?$CmfCustomerFangan['content']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>反馈：</label>
                    <p><?php echo !empty($CmfCustomerFangan['fankui'])?$CmfCustomerFangan['fankui']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建人：</label>
                    <p><?php echo !empty($CmfCustomerFangan['createman'])?$CmfCustomerFangan['createman']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建时间：</label>
                    <p><?php echo !empty($CmfCustomerFangan['createtime'])?$CmfCustomerFangan['createtime']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>附件：</label>
                    <p><?php echo !empty($CmfCustomerFangan['fujian'])?$CmfCustomerFangan['fujian']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>