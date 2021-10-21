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
                <div class="panel-heading"><?php echo $action; ?> 行政调班 <a href="<?php echo site_url('/oa/CmfEduXingzhengTiaoban/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="ID">编号：</label>
                            <input type="text" class="form-control" name="ID" placeholder="Enter ID" value="<?php echo !empty($cmf_edu_xingzheng_tiaoban['ID'])?$cmf_edu_xingzheng_tiaoban['ID']:''; ?>">
                            <?php echo form_error('ID','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="term">期限：</label>
                            <input type="text" class="form-control" name="term" placeholder="Enter term" value="<?php echo !empty($cmf_edu_xingzheng_tiaoban['term'])?$cmf_edu_xingzheng_tiaoban['term']:''; ?>">
                            <?php echo form_error('term','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="department">部门：</label>
                            <input type="text" class="form-control" name="department" placeholder="Enter department" value="<?php echo !empty($cmf_edu_xingzheng_tiaoban['department'])?$cmf_edu_xingzheng_tiaoban['department']:''; ?>">
                            <?php echo form_error('department','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="person">人员：</label>
                            <input type="text" class="form-control" name="person" placeholder="Enter person" value="<?php echo !empty($cmf_edu_xingzheng_tiaoban['person'])?$cmf_edu_xingzheng_tiaoban['person']:''; ?>">
                            <?php echo form_error('person','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="oriStartTime">原上班时间：</label>
                            <input type="text" class="form-control" name="oriStartTime" placeholder="Enter oriStartTime" value="<?php echo !empty($cmf_edu_xingzheng_tiaoban['oriStartTime'])?$cmf_edu_xingzheng_tiaoban['oriStartTime']:''; ?>">
                            <?php echo form_error('oriStartTime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="oriStart">原上班：</label>
                            <input type="text" class="form-control" name="oriStart" placeholder="Enter oriStart" value="<?php echo !empty($cmf_edu_xingzheng_tiaoban['oriStart'])?$cmf_edu_xingzheng_tiaoban['oriStart']:''; ?>">
                            <?php echo form_error('oriStart','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="newStartTime">新上班时间：</label>
                            <input type="text" class="form-control" name="newStartTime" placeholder="Enter newStartTime" value="<?php echo !empty($cmf_edu_xingzheng_tiaoban['newStartTime'])?$cmf_edu_xingzheng_tiaoban['newStartTime']:''; ?>">
                            <?php echo form_error('newStartTime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="newStart">新上班：</label>
                            <input type="text" class="form-control" name="newStart" placeholder="Enter newStart" value="<?php echo !empty($cmf_edu_xingzheng_tiaoban['newStart'])?$cmf_edu_xingzheng_tiaoban['newStart']:''; ?>">
                            <?php echo form_error('newStart','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="exStatus">审核状态：</label>
                            <input type="text" class="form-control" name="exStatus" placeholder="Enter exStatus" value="<?php echo !empty($cmf_edu_xingzheng_tiaoban['exStatus'])?$cmf_edu_xingzheng_tiaoban['exStatus']:''; ?>">
                            <?php echo form_error('exStatus','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="workFlowID">工作流ID：</label>
                            <input type="text" class="form-control" name="workFlowID" placeholder="Enter workFlowID" value="<?php echo !empty($cmf_edu_xingzheng_tiaoban['workFlowID'])?$cmf_edu_xingzheng_tiaoban['workFlowID']:''; ?>">
                            <?php echo form_error('workFlowID','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="exMan">审核人：</label>
                            <input type="text" class="form-control" name="exMan" placeholder="Enter exMan" value="<?php echo !empty($cmf_edu_xingzheng_tiaoban['exMan'])?$cmf_edu_xingzheng_tiaoban['exMan']:''; ?>">
                            <?php echo form_error('exMan','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="exTime">审核时间：</label>
                            <input type="text" class="form-control" name="exTime" placeholder="Enter exTime" value="<?php echo !empty($cmf_edu_xingzheng_tiaoban['exTime'])?$cmf_edu_xingzheng_tiaoban['exTime']:''; ?>">
                            <?php echo form_error('exTime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="personName">人员名称：</label>
                            <input type="text" class="form-control" name="personName" placeholder="Enter personName" value="<?php echo !empty($cmf_edu_xingzheng_tiaoban['personName'])?$cmf_edu_xingzheng_tiaoban['personName']:''; ?>">
                            <?php echo form_error('personName','<p class="help-block text-danger">','</p>'); ?>
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