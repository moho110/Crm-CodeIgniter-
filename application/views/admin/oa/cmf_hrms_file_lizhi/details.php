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
            <div class="panel-heading">人力离职档案详细内容<a href="<?php echo site_url('/oa/CmfHrmsFileLizhi/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfHrmsFileLizhi['ID'])?$CmfHrmsFileLizhi['ID']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>工作ID：</label>
                    <p><?php echo !empty($CmfHrmsFileLizhi['workId'])?$CmfHrmsFileLizhi['workId']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>名称：</label>
                    <p><?php echo !empty($CmfHrmsFileLizhi['name'])?$CmfHrmsFileLizhi['name']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>所在部门：</label>
                    <p><?php echo !empty($CmfHrmsFileLizhi['inDepartment'])?$CmfHrmsFileLizhi['inDepartment']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>性别：</label>
                    <p>
                        <?php if ($CmfHrmsFileLizhi['sex'] == '1') {?>
                            男
                        <?php } elseif ($CmfHrmsFileLizhi['sex'] == '0') {?>
                            女
                        <?php } else {?>
                            其他类型
                        <?php } ?>
                    </p>
                </div>
                <div class="form-group">
                    <label>生日：</label>
                    <p><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfHrmsFileLizhi['birthday'])); ?></p>
                </div>
                <div class="form-group">
                    <label>电话号码：</label>
                    <p><?php echo !empty($CmfHrmsFileLizhi['telephone'])?$CmfHrmsFileLizhi['telephone']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>学习经历：</label>
                    <p><?php echo !empty($CmfHrmsFileLizhi['studyExp'])?$CmfHrmsFileLizhi['studyExp']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>国籍：</label>
                    <p><?php echo !empty($CmfHrmsFileLizhi['national'])?$CmfHrmsFileLizhi['national']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>备注：</label>
                    <p><?php echo !empty($CmfHrmsFileLizhi['memo'])?$CmfHrmsFileLizhi['memo']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>离职日期：</label>
                    <p><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfHrmsFileLizhi['quitDate'])); ?></p>
                </div>
                <div class="form-group">
                    <label>创建人：</label>
                    <p><?php echo !empty($CmfHrmsFileLizhi['creator'])?$CmfHrmsFileLizhi['creator']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建时间：</label>
                    <p><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfHrmsFileLizhi['createTime'])); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>