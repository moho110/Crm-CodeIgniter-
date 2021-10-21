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
                <div class="panel-heading"><?php echo $action; ?> 教育 <a href="<?php echo site_url('/oa/CmfDictEducation/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="Dict_EducationID">编号：</label>
                            <input type="text" class="form-control" name="Dict_EducationID" placeholder="Enter Dict_EducationID" value="<?php echo !empty($cmf_dict_education['Dict_EducationID'])?$cmf_dict_education['Dict_EducationID']:''; ?>">
                            <?php echo form_error('Dict_EducationID','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="Dict_EducationName">教育名称：</label>
                            <input type="text" class="form-control" name="Dict_EducationName" placeholder="Enter Dict_EducationName" value="<?php echo !empty($cmf_dict_education['Dict_EducationName'])?$cmf_dict_education['Dict_EducationName']:''; ?>">
                            <?php echo form_error('Dict_EducationName','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="Dict_EducationCode">教育代码：</label>
                            <input type="text" class="form-control" name="Dict_EducationCode" placeholder="Enter Dict_EducationCode" value="<?php echo !empty($cmf_dict_education['Dict_EducationCode'])?$cmf_dict_education['Dict_EducationCode']:''; ?>">
                            <?php echo form_error('Dict_EducationCode','<p class="help-block text-danger">','</p>'); ?>
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