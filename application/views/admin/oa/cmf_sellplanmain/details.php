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
            <div class="panel-heading">采购计划详细内容<a href="<?php echo site_url('/oa/CmfSellplanmain/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>清单ID：</label>
                    <p><?php echo !empty($CmfSellplanmain['billid'])?$CmfSellplanmain['billid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>主题：</label>
                    <p><?php echo !empty($CmfSellplanmain['zhuti'])?$CmfSellplanmain['zhuti']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>用户ID：</label>
                    <p><?php echo !empty($CmfSellplanmain['user_id'])?$CmfSellplanmain['user_id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>供应商ID：</label>
                    <p><?php echo !empty($CmfSellplanmain['supplyid'])?$CmfSellplanmain['supplyid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>机会ID：</label>
                    <p><?php echo !empty($CmfSellplanmain['chanceid'])?$CmfSellplanmain['chanceid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>采购计划编号：</label>
                    <p><?php echo !empty($CmfSellplanmain['sellplanno'])?$CmfSellplanmain['sellplanno']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>总金额：</label>
                    <p><?php echo !empty($CmfSellplanmain['totalmoney'])?$CmfSellplanmain['totalmoney']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>支付类型：</label>
                    <p>
                        <?php if ($CmfSellplanmain['paytype'] == '1') {?>
                            微信支付
                        <?php } elseif ($CmfSellplanmain['paytype'] == '2') {?>
                            支付宝
                        <?php } elseif ($CmfSellplanmain['paytype'] == '3') {?>
                            现金支付
                        <?php } elseif ($CmfSellplanmain['paytype'] == '4') {?>
                            信用卡
                        <?php } elseif ($CmfSellplanmain['paytype'] == '5') {?>
                            借记卡
                        <?php } elseif ($CmfSellplanmain['paytype'] == '6') {?>
                            线下支付
                        <?php } else {?>
                            其他类型
                        <?php } ?>
                    </p>
                </div>
                <div class="form-group">
                    <label>汇款金额：</label>
                    <p><?php echo !empty($CmfSellplanmain['huikuanjine'])?$CmfSellplanmain['huikuanjine']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>发货金额：</label>
                    <p><?php echo !empty($CmfSellplanmain['fahuojine'])?$CmfSellplanmain['fahuojine']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>开票金额：</label>
                    <p><?php echo !empty($CmfSellplanmain['kaipiaojine'])?$CmfSellplanmain['kaipiaojine']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>计划日期：</label>
                    <p><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfSellplanmain['plandate'])); ?></p>
                </div>
                <div class="form-group">
                    <label>最晚发货日期：</label>
                    <p><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfSellplanmain['zuiwanfahuodate'])); ?></p>
                </div>
                <div class="form-group">
                    <label>签约人：</label>
                    <p><?php echo !empty($CmfSellplanmain['qianyueren'])?$CmfSellplanmain['qianyueren']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>用户标识：</label>
                    <p>
                        <?php if ($CmfSellplanmain['user_flag'] == '1') {?>
                            保留
                        <?php } elseif ($CmfSellplanmain['user_flag'] == '0') {?>
                            删除
                        <?php } else {?>
                            其他类型
                        <?php } ?>
                    </p>
                </div>
                <div class="form-group">
                    <label>备注：</label>
                    <p><?php echo !empty($CmfSellplanmain['beizhu'])?$CmfSellplanmain['beizhu']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>文件地址：</label>
                    <p><?php echo !empty($CmfSellplanmain['fileaddress'])?$CmfSellplanmain['fileaddress']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>概要：</label>
                    <p><?php echo !empty($CmfSellplanmain['gaiyao'])?$CmfSellplanmain['gaiyao']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>库存ID：</label>
                    <p><?php echo !empty($CmfSellplanmain['storeid'])?$CmfSellplanmain['storeid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>联系人：</label>
                    <p><?php echo !empty($CmfSellplanmain['linkman'])?$CmfSellplanmain['linkman']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>地址：</label>
                    <p><?php echo !empty($CmfSellplanmain['address'])?$CmfSellplanmain['address']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>移动电话：</label>
                    <p><?php echo !empty($CmfSellplanmain['mobile'])?$CmfSellplanmain['mobile']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建时间：</label>
                    <p><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfSellplanmain['createtime'])); ?></p>
                </div>
                <div class="form-group">
                    <label>清单类型：</label>
                    <p><?php echo !empty($CmfSellplanmain['billtype'])?$CmfSellplanmain['billtype']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>是否支付：</label>
                    <p>
                        <?php if ($CmfSellplanmain['ifpay'] == '1') {?>
                            是
                        <?php } elseif ($CmfSellplanmain['ifpay'] == '0') {?>
                            否
                        <?php } else {?>
                            其他类型
                        <?php } ?>
                    </p>
                </div>
                <div class="form-group">
                    <label>备用：</label>
                    <p><?php echo !empty($CmfSellplanmain['beiyong'])?$CmfSellplanmain['beiyong']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>开票状态：</label>
                    <p>
                        <?php if ($CmfSellplanmain['kaipiaostate'] == '1') {?>
                            已开票
                        <?php } elseif ($CmfSellplanmain['kaipiaostate'] == '0') {?>
                            未开票
                        <?php } else {?>
                            其他类型
                        <?php } ?>
                    </p>
                </div>
                <div class="form-group">
                    <label>发票内容：</label>
                    <p><?php echo !empty($CmfSellplanmain['fapiaoneirong'])?$CmfSellplanmain['fapiaoneirong']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>发票类型：</label>
                    <p><?php echo !empty($CmfSellplanmain['fapiaotype'])?$CmfSellplanmain['fapiaotype']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>发票编号：</label>
                    <p><?php echo !empty($CmfSellplanmain['fapiaono'])?$CmfSellplanmain['fapiaono']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>发货类型：</label>
                    <p><?php echo !empty($CmfSellplanmain['fahuotype'])?$CmfSellplanmain['fahuotype']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>发货单：</label>
                    <p><?php echo !empty($CmfSellplanmain['fahuodan'])?$CmfSellplanmain['fahuodan']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>发货运费：</label>
                    <p><?php echo !empty($CmfSellplanmain['fahuoyunfei'])?$CmfSellplanmain['fahuoyunfei']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>运费类型：</label>
                    <p><?php echo !empty($CmfSellplanmain['yunfeitype'])?$CmfSellplanmain['yunfeitype']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>零碎业务：</label>
                    <p><?php echo !empty($CmfSellplanmain['oddment'])?$CmfSellplanmain['oddment']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>集合：</label>
                    <p><?php echo !empty($CmfSellplanmain['integral'])?$CmfSellplanmain['integral']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>