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
                <div class="panel-heading"><?php echo $action; ?> 行政分类 <a href="<?php echo site_url('/oa/CmfEduXingzhengGroup/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="Id">编号：</label>
                            <input type="text" class="form-control" name="Id" placeholder="Enter Id" value="<?php echo !empty($cmf_edu_xingzheng_group['Id'])?$cmf_edu_xingzheng_group['Id']:''; ?>">
                            <?php echo form_error('Id','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="departName">部门名称：</label>
                            <input type="text" class="form-control" name="departName" placeholder="Enter departName" value="<?php echo !empty($cmf_edu_xingzheng_group['departName'])?$cmf_edu_xingzheng_group['departName']:''; ?>">
                            <?php echo form_error('departName','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="groupName">分类名称：</label>
                            <input type="text" class="form-control" name="groupName" placeholder="Enter groupName" value="<?php echo !empty($cmf_edu_xingzheng_group['groupName'])?$cmf_edu_xingzheng_group['groupName']:''; ?>">
                            <?php echo form_error('groupName','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="memberName">成员名称：</label>
                            <input type="text" class="form-control" name="memberName" placeholder="Enter memberName" value="<?php echo !empty($cmf_edu_xingzheng_group['memberName'])?$cmf_edu_xingzheng_group['memberName']:''; ?>">
                            <?php echo form_error('memberName','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="memo">备注：</label>
                            <input type="text" class="form-control" name="memo" placeholder="Enter memo" value="<?php echo !empty($cmf_edu_xingzheng_group['memo'])?$cmf_edu_xingzheng_group['memo']:''; ?>">
                            <?php echo form_error('memo','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="creator">创建人：</label>
                            <input type="text" class="form-control" name="creator" placeholder="Enter creator" value="<?php echo !empty($cmf_edu_xingzheng_group['creator'])?$cmf_edu_xingzheng_group['creator']:''; ?>">
                            <?php echo form_error('creator','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="createTime">创建时间：</label>
                            <input type="text" class="form-control" name="createTime" placeholder="Enter createTime" value="<?php echo !empty($cmf_edu_xingzheng_group['createTime'])?$cmf_edu_xingzheng_group['createTime']:''; ?>">
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