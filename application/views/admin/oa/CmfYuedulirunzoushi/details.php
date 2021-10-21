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
            <div class="panel-heading">月度利润走势图明细内容 <a href="<?php echo site_url('/oa/CmfYuedulirunzoushi/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>清单编号ID：</label>
                    <p><?php echo !empty($CmfYuedulirunzoushi['billid'])?$CmfYuedulirunzoushi['billid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>主题：</label>
                    <p><?php echo !empty($CmfYuedulirunzoushi['zhuti'])?$CmfYuedulirunzoushi['zhuti']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>供应商ID：</label>
                    <p><?php echo !empty($CmfYuedulirunzoushi['supplyid'])?$CmfYuedulirunzoushi['supplyid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>机会ID：</label>
                    <p><?php echo !empty($CmfYuedulirunzoushi['chanceid'])?$CmfYuedulirunzoushi['chanceid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>销售计划编号：</label>
                    <p><?php echo !empty($CmfYuedulirunzoushi['sellplanno'])?$CmfYuedulirunzoushi['sellplanno']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>总金额：</label>
                    <p><?php echo !empty($CmfYuedulirunzoushi['totalmoney'])?$CmfYuedulirunzoushi['totalmoney']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>支付类型：</label>
                    <p>
                        <?php if ($CmfYuedulirunzoushi['paytype'] == '1') {?>
                            微信支付
                        <?php } elseif ($CmfYuedulirunzoushi['paytype'] == '2') {?>
                            支付宝
                        <?php } elseif ($CmfYuedulirunzoushi['paytype'] == '3') {?>
                            现金支付
                        <?php } elseif ($CmfYuedulirunzoushi['paytype'] == '4') {?>
                            信用卡
                        <?php } elseif ($CmfYuedulirunzoushi['paytype'] == '5') {?>
                            借记卡
                        <?php } elseif ($CmfYuedulirunzoushi['paytype'] == '6') {?>
                            线下支付
                        <?php } else {?>
                            其他类型
                        <?php } ?>
                    </p>
                </div>
                <div class="form-group">
                    <label>汇款金额：</label>
                    <p><?php echo !empty($CmfYuedulirunzoushi['huikuanjine'])?$CmfYuedulirunzoushi['huikuanjine']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>发货金额：</label>
                    <p><?php echo !empty($CmfYuedulirunzoushi['fahuojine'])?$CmfYuedulirunzoushi['fahuojine']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>开票金额：</label>
                    <p><?php echo !empty($CmfYuedulirunzoushi['kaipiaojine'])?$CmfYuedulirunzoushi['kaipiaojine']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>计划日期：</label>
                    <p><?php echo date('Y年m月d日', strtotime($CmfYuedulirunzoushi['plandate'])); ?></p>
                </div>
                <div class="form-group">
                    <label>签约人：</label>
                    <p><?php echo !empty($CmfYuedulirunzoushi['qianyueren'])?$CmfYuedulirunzoushi['qianyueren']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>用户标识：</label>
                    <p>
                        <?php if ($CmfYuedulirunzoushi['user_flag'] == '1') {?>
                            保留
                        <?php } elseif ($CmfYuedulirunzoushi['user_flag'] == '0') {?>
                            删除
                        <?php } else {?>
                            其他类型
                        <?php }?>    

                    </p>
                </div>
                <div class="form-group">
                    <label>发货状态：</label>
                    <p>
                        <?php if ($CmfYuedulirunzoushi['fahuostate'] == '1') {?>
                            保留
                        <?php } elseif ($CmfYuedulirunzoushi['fahuostate'] == '0') {?>
                            删除
                        <?php } else {?>
                            其他类型
                        <?php }?>
                    </p>
                </div>
                <div class="form-group">
                    <label>联系人：</label>
                    <p><?php echo !empty($CmfYuedulirunzoushi['linkman'])?$CmfYuedulirunzoushi['linkman']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>移动电话：</label>
                    <p><?php echo !empty($CmfYuedulirunzoushi['mobile'])?$CmfYuedulirunzoushi['mobile']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建时间：</label>
                    <?php echo date('Y年m月d日d时', strtotime($CmfYuedulirunzoushi['createtime'])); ?>
                </div>
                <div class="form-group">
                    <label>供应商名称：</label>
                    <p><?php echo !empty($CmfYuedulirunzoushi['supplyname'])?$CmfYuedulirunzoushi['supplyname']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>机会ID：</label>
                    <p><?php echo !empty($CmfYuedulirunzoushi['chanceId'])?$CmfYuedulirunzoushi['chanceId']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>机会主题：</label>
                    <p><?php echo !empty($CmfYuedulirunzoushi['chanceTheme'])?$CmfYuedulirunzoushi['chanceTheme']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品名称：</label>
                    <p><?php echo !empty($CmfYuedulirunzoushi['prodname'])?$CmfYuedulirunzoushi['prodname']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品规格：</label>
                    <p><?php echo !empty($CmfYuedulirunzoushi['prodguige'])?$CmfYuedulirunzoushi['prodguige']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品型号：</label>
                    <p><?php echo !empty($CmfYuedulirunzoushi['prodxinghao'])?$CmfYuedulirunzoushi['prodxinghao']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品单位：</label>
                    <p><?php echo !empty($CmfYuedulirunzoushi['proddanwei'])?$CmfYuedulirunzoushi['proddanwei']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品价格：</label>
                    <p><?php echo !empty($CmfYuedulirunzoushi['price'])?$CmfYuedulirunzoushi['price']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品折扣：</label>
                    <p><?php echo !empty($CmfYuedulirunzoushi['zhekou'])?$CmfYuedulirunzoushi['zhekou']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品数量：</label>
                    <p><?php echo !empty($CmfYuedulirunzoushi['num'])?$CmfYuedulirunzoushi['num']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>