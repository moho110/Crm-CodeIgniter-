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
                <div class="panel-heading"><?php echo $action; ?> 行政调班项目 <a href="<?php echo site_url('/oa/CmfEduXingzhengTiaobanxianghu/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="ID">编号：</label>
                            <input type="text" class="form-control" name="ID" placeholder="Enter ID" value="<?php echo !empty($cmf_edu_xingzheng_tiaobanxianghu['ID'])?$cmf_edu_xingzheng_tiaobanxianghu['ID']:''; ?>">
                            <?php echo form_error('ID','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="term">期限：</label>
                            <input type="text" class="form-control" name="term" placeholder="Enter term" value="<?php echo !empty($cmf_edu_xingzheng_tiaobanxianghu['term'])?$cmf_edu_xingzheng_tiaobanxianghu['term']:''; ?>">
                            <?php echo form_error('term','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="oriDepartment">原部门：</label>
                            <input type="text" class="form-control" name="oriDepartment" placeholder="Enter oriDepartment" value="<?php echo !empty($cmf_edu_xingzheng_tiaobanxianghu['oriDepartment'])?$cmf_edu_xingzheng_tiaobanxianghu['oriDepartment']:''; ?>">
                            <?php echo form_error('oriDepartment','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="oriPerson">原工作人员：</label>
                            <input type="text" class="form-control" name="oriPerson" placeholder="Enter oriPerson" value="<?php echo !empty($cmf_edu_xingzheng_tiaobanxianghu['oriPerson'])?$cmf_edu_xingzheng_tiaobanxianghu['oriPerson']:''; ?>">
                            <?php echo form_error('oriPerson','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="oriStartTime">原上班时间：</label>
                            <input type="text" class="form-control" name="oriStartTime" placeholder="Enter oriStartTime" value="<?php echo !empty($cmf_edu_xingzheng_tiaobanxianghu['oriStartTime'])?$cmf_edu_xingzheng_tiaobanxianghu['oriStartTime']:''; ?>">
                            <?php echo form_error('oriStartTime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="oriStart">原上班：</label>
                            <input type="text" class="form-control" name="oriStart" placeholder="Enter oriStart" value="<?php echo !empty($cmf_edu_xingzheng_tiaobanxianghu['oriStart'])?$cmf_edu_xingzheng_tiaobanxianghu['oriStart']:''; ?>">
                            <?php echo form_error('oriStart','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="newDepartment">新部门：</label>
                            <input type="text" class="form-control" name="newDepartment" placeholder="Enter newDepartment" value="<?php echo !empty($cmf_edu_xingzheng_tiaobanxianghu['newDepartment'])?$cmf_edu_xingzheng_tiaobanxianghu['newDepartment']:''; ?>">
                            <?php echo form_error('newDepartment','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="newCruit">新雇员：</label>
                            <input type="text" class="form-control" name="newCruit" placeholder="Enter newCruit" value="<?php echo !empty($cmf_edu_xingzheng_tiaobanxianghu['newCruit'])?$cmf_edu_xingzheng_tiaobanxianghu['newCruit']:''; ?>">
                            <?php echo form_error('newCruit','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="newStartTime">新上班时间：</label>
                            <input type="text" class="form-control" name="newStartTime" placeholder="Enter newStartTime" value="<?php echo !empty($cmf_edu_xingzheng_tiaobanxianghu['newStartTime'])?$cmf_edu_xingzheng_tiaobanxianghu['newStartTime']:''; ?>">
                            <?php echo form_error('newStartTime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="exStatus">审核状态：</label>
                            <input type="text" class="form-control" name="exStatus" placeholder="Enter exStatus" value="<?php echo !empty($cmf_edu_xingzheng_tiaobanxianghu['exStatus'])?$cmf_edu_xingzheng_tiaobanxianghu['exStatus']:''; ?>">
                            <?php echo form_error('exStatus','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="workFlowID">工作流ID：</label>
                            <input type="text" class="form-control" name="workFlowID" placeholder="Enter workFlowID" value="<?php echo !empty($cmf_edu_xingzheng_tiaobanxianghu['workFlowID'])?$cmf_edu_xingzheng_tiaobanxianghu['workFlowID']:''; ?>">
                            <?php echo form_error('workFlowID','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="exMan">审核人员：</label>
                            <input type="text" class="form-control" name="exMan" placeholder="Enter exMan" value="<?php echo !empty($cmf_edu_xingzheng_tiaobanxianghu['exMan'])?$cmf_edu_xingzheng_tiaobanxianghu['exMan']:''; ?>">
                            <?php echo form_error('exMan','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="exTime">审核时间：</label>
                            <input type="text" class="form-control" name="exTime" placeholder="Enter exTime" value="<?php echo !empty($cmf_edu_xingzheng_tiaobanxianghu['exTime'])?$cmf_edu_xingzheng_tiaobanxianghu['exTime']:''; ?>">
                            <?php echo form_error('exTime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="oriPersonName">原工作人员名称：</label>
                            <input type="text" class="form-control" name="oriPersonName" placeholder="Enter oriPersonName" value="<?php echo !empty($cmf_edu_xingzheng_tiaobanxianghu['oriPersonName'])?$cmf_edu_xingzheng_tiaobanxianghu['oriPersonName']:''; ?>">
                            <?php echo form_error('oriPersonName','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="newPersonName">新工作人员名称：</label>
                            <input type="text" class="form-control" name="newPersonName" placeholder="Enter newPersonName" value="<?php echo !empty($cmf_edu_xingzheng_tiaobanxianghu['newPersonName'])?$cmf_edu_xingzheng_tiaobanxianghu['newPersonName']:''; ?>">
                            <?php echo form_error('newPersonName','<p class="help-block text-danger">','</p>'); ?>
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