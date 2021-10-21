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
                <div class="panel-heading"><?php echo $action; ?> 行政请假 <a href="<?php echo site_url('/oa/CmfEduXingzhengQingjia/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="ID">编号：</label>
                            <input type="text" class="form-control" name="ID" placeholder="Enter ID" value="<?php echo !empty($cmf_edu_xingzheng_qingjia['ID'])?$cmf_edu_xingzheng_qingjia['ID']:''; ?>">
                            <?php echo form_error('ID','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="term">期限：</label>
                            <input type="text" class="form-control" name="term" placeholder="Enter term" value="<?php echo !empty($cmf_edu_xingzheng_qingjia['term'])?$cmf_edu_xingzheng_qingjia['term']:''; ?>">
                            <?php echo form_error('term','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="department">部门：</label>
                            <input type="text" class="form-control" name="department" placeholder="Enter department" value="<?php echo !empty($cmf_edu_xingzheng_qingjia['department'])?$cmf_edu_xingzheng_qingjia['department']:''; ?>">
                            <?php echo form_error('department','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="person">人员：</label>
                            <input type="text" class="form-control" name="person" placeholder="Enter person" value="<?php echo !empty($cmf_edu_xingzheng_qingjia['person'])?$cmf_edu_xingzheng_qingjia['person']:''; ?>">
                            <?php echo form_error('person','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="time">时间：</label>
                            <input type="text" class="form-control" name="time" placeholder="Enter time" value="<?php echo !empty($cmf_edu_xingzheng_qingjia['time'])?$cmf_edu_xingzheng_qingjia['time']:''; ?>">
                            <?php echo form_error('time','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="week">周：</label>
                            <input type="text" class="form-control" name="week" placeholder="Enter week" value="<?php echo !empty($cmf_edu_xingzheng_qingjia['week'])?$cmf_edu_xingzheng_qingjia['week']:''; ?>">
                            <?php echo form_error('week','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="class">类别：</label>
                            <input type="text" class="form-control" name="class" placeholder="Enter class" value="<?php echo !empty($cmf_edu_xingzheng_qingjia['class'])?$cmf_edu_xingzheng_qingjia['class']:''; ?>">
                            <?php echo form_error('class','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="qingjiaType">请假类型：</label>
                            <input type="text" class="form-control" name="qingjiaType" placeholder="Enter qingjiaType" value="<?php echo !empty($cmf_edu_xingzheng_qingjia['qingjiaType'])?$cmf_edu_xingzheng_qingjia['qingjiaType']:''; ?>">
                            <?php echo form_error('qingjiaType','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="exStatus">审核状态：</label>
                            <input type="text" class="form-control" name="exStatus" placeholder="Enter exStatus" value="<?php echo !empty($cmf_edu_xingzheng_qingjia['exStatus'])?$cmf_edu_xingzheng_qingjia['exStatus']:''; ?>">
                            <?php echo form_error('exStatus','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="workFlowID">工作流ID：</label>
                            <input type="text" class="form-control" name="workFlowID" placeholder="Enter workFlowID" value="<?php echo !empty($cmf_edu_xingzheng_qingjia['workFlowID'])?$cmf_edu_xingzheng_qingjia['workFlowID']:''; ?>">
                            <?php echo form_error('workFlowID','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="exMan">审核人：</label>
                            <input type="text" class="form-control" name="exMan" placeholder="Enter exMan" value="<?php echo !empty($cmf_edu_xingzheng_qingjia['exMan'])?$cmf_edu_xingzheng_qingjia['exMan']:''; ?>">
                            <?php echo form_error('exMan','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="exTime">审核时间：</label>
                            <input type="text" class="form-control" name="exTime" placeholder="Enter exTime" value="<?php echo !empty($cmf_edu_xingzheng_qingjia['exTime'])?$cmf_edu_xingzheng_qingjia['exTime']:''; ?>">
                            <?php echo form_error('exTime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="personName">人员名称：</label>
                            <input type="text" class="form-control" name="personName" placeholder="Enter personName" value="<?php echo !empty($cmf_edu_xingzheng_qingjia['personName'])?$cmf_edu_xingzheng_qingjia['personName']:''; ?>">
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