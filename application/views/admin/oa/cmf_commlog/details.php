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
            <div class="panel-heading">日志详细内容<a href="<?php echo site_url('/oa/CmfCommlog/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfCommlog['ROWID'])?$CmfCommlog['ROWID']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>系统用户：</label>
                    <p><?php echo !empty($CmfCommlog['sysuser'])?$CmfCommlog['sysuser']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>用户ID：</label>
                    <p><?php echo !empty($CmfCommlog['user_id'])?$CmfCommlog['user_id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>客户ID：</label>
                    <p><?php echo !empty($CmfCommlog['customerid'])?$CmfCommlog['customerid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>日志日期：</label>
                    <p><?php echo !empty($CmfCommlog['commdate'])?$CmfCommlog['commdate']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>联系人ID：</label>
                    <p><?php echo !empty($CmfCommlog['linkmanid'])?$CmfCommlog['linkmanid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>项目：</label>
                    <p><?php echo !empty($CmfCommlog['project'])?$CmfCommlog['project']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品ID：</label>
                    <p><?php echo !empty($CmfCommlog['productid'])?$CmfCommlog['productid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>项目简介：</label>
                    <p><?php echo !empty($CmfCommlog['projectphase'])?$CmfCommlog['projectphase']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>是否竞争：</label>
                    <p>
                        <?php if ($CmfCommlog['iscompete'] == '1') {?>
                            竞争
                        <?php } elseif ($CmfCommlog['iscompete'] == '0') {?>
                            不竞争
                    </p>
                </div>
                <div class="form-group">
                    <label>日志信息：</label>
                    <p><?php echo !empty($CmfCommlog['comminfo'])?$CmfCommlog['comminfo']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>监视器信息：</label>
                    <p><?php echo !empty($CmfCommlog['moniterinfo'])?$CmfCommlog['moniterinfo']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>监视人：</label>
                    <p><?php echo !empty($CmfCommlog['moniterman'])?$CmfCommlog['moniterman']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>用户标识：</label>
                    <p>
                        <?php if ($CmfCommlog['user_flag'] == '1') {?>
                            保留
                        <?php } elseif ($CmfCommlog['user_flag'] == '0') {?>
                            删除
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>