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
            <div class="panel-heading">工作人员证照详细内容<a href="<?php echo site_url('/oa/CmfHrmsWorkerZhengzhao/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfHrmsWorkerZhengzhao['ID'])?$CmfHrmsWorkerZhengzhao['ID']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>工作ID：</label>
                    <p><?php echo !empty($CmfHrmsWorkerZhengzhao['workId'])?$CmfHrmsWorkerZhengzhao['workId']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>名称：</label>
                    <p><?php echo !empty($CmfHrmsWorkerZhengzhao['name'])?$CmfHrmsWorkerZhengzhao['name']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>所在部门：</label>
                    <p><?php echo !empty($CmfHrmsWorkerZhengzhao['inDepartment'])?$CmfHrmsWorkerZhengzhao['inDepartment']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>照片：</label>
                    <p><?php echo !empty($CmfHrmsWorkerZhengzhao['photo'])?$CmfHrmsWorkerZhengzhao['photo']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>认证类型：</label>
                    <p><?php echo !empty($CmfHrmsWorkerZhengzhao['certificationType'])?$CmfHrmsWorkerZhengzhao['certificationType']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>认证名称：</label>
                    <p><?php echo !empty($CmfHrmsWorkerZhengzhao['certificationName'])?$CmfHrmsWorkerZhengzhao['certificationName']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>认证扫描：</label>
                    <p><?php echo !empty($CmfHrmsWorkerZhengzhao['certificationScan'])?$CmfHrmsWorkerZhengzhao['certificationScan']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>奖赏时间：</label>
                    <p><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfHrmsWorkerZhengzhao['prizeTime'])); ?></p>
                </div>
                <div class="form-group">
                    <label>机构：</label>
                    <p><?php echo !empty($CmfHrmsWorkerZhengzhao['agency'])?$CmfHrmsWorkerZhengzhao['agency']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建人：</label>
                    <p><?php echo !empty($CmfHrmsWorkerZhengzhao['creator'])?$CmfHrmsWorkerZhengzhao['creator']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建时间：</label>
                    <p><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfHrmsWorkerZhengzhao['createTime'])); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>