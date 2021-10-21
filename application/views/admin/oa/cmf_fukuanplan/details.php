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
            <div class="panel-heading">付款计划详细内容<a href="<?php echo site_url('/oa/CmfFukuanplan/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfFukuanplan['id'])?$CmfFukuanplan['id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>供应商ID：</label>
                    <p><?php echo !empty($CmfFukuanplan['supplyid'])?$CmfFukuanplan['supplyid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>采购清单ID：</label>
                    <p><?php echo !empty($CmfFukuanplan['caigoubillid'])?$CmfFukuanplan['caigoubillid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>计划日期：</label>
                    <p><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfFukuanplan['plandate'])); ?></p>
                </div>
                <div class="form-group">
                    <label>qici：</label>
                    <p><?php echo !empty($CmfFukuanplan['qici'])?$CmfFukuanplan['qici']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>金额：</label>
                    <p><?php echo !empty($CmfFukuanplan['jine'])?$CmfFukuanplan['jine']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建人：</label>
                    <p><?php echo !empty($CmfFukuanplan['createman'])?$CmfFukuanplan['createman']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建时间：</label>
                    <p><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfFukuanplan['createtime'])); ?></p>
                </div>
                <div class="form-group">
                    <label>是否支付：</label>
                    <p>
                        <?php if ($CmfFukuanplan['ifpay'] == '1') {?>
                            是
                        <?php } elseif ($CmfFukuanplan['ifpay'] == '0') {?>
                            否
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