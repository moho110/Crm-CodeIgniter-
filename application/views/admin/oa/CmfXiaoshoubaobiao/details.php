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
            <div class="panel-heading">销售日报详细内容 <a href="<?php echo site_url('/oa/CmfXiaoshoubaobiao/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfXiaoshoubaobiao['id'])?$CmfXiaoshoubaobiao['id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>银行帐户ID：</label>
                    <p><?php echo !empty($CmfXiaoshoubaobiao['bankid'])?$CmfXiaoshoubaobiao['bankid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>过往金额：</label>
                    <p><?php echo !empty($CmfXiaoshoubaobiao['oldjine'])?$CmfXiaoshoubaobiao['oldjine']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>金额：</label>
                    <p><?php echo !empty($CmfXiaoshoubaobiao['jine'])?$CmfXiaoshoubaobiao['jine']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>操作类型：</label>
                    <p><?php echo !empty($CmfXiaoshoubaobiao['opertype'])?$CmfXiaoshoubaobiao['opertype']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>关联清单ID：</label>
                    <p><?php echo !empty($CmfXiaoshoubaobiao['guanlianbillid'])?$CmfXiaoshoubaobiao['guanlianbillid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建人：</label>
                    <p><?php echo !empty($CmfXiaoshoubaobiao['createman'])?$CmfXiaoshoubaobiao['createman']:''; ?></p>
                    </p>
                </div>
                <div class="form-group">
                    <label>供应商ID：</label>
                    <p><?php echo !empty($CmfXiaoshoubaobiao['supplyid'])?$CmfXiaoshoubaobiao['supplyid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>联系人ID：</label>
                    <p><?php echo !empty($CmfXiaoshoubaobiao['linkmanid'])?$CmfXiaoshoubaobiao['linkmanid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>清单部门ID：</label>
                    <p><?php echo !empty($CmfXiaoshoubaobiao['billdeptid'])?$CmfXiaoshoubaobiao['billdeptid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>帐户ID：</label>
                    <p><?php echo !empty($CmfXiaoshoubaobiao['accountid'])?$CmfXiaoshoubaobiao['accountid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>供应商名称：</label>
                    <p><?php echo !empty($CmfXiaoshoubaobiao['supplyname'])?$CmfXiaoshoubaobiao['supplyname']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>电话号码：</label>
                    <p><?php echo !empty($CmfXiaoshoubaobiao['phone'])?$CmfXiaoshoubaobiao['phone']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>传真号码：</label>
                    <p><?php echo !empty($CmfXiaoshoubaobiao['fax'])?$CmfXiaoshoubaobiao['fax']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>电子邮件：</label>
                    <p><?php echo !empty($CmfXiaoshoubaobiao['email'])?$CmfXiaoshoubaobiao['email']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>