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
            <div class="panel-heading">供应商联系人详细内容<a href="<?php echo site_url('/oa/CmfSupplylinkman/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfSupplylinkman['ROWID'])?$CmfSupplylinkman['ROWID']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>供应商名称：</label>
                    <p><?php echo !empty($CmfSupplylinkman['supplyname'])?$CmfSupplylinkman['supplyname']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>备用：</label>
                    <p><?php echo !empty($CmfSupplylinkman['beiyong'])?$CmfSupplylinkman['beiyong']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>性别：</label>
                    <p><?php echo !empty($CmfSupplylinkman['gender'])?$CmfSupplylinkman['gender']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>电话号码：</label>
                    <p><?php echo !empty($CmfSupplylinkman['phone'])?$CmfSupplylinkman['phone']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>传真号码：</label>
                    <p><?php echo !empty($CmfSupplylinkman['fax'])?$CmfSupplylinkman['fax']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>电子邮件：</label>
                    <p><?php echo !empty($CmfSupplylinkman['email'])?$CmfSupplylinkman['email']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>邮政编码：</label>
                    <p><?php echo !empty($CmfSupplylinkman['postcode'])?$CmfSupplylinkman['postcode']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>备注：</label>
                    <p><?php echo !empty($CmfSupplylinkman['mark'])?$CmfSupplylinkman['mark']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>业务：</label>
                    <p><?php echo !empty($CmfSupplylinkman['business'])?$CmfSupplylinkman['business']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>业务Ex：</label>
                    <p><?php echo !empty($CmfSupplylinkman['businessexpian'])?$CmfSupplylinkman['businessexpian']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>地址：</label>
                    <p><?php echo !empty($CmfSupplylinkman['address'])?$CmfSupplylinkman['address']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>用户标识：</label>
                    <p><?php echo !empty($CmfSupplylinkman['user_flag'])?$CmfSupplylinkman['user_flag']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>用户ID：</label>
                    <p><?php echo !empty($CmfSupplylinkman['user_id'])?$CmfSupplylinkman['user_id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>供应商编号：</label>
                    <p><?php echo !empty($CmfSupplylinkman['supplycn'])?$CmfSupplylinkman['supplycn']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>供应商ID：</label>
                    <p><?php echo !empty($CmfSupplylinkman['supplyid'])?$CmfSupplylinkman['supplyid']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>