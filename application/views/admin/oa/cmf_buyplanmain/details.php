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
            <div class="panel-heading">采购计划详细内容<a href="<?php echo site_url('/oa/CmfBuyplanmain/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>清单ID:</label>
                    <p><?php echo !empty($CmfBuyplanmain['billid'])?$CmfBuyplanmain['billid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>主题：</label>
                    <p><?php echo !empty($CmfBuyplanmain['zhuti'])?$CmfBuyplanmain['zhuti']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>供应商ID：</label>
                    <p><?php echo !empty($CmfBuyplanmain['supplyid'])?$CmfBuyplanmain['supplyid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>联系人：</label>
                    <p><?php echo !empty($CmfBuyplanmain['linkman'])?$CmfBuyplanmain['linkman']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>采购日期：</label>
                    <p><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfBuyplanmain['caigoudate'])); ?></p>
                </div>
                <div class="form-group">
                    <label>库存ID：</label>
                    <p><?php echo !empty($CmfBuyplanmain['storeid'])?$CmfBuyplanmain['storeid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>到货日期：</label>
                    <p><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfBuyplanmain['daohuodate'])); ?></p>
                </div>
                <div class="form-group">
                    <label>单号：</label>
                    <p><?php echo !empty($CmfBuyplanmain['danhao'])?$CmfBuyplanmain['danhao']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建人：</label>
                    <p><?php echo !empty($CmfBuyplanmain['createman'])?$CmfBuyplanmain['createman']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建时间：</label>
                    <p><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfBuyplanmain['createtime'])); ?></p>
                </div>
                <div class="form-group">
                    <label>总金额：</label>
                    <p><?php echo !empty($CmfBuyplanmain['totalmoney'])?$CmfBuyplanmain['totalmoney']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>关联订单：</label>
                    <p><?php echo !empty($CmfBuyplanmain['guanliandingdan'])?$CmfBuyplanmain['guanliandingdan']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>关联客户：</label>
                    <p><?php echo !empty($CmfBuyplanmain['guanliankehu'])?$CmfBuyplanmain['guanliankehu']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>备注：</label>
                    <p><?php echo !empty($CmfBuyplanmain['beizhu'])?$CmfBuyplanmain['beizhu']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>备用一：</label>
                    <p><?php echo !empty($CmfBuyplanmain['beiyong1'])?$CmfBuyplanmain['beiyong1']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>备用二：</label>
                    <p><?php echo !empty($CmfBuyplanmain['beiyong2'])?$CmfBuyplanmain['beiyong2']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>备用三：</label>
                    <p><?php echo !empty($CmfBuyplanmain['beiyong3'])?$CmfBuyplanmain['beiyong3']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>支付金额：</label>
                    <p><?php echo !empty($CmfBuyplanmain['paymoney'])?$CmfBuyplanmain['paymoney']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>状态：</label>
                    <p>
                        <?php if ($CmfBuyplanmain['state'] == '1') {?>
                            良好
                        <?php } elseif ($CmfBuyplanmain['state'] == '0') {?>
                            正常
                        <?php } else {?>
                            其他类型
                        <?php } ?>    
                    </p>
                </div>
                <div class="form-group">
                    <label>入库金额：</label>
                    <p><?php echo !empty($CmfBuyplanmain['rukumoney'])?$CmfBuyplanmain['rukumoney']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>收票金额：</label>
                    <p><?php echo !empty($CmfBuyplanmain['shoupiaomoney'])?$CmfBuyplanmain['shoupiaomoney']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>是否支付</label>
                    <p>
                        <?php if ($CmfBuyplanmain['ifpay'] == '1') {?>
                            是
                        <?php } elseif ($CmfBuyplanmain['ifpay'] == '0') {?>
                            否
                        <?php } else {?>
                            其他类型
                        <?php } ?>    
                    </p>
                </div>
                <div class="form-group">
                    <label>收票状态：</label>
                    <p>
                        <?php if ($CmfBuyplanmain['shoupiaostate'] == '1') {?>
                            已收
                        <?php } elseif ($CmfBuyplanmain['shoupiaostate'] == '0') {?>
                            未收
                        <?php } else {?>
                            其他类型
                        <?php } ?>    
                    </p>
                </div>
                <div class="form-group">
                    <label>零碎业务：</label>
                    <p><?php echo !empty($CmfBuyplanmain['oddment'])?$CmfBuyplanmain['oddment']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>用户标识：</label>
                    <p>
                        <?php if ($CmfBuyplanmain['user_flag'] == '1') {?>
                            保留
                        <?php } elseif ($CmfBuyplanmain['user_flag'] == '0') {?>
                            删除
                        <?php } else {?>
                            其他类型
                        <?php } ?>    
                    </p>
                </div>
                <div class="form-group">
                    <label>帐户ID：</label>
                    <p><?php echo !empty($CmfBuyplanmain['accountid'])?$CmfBuyplanmain['accountid']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>