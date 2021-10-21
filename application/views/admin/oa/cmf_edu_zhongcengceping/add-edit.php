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
                <div class="panel-heading"><?php echo $action; ?> 中层测评 <a href="<?php echo site_url('/oa/CmfEduZhongcengceping/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="ID">编号：</label>
                            <input type="text" class="form-control" name="ID" placeholder="Enter ID" value="<?php echo !empty($cmf_edu_zhongcengceping['ID'])?$cmf_edu_zhongcengceping['ID']:''; ?>">
                            <?php echo form_error('ID','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="testName">测试名称：</label>
                            <input type="text" class="form-control" name="testName" placeholder="Enter testName" value="<?php echo !empty($cmf_edu_zhongcengceping['testName'])?$cmf_edu_zhongcengceping['testName']:''; ?>">
                            <?php echo form_error('testName','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="startTime">开始时间：</label>
                            <input type="text" class="form-control" name="startTime" placeholder="Enter startTime" value="<?php echo !empty($cmf_edu_zhongcengceping['startTime'])?$cmf_edu_zhongcengceping['startTime']:''; ?>">
                            <?php echo form_error('startTime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="endTime">结束时间：</label>
                            <input type="text" class="form-control" name="endTime" placeholder="Enter endTime" value="<?php echo !empty($cmf_edu_zhongcengceping['endTime'])?$cmf_edu_zhongcengceping['endTime']:''; ?>">
                            <?php echo form_error('endTime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="isUse">是否使用：</label>
                            <input type="radio" name="isUse" value="1">使用
                            <input type="radio" name="isUse" value="0">不使用
                            <?php echo form_error('isUse','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="testManby">由测试人：</label>
                            <input type="text" class="form-control" name="testManby" placeholder="Enter testManby" value="<?php echo !empty($cmf_edu_zhongcengceping['testManby'])?$cmf_edu_zhongcengceping['testManby']:''; ?>">
                            <?php echo form_error('testManby','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="joinTestMan">参评人员：</label>
                            <input type="text" class="form-control" name="joinTestMan" placeholder="Enter joinTestMan" value="<?php echo !empty($cmf_edu_zhongcengceping['joinTestMan'])?$cmf_edu_zhongcengceping['joinTestMan']:''; ?>">
                            <?php echo form_error('joinTestMan','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="creator">创建人：</label>
                            <input type="text" class="form-control" name="creator" placeholder="Enter creator" value="<?php echo !empty($cmf_edu_zhongcengceping['creator'])?$cmf_edu_zhongcengceping['creator']:''; ?>">
                            <?php echo form_error('creator','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="createTime">创建时间：</label>
                            <input type="text" class="form-control" name="createTime" placeholder="Enter createTime" value="<?php echo !empty($cmf_edu_zhongcengceping['createTime'])?$cmf_edu_zhongcengceping['createTime']:''; ?>">
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