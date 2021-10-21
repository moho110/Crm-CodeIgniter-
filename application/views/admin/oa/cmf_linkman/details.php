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
            <div class="panel-heading">联系人详细内容<a href="<?php echo site_url('/oa/CmfLinkman/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfLinkman['ROWID'])?$CmfLinkman['ROWID']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>联系人名称：</label>
                    <p><?php echo !empty($CmfLinkman['linkmanname'])?$CmfLinkman['linkmanname']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>联系人PY：</label>
                    <p><?php echo !empty($CmfLinkman['linkmanpy'])?$CmfLinkman['linkmanpy']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>性别：</label>
                    <p>
                        <?php if ($CmfLinkman['gender'] == '1') {?>
                            男
                        <?php } elseif ($CmfLinkman['gender'] == '0') {?>
                            女
                        <?php } else {?>
                            其他类型
                        <?php } ?>
                    </p>
                </div>
                <div class="form-group">
                    <label>电话号码：</label>
                    <p><?php echo !empty($CmfLinkman['phone'])?$CmfLinkman['phone']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>传真号码：</label>
                    <p><?php echo !empty($CmfLinkman['fax'])?$CmfLinkman['fax']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>电子邮件：</label>
                    <p><?php echo !empty($CmfLinkman['email'])?$CmfLinkman['email']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>邮政编码：</label>
                    <p><?php echo !empty($CmfLinkman['postcode'])?$CmfLinkman['postcode']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>备注：</label>
                    <p><?php echo !empty($CmfLinkman['mark'])?$CmfLinkman['mark']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>业务：</label>
                    <p><?php echo !empty($CmfLinkman['business'])?$CmfLinkman['business']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>业务expian：</label>
                    <p><?php echo !empty($CmfLinkman['businessexpian'])?$CmfLinkman['businessexpian']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>地址：</label>
                    <p><?php echo !empty($CmfLinkman['address'])?$CmfLinkman['address']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>用户标识：</label>
                    <p>
                        <?php if ($CmfLinkman['user_flag'] == '1') {?>
                            保留
                        <?php } elseif ($CmfLinkman['user_flag'] == '0') {?>
                            删除
                        <?php } else {?>
                            其他类型
                        <?php } ?>
                    </p>
                </div>
                <div class="form-group">
                    <label>用户ID：</label>
                    <p><?php echo !empty($CmfLinkman['user_id'])?$CmfLinkman['user_id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>供应商编号：</label>
                    <p><?php echo !empty($CmfLinkman['supplycn'])?$CmfLinkman['supplycn']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>客户ID：</label>
                    <p><?php echo !empty($CmfLinkman['customerid'])?$CmfLinkman['customerid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>移动电话：</label>
                    <p><?php echo !empty($CmfLinkman['mobile'])?$CmfLinkman['mobile']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>出生年月日：</label>
                    <p><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfCallchuli['birthday'])); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>