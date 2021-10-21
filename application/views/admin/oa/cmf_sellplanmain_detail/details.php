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
            <div class="panel-heading">采购计划明细详细内容<a href="<?php echo site_url('/oa/CmfSellplanmainDetail/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfSellplanmainDetail['id'])?$CmfSellplanmainDetail['id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品ID：</label>
                    <p><?php echo !empty($CmfSellplanmainDetail['prodid'])?$CmfSellplanmainDetail['prodid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品名称：</label>
                    <p><?php echo !empty($CmfSellplanmainDetail['prodname'])?$CmfSellplanmainDetail['prodname']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品规格：</label>
                    <p><?php echo !empty($CmfSellplanmainDetail['prodguige'])?$CmfSellplanmainDetail['prodguige']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品型号：</label>
                    <p><?php echo !empty($CmfSellplanmainDetail['prodxinghao'])?$CmfSellplanmainDetail['prodxinghao']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品单位：</label>
                    <p><?php echo !empty($CmfSellplanmainDetail['proddanwei'])?$CmfSellplanmainDetail['proddanwei']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品价格：</label>
                    <p><?php echo !empty($CmfSellplanmainDetail['price'])?$CmfSellplanmainDetail['price']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品折扣：</label>
                    <p><?php echo !empty($CmfSellplanmainDetail['zhekou'])?$CmfSellplanmainDetail['zhekou']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品数量：</label>
                    <p><?php echo !empty($CmfSellplanmainDetail['num'])?$CmfSellplanmainDetail['num']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品备注：</label>
                    <p><?php echo !empty($CmfSellplanmainDetail['beizhu'])?$CmfSellplanmainDetail['beizhu']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品主ID：</label>
                    <p><?php echo !empty($CmfSellplanmainDetail['mainrowid'])?$CmfSellplanmainDetail['mainrowid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品金额：</label>
                    <p><?php echo !empty($CmfSellplanmainDetail['jine'])?$CmfSellplanmainDetail['jine']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>出库数量：</label>
                    <p><?php echo !empty($CmfSellplanmainDetail['chukunum'])?$CmfSellplanmainDetail['chukunum']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>计划日期：</label>
                    <p><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfSellplanmainDetail['plandate'])); ?></p>
                </div>
                <div class="form-group">
                    <label>QICI：</label>
                    <p><?php echo !empty($CmfSellplanmainDetail['qici'])?$CmfSellplanmainDetail['qici']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>要求：</label>
                    <p><?php echo !empty($CmfSellplanmainDetail['yaoqiu'])?$CmfSellplanmainDetail['yaoqiu']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>是否提醒：</label>
                    <p>
                        <?php if ($CmfSellplanmainDetail['iftixing'] == '1') {?>
                            是
                        <?php } elseif ($CmfSellplanmainDetail['iftixing'] == '0') {?>
                            否
                        <?php } else {?>
                            其他类型
                        <?php } ?>
                    </p>
                </div>
                <div class="form-group">
                    <label>创建时间：</label>
                    <p><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfSellplanmainDetail['createtime'])); ?></p>
                </div>
                <div class="form-group">
                    <label>产品利润：</label>
                    <p><?php echo !empty($CmfSellplanmainDetail['lirun'])?$CmfSellplanmainDetail['lirun']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>过往产品ID：</label>
                    <p><?php echo !empty($CmfSellplanmainDetail['oldprodid'])?$CmfSellplanmainDetail['oldprodid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>操作类型：</label>
                    <p>
                        <?php if ($CmfSellplanmainDetail['opertype'] == '1') {?>
                            保留
                        <?php } elseif ($CmfSellplanmainDetail['opertype'] == '0') {?>
                            删除
                        <?php } else {?>
                            其他类型
                        <?php } ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>