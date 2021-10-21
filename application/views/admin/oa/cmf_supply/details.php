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
            <div class="panel-heading">供应商详细内容<a href="<?php echo site_url('/oa/CmfSupply/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfSupply['ROWID'])?$CmfSupply['ROWID']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>供应商ID：</label>
                    <p><?php echo !empty($CmfSupply['supplyid'])?$CmfSupply['supplyid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>供应商名称：</label>
                    <p><?php echo !empty($CmfSupply['supplyname'])?$CmfSupply['supplyname']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>供应商简称：</label>
                    <p><?php echo !empty($CmfSupply['supplyshortname'])?$CmfSupply['supplyshortname']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>输入类型：</label>
                    <p><?php echo !empty($CmfSupply['enterstype'])?$CmfSupply['enterstype']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>职业：</label>
                    <p><?php echo !empty($CmfSupply['calling'])?$CmfSupply['calling']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>联系人：</label>
                    <p><?php echo !empty($CmfSupply['linkman'])?$CmfSupply['linkman']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>法人代表：</label>
                    <p><?php echo !empty($CmfSupply['artificialperson'])?$CmfSupply['artificialperson']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>收费：</label>
                    <p><?php echo !empty($CmfSupply['chargesection'])?$CmfSupply['chargesection']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>邮政编码：</label>
                    <p><?php echo !empty($CmfSupply['postalcode'])?$CmfSupply['postalcode']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>电话号码：</label>
                    <p><?php echo !empty($CmfSupply['phone'])?$CmfSupply['phone']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>传真号码：</label>
                    <p><?php echo !empty($CmfSupply['fax'])?$CmfSupply['fax']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>联系地址：</label>
                    <p><?php echo !empty($CmfSupply['contactaddress'])?$CmfSupply['contactaddress']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>电子邮件：</label>
                    <p><?php echo !empty($CmfSupply['email'])?$CmfSupply['email']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>网络用语：</label>
                    <p><?php echo !empty($CmfSupply['netword'])?$CmfSupply['netword']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>银行：</label>
                    <p><?php echo !empty($CmfSupply['bank'])?$CmfSupply['bank']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>银行帐号：</label>
                    <p><?php echo !empty($CmfSupply['accountnumber'])?$CmfSupply['accountnumber']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>开始日期：</label>
                    <p><?php echo !empty($CmfSupply['startdate'])?$CmfSupply['startdate']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>结束日期：</label>
                    <p><?php echo !empty($CmfSupply['enddate'])?$CmfSupply['enddate']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>类型：</label>
                    <p><?php echo !empty($CmfSupply['style'])?$CmfSupply['style']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>用户标识：</label>
                    <p><?php echo !empty($CmfSupply['user_flag'])?$CmfSupply['user_flag']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>用户ID：</label>
                    <p><?php echo !empty($CmfSupply['user_id'])?$CmfSupply['user_id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>供应商编号：</label>
                    <p><?php echo !empty($CmfSupply['supplycn'])?$CmfSupply['supplycn']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>系统用户：</label>
                    <p><?php echo !empty($CmfSupply['sysuser'])?$CmfSupply['sysuser']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品类型：</label>
                    <p><?php echo !empty($CmfSupply['prodtype'])?$CmfSupply['prodtype']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>Amtagio：</label>
                    <p><?php echo !empty($CmfSupply['amtagio'])?$CmfSupply['amtagio']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>备注：</label>
                    <p><?php echo !empty($CmfSupply['remark'])?$CmfSupply['remark']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>推荐：</label>
                    <p><?php echo !empty($CmfSupply['recommand'])?$CmfSupply['recommand']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>支付帐户：</label>
                    <p><?php echo !empty($CmfSupply['payaccount'])?$CmfSupply['payaccount']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>支付金额：</label>
                    <p><?php echo !empty($CmfSupply['paymoney'])?$CmfSupply['paymoney']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>实际支付金额：</label>
                    <p><?php echo !empty($CmfSupply['factpaymoney'])?$CmfSupply['factpaymoney']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>未支付金额：</label>
                    <p><?php echo !empty($CmfSupply['nopaymoney'])?$CmfSupply['nopaymoney']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>数据范围：</label>
                    <p><?php echo !empty($CmfSupply['datascope'])?$CmfSupply['datascope']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>预付款：</label>
                    <p><?php echo !empty($CmfSupply['yufukuan'])?$CmfSupply['yufukuan']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>