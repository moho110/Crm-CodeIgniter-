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
                <div class="panel-heading"><?php echo $action; ?> 教学楼 <a href="<?php echo site_url('/oa/CmfEduBuilding/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="orderNo">编号：</label>
                            <input type="text" class="form-control" name="orderNo" placeholder="Enter orderNo" value="<?php echo !empty($cmf_edu_building['orderNo'])?$cmf_edu_building['orderNo']:''; ?>">
                            <?php echo form_error('orderNo','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="buildingNo">教学楼编号：</label>
                            <input type="text" class="form-control" name="buildingNo" placeholder="Enter buildingNo" value="<?php echo !empty($cmf_edu_building['buildingNo'])?$cmf_edu_building['buildingNo']:''; ?>">
                            <?php echo form_error('buildingNo','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="buildingName">教学楼名称：</label>
                            <input type="text" class="form-control" name="buildingName" placeholder="Enter buildingName" value="<?php echo !empty($cmf_edu_building['buildingName'])?$cmf_edu_building['buildingName']:''; ?>">
                            <?php echo form_error('buildingName','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="memo">备注：</label>
                            <input type="text" class="form-control" name="memo" placeholder="Enter memo" value="<?php echo !empty($cmf_edu_building['memo'])?$cmf_edu_building['memo']:''; ?>">
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