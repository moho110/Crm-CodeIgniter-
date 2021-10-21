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
                <div class="panel-heading"><?php echo $action; ?> 客户区域 <a href="<?php echo site_url('/oa/CmfCustomerarea/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="ROWID">编号：</label>
                            <input type="text" class="form-control" name="ROWID" placeholder="Enter ROWID" value="<?php echo !empty($cmf_customerarea['ROWID'])?$cmf_customerarea['ROWID']:''; ?>">
                            <?php echo form_error('ROWID','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="name">名称：</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter name" value="<?php echo !empty($cmf_customerarea['name'])?$cmf_customerarea['name']:''; ?>">
                            <?php echo form_error('name','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="user_id">用户ID：</label>
                            <input type="text" class="form-control" name="user_id" placeholder="Enter user_id" value="<?php echo !empty($cmf_customerarea['user_id'])?$cmf_customerarea['user_id']:''; ?>">
                            <?php echo form_error('user_id','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="id">ID：</label>
                            <input type="text" class="form-control" name="id" placeholder="Enter id" value="<?php echo !empty($cmf_customerarea['id'])?$cmf_customerarea['id']:''; ?>">
                            <?php echo form_error('id','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="user_flag">用户标识：</label>
                            <input type="radio" name="user_flag" value="1">保留
                            <input type="radio" name="user_flag" value="0">删除
                            <?php echo form_error('user_flag','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="leverno">等级编号：</label>
                            <input type="text" class="form-control" name="leverno" placeholder="Enter leverno" value="<?php echo !empty($cmf_customerarea['leverno'])?$cmf_customerarea['leverno']:''; ?>">
                            <?php echo form_error('leverno','<p class="help-block text-danger">','</p>'); ?>
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