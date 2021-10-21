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
            <div class="panel-heading">汇款记录详细内容<a href="<?php echo site_url('/oa/CmfHuikuanrecord/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfHuikuanrecord['id'])?$CmfHuikuanrecord['id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>客户ID：</label>
                    <p><?php echo !empty($CmfHuikuanrecord['customerid'])?$CmfHuikuanrecord['customerid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>订单清单ID：</label>
                    <p><?php echo !empty($CmfHuikuanrecord['dingdanbillid'])?$CmfHuikuanrecord['dingdanbillid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>QICI：</label>
                    <p><?php echo !empty($CmfHuikuanrecord['qici'])?$CmfHuikuanrecord['qici']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>支付日期：</label>
                    <p><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfHuikuanrecord['paydate'])); ?></p>
                </div>
                <div class="form-group">
                    <label>金额：</label>
                    <p><?php echo !empty($CmfHuikuanrecord['jine'])?$CmfHuikuanrecord['jine']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>是否开票：</label>
                    <p>
                        <?php if ($CmfHuikuanrecord['ifkaipiao'] == '1') {?>
                            是
                        <?php } elseif ($CmfHuikuanrecord['ifkaipiao'] == '0') {?>
                            否
                        <?php } else {?>
                            其他类型
                        <?php } ?>
                    </p>
                </div>
                <div class="form-group">
                    <label>帐户ID：</label>
                    <p><?php echo !empty($CmfHuikuanrecord['accountid'])?$CmfHuikuanrecord['accountid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>备注：</label>
                    <p><?php echo !empty($CmfHuikuanrecord['beizhu'])?$CmfHuikuanrecord['beizhu']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建人：</label>
                    <p><?php echo !empty($CmfHuikuanrecord['createman'])?$CmfHuikuanrecord['createman']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建时间：</label>
                    <p><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfHuikuanrecord['createtime'])); ?></p>
                </div>
                <div class="form-group">
                    <label>关联计划ID：</label>
                    <p><?php echo !empty($CmfHuikuanrecord['guanlianplanid'])?$CmfHuikuanrecord['guanlianplanid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>零碎业务：</label>
                    <p><?php echo !empty($CmfHuikuanrecord['oddment'])?$CmfHuikuanrecord['oddment']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>