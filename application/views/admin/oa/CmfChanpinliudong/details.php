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
            <div class="panel-heading">产品流动表明细内容 <a href="<?php echo site_url('/oa/CmfChanpinliudong/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>清单编号ID：</label>
                    <p><?php echo !empty($CmfChanpinliudong['billid'])?$CmfChanpinliudong['billid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>入库日期：</label>
                    <p><?php echo date("Y年m月d日d时",strtotime($CmfChanpinliudong['indate'])); ?></p>
                </div>
                <div class="form-group">
                    <label>入库审核：</label>
                    <p>
                        <?php if ($CmfChanpinliudong['instoreshenhe'] == '1') {?>
                            已审核
                        <?php } elseif ($CmfBuyplanmainDetail['instoreshenhe'] == '0') {?>
                            未审核
                        <?php } else {?>
                            其他类型
                        <?php }?>

                    </p>
                </div>
                <div class="form-group">
                    <label>入库类型：</label><p>
                        <?php if ($CmfChanpinliudong['intype'] == '1') {?>
                            保留
                        <?php } elseif ($CmfBuyplanmainDetail['intype'] == '0') {?>
                            删除
                        <?php } else {?>
                            其他类型
                        <?php }?>
                    </p>
                </div>
                <div class="form-group">
                    <label>产品名称：</label>
                    <p><?php echo !empty($CmfChanpinliudong['prodname'])?$CmfChanpinliudong['prodname']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品规格：</label>
                    <p><?php echo !empty($CmfChanpinliudong['prodguige'])?$CmfChanpinliudong['prodguige']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品价格：</label>
                    <p><?php echo !empty($CmfChanpinliudong['price'])?$CmfChanpinliudong['price']:''; ?></p>
                    </p>
                </div>
                <div class="form-group">
                    <label>出库日期：</label>
                    <p><?php echo date("Y年m月d日d时",strtotime($CmfChanpinliudong['outdate'])); ?></p>
                </div>
                <div class="form-group">
                    <label>产品利润：</label>
                    <p><?php echo !empty($CmfChanpinliudong['lirun'])?$CmfChanpinliudong['lirun']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品状态：</label>
                    <p><?php echo !empty($CmfChanpinliudong['state'])?$CmfChanpinliudong['state']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>过往产品ID：</label>
                    <p><?php echo !empty($CmfChanpinliudong['oldprodid'])?$CmfChanpinliudong['oldprodid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>操作类型：</label><p>
                        <?php if ($CmfChanpinliudong['opertype'] == '1') {?>
                            保留
                        <?php } elseif ($CmfBuyplanmainDetail['opertype'] == '0') {?>
                            删除
                        <?php } else {?>
                            其他类型
                        <?php }?>
                    </p>
                </div>
                <div class="form-group">
                    <label>出库审核：</label>
                    <p>
                        <?php if ($CmfChanpinliudong['outstoreshenhe'] == '1') {?>
                            已审核
                        <?php } elseif ($CmfBuyplanmainDetail['outstoreshenhe'] == '0') {?>
                            未审核
                        <?php } else {?>
                            其他类型
                        <?php }?>
                    </p>
                </div>
                <div class="form-group">
                    <label>产品金额：</label>
                    <p><?php echo !empty($CmfChanpinliudong['jine'])?$CmfChanpinliudong['jine']:''; ?> 元</p>
                </div>
                <div class="form-group">
                    <label>总金额：</label>
                    <p><?php echo !empty($CmfChanpinliudong['totalmoney'])?$CmfChanpinliudong['totalmoney']:''; ?> 元</p>
                </div>
                <div class="form-group">
                    <label>产品价格：</label>
                    <p><?php echo !empty($CmfChanpinliudong['price'])?$CmfChanpinliudong['price']:''; ?> 元</p>
                </div>
                <div class="form-group">
                    <label>产品ID：</label>
                    <p><?php echo !empty($CmfChanpinliudong['productid'])?$CmfChanpinliudong['productid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>销售价格：</label>
                    <p><?php echo !empty($CmfChanpinliudong['sellprice'])?$CmfChanpinliudong['sellprice']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>是否库存：</label><p>
                        <?php if ($CmfChanpinliudong['ifkucun'] == '1') {?>
                            库存
                        <?php } elseif ($CmfBuyplanmainDetail['ifkucun'] == '0') {?>
                            非库存
                        <?php } else {?>
                            其他类型
                        <?php }?>
                    </p>
                </div>
                <div class="form-group">
                    <label>产品名称：</label>
                    <p><?php echo !empty($CmfChanpinliudong['productname'])?$CmfChanpinliudong['productname']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>