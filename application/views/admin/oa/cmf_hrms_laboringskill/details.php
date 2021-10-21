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
            <div class="panel-heading">人力劳动技能详细内容<a href="<?php echo site_url('/oa/CmfHrmsLaboringskill/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfHrmsLaboringskill['Id'])?$CmfHrmsLaboringskill['Id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>工作ID：</label>
                    <p><?php echo !empty($CmfHrmsLaboringskill['workId'])?$CmfHrmsLaboringskill['workId']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>名称：</label>
                    <p><?php echo !empty($CmfHrmsLaboringskill['name'])?$CmfHrmsLaboringskill['name']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>所在部门：</label>
                    <p><?php echo !empty($CmfHrmsLaboringskill['inDepartment'])?$CmfHrmsLaboringskill['inDepartment']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>开始时间：</label>
                    <p><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfHrmsLaboringskill['startTime'])); ?></p>
                </div>
                <div class="form-group">
                    <label>结束时间：</label>
                    <p><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfHrmsLaboringskill['endTime'])); ?></p>
                </div>
                <div class="form-group">
                    <label>认证单位：</label>
                    <p><?php echo !empty($CmfHrmsLaboringskill['certifiationUnit'])?$CmfHrmsLaboringskill['certifiationUnit']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>认证部门：</label>
                    <p><?php echo !empty($CmfHrmsLaboringskill['certificationDep'])?$CmfHrmsLaboringskill['certificationDep']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>认证名称：</label>
                    <p><?php echo !empty($CmfHrmsLaboringskill['certificationName'])?$CmfHrmsLaboringskill['certificationName']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>证明人：</label>
                    <p><?php echo !empty($CmfHrmsLaboringskill['proveMan'])?$CmfHrmsLaboringskill['proveMan']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>备注：</label>
                    <p><?php echo !empty($CmfHrmsLaboringskill['memo'])?$CmfHrmsLaboringskill['memo']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建人：</label>
                    <p><?php echo !empty($CmfHrmsLaboringskill['creator'])?$CmfHrmsLaboringskill['creator']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建时间：</label>
                    <p><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfHrmsLaboringskill['createTime'])); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>