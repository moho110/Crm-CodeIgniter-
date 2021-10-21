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
            <div class="panel-heading">导购排行详细内容 <a href="<?php echo site_url('/oa/CmfSalsemanRankingList/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfSalsemanRankingList['id'])?$CmfSalsemanRankingList['id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>供应商名称：</label>
                    <p><?php echo !empty($CmfSalsemanRankingList['supplyname'])?$CmfSalsemanRankingList['supplyname']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>主题：</label>
                    <p><?php echo !empty($CmfSalsemanRankingList['zhuti'])?$CmfSalsemanRankingList['zhuti']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>供应商ID：</label>
                    <p><?php echo !empty($CmfSalsemanRankingList['supplyid'])?$CmfSalsemanRankingList['supplyid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>机会ID：</label>
                    <p><?php echo !empty($CmfSalsemanRankingList['chanceid'])?$CmfSalsemanRankingList['chanceid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>采购计划编号：</label>
                    <p><?php echo !empty($CmfSalsemanRankingList['sellplanno'])?$CmfSalsemanRankingList['sellplanno']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>支付类型：</label>
                    <p>
                        <?php if ($CmfSalsemanRankingList['paytype'] == '1') {?>
                            微信支付
                        <?php } elseif ($CmfSalsemanRankingList['paytype'] == '2') {?>
                            支付宝
                        <?php } elseif ($CmfSalsemanRankingList['paytype'] == '3') {?>
                            现金支付
                        <?php } elseif ($CmfSalsemanRankingList['paytype'] == '4') {?>
                            信用卡
                        <?php } elseif ($CmfSalsemanRankingList['paytype'] == '5') {?>
                            借记卡
                        <?php } elseif ($CmfSalsemanRankingList['paytype'] == '6') {?>
                            线下支付
                        <?php } else {?>
                            其他类型
                        <?php } ?>
                    </p>
                </div>
                <div class="form-group">
                    <label>用户ID：</label>
                    <p><?php echo !empty($CmfSalsemanRankingList['user_id'])?$CmfSalsemanRankingList['user_id']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>