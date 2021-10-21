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
                <div class="panel-heading"><?php echo $action; ?> 产品类型 <a href="<?php echo site_url('/oa/CmfProducttype/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="name">名称：</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter name" value="<?php echo !empty($cmf_producttype['name'])?$cmf_producttype['name']:''; ?>">
                            <?php echo form_error('name','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="id">编号：</label>
                            <input type="text" class="form-control" name="id" placeholder="Enter id" value="<?php echo !empty($cmf_producttype['id'])?$cmf_producttype['id']:''; ?>">
                            <?php echo form_error('id','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="Code">代码：</label>
                            <input type="text" class="form-control" name="Code" placeholder="Enter Code" value="<?php echo !empty($cmf_producttype['Code'])?$cmf_producttype['Code']:''; ?>">
                            <?php echo form_error('Code','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="viewtype">查看类型：</label>
                            <input type="text" class="form-control" name="viewtype" placeholder="Enter viewtype" value="<?php echo !empty($cmf_producttype['viewtype'])?$cmf_producttype['viewtype']:''; ?>">
                            <?php echo form_error('viewtype','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="user_id">用户ID：</label>
                            <input type="text" class="form-control" name="user_id" placeholder="Enter user_id" value="<?php echo !empty($cmf_producttype['user_id'])?$cmf_producttype['user_id']:''; ?>">
                            <?php echo form_error('user_id','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="user_flag">用户标识：</label>
                            <input type="radio" name="user_flag" value="1">保留
                            <input type="radio" name="user_flag" value="0">删除
                            <?php echo form_error('user_flag','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="leverno">等级编号：</label>
                            <input type="text" class="form-control" name="leverno" placeholder="Enter leverno" value="<?php echo !empty($cmf_producttype['leverno'])?$cmf_producttype['leverno']:''; ?>">
                            <?php echo form_error('user_flag','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="isbuyplan">是否购买计划：</label>
                            <input type="radio" name="isbuyplan" value="1">购买
                            <input type="radio" name="isbuyplan" value="0">未购买
                            <?php echo form_error('isbuyplan','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="isautoout">是否自动出库：</label>
                            <input type="radio" name="isautoout" value="1">出库
                            <input type="radio" name="isautoout" value="0">不出库
                            <?php echo form_error('isautoout','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="parentid">父级ID：</label>
                            <input type="text" class="form-control" name="parentid" placeholder="Enter parentid" value="<?php echo !empty($cmf_producttype['parentid'])?$cmf_producttype['parentid']:''; ?>">
                            <?php echo form_error('parentid','<p class="help-block text-danger">','</p>'); ?>
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