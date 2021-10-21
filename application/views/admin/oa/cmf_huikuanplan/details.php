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
            <div class="panel-heading">银行详细内容<a href="<?php echo site_url('/oa/CmfHuikuanplan/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfHuikuanplan['id'])?$CmfHuikuanplan['id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>客户ID：</label>
                    <p><?php echo !empty($CmfHuikuanplan['customerid'])?$CmfHuikuanplan['customerid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>订单清单ID：</label>
                    <p><?php echo !empty($CmfHuikuanplan['dingdanbillid'])?$CmfHuikuanplan['dingdanbillid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>计划日期：</label>
                    <p><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfHuikuanplan['plandate'])); ?></p>
                </div>
                <div class="form-group">
                    <label>QICI：</label>
                    <p><?php echo !empty($CmfHuikuanplan['qici'])?$CmfHuikuanplan['qici']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>金额：</label>
                    <p><?php echo !empty($CmfHuikuanplan['jine'])?$CmfHuikuanplan['jine']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建人：</label>
                    <p><?php echo !empty($CmfHuikuanplan['createman'])?$CmfHuikuanplan['createman']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建时间：</label>
                    <p><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfHuikuanplan['createtime'])); ?></p>
                </div>
                <div class="form-group">
                    <label>是否支付：</label>
                    <p>
                        <?php if ($CmfHuikuanplan['ifpay'] == '1') {?>
                            是
                        <?php } elseif ($CmfHuikuanplan['ifpay'] == '0') {?>
                            否
                        <?php } else {?>
                            其他类型
                        <?php } ?>
                    </p>
                </div>
                <div class="form-group">
                    <label>清单类型：</label>
                    <p><?php echo !empty($CmfHuikuanplan['billtype'])?$CmfHuikuanplan['billtype']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>