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
                <div class="panel-heading"><?php echo $action; ?> 系统隐私配置 <a href="<?php echo site_url('/oa/CmfSystemprivateconfig/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="ID">编号：</label>
                            <input type="text" class="form-control" name="ID" placeholder="Enter ID" value="<?php echo !empty($cmf_systemprivateconfig['ID'])?$cmf_systemprivateconfig['ID']:''; ?>">
                            <?php echo form_error('ID','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="category">分类：</label>
                            <input type="text" class="form-control" name="category" placeholder="Enter category" value="<?php echo !empty($cmf_systemprivateconfig['category'])?$cmf_systemprivateconfig['category']:''; ?>">
                            <?php echo form_error('category','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="table">表：</label>
                            <input type="text" class="form-control" name="table" placeholder="Enter table" value="<?php echo !empty($cmf_systemprivateconfig['table'])?$cmf_systemprivateconfig['table']:''; ?>">
                            <?php echo form_error('table','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="object">对象：</label>
                            <input type="text" class="form-control" name="object" placeholder="Enter object" value="<?php echo !empty($cmf_systemprivateconfig['object'])?$cmf_systemprivateconfig['object']:''; ?>">
                            <?php echo form_error('object','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="views">视图：</label>
                            <input type="text" class="form-control" name="views" placeholder="Enter views" value="<?php echo !empty($cmf_systemprivateconfig['views'])?$cmf_systemprivateconfig['views']:''; ?>">
                            <?php echo form_error('views','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="column">列：</label>
                            <input type="text" class="form-control" name="column" placeholder="Enter column" value="<?php echo !empty($cmf_systemprivateconfig['column'])?$cmf_systemprivateconfig['column']:''; ?>">
                            <?php echo form_error('column','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="other">其他：</label>
                            <input type="text" class="form-control" name="other" placeholder="Enter other" value="<?php echo !empty($cmf_systemprivateconfig['other'])?$cmf_systemprivateconfig['other']:''; ?>">
                            <?php echo form_error('other','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="creator">创建人：</label>
                            <input type="text" class="form-control" name="creator" placeholder="Enter creator" value="<?php echo !empty($cmf_systemprivateconfig['creator'])?$cmf_systemprivateconfig['creator']:''; ?>">
                            <?php echo form_error('creator','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="createTime">创建时间：</label>
                            <input type="text" class="form-control" name="createTime" placeholder="Enter createTime" value="<?php echo !empty($cmf_systemprivateconfig['createTime'])?$cmf_systemprivateconfig['createTime']:''; ?>">
                            <?php echo form_error('createTime','<p class="help-block text-danger">','</p>'); ?>
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