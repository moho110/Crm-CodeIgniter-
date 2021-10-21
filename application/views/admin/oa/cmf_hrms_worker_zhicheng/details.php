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
            <div class="panel-heading">工作人员职称详细内容<a href="<?php echo site_url('/oa/CmfHrmsWorkerZhicheng/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfHrmsWorkerZhicheng['ID'])?$CmfHrmsWorkerZhicheng['ID']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>工作ID：</label>
                    <p><?php echo !empty($CmfHrmsWorkerZhicheng['workId'])?$CmfHrmsWorkerZhicheng['workId']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>名称：</label>
                    <p><?php echo !empty($CmfHrmsWorkerZhicheng['name'])?$CmfHrmsWorkerZhicheng['name']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>职员名称：</label>
                    <p><?php echo !empty($CmfHrmsWorkerZhicheng['staffName'])?$CmfHrmsWorkerZhicheng['staffName']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>获取时间：</label>
                    <p><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfHrmsWorkerZhicheng['getTime'])); ?></p>
                </div>
                <div class="form-group">
                    <label>机构：</label>
                    <p><?php echo !empty($CmfHrmsWorkerZhicheng['agency'])?$CmfHrmsWorkerZhicheng['agency']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>所在部门：</label>
                    <p><?php echo !empty($CmfHrmsWorkerZhicheng['inDepartment'])?$CmfHrmsWorkerZhicheng['inDepartment']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建人：</label>
                    <p><?php echo !empty($CmfHrmsWorkerZhicheng['creator'])?$CmfHrmsWorkerZhicheng['creator']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建时间：</label>
                    <p><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfHrmsWorkerZhicheng['createTime'])); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>