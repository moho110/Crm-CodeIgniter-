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
            <div class="panel-heading">银行详细内容<a href="<?php echo site_url('/oa/CmfBank/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>ROWID:</label>
                    <p><?php echo !empty($CmfBank['ROWID'])?$CmfBank['ROWID']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>银行ID：</label>
                    <p><?php echo !empty($CmfBank['bankid'])?$CmfBank['bankid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>银行代码：</label>
                    <p><?php echo !empty($CmfBank['bankcode'])?$CmfBank['bankcode']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>银行名称：</label>
                    <p><?php echo !empty($CmfBank['bankname'])?$CmfBank['bankname']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>系统锁定：</label>
                    <p><?php echo !empty($CmfBank['syslock'])?$CmfBank['syslock']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>金额：</label>
                    <p><?php echo !empty($CmfBank['jine'])?$CmfBank['jine']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>所属：</label>
                    <p><?php echo !empty($CmfBank['belong'])?$CmfBank['belong']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>