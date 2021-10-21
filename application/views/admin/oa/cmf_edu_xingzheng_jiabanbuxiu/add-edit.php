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
                <div class="panel-heading"><?php echo $action; ?> 行政加班补休 <a href="<?php echo site_url('/oa/CmfEduXingzhengJiabanbuxiu/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="Id">编号：</label>
                            <input type="text" class="form-control" name="Id" placeholder="Enter Id" value="<?php echo !empty($cmf_edu_xingzheng_jiabanbuxiu['Id'])?$cmf_edu_xingzheng_jiabanbuxiu['Id']:''; ?>">
                            <?php echo form_error('Id','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="term">期限：</label>
                            <input type="text" class="form-control" name="term" placeholder="Enter term" value="<?php echo !empty($cmf_edu_xingzheng_jiabanbuxiu['term'])?$cmf_edu_xingzheng_jiabanbuxiu['term']:''; ?>">
                            <?php echo form_error('term','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="department">部门：</label>
                            <input type="text" class="form-control" name="department" placeholder="Enter department" value="<?php echo !empty($cmf_edu_xingzheng_jiabanbuxiu['department'])?$cmf_edu_xingzheng_jiabanbuxiu['department']:''; ?>">
                            <?php echo form_error('department','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="person">人员：</label>
                            <input type="text" class="form-control" name="person" placeholder="Enter person" value="<?php echo !empty($cmf_edu_xingzheng_jiabanbuxiu['person'])?$cmf_edu_xingzheng_jiabanbuxiu['person']:''; ?>">
                            <?php echo form_error('person','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="delayWorkTime">迟到工作时间：</label>
                            <input type="text" class="form-control" name="delayWorkTime" placeholder="Enter delayWorkTime" value="<?php echo !empty($cmf_edu_xingzheng_jiabanbuxiu['delayWorkTime'])?$cmf_edu_xingzheng_jiabanbuxiu['delayWorkTime']:''; ?>">
                            <?php echo form_error('delayWorkTime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="delayWorkNum">迟到工作数量：</label>
                            <input type="text" class="form-control" name="delayWorkNum" placeholder="Enter delayWorkNum" value="<?php echo !empty($cmf_edu_xingzheng_jiabanbuxiu['delayWorkNum'])?$cmf_edu_xingzheng_jiabanbuxiu['delayWorkNum']:''; ?>">
                            <?php echo form_error('delayWorkNum','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="buxiuTime">补休时间：</label>
                            <input type="text" class="form-control" name="buxiuTime" placeholder="Enter buxiuTime" value="<?php echo !empty($cmf_edu_xingzheng_jiabanbuxiu['buxiuTime'])?$cmf_edu_xingzheng_jiabanbuxiu['buxiuTime']:''; ?>">
                            <?php echo form_error('buxiuTime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="buxiuClass">补休类别：</label>
                            <input type="text" class="form-control" name="buxiuClass" placeholder="Enter buxiuClass" value="<?php echo !empty($cmf_edu_xingzheng_jiabanbuxiu['buxiuClass'])?$cmf_edu_xingzheng_jiabanbuxiu['buxiuClass']:''; ?>">
                            <?php echo form_error('buxiuClass','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="delayWorkStatus">迟到工作状态：</label>
                            <input type="text" class="form-control" name="delayWorkStatus" placeholder="Enter delayWorkStatus" value="<?php echo !empty($cmf_edu_xingzheng_jiabanbuxiu['delayWorkStatus'])?$cmf_edu_xingzheng_jiabanbuxiu['delayWorkStatus']:''; ?>">
                            <?php echo form_error('delayWorkStatus','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="delayWorkID">迟到工作ID：</label>
                            <input type="text" class="form-control" name="delayWorkID" placeholder="Enter delayWorkID" value="<?php echo !empty($cmf_edu_xingzheng_jiabanbuxiu['delayWorkID'])?$cmf_edu_xingzheng_jiabanbuxiu['delayWorkID']:''; ?>">
                            <?php echo form_error('delayWorkID','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="delayWorkMan">迟到工作人：</label>
                            <input type="text" class="form-control" name="delayWorkMan" placeholder="Enter delayWorkMan" value="<?php echo !empty($cmf_edu_xingzheng_jiabanbuxiu['delayWorkMan'])?$cmf_edu_xingzheng_jiabanbuxiu['delayWorkMan']:''; ?>">
                            <?php echo form_error('delayWorkMan','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="delayWorkExTime">迟到工作审核时间：</label>
                            <input type="text" class="form-control" name="delayWorkExTime" placeholder="Enter delayWorkExTime" value="<?php echo !empty($cmf_edu_xingzheng_jiabanbuxiu['delayWorkExTime'])?$cmf_edu_xingzheng_jiabanbuxiu['delayWorkExTime']:''; ?>">
                            <?php echo form_error('delayWorkExTime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="buxiuStatus">补休状态：</label>
                            <input type="radio" name="buxiuStatus" value="1">良好
                            <input type="radio" name="buxiuStatus" value="0">其他
                            <?php echo form_error('buxiuStatus','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="buxiuFlowId">补休工作流：</label>
                            <input type="text" class="form-control" name="buxiuFlowId" placeholder="Enter buxiuFlowId" value="<?php echo !empty($cmf_edu_xingzheng_jiabanbuxiu['buxiuFlowId'])?$cmf_edu_xingzheng_jiabanbuxiu['buxiuFlowId']:''; ?>">
                            <?php echo form_error('buxiuFlowId','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="buxiuExMan">补休审核人：</label>
                            <input type="text" class="form-control" name="buxiuExMan" placeholder="Enter buxiuExMan" value="<?php echo !empty($cmf_edu_xingzheng_jiabanbuxiu['buxiuExMan'])?$cmf_edu_xingzheng_jiabanbuxiu['buxiuExMan']:''; ?>">
                            <?php echo form_error('buxiuExMan','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="buxiuExTime">补休审核时间：</label>
                            <input type="text" class="form-control" name="buxiuExTime" placeholder="Enter buxiuExTime" value="<?php echo !empty($cmf_edu_xingzheng_jiabanbuxiu['buxiuExTime'])?$cmf_edu_xingzheng_jiabanbuxiu['buxiuExTime']:''; ?>">
                            <?php echo form_error('buxiuExTime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="personName">工作人员：</label>
                            <input type="text" class="form-control" name="personName" placeholder="Enter personName" value="<?php echo !empty($cmf_edu_xingzheng_jiabanbuxiu['personName'])?$cmf_edu_xingzheng_jiabanbuxiu['personName']:''; ?>">
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