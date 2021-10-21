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
            <div class="panel-heading">教育经验详细内容<a href="<?php echo site_url('/oa/CmfHrmsEducationalexperience/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfHrmsEducationalexperience['ID'])?$CmfHrmsEducationalexperience['ID']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>工作ID：</label>
                    <p><?php echo !empty($CmfHrmsEducationalexperience['workId'])?$CmfHrmsEducationalexperience['workId']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>名称：</label>
                    <p><?php echo !empty($CmfHrmsEducationalexperience['name'])?$CmfHrmsEducationalexperience['name']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>所在部门：</label>
                    <p><?php echo !empty($CmfHrmsEducationalexperience['inDepartment'])?$CmfHrmsEducationalexperience['inDepartment']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>开始时间：</label>
                    <p><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfHrmsEducationalexperience['startTime'])); ?></p>
                </div>
                <div class="form-group">
                    <label>结束时间：</label>
                    <p><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfHrmsEducationalexperience['endTime'])); ?></p>
                </div>
                <div class="form-group">
                    <label>学校：</label>
                    <p><?php echo !empty($CmfHrmsEducationalexperience['school'])?$CmfHrmsEducationalexperience['school']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>专业：</label>
                    <p><?php echo !empty($CmfHrmsEducationalexperience['professional'])?$CmfHrmsEducationalexperience['professional']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>经验：</label>
                    <p><?php echo !empty($CmfHrmsEducationalexperience['experience'])?$CmfHrmsEducationalexperience['experience']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>证明人：</label>
                    <p><?php echo !empty($CmfHrmsEducationalexperience['proveMan'])?$CmfHrmsEducationalexperience['proveMan']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建者：</label>
                    <p><?php echo !empty($CmfHrmsEducationalexperience['creator'])?$CmfHrmsEducationalexperience['creator']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建时间：</label>
                    <p><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfHrmsEducationalexperience['createTime'])); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>