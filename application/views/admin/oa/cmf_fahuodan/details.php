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
            <div class="panel-heading">发货单详细内容<a href="<?php echo site_url('/oa/CmfFahuodan/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>清单编号：</label>
                    <p><?php echo !empty($CmfFahuodan['billid'])?$CmfFahuodan['billid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>客户ID：</label>
                    <p><?php echo !empty($CmfFahuodan['customerid'])?$CmfFahuodan['customerid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>订单清单ID：</label>
                    <p><?php echo !empty($CmfFahuodan['dingdanbillid'])?$CmfFahuodan['dingdanbillid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>发货单：</label>
                    <p><?php echo !empty($CmfFahuodan['fahuodan'])?$CmfFahuodan['fahuodan']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>发货人：</label>
                    <p><?php echo !empty($CmfFahuodan['fahuoren'])?$CmfFahuodan['fahuoren']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>发货日期：</label>
                    <p><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfFahuodan['fahuodate'])); ?></p>
                </div>
                <div class="form-group">
                    <label>收货人：</label>
                    <p><?php echo !empty($CmfFahuodan['shouhuoren'])?$CmfFahuodan['shouhuoren']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>电话号码：</label>
                    <p><?php echo !empty($CmfFahuodan['tel'])?$CmfFahuodan['tel']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>地址：</label>
                    <p><?php echo !empty($CmfFahuodan['address'])?$CmfFahuodan['address']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>邮政编码：</label>
                    <p><?php echo !empty($CmfFahuodan['mailcode'])?$CmfFahuodan['mailcode']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>发货类型：</label>
                    <p><?php echo !empty($CmfFahuodan['fahuotype'])?$CmfFahuodan['fahuotype']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>状态：</label>
                    <p>
                        <?php if ($CmfFahuodan['state'] == '1') {?>
                            良好
                        <?php } elseif ($CmfFahuodan['state'] == '0') {?>
                            一般
                        <?php } else {?>
                            其他类型
                        <?php } ?>
                    </p>
                </div>
                <div class="form-group">
                    <label>包裹：</label>
                    <p><?php echo !empty($CmfFahuodan['package'])?$CmfFahuodan['package']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>重量：</label>
                    <p><?php echo !empty($CmfFahuodan['weight'])?$CmfFahuodan['weight']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>运费：</label>
                    <p><?php echo !empty($CmfFahuodan['yunfei'])?$CmfFahuodan['yunfei']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>结算类型：</label>
                    <p><?php echo !empty($CmfFahuodan['jiesuantype'])?$CmfFahuodan['jiesuantype']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>备注：</label>
                    <p><?php echo !empty($CmfFahuodan['beizhu'])?$CmfFahuodan['beizhu']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>总数：</label>
                    <p><?php echo !empty($CmfFahuodan['totalnum'])?$CmfFahuodan['totalnum']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>总额：</label>
                    <p><?php echo !empty($CmfFahuodan['totalmoney'])?$CmfFahuodan['totalmoney']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>出库类型：</label>
                    <p><?php echo !empty($CmfFahuodan['outtype'])?$CmfFahuodan['outtype']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>