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
            <div class="panel-heading">工作人员合同详细内容<a href="<?php echo site_url('/oa/CmfHrmsWorkerHetong/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfHrmsWorkerHetong['ID'])?$CmfHrmsWorkerHetong['ID']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>工作ID：</label>
                    <p><?php echo !empty($CmfHrmsWorkerHetong['workId'])?$CmfHrmsWorkerHetong['workId']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>名称：</label>
                    <p><?php echo !empty($CmfHrmsWorkerHetong['name'])?$CmfHrmsWorkerHetong['name']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>所在部门：</label>
                    <p><?php echo !empty($CmfHrmsWorkerHetong['inDepartment'])?$CmfHrmsWorkerHetong['inDepartment']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>登陆时间：</label>
                    <p><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfHrmsWorkerHetong['signTime'])); ?></p>
                </div>
                <div class="form-group">
                    <label>结束时间：</label>
                    <p><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfHrmsWorkerHetong['endTime'])); ?></p>
                </div>
                <div class="form-group">
                    <label>工作年限：</label>
                    <p><?php echo !empty($CmfHrmsWorkerHetong['workedYear'])?$CmfHrmsWorkerHetong['workedYear']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建人：</label>
                    <p><?php echo !empty($CmfHrmsWorkerHetong['creator'])?$CmfHrmsWorkerHetong['creator']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建时间：</label>
                    <p><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfHrmsWorkerHetong['createTime'])); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>