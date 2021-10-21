<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_header");
?>
<div class="container">
    <div class="col-xs-12">
    <?php 
        if(!empty($success_msg)){
            echo '<div class="alert alert-success">'.$success_msg.'</div>';
        }elseif(!empty($error_msg)){
            echo '<div class="alert alert-danger">'.$error_msg.'</div>';
        }
    ?>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading"><?php echo $action; ?> 宿舍楼 <a href="<?php echo site_url('/oa/CmfDormBuilding/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="Id">编号：</label>
                            <input type="text" class="form-control" name="Id" placeholder="Enter Id" value="<?php echo !empty($cmf_dorm_building['Id'])?$cmf_dorm_building['Id']:''; ?>">
                            <?php echo form_error('Id','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="buildingName">宿舍楼名称：</label>
                            <input type="text" class="form-control" name="buildingName" placeholder="Enter buildingName" value="<?php echo !empty($cmf_dorm_building['buildingName'])?$cmf_dorm_building['buildingName']:''; ?>">
                            <?php echo form_error('buildingName','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="buildingSum">宿舍楼总数：</label>
                            <input type="text" class="form-control" name="buildingSum" placeholder="Enter buildingSum" value="<?php echo !empty($cmf_dorm_building['buildingSum'])?$cmf_dorm_building['buildingSum']:''; ?>">
                            <?php echo form_error('buildingSum','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="floorNumber">楼层数量：</label>
                            <input type="text" class="form-control" name="floorNumber" placeholder="Enter floorNumber" value="<?php echo !empty($cmf_dorm_building['floorNumber'])?$cmf_dorm_building['floorNumber']:''; ?>">
                            <?php echo form_error('floorNumber','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="masterTeacherOne">主教师一：</label>
                            <input type="text" class="form-control" name="masterTeacherOne" placeholder="Enter masterTeacherOne" value="<?php echo !empty($cmf_dorm_building['masterTeacherOne'])?$cmf_dorm_building['masterTeacherOne']:''; ?>">
                            <?php echo form_error('masterTeacherOne','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="manageBoundaryOne">管理范围一：</label>
                            <input type="text" class="form-control" name="manageBoundaryOne" placeholder="Enter manageBoundaryOne" value="<?php echo !empty($cmf_dorm_building['manageBoundaryOne'])?$cmf_dorm_building['manageBoundaryOne']:''; ?>">
                            <?php echo form_error('manageBoundaryOne','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="masterTeacherTwo">主教师二：</label>
                            <input type="text" class="form-control" name="masterTeacherTwo" placeholder="Enter masterTeacherTwo" value="<?php echo !empty($cmf_dorm_building['masterTeacherTwo'])?$cmf_dorm_building['masterTeacherTwo']:''; ?>">
                            <?php echo form_error('masterTeacherTwo','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="manageBoundaryTwo">管理范围二：</label>
                            <input type="text" class="form-control" name="manageBoundaryTwo" placeholder="Enter manageBoundaryTwo" value="<?php echo !empty($cmf_dorm_building['manageBoundaryTwo'])?$cmf_dorm_building['manageBoundaryTwo']:''; ?>">
                            <?php echo form_error('manageBoundaryTwo','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="masterTeacherThree">主教师三：</label>
                            <input type="text" class="form-control" name="masterTeacherThree" placeholder="Enter masterTeacherThree" value="<?php echo !empty($cmf_dorm_building['masterTeacherThree'])?$cmf_dorm_building['masterTeacherThree']:''; ?>">
                            <?php echo form_error('masterTeacherThree','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="manageBoundaryThree">管理范围三：</label>
                            <input type="text" class="form-control" name="manageBoundaryThree" placeholder="Enter manageBoundaryThree" value="<?php echo !empty($cmf_dorm_building['manageBoundaryThree'])?$cmf_dorm_building['manageBoundaryThree']:''; ?>">
                            <?php echo form_error('manageBoundaryThree','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="masterTeacherFour">主教师四：</label>
                            <input type="text" class="form-control" name="masterTeacherFour" placeholder="Enter masterTeacherFour" value="<?php echo !empty($cmf_dorm_building['masterTeacherFour'])?$cmf_dorm_building['masterTeacherFour']:''; ?>">
                            <?php echo form_error('masterTeacherFour','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="manageBoundaryFour">管理范围四：</label>
                            <input type="text" class="form-control" name="manageBoundaryFour" placeholder="Enter manageBoundaryFour" value="<?php echo !empty($cmf_dorm_building['manageBoundaryFour'])?$cmf_dorm_building['manageBoundaryFour']:''; ?>">
                            <?php echo form_error('manageBoundaryFour','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="stuSex">学生性别：</label>
                            <input type="text" class="form-control" name="stuSex" placeholder="Enter stuSex" value="<?php echo !empty($cmf_dorm_building['stuSex'])?$cmf_dorm_building['stuSex']:''; ?>">
                            <?php echo form_error('stuSex','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="memo">备注：</label>
                            <textarea cols="50" rows="10" name="memo"><?php echo !empty($cmf_dorm_building['stuSex'])?$cmf_dorm_building['memo']:''; ?></textarea>
                            <?php echo form_error('memo','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <input type="submit" name="postSubmit" class="btn btn-primary" value="提交"/>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>