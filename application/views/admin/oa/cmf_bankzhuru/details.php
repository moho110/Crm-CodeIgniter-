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
            <div class="panel-heading">银行详细内容<a href="<?php echo site_url('/oa/CmfBankzhuru/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>清单ID:</label>
                    <p><?php echo !empty($CmfBankzhuru['billid'])?$CmfBankzhuru['billid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>帐户ID：</label>
                    <p><?php echo !empty($CmfBankzhuru['accountid：'])?$CmfBankzhuru['accountid：']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>金额：</label>
                    <p><?php echo !empty($CmfBankzhuru['jine'])?$CmfBankzhuru['jine']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>用户ID：</label>
                    <p><?php echo !empty($CmfBankzhuru['userid'])?$CmfBankzhuru['userid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>操作时间：</label>
                    <p><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfBankzhuru['opertime'])); ?></p>
                </div>
                <div class="form-group">
                    <label>输入输出类型：</label>
                    <p>
                        <?php if ($CmfBankzhuru['inouttype'] == '1') {?>
                            输入
                        <?php } elseif ($CmfBankzhuru['inouttype'] == '0') {?>
                            输出
                        <?php } else {?>
                            其他类型
                        <?php } ?>
                    </p>
                </div>
                <div class="form-group">
                    <label>备注：</label>
                    <p><?php echo !empty($CmfBankzhuru['memo'])?$CmfBankzhuru['memo']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>