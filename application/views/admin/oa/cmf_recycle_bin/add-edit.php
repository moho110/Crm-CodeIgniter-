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
                <div class="panel-heading"><?php echo $action; ?> 回收站 <a href="<?php echo site_url('/oa/CmfRecycleBin/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="id">编号：</label>
                            <input type="text" class="form-control" name="id" placeholder="Enter id" value="<?php echo !empty($cmf_recycle_bin['id'])?$cmf_recycle_bin['id']:''; ?>">
                            <?php echo form_error('id','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="object_id">对象ID：</label>
                            <input type="text" class="form-control" name="object_id" placeholder="Enter object_id" value="<?php echo !empty($cmf_recycle_bin['object_id'])?$cmf_recycle_bin['object_id']:''; ?>">
                            <?php echo form_error('object_id','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="create_time">创建时间：</label>
                            <input type="text" class="form-control" name="create_time" placeholder="Enter create_time" value="<?php echo !empty($cmf_recycle_bin['create_time'])?$cmf_recycle_bin['create_time']:''; ?>">
                            <?php echo form_error('create_time','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="table_name">表名称：</label>
                            <input type="text" class="form-control" name="table_name" placeholder="Enter table_name" value="<?php echo !empty($cmf_recycle_bin['table_name'])?$cmf_recycle_bin['table_name']:''; ?>">
                            <?php echo form_error('table_name','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="name">名称：</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter name" value="<?php echo !empty($cmf_recycle_bin['name'])?$cmf_recycle_bin['name']:''; ?>">
                            <?php echo form_error('name','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="user_id">用户ID：</label>
                            <input type="text" class="form-control" name="user_id" placeholder="Enter user_id" value="<?php echo !empty($cmf_recycle_bin['user_id'])?$cmf_recycle_bin['user_id']:''; ?>">
                            <?php echo form_error('user_id','<p class="help-block text-danger">','</p>'); ?>
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