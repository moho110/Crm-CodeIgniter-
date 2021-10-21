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
            <div class="panel-heading">收票记录详细内容<a href="<?php echo site_url('/oa/CmfShoupiaorecord/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfShoupiaorecord['id'])?$CmfShoupiaorecord['id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>供应商ID：</label>
                    <p><?php echo !empty($CmfShoupiaorecord['supplyid'])?$CmfShoupiaorecord['supplyid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>采购清单ID：</label>
                    <p><?php echo !empty($CmfShoupiaorecord['caigoubillid'])?$CmfShoupiaorecord['caigoubillid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>开票内容：</label>
                    <p><?php echo !empty($CmfShoupiaorecord['kaipiaoneirong'])?$CmfShoupiaorecord['kaipiaoneirong']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>票据类型：</label>
                    <p>
                        <?php if ($CmfShoupiaorecord['piaojutype'] == '1') {?>
                            汇票
                        <?php } elseif ($CmfShoupiaorecord['piaojutype'] == '2') {?>
                            本票
                        <?php } elseif ($CmfShoupiaorecord['piaojutype'] == '3') {?>
                            支票
                        <?php } elseif ($CmfShoupiaorecord['piaojutype'] == '4') {?>
                            存单
                        <?php } else {?>
                            其他类型
                        <?php } ?>
                    </p>
                </div>
                <div class="form-group">
                    <label>票据金额：</label>
                    <p><?php echo !empty($CmfShoupiaorecord['piaojujine'])?$CmfShoupiaorecord['piaojujine']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>发票编号：</label>
                    <p><?php echo !empty($CmfShoupiaorecord['fapiaono'])?$CmfShoupiaorecord['fapiaono']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>开票日期：</label>
                    <p><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfShoupiaorecord['kaipiaodate'])); ?></p>
                </div>
                <div class="form-group">
                    <label>QICI：</label>
                    <p><?php echo !empty($CmfShoupiaorecord['qici'])?$CmfShoupiaorecord['qici']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>开票人：</label>
                    <p><?php echo !empty($CmfShoupiaorecord['kaipiaoren'])?$CmfShoupiaorecord['kaipiaoren']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>是否汇款：</label>
                    <p>
                        <?php if ($CmfShoupiaorecord['ifhuikuan'] == '1') {?>
                            是
                        <?php } elseif ($CmfShoupiaorecord['ifhuikuan'] == '0') {?>
                            否
                        <?php } else {?>
                            其他类型
                        <?php } ?>
                    </p>
                </div>
                <div class="form-group">
                    <label>汇款ID：</label>
                    <p><?php echo !empty($CmfShoupiaorecord['huikuanid'])?$CmfShoupiaorecord['huikuanid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>备注：</label>
                    <p><?php echo !empty($CmfShoupiaorecord['beizhu'])?$CmfShoupiaorecord['beizhu']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建时间：</label>
                    <p><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfShoupiaorecord['createtime'])); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>