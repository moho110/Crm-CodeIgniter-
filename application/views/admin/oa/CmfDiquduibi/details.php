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
            <div class="panel-heading">客户区域对比明细内容 <a href="<?php echo site_url('/oa/CmfDiquduibi/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfDiquduibi['billid'])?$CmfDiquduibi['billid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>主题：</label>
                    <p><?php echo !empty($CmfDiquduibi['zhuti'])?$CmfDiquduibi['zhuti']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>供应商ID：</label>
                    <p><?php echo !empty($CmfDiquduibi['supplyid'])?$CmfDiquduibi['supplyid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>销售计划编号：</label>
                    <p><?php echo !empty($CmfDiquduibi['sellplanno'])?$CmfDiquduibi['sellplanno']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>总金额：</label>
                    <p><?php echo !empty($CmfDiquduibi['totalmoney'])?$CmfDiquduibi['totalmoney']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>支付类型：</label>
                    <p>
                        <?php if ($CmfDiquduibi['paytype'] == '1') {?>
                            微信支付
                        <?php } elseif ($CmfDiquduibi['paytype'] == '2') {?>
                            支付宝
                        <?php } elseif ($CmfDiquduibi['paytype'] == '3') {?>
                            现金支付
                        <?php } elseif ($CmfDiquduibi['paytype'] == '4') {?>
                            信用卡
                        <?php } elseif ($CmfDiquduibi['paytype'] == '5') {?>
                            借记卡
                        <?php } elseif ($CmfDiquduibi['paytype'] == '6') {?>
                            线下支付
                        <?php } else {?>
                            其他类型
                        <?php } ?>
                    </p>
                </div>
                <div class="form-group">
                    <label>汇款金额：</label>
                    <p><?php echo !empty($CmfDiquduibi['huikuanjine'])?$CmfDiquduibi['huikuanjine']:''; ?></p>
                    </p>
                </div>
                <div class="form-group">
                    <label>发货金额：</label>
                    <p><?php echo !empty($CmfDiquduibi['fahuojine'])?$CmfDiquduibi['fahuojine']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>开票金额：</label>
                    <p><?php echo !empty($CmfDiquduibi['kaipiaojine'])?$CmfDiquduibi['kaipiaojine']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>计划日期：</label>
                    <p><?php echo !empty($CmfDiquduibi['plandate'])?$CmfDiquduibi['plandate']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>最晚发货日期：</label>
                    <p><?php echo !empty($CmfDiquduibi['zuiwanfahuodate'])?$CmfDiquduibi['zuiwanfahuodate']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>签约人：</label>
                    <p><?php echo !empty($CmfDiquduibi['qianyueren'])?$CmfDiquduibi['qianyueren']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>供应商联系人：</label>
                    <p><?php echo !empty($CmfDiquduibi['linkman'])?$CmfDiquduibi['linkman']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>区域名称：</label>
                    <p><?php echo !empty($CmfDiquduibi['name'])?$CmfDiquduibi['name']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>等级编号：</label>
                    <p><?php echo !empty($CmfDiquduibi['leverno'])?$CmfDiquduibi['leverno']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>