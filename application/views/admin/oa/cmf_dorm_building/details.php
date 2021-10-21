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
            <div class="panel-heading">宿舍楼详细内容<a href="<?php echo site_url('/oa/CmfDormBuilding/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfDormBuilding['Id'])?$CmfDormBuilding['Id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>宿舍楼名称：</label>
                    <p><?php echo !empty($CmfDormBuilding['buildingName'])?$CmfDormBuilding['buildingName']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>宿舍楼总数：</label>
                    <p><?php echo !empty($CmfDormBuilding['buildingSum'])?$CmfDormBuilding['buildingSum']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>楼层数量：</label>
                    <p><?php echo !empty($CmfDormBuilding['floorNumber'])?$CmfDormBuilding['floorNumber']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>主教师一：</label>
                    <p><?php echo !empty($CmfDormBuilding['masterTeacherOne'])?$CmfDormBuilding['masterTeacherOne']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>管理范围一：</label>
                    <p><?php echo !empty($CmfDormBuilding['manageBoundaryOne'])?$CmfDormBuilding['manageBoundaryOne']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>主教师二：</label>
                    <p><?php echo !empty($CmfDormBuilding['masterTeacherTwo'])?$CmfDormBuilding['masterTeacherTwo']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>管理范围二：</label>
                    <p><?php echo !empty($CmfDormBuilding['manageBoundaryTwo'])?$CmfDormBuilding['manageBoundaryTwo']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>主教师三：</label>
                    <p><?php echo !empty($CmfDormBuilding['masterTeacherThree'])?$CmfDormBuilding['masterTeacherThree']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>管理范围三：</label>
                    <p><?php echo !empty($CmfDormBuilding['manageBoundaryThree'])?$CmfDormBuilding['manageBoundaryThree']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>主教师四：</label>
                    <p><?php echo !empty($CmfDormBuilding['masterTeacherFour'])?$CmfDormBuilding['masterTeacherFour']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>管理范围四：</label>
                    <p><?php echo !empty($CmfDormBuilding['manageBoundaryFour'])?$CmfDormBuilding['manageBoundaryFour']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>学生性别：</label>
                    <p><?php echo !empty($CmfDormBuilding['stuSex'])?$CmfDormBuilding['stuSex']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>备注：</label>
                    <p><?php echo !empty($CmfDormBuilding['memo'])?$CmfDormBuilding['memo']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>