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
            <div class="panel-heading">预付款记录详细内容 <a href="<?php echo site_url('/oa/CmfAccessprepay/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>id:</label>
                    <p><?php echo !empty($CmfAccessprepay['id'])?$CmfAccessprepay['id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>供应商ID：</label>
                    <p><?php echo !empty($CmfAccessprepay['supplyid'])?$CmfAccessprepay['supplyid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>联系人ID：</label>
                    <p><?php echo !empty($CmfAccessprepay['linkmanid'])?$CmfAccessprepay['linkmanid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>预支出：</label>
                    <p><?php echo !empty($CmfAccessprepay['curchuzhi'])?$CmfAccessprepay['curchuzhi']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>金额：</label>
                    <p><?php echo !empty($CmfAccessprepay['jine'])?$CmfAccessprepay['jine']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建人：</label>
                    <p><?php echo !empty($CmfAccessprepay['createman'])?$CmfAccessprepay['createman']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>操作类型:</label>
                    <p>
                        <?php if ($CmfAccessprepay['opertype'] == '1') {?>
                            是
                        <?php } elseif ($CmfAccessprepay['opertype'] == '0') {?>
                            否
                        <?php } else {?>
                            其他类型
                        <?php } ?>
                    </p>
                </div>
                <div class="form-group">
                    <label>关联清单ID：</label>
                    <p><?php echo !empty($CmfAccessprepay['guanlianbillid'])?$CmfAccessprepay['guanlianbillid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建时间：</label>
                    <p><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfAccessprepay['createtime'])); ?></p>
                </div>
                <div class="form-group">
                    <label>清单部门ID：</label>
                    <p><?php echo !empty($CmfAccessprepay['billdeptid'])?$CmfAccessprepay['billdeptid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>帐户ID：</label>
                    <p><?php echo !empty($CmfAccessprepay['accountid'])?$CmfAccessprepay['accountid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>备注：</label>
                    <p><?php echo !empty($CmfAccessprepay['beizhu'])?$CmfAccessprepay['beizhu']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>