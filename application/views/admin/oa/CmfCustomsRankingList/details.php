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
            <div class="panel-heading">客户排行详细内容 <a href="<?php echo site_url('/oa/CmfCustomsRankingList/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfCustomsRankingList['id'])?$CmfCustomsRankingList['id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>供应商名称：</label>
                    <p><?php echo !empty($CmfCustomsRankingList['supplyname'])?$CmfCustomsRankingList['supplyname']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>电话号码：</label>
                    <p><?php echo !empty($CmfCustomsRankingList['phone'])?$CmfCustomsRankingList['phone']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>传真号码：</label>
                    <p><?php echo !empty($CmfCustomsRankingList['fax'])?$CmfCustomsRankingList['fax']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>电子邮件：</label>
                    <p><?php echo !empty($CmfCustomsRankingList['email'])?$CmfCustomsRankingList['email']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>主题：</label>
                    <p><?php echo !empty($CmfCustomsRankingList['zhuti'])?$CmfCustomsRankingList['zhuti']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>汇款金额：</label>
                    <p><?php echo !empty($CmfCustomsRankingList['huikuanjine'])?$CmfCustomsRankingList['huikuanjine']:''; ?></p>
                    </p>
                </div>
                <div class="form-group">
                    <label>发货金额：</label>
                    <p><?php echo !empty($CmfCustomsRankingList['fahuojine'])?$CmfCustomsRankingList['fahuojine']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>采购计划编号：</label>
                    <p><?php echo !empty($CmfCustomsRankingList['sellplanno'])?$CmfCustomsRankingList['sellplanno']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>支付类型：</label>
                    <p>
                        <?php if ($CmfCustomsRankingList['paytype'] == '1') {?>
                            微信支付
                        <?php } elseif ($CmfCustomsRankingList['paytype'] == '2') {?>
                            支付宝
                        <?php } elseif ($CmfCustomsRankingList['paytype'] == '3') {?>
                            现金支付
                        <?php } elseif ($CmfCustomsRankingList['paytype'] == '4') {?>
                            信用卡
                        <?php } elseif ($CmfCustomsRankingList['paytype'] == '5') {?>
                            借记卡
                        <?php } elseif ($CmfCustomsRankingList['paytype'] == '6') {?>
                            线下支付
                        <?php } else {?>
                            其他类型
                        <?php } ?>
                    </p>
                </div>
                <div class="form-group">
                    <label>开票金额：</label>
                    <p><?php echo !empty($CmfCustomsRankingList['kaipiaojine'])?$CmfCustomsRankingList['kaipiaojine']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>