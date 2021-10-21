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
            <div class="panel-heading">出库详细内容<a href="<?php echo site_url('/oa/CmfStockoutmain/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>清单ID：</label>
                    <p><?php echo !empty($CmfStockoutmain['billid'])?$CmfStockoutmain['billid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>主题：</label>
                    <p><?php echo !empty($CmfStockoutmain['zhuti'])?$CmfStockoutmain['zhuti']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>仓库ID：</label>
                    <p><?php echo !empty($CmfStockoutmain['storeid'])?$CmfStockoutmain['storeid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建人：</label>
                    <p><?php echo !empty($CmfStockoutmain['createman'])?$CmfStockoutmain['createman']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建时间：</label>
                    <p><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfStockoutmain['createtime'])); ?></p>
                </div>
                <div class="form-group">
                    <label>状态：</label>
                    <p>
                        <?php if ($CmfStockoutmain['state'] == '1') {?>
                            良好
                        <?php } elseif ($CmfStockoutmain['state'] == '0') {?>
                            一般
                        <?php } else {?>
                            其他类型
                        <?php } ?>
                    </p>
                </div>
                <div class="form-group">
                    <label>总数量：</label>
                    <p><?php echo !empty($CmfStockoutmain['totalnum'])?$CmfStockoutmain['totalnum']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>总金额：</label>
                    <p><?php echo !empty($CmfStockoutmain['totalmoney'])?$CmfStockoutmain['totalmoney']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>订单清单ID：</label>
                    <p><?php echo !empty($CmfStockoutmain['dingdanbillid'])?$CmfStockoutmain['dingdanbillid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>出库日期：</label>
                    <p><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfStockoutmain['outdate'])); ?></p>
                </div>
                </div>
                <div class="form-group">
                    <label>出库仓库审核：</label>
                    <p>
                        <?php if ($CmfStockoutmain['outstoreshenhe'] == '1') {?>
                            已审核
                        <?php } elseif ($CmfStockoutmain['outstoreshenhe'] == '0') {?>
                            未审核
                        <?php } else {?>
                            其他类型
                        <?php } ?>
                    </p>
                </div>
                <div class="form-group">
                    <label>备注：</label>
                    <p><?php echo !empty($CmfStockoutmain['memo'])?$CmfStockoutmain['memo']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>出库类型：</label>
                    <p><?php echo !empty($CmfStockoutmain['outtype'])?$CmfStockoutmain['outtype']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>