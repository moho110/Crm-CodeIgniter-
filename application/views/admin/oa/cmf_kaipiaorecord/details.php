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
            <div class="panel-heading">开票记录详细内容<a href="<?php echo site_url('/oa/CmfKaipiaorecord/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfKaipiaorecord['id'])?$CmfKaipiaorecord['id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>客户ID：</label>
                    <p><?php echo !empty($CmfKaipiaorecord['customerid'])?$CmfKaipiaorecord['customerid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>订单清单ID：</label>
                    <p><?php echo !empty($CmfKaipiaorecord['dingdanbillid'])?$CmfKaipiaorecord['dingdanbillid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>开票内容：</label>
                    <p><?php echo !empty($CmfKaipiaorecord['kaipiaoneirong'])?$CmfKaipiaorecord['kaipiaoneirong']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>票据类型：</label>
                    <p>
                        <?php if ($CmfKaipiaorecord['piaojutype'] == '1') {?>
                            支票
                        <?php } elseif ($CmfKaipiaorecord['piaojutype'] == '2') {?>
                            本票
                        <?php } elseif ($CmfKaipiaorecord['piaojutype'] == '3') {?>
                            汇票
                        <?php } elseif ($CmfKaipiaorecord['piaojutype'] == '4') {?>
                            股票
                        <?php } else {?>
                            其他类型
                        <?php } ?>
                    </p>
                </div>
                <div class="form-group">
                    <label>票据金额：</label>
                    <p><?php echo !empty($CmfKaipiaorecord['piaojujine'])?$CmfKaipiaorecord['piaojujine']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>发票编号：</label>
                    <p><?php echo !empty($CmfKaipiaorecord['fapiaono'])?$CmfKaipiaorecord['fapiaono']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>开票日期：</label>
                    <p><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfKaipiaorecord['kaipiaodate'])); ?></p>
                </div>
                <div class="form-group">
                    <label>QICI：</label>
                    <p><?php echo !empty($CmfKaipiaorecord['qici'])?$CmfKaipiaorecord['qici']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>开票人：</label>
                    <p><?php echo !empty($CmfKaipiaorecord['kaipiaoren'])?$CmfKaipiaorecord['kaipiaoren']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>是否汇款：</label>
                    <p>
                        <?php if ($CmfKaipiaorecord['ifhuikuan'] == '1') {?>
                            是
                        <?php } elseif ($CmfKaipiaorecord['ifhuikuan'] == '0') {?>
                            否
                        <?php } else {?>
                            其他类型
                        <?php } ?>
                    </p>
                </div>
                <div class="form-group">
                    <label>汇款ID：</label>
                    <p><?php echo !empty($CmfKaipiaorecord['huikuanid'])?$CmfKaipiaorecord['huikuanid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>备注：</label>
                    <p><?php echo !empty($CmfKaipiaorecord['beizhu'])?$CmfKaipiaorecord['beizhu']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建时间：</label>
                    <p><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfKaipiaorecord['createtime'])); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>