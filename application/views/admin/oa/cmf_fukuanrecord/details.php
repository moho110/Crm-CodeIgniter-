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
            <div class="panel-heading">付款记录详细内容<a href="<?php echo site_url('/oa/CmfFukuanrecord/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfFukuanrecord['id'])?$CmfFukuanrecord['id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>供应商ID：</label>
                    <p><?php echo !empty($CmfFukuanrecord['supplyid'])?$CmfFukuanrecord['supplyid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>采购清单ID：</label>
                    <p><?php echo !empty($CmfFukuanrecord['caigoubillid'])?$CmfFukuanrecord['caigoubillid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>QICI：</label>
                    <p><?php echo !empty($CmfFukuanrecord['qici'])?$CmfFukuanrecord['qici']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>支付日期：</label>
                    <p><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfFukuanrecord['paydate'])); ?></p>

                </div>
                <div class="form-group">
                    <label>金额：</label>
                    <p><?php echo !empty($CmfFukuanrecord['jine'])?$CmfFukuanrecord['jine']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>是否开票：</label>
                    <p>
                        <?php if ($CmfFukuanrecord['ifkaipiao'] == '1') {?>
                            是
                        <?php } elseif ($CmfFukuanrecord['ifkaipiao'] == '0') {?>
                            否
                        <?php } else {?>
                            其他类型
                        <?php } ?>
                    </p>
                </div>
                <div class="form-group">
                    <label>帐户ID：</label>
                    <p><?php echo !empty($CmfFukuanrecord['accountid'])?$CmfFukuanrecord['belong']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>备注：</label>
                    <p><?php echo !empty($CmfFukuanrecord['beizhu'])?$CmfFukuanrecord['belong']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建人：</label>
                    <p><?php echo !empty($CmfFukuanrecord['createman'])?$CmfFukuanrecord['belong']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建时间：</label>
                    <p><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfFukuanrecord['createtime'])); ?></p>
                </div>
                <div class="form-group">
                    <label>关联清单ID：</label>
                    <p><?php echo !empty($CmfFukuanrecord['guanlianplanid'])?$CmfFukuanrecord['belong']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>零碎业务：</label>
                    <p><?php echo !empty($CmfFukuanrecord['oddment'])?$CmfFukuanrecord['belong']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>