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
            <div class="panel-heading">采购计划明细详细内容<a href="<?php echo site_url('/oa/CmfBuyplanmainDetail/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>ID:</label>
                    <p><?php echo !empty($CmfBuyplanmainDetail['id'])?$CmfBuyplanmainDetail['id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品ID：</label>
                    <p><?php echo !empty($CmfBuyplanmainDetail['prodid'])?$CmfBuyplanmainDetail['prodid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品名称：</label>
                    <p><?php echo !empty($CmfBuyplanmainDetail['prodname'])?$CmfBuyplanmainDetail['prodname']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品规格：</label>
                    <p><?php echo !empty($CmfBuyplanmainDetail['prodguige'])?$CmfBuyplanmainDetail['prodguige']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品型号：</label>
                    <p><?php echo !empty($CmfBuyplanmainDetail['prodxinghao'])?$CmfBuyplanmainDetail['prodxinghao']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品单位：</label>
                    <p><?php echo !empty($CmfBuyplanmainDetail['proddanwei'])?$CmfBuyplanmainDetail['proddanwei']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品价格：</label>
                    <p><?php echo !empty($CmfBuyplanmainDetail['price'])?$CmfBuyplanmainDetail['price']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品折扣：</label>
                    <p><?php echo !empty($CmfBuyplanmainDetail['zhekou'])?$CmfBuyplanmainDetail['zhekou']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品数量：</label>
                    <p><?php echo !empty($CmfBuyplanmainDetail['num'])?$CmfBuyplanmainDetail['num']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品备注：</label>
                    <p><?php echo !empty($CmfBuyplanmainDetail['beizhu'])?$CmfBuyplanmainDetail['beizhu']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品主ID：</label>
                    <p><?php echo !empty($CmfBuyplanmainDetail['mainrowid'])?$CmfBuyplanmainDetail['mainrowid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>最近数量：</label>
                    <p><?php echo !empty($CmfBuyplanmainDetail['recnum'])?$CmfBuyplanmainDetail['recnum']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品金额：</label>
                    <p><?php echo !empty($CmfBuyplanmainDetail['jine'])?$CmfBuyplanmainDetail['jine']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>过往产品ID：</label>
                    <p><?php echo !empty($CmfBuyplanmainDetail['oldprodid'])?$CmfBuyplanmainDetail['oldprodid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>最终价格：</label>
                    <p><?php echo !empty($CmfBuyplanmainDetail['lastprice'])?$CmfBuyplanmainDetail['lastprice']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>操作类型：</label>
                    <p>
                        <?php if ($CmfBuyplanmainDetail['opertype'] == '1') {?>
                            保留
                        <?php } elseif ($CmfBuyplanmainDetail['opertype'] == '0') {?>
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