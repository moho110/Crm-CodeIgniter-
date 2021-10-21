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
            <div class="panel-heading">预收款记录详细内容 <a href="<?php echo site_url('/oa/CmfAccesspreshou/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>id:</label>
                    <p><?php echo !empty($CmfAccesspreshou['id'])?$CmfAccesspreshou['id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>客呢ID：</label>
                    <p><?php echo !empty($CmfAccesspreshou['customerid'])?$CmfAccesspreshou['customerid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>联系人：</label>
                    <p><?php echo !empty($CmfAccesspreshou['linkman'])?$CmfAccesspreshou['linkman']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>预支出：</label>
                    <p><?php echo !empty($CmfAccesspreshou['curchuzhi'])?$CmfAccesspreshou['curchuzhi']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>帐户ID：</label>
                    <p><?php echo !empty($CmfAccesspreshou['accountid'])?$CmfAccesspreshou['accountid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>金额：</label>
                    <p><?php echo !empty($CmfAccesspreshou['jine'])?$CmfAccesspreshou['jine']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>操作类型：</label>
                    <p>
                        <?php if ($CmfAccesspreshou['opertype'] == '1') {?>
                            是
                        <?php } elseif ($CmfAccesspreshou['opertype'] == '0') {?>
                            否
                        <?php } else {?>
                            其他类型
                        <?php } ?>
                    </p>
                </div>
                <div class="form-group">
                    <label>关联清单ID：</label>
                    <p><?php echo !empty($CmfAccesspreshou['guanlianbillid'])?$CmfAccesspreshou['guanlianbillid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建人：</label>
                    <p><?php echo !empty($CmfAccesspreshou['createman'])?$CmfAccesspreshou['createman']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建时间：</label>
                    <p><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfAccesspreshou['createtime'])); ?></p>
                </div>
                <div class="form-group">
                    <label>备注：</label>
                    <p><?php echo !empty($CmfAccesspreshou['beizhu'])?$CmfAccesspreshou['beizhu']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>清单部门ID：</label>
                    <p><?php echo !empty($CmfAccesspreshou['billdeptid'])?$CmfAccesspreshou['billdeptid']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>