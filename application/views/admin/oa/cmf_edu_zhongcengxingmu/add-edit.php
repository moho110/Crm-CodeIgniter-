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
                <div class="panel-heading"><?php echo $action; ?> 中层项目 <a href="<?php echo site_url('/oa/CmfEduZhongcengxingmu/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="ID">编号：</label>
                            <input type="text" class="form-control" name="ID" placeholder="Enter ID" value="<?php echo !empty($cmf_edu_zhongcengxingmu['ID'])?$cmf_edu_zhongcengxingmu['ID']:''; ?>">
                            <?php echo form_error('ID','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="projects">项目：</label>
                            <input type="text" class="form-control" name="projects" placeholder="Enter projects" value="<?php echo !empty($cmf_edu_zhongcengxingmu['projects'])?$cmf_edu_zhongcengxingmu['projects']:''; ?>">
                            <?php echo form_error('projects','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="scoreinvalue">分值：</label>
                            <input type="text" class="form-control" name="scoreinvalue" placeholder="Enter scoreinvalue" value="<?php echo !empty($cmf_edu_zhongcengxingmu['scoreinvalue'])?$cmf_edu_zhongcengxingmu['scoreinvalue']:''; ?>">
                            <?php echo form_error('scoreinvalue','<p class="help-block text-danger">','</p>'); ?>
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