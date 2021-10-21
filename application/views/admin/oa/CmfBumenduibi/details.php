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
            <div class="panel-heading">销售日报详细内容 <a href="<?php echo site_url('/oa/CmfBumenduibi/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfBumenduibi['billid'])?$CmfBumenduibi['billid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>主题：</label>
                    <p><?php echo !empty($CmfBumenduibi['zhuti'])?$CmfBumenduibi['zhuti']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>销售计划编号：</label>
                    <p><?php echo !empty($CmfBumenduibi['sellplanno'])?$CmfBumenduibi['sellplanno']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>总金额：</label>
                    <p><?php echo !empty($CmfBumenduibi['totalmoney'])?$CmfBumenduibi['totalmoney']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>支付类型：</label>
                    <p>
                        <?php if ($CmfBumenduibi['paytype'] == '1') {?>
                            微信支付
                        <?php } elseif ($CmfBumenduibi['paytype'] == '2') {?>
                            支付宝
                        <?php } elseif ($CmfBumenduibi['paytype'] == '3') {?>
                            现金支付
                        <?php } elseif ($CmfBumenduibi['paytype'] == '4') {?>
                            信用卡
                        <?php } elseif ($CmfBumenduibi['paytype'] == '5') {?>
                            借记卡
                        <?php } elseif ($CmfBumenduibi['paytype'] == '6') {?>
                            线下支付
                        <?php } else {?>
                            其他类型
                        <?php } ?>
                    </p>
                </div>
                <div class="form-group">
                    <label>汇款金额：</label>
                    <p><?php echo !empty($CmfBumenduibi['huikuanjine'])?$CmfBumenduibi['huikuanjine']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>发货金额：</label>
                    <p><?php echo !empty($CmfBumenduibi['fahuojine'])?$CmfBumenduibi['fahuojine']:''; ?></p>
                    </p>
                </div>
                <div class="form-group">
                    <label>开票金额：</label>
                    <p><?php echo !empty($CmfBumenduibi['kaipiaojine'])?$CmfBumenduibi['kaipiaojine']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>计划日期：</label>
                    <p><?php echo !empty($CmfBumenduibi['plandate'])?$CmfBumenduibi['plandate']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>最晚发货日期：</label>
                    <p><?php echo !empty($CmfBumenduibi['zuiwanfahuodate'])?$CmfBumenduibi['zuiwanfahuodate']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>签约人：</label>
                    <p><?php echo !empty($CmfBumenduibi['qianyueren'])?$CmfBumenduibi['qianyueren']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>供应商联系人：</label>
                    <p><?php echo !empty($CmfBumenduibi['linkman'])?$CmfBumenduibi['linkman']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>部门名称：</label>
                    <p><?php echo !empty($CmfBumenduibi['DEPT_NAME'])?$CmfBumenduibi['DEPT_NAME']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>部门编号：</label>
                    <p><?php echo !empty($CmfBumenduibi['DEPT_NO'])?$CmfBumenduibi['DEPT_NO']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>