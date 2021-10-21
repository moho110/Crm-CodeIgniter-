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
            <div class="panel-heading">工作人员经验详细内容<a href="<?php echo site_url('/oa/CmfHrmsWorkexperience/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfHrmsWorkexperience['ID'])?$CmfHrmsWorkexperience['ID']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>工作ID：</label>
                    <p><?php echo !empty($CmfHrmsWorkexperience['workId'])?$CmfHrmsWorkexperience['workId']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>名称：</label>
                    <p><?php echo !empty($CmfHrmsWorkexperience['name'])?$CmfHrmsWorkexperience['name']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>所在部门：</label>
                    <p><?php echo !empty($CmfHrmsWorkexperience['inDepartment'])?$CmfHrmsWorkexperience['inDepartment']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>开始时间：</label>
                    <p><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfHrmsWorkexperience['startTime'])); ?></p>
                </div>
                <div class="form-group">
                    <label>结束时间：</label>
                    <p><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfHrmsWorkexperience['endTime'])); ?></p>
                </div>
                <div class="form-group">
                    <label>公司：</label>
                    <p><?php echo !empty($CmfHrmsWorkexperience['company'])?$CmfHrmsWorkexperience['company']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>部门：</label>
                    <p><?php echo !empty($CmfHrmsWorkexperience['department'])?$CmfHrmsWorkexperience['department']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>职员：</label>
                    <p><?php echo !empty($CmfHrmsWorkexperience['staff'])?$CmfHrmsWorkexperience['staff']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>证明人：</label>
                    <p><?php echo !empty($CmfHrmsWorkexperience['proveMan'])?$CmfHrmsWorkexperience['proveMan']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>备注：</label>
                    <p><?php echo !empty($CmfHrmsWorkexperience['memo'])?$CmfHrmsWorkexperience['memo']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建人：</label>
                    <p><?php echo !empty($CmfHrmsWorkexperience['creator'])?$CmfHrmsWorkexperience['creator']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建时间：</label>
                    <p><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfHrmsWorkexperience['createTime'])); ?></p>
                </div>
                <div class="form-group">
                    <label>辞职理由：</label>
                    <p><?php echo !empty($CmfHrmsWorkexperience['quitReason'])?$CmfHrmsWorkexperience['quitReason']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>