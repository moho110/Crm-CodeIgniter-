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
                <div class="panel-heading"><?php echo $action; ?> 收款类型 <a href="<?php echo site_url('/oa/CmfAccesstype/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="name">类型名称：</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter name" value="<?php echo !empty($cmf_accesstype['name'])?$cmf_accesstype['name']:''; ?>">
                            <?php echo form_error('name','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="parent">父级ID：</label>
                            <input type="text" class="form-control" name="parent" placeholder="Enter parent" value="<?php echo !empty($cmf_accesstype['parent'])?$cmf_accesstype['parent']:''; ?>">
                            <?php echo form_error('parent','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="inout">输入输出：</label>
                            <input type="text" class="form-control" name="inout" placeholder="Enter inout" value="<?php echo !empty($cmf_accesstype['inout'])?$cmf_accesstype['inout']:''; ?>">
                            <?php echo form_error('inout','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <input type="submit" name="postSubmit" class="btn btn-primary" value="Submit"/>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>