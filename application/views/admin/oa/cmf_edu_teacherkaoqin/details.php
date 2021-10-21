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
            <div class="panel-heading">教师考勤详细内容<a href="<?php echo site_url('/oa/CmfEduTeacherkaoqin/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfEduTeacherkaoqin['Id'])?$CmfEduTeacherkaoqin['Id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>银行ID：</label>
                    <p><?php echo !empty($CmfEduTeacherkaoqin['teacherUserName'])?$CmfEduTeacherkaoqin['teacherUserName']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>银行代码：</label>
                    <p><?php echo !empty($CmfEduTeacherkaoqin['teacherName'])?$CmfEduTeacherkaoqin['teacherName']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>银行名称：</label>
                    <p><?php echo !empty($CmfEduTeacherkaoqin['dutyDate'])?$CmfEduTeacherkaoqin['dutyDate']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>系统锁定：</label>
                    <p><?php echo !empty($CmfEduTeacherkaoqin['cardTime'])?$CmfEduTeacherkaoqin['cardTime']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>金额：</label>
                    <p><?php echo !empty($CmfEduTeacherkaoqin['dutyId'])?$CmfEduTeacherkaoqin['dutyId']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>所属：</label>
                    <p><?php echo !empty($CmfEduTeacherkaoqin['dutyPosition'])?$CmfEduTeacherkaoqin['dutyPosition']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>所属：</label>
                    <p><?php echo !empty($CmfEduTeacherkaoqin['dutyIP'])?$CmfEduTeacherkaoqin['dutyIP']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>