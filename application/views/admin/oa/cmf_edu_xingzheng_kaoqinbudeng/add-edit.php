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
                <div class="panel-heading"><?php echo $action; ?> 行政考勤补登 <a href="<?php echo site_url('/oa/CmfEduXingzhengKaoqinbudeng/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="Id">编号：</label>
                            <input type="text" class="form-control" name="Id" placeholder="Enter Id" value="<?php echo !empty($cmf_edu_xingzheng_kaoqinbudeng['Id'])?$cmf_edu_xingzheng_kaoqinbudeng['Id']:''; ?>">
                            <?php echo form_error('Id','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="term">期限：</label>
                            <input type="text" class="form-control" name="term" placeholder="Enter term" value="<?php echo !empty($cmf_edu_xingzheng_kaoqinbudeng['term'])?$cmf_edu_xingzheng_kaoqinbudeng['term']:''; ?>">
                            <?php echo form_error('term','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="department">部门：</label>
                            <input type="text" class="form-control" name="department" placeholder="Enter department" value="<?php echo !empty($cmf_edu_xingzheng_kaoqinbudeng['department'])?$cmf_edu_xingzheng_kaoqinbudeng['department']:''; ?>">
                            <?php echo form_error('department','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="person">人员：</label>
                            <input type="text" class="form-control" name="person" placeholder="Enter person" value="<?php echo !empty($cmf_edu_xingzheng_kaoqinbudeng['person'])?$cmf_edu_xingzheng_kaoqinbudeng['person']:''; ?>">
                            <?php echo form_error('person','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="time">时间：</label>
                            <input type="text" class="form-control" name="time" placeholder="Enter time" value="<?php echo !empty($cmf_edu_xingzheng_kaoqinbudeng['time'])?$cmf_edu_xingzheng_kaoqinbudeng['time']:''; ?>">
                            <?php echo form_error('time','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="day">日期：</label>
                            <input type="text" class="form-control" name="day" placeholder="Enter day" value="<?php echo !empty($cmf_edu_xingzheng_kaoqinbudeng['day'])?$cmf_edu_xingzheng_kaoqinbudeng['day']:''; ?>">
                            <?php echo form_error('day','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="class">类别：</label>
                            <input type="text" class="form-control" name="class" placeholder="Enter class" value="<?php echo !empty($cmf_edu_xingzheng_kaoqinbudeng['class'])?$cmf_edu_xingzheng_kaoqinbudeng['class']:''; ?>">
                            <?php echo form_error('class','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="budengProject">补登项目：</label>
                            <input type="text" class="form-control" name="budengProject" placeholder="Enter budengProject" value="<?php echo !empty($cmf_edu_xingzheng_kaoqinbudeng['budengProject'])?$cmf_edu_xingzheng_kaoqinbudeng['budengProject']:''; ?>">
                            <?php echo form_error('budengProject','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="budengStatus">补登状态：</label>
                            <input type="text" class="form-control" name="budengStatus" placeholder="Enter budengStatus" value="<?php echo !empty($cmf_edu_xingzheng_kaoqinbudeng['budengStatus'])?$cmf_edu_xingzheng_kaoqinbudeng['budengStatus']:''; ?>">
                            <?php echo form_error('budengStatus','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="workFlowID">工作流ID：</label>
                            <input type="text" class="form-control" name="workFlowID" placeholder="Enter workFlowID" value="<?php echo !empty($cmf_edu_xingzheng_kaoqinbudeng['workFlowID'])?$cmf_edu_xingzheng_kaoqinbudeng['workFlowID']:''; ?>">
                            <?php echo form_error('workFlowID','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="exMan">审核人：</label>
                            <input type="text" class="form-control" name="exMan" placeholder="Enter exMan" value="<?php echo !empty($cmf_edu_xingzheng_kaoqinbudeng['exMan'])?$cmf_edu_xingzheng_kaoqinbudeng['exMan']:''; ?>">
                            <?php echo form_error('exMan','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="exTime">审核时间：</label>
                            <input type="text" class="form-control" name="exTime" placeholder="Enter exTime" value="<?php echo !empty($cmf_edu_xingzheng_kaoqinbudeng['exTime'])?$cmf_edu_xingzheng_kaoqinbudeng['exTime']:''; ?>">
                            <?php echo form_error('exTime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="personName">人员名称：</label>
                            <input type="text" class="form-control" name="personName" placeholder="Enter personName" value="<?php echo !empty($cmf_edu_xingzheng_kaoqinbudeng['personName'])?$cmf_edu_xingzheng_kaoqinbudeng['personName']:''; ?>">
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