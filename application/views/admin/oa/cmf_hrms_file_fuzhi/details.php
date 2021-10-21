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
            <div class="panel-heading">人力复职档案详细内容<a href="<?php echo site_url('/oa/CmfHrmsFileFuzhi/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfHrmsFileFuzhi['ID'])?$CmfHrmsFileFuzhi['ID']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>工作ID：</label>
                    <p><?php echo !empty($CmfHrmsFileFuzhi['workId'])?$CmfHrmsFileFuzhi['workId']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>名称：</label>
                    <p><?php echo !empty($CmfHrmsFileFuzhi['name'])?$CmfHrmsFileFuzhi['name']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>所在部门：</label>
                    <p><?php echo !empty($CmfHrmsFileFuzhi['inDepartment'])?$CmfHrmsFileFuzhi['inDepartment']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>性别：</label>
                    <p>
                        <?php if ($CmfHrmsFileFuzhi['sex'] == '1') {?>
                            男
                        <?php } elseif ($CmfHrmsFileFuzhi['sex'] == '0') {?>
                            女
                        <?php } else {?>
                            其他类型
                        <?php } ?>
                    </p>
                </div>
                <div class="form-group">
                    <label>生日：</label>
                    <p><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfHrmsFileFuzhi['birthday'])); ?></p>
                </div>
                <div class="form-group">
                    <label>电话号码：</label>
                    <p><?php echo !empty($CmfHrmsFileFuzhi['telephone'])?$CmfHrmsFileFuzhi['telephone']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>学习经验：</label>
                    <p><?php echo !empty($CmfHrmsFileFuzhi['studyExp'])?$CmfHrmsFileFuzhi['studyExp']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>国籍：</label>
                    <p><?php echo !empty($CmfHrmsFileFuzhi['national'])?$CmfHrmsFileFuzhi['national']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>备注：</label>
                    <p><?php echo !empty($CmfHrmsFileFuzhi['memo'])?$CmfHrmsFileFuzhi['memo']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>复职日期：</label>
                    <p><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfHrmsFileFuzhi['recoverDate'])); ?></p>
                </div>
                <div class="form-group">
                    <label>创建人：</label>
                    <p><?php echo !empty($CmfHrmsFileFuzhi['creator'])?$CmfHrmsFileFuzhi['creator']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建时间：</label>
                    <p><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfHrmsFileFuzhi['createTime'])); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>