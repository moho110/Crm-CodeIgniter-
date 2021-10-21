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
            <div class="panel-heading">证照详细内容<a href="<?php echo site_url('/oa/CmfCertificate/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfCertificate['ROWID'])?$CmfCertificate['ROWID']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>用户ID：</label>
                    <p><?php echo !empty($CmfCertificate['user_id'])?$CmfCertificate['user_id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>供应商名称：</label>
                    <p><?php echo $CmfCertificate['supplyname']; ?></p>
                </div>
                <div class="form-group">
                    <label>证照类型：</label>
                    <p>
                        <?php if ($CmfCertificate['certificatetype'] == '1') {?>
                            卫生许可证
                        <?php } elseif ($CmfCertificate['certificatetype'] == '2') {?>
                            企业营业执照
                        <?php } elseif ($CmfCertificate['certificatetype'] == '3') {?>
                            生产许可证
                        <?php } elseif ($CmfCertificate['certificatetype'] == '4') {?>
                            商标注册证
                        <?php } elseif ($CmfCertificate['certificatetype'] == '5') {?>
                            质量检测报告
                        <?php } elseif ($CmfCertificate['certificatetype'] == '6') {?>
                            免检证书
                        <?php } elseif ($CmfCertificate['certificatetype'] == '7') {?>
                            海关检疫检验报告书
                        <?php } elseif ($CmfCertificate['certificatetype'] == '8') {?>
                            委托书或授权书
                        <?php } else {?>
                            其他类型
                        <?php } ?>
                    </p>
                </div>
                <div class="form-group">
                    <label>证照编号：</label>
                    <p><?php echo !empty($CmfCertificate['certificateno'])?$CmfCertificate['certificateno']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>证照信息：</label>
                    <p><?php echo !empty($CmfCertificate['certificateinfo'])?$CmfCertificate['certificateinfo']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>开始日期：</label>
                    <p><?php echo date('Y年m月d日a h时',strtotime($CmfCertificate['fromdate'])); ?></p>
                </div>
                <div class="form-group">
                    <label>结束日期：</label>
                    <p><?php echo date('Y年m月d日a h时',strtotime($CmfCertificate['enddate'])); ?></p>
                </div>
                <div class="form-group">
                    <label>所属字符串：</label>
                    <p><?php echo !empty($CmfCertificate['explianstr'])?$CmfCertificate['explianstr']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>用户标识：</label>
                    <p>
                        <?php if ($CmfCertificate['user_flag'] == '1') {?>
                            保留
                        <?php } elseif ($CmfCertificate['user_flag'] == '0') {?>
                            删除
                        <?php } else {?>
                            其他类型
                        <?php } ?>
                    </p>
                </div>
                <div class="form-group">
                    <label>文件地址：</label>
                    <p><?php echo !empty($CmfCertificate['fileaddress'])?$CmfCertificate['fileaddress']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>