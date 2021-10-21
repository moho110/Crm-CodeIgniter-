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
            <div class="panel-heading">费用记录详细内容<a href="<?php echo site_url('/oa/CmfFeiyongrecord/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>清单ID：</label>
                    <p><?php echo !empty($CmfFeiyongrecord['billid'])?$CmfFeiyongrecord['billid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>类型ID：</label>
                    <p><?php echo !empty($CmfFeiyongrecord['typeid'])?$CmfFeiyongrecord['typeid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>金额：</label>
                    <p><?php echo !empty($CmfFeiyongrecord['jine'])?$CmfFeiyongrecord['jine']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>种类：</label>
                    <p><?php echo !empty($CmfFeiyongrecord['kind'])?$CmfFeiyongrecord['kind']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>帐户ID：</label>
                    <p><?php echo !empty($CmfFeiyongrecord['accountid'])?$CmfFeiyongrecord['accountid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产生日期：</label>
                    <p><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfFeiyongrecord['chanshengdate'])); ?></p>
                </div>
                <div class="form-group">
                    <label>创建人：</label>
                    <p><?php echo !empty($CmfFeiyongrecord['createman'])?$CmfFeiyongrecord['createman']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建时间：</label>
                    <p><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfFeiyongrecord['createtime'])); ?></p>
                </div>
                <div class="form-group">
                    <label>备注：</label>
                    <p><?php echo !empty($CmfFeiyongrecord['beizhu'])?$CmfFeiyongrecord['beizhu']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>