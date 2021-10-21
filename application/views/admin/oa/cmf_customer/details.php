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
            <div class="panel-heading">客户详细内容<a href="<?php echo site_url('/oa/CmfCustomer/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfCustomer['id'])?$CmfCustomer['id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>供应商ID：</label>
                    <p><?php echo !empty($CmfCustomer['supplyid'])?$CmfCustomer['supplyid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>供应商名称：</label>
                    <p><?php echo !empty($CmfCustomer['supplyname'])?$CmfCustomer['supplyname']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>供应商简称：</label>
                    <p><?php echo !empty($CmfCustomer['supplyshortname'])?$CmfCustomer['supplyshortname']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>法人代表：</label>
                    <p><?php echo !empty($CmfCustomer['enterstype'])?$CmfCustomer['enterstype']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>呼叫：</label>
                    <p><?php echo !empty($CmfCustomer['calling'])?$CmfCustomer['calling']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>状态：</label>
                    <p><?php echo !empty($CmfCustomer['state'])?$CmfCustomer['state']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>会员卡：</label>
                    <p><?php echo !empty($CmfCustomer['membercard'])?$CmfCustomer['membercard']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>节：</label>
                    <p><?php echo !empty($CmfCustomer['chargesection'])?$CmfCustomer['chargesection']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>邮政编码：</label>
                    <p><?php echo !empty($CmfCustomer['postalcode'])?$CmfCustomer['postalcode']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>电话号码：</label>
                    <p><?php echo !empty($CmfCustomer['phone'])?$CmfCustomer['phone']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>传真号码：</label>
                    <p><?php echo !empty($CmfCustomer['fax'])?$CmfCustomer['fax']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>联系地址：</label>
                    <p><?php echo !empty($CmfCustomer['contactaddress'])?$CmfCustomer['contactaddress']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>电子邮件：</label>
                    <p><?php echo !empty($CmfCustomer['email'])?$CmfCustomer['email']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>网络用语：</label>
                    <p><?php echo !empty($CmfCustomer['netword'])?$CmfCustomer['netword']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>银行：</label>
                    <p><?php echo !empty($CmfCustomer['bank'])?$CmfCustomer['bank']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>帐号号码：</label>
                    <p><?php echo !empty($CmfCustomer['accountnumber'])?$CmfCustomer['accountnumber']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>开始日期：</label>
                    <p><?php echo !empty($CmfCustomer['startdate'])?$CmfCustomer['startdate']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>结束日期：</label>
                    <p><?php echo !empty($CmfCustomer['enddate'])?$CmfCustomer['enddate']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>样式：</label>
                    <p><?php echo !empty($CmfCustomer['style'])?$CmfCustomer['style']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>用户标识：</label>
                    <p><?php echo !empty($CmfCustomer['user_flag'])?$CmfCustomer['user_flag']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>用户ID：</label>
                    <p><?php echo !empty($CmfCustomer['user_id'])?$CmfCustomer['user_id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>供应商编号：</label>
                    <p><?php echo !empty($CmfCustomer['supplycn'])?$CmfCustomer['supplycn']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>系统用户：</label>
                    <p><?php echo !empty($CmfCustomer['sysuser'])?$CmfCustomer['sysuser']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>字符串：</label>
                    <p><?php echo !empty($CmfCustomer['explainStr'])?$CmfCustomer['explainStr']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>简串：</label>
                    <p><?php echo !empty($CmfCustomer['briefStr'])?$CmfCustomer['briefStr']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品报价：</label>
                    <p><?php echo !empty($CmfCustomer['prodprice'])?$CmfCustomer['prodprice']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>amtagio：</label>
                    <p><?php echo !empty($CmfCustomer['amtagio'])?$CmfCustomer['amtagio']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>备注：</label>
                    <p><?php echo !empty($CmfCustomer['remark'])?$CmfCustomer['remark']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>推荐：</label>
                    <p><?php echo !empty($CmfCustomer['recommand'])?$CmfCustomer['recommand']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>获取帐户：</label>
                    <p><?php echo !empty($CmfCustomer['getaccount'])?$CmfCustomer['getaccount']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>预处置：</label>
                    <p><?php echo !empty($CmfCustomer['yuchuzhi'])?$CmfCustomer['yuchuzhi']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>实际获取金额：</label>
                    <p><?php echo !empty($CmfCustomer['factgetmoney'])?$CmfCustomer['factgetmoney']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>未获取金额：</label>
                    <p><?php echo !empty($CmfCustomer['nogetmoney'])?$CmfCustomer['nogetmoney']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>源头：</label>
                    <p><?php echo !empty($CmfCustomer['origin'])?$CmfCustomer['origin']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>销售模式：</label>
                    <p><?php echo !empty($CmfCustomer['salemode'])?$CmfCustomer['salemode']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>属性：</label>
                    <p><?php echo !empty($CmfCustomer['property'])?$CmfCustomer['property']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>数据范围：</label>
                    <p><?php echo !empty($CmfCustomer['datascope'])?$CmfCustomer['datascope']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建日期：</label>
                    <p><?php echo !empty($CmfCustomer['createdate'])?$CmfCustomer['createdate']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>集成：</label>
                    <p><?php echo !empty($CmfCustomer['integral'])?$CmfCustomer['integral']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>上次跟踪时间：</label>
                    <p><?php echo !empty($CmfCustomer['lasttracetime'])?$CmfCustomer['lasttracetime']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>