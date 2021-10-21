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
                <div class="panel-heading"><?php echo $action; ?> 宿舍区域 <a href="<?php echo site_url('/oa/CmfDormArea/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="Id">编号：</label>
                            <input type="text" class="form-control" name="Id" placeholder="Enter Id" value="<?php echo !empty($cmf_dorm_area['Id'])?$cmf_dorm_area['Id']:''; ?>">
                            <?php echo form_error('Id','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="dormAreaName">宿舍区域名称：</label>
                            <input type="text" class="form-control" name="dormAreaName" placeholder="Enter dormAreaName" value="<?php echo !empty($cmf_dorm_area['dormAreaName'])?$cmf_dorm_area['dormAreaName']:''; ?>">
                            <?php echo form_error('dormAreaName','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="Name">名称：</label>
                            <input type="text" class="form-control" name="Name" placeholder="Enter Name" value="<?php echo !empty($cmf_dorm_area['Name'])?$cmf_dorm_area['Name']:''; ?>">
                            <?php echo form_error('Name','<p class="help-block text-danger">','</p>'); ?>
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