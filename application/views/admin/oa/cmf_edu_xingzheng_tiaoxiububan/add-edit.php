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
                <div class="panel-heading"><?php echo $action; ?> 行政调休补班 <a href="<?php echo site_url('/oa/CmfEduXingzhengTiaoxiububan/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="ID">编号：</label>
                            <input type="text" class="form-control" name="ID" placeholder="Enter ID" value="<?php echo !empty($cmf_edu_xingzheng_tiaoxiububan['ID'])?$cmf_edu_xingzheng_tiaoxiububan['ID']:''; ?>">
                            <?php echo form_error('ID','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="term">期限：</label>
                            <input type="text" class="form-control" name="term" placeholder="Enter term" value="<?php echo !empty($cmf_edu_xingzheng_tiaoxiububan['term'])?$cmf_edu_xingzheng_tiaoxiububan['term']:''; ?>">
                            <?php echo form_error('term','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="department">部门：</label>
                            <input type="text" class="form-control" name="department" placeholder="Enter department" value="<?php echo !empty($cmf_edu_xingzheng_tiaoxiububan['department'])?$cmf_edu_xingzheng_tiaoxiububan['department']:''; ?>">
                            <?php echo form_error('department','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="person">工作人员：</label>
                            <input type="text" class="form-control" name="person" placeholder="Enter person" value="<?php echo !empty($cmf_edu_xingzheng_tiaoxiububan['person'])?$cmf_edu_xingzheng_tiaoxiububan['person']:''; ?>">
                            <?php echo form_error('person','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="tiaoxiuTime">调休时间：</label>
                            <input type="text" class="form-control" name="tiaoxiuTime" placeholder="Enter tiaoxiuTime" value="<?php echo !empty($cmf_edu_xingzheng_tiaoxiububan['tiaoxiuTime'])?$cmf_edu_xingzheng_tiaoxiububan['tiaoxiuTime']:''; ?>">
                            <?php echo form_error('tiaoxiuTime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="tiaoxiuStart">调休上班：</label>
                            <input type="text" class="form-control" name="tiaoxiuStart" placeholder="Enter tiaoxiuStart" value="<?php echo !empty($cmf_edu_xingzheng_tiaoxiububan['tiaoxiuStart'])?$cmf_edu_xingzheng_tiaoxiububan['tiaoxiuStart']:''; ?>">
                            <?php echo form_error('tiaoxiuStart','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="bubanTime">补班时间：</label>
                            <input type="text" class="form-control" name="bubanTime" placeholder="Enter bubanTime" value="<?php echo !empty($cmf_edu_xingzheng_tiaoxiububan['bubanTime'])?$cmf_edu_xingzheng_tiaoxiububan['bubanTime']:''; ?>">
                            <?php echo form_error('bubanTime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="bubanStart">补班上班：</label>
                            <input type="text" class="form-control" name="bubanStart" placeholder="Enter bubanStart" value="<?php echo !empty($cmf_edu_xingzheng_tiaoxiububan['bubanStart'])?$cmf_edu_xingzheng_tiaoxiububan['bubanStart']:''; ?>">
                            <?php echo form_error('bubanStart','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="tiaoxiuExStatus">调休审核状态：</label>
                            <input type="text" class="form-control" name="tiaoxiuExStatus" placeholder="Enter tiaoxiuExStatus" value="<?php echo !empty($cmf_edu_xingzheng_tiaoxiububan['tiaoxiuExStatus'])?$cmf_edu_xingzheng_tiaoxiububan['tiaoxiuExStatus']:''; ?>">
                            <?php echo form_error('tiaoxiuExStatus','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="tiaoxiuWorkFlowID">调休工作流ID：</label>
                            <input type="text" class="form-control" name="tiaoxiuWorkFlowID" placeholder="Enter tiaoxiuWorkFlowID" value="<?php echo !empty($cmf_edu_xingzheng_tiaoxiububan['tiaoxiuWorkFlowID'])?$cmf_edu_xingzheng_tiaoxiububan['tiaoxiuWorkFlowID']:''; ?>">
                            <?php echo form_error('tiaoxiuWorkFlowID','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="tiaoxiuExMan">调休审核人员：</label>
                            <input type="text" class="form-control" name="tiaoxiuExMan" placeholder="Enter tiaoxiuExMan" value="<?php echo !empty($cmf_edu_xingzheng_tiaoxiububan['tiaoxiuExMan'])?$cmf_edu_xingzheng_tiaoxiububan['tiaoxiuExMan']:''; ?>">
                            <?php echo form_error('tiaoxiuExMan','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="tiaoxiuExTime">调休审核时间：</label>
                            <input type="text" class="form-control" name="tiaoxiuExTime" placeholder="Enter tiaoxiuExTime" value="<?php echo !empty($cmf_edu_xingzheng_tiaoxiububan['tiaoxiuExTime'])?$cmf_edu_xingzheng_tiaoxiububan['tiaoxiuExTime']:''; ?>">
                            <?php echo form_error('tiaoxiuExTime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="bubanExStatus">补班审核状态：</label>
                            <input type="text" class="form-control" name="bubanExStatus" placeholder="Enter bubanExStatus" value="<?php echo !empty($cmf_edu_xingzheng_tiaoxiububan['bubanExStatus'])?$cmf_edu_xingzheng_tiaoxiububan['bubanExStatus']:''; ?>">
                            <?php echo form_error('bubanExStatus','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="bubanWorkFlowID">补班工作流ID：</label>
                            <input type="text" class="form-control" name="bubanWorkFlowID" placeholder="Enter bubanWorkFlowID" value="<?php echo !empty($cmf_edu_xingzheng_tiaoxiububan['bubanWorkFlowID'])?$cmf_edu_xingzheng_tiaoxiububan['bubanWorkFlowID']:''; ?>">
                            <?php echo form_error('bubanWorkFlowID','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="bubanExMan">补班审核人员：</label>
                            <input type="text" class="form-control" name="bubanExMan" placeholder="Enter bubanExMan" value="<?php echo !empty($cmf_edu_xingzheng_tiaoxiububan['bubanExMan'])?$cmf_edu_xingzheng_tiaoxiububan['bubanExMan']:''; ?>">
                            <?php echo form_error('bubanExMan','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="bubanExTime">补班审核时间：</label>
                            <input type="text" class="form-control" name="bubanExTime" placeholder="Enter bubanExTime" value="<?php echo !empty($cmf_edu_xingzheng_tiaoxiububan['bubanExTime'])?$cmf_edu_xingzheng_tiaoxiububan['bubanExTime']:''; ?>">
                            <?php echo form_error('bubanExTime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="personName">工作人员名称：</label>
                            <input type="text" class="form-control" name="personName" placeholder="Enter personName" value="<?php echo !empty($cmf_edu_xingzheng_tiaoxiububan['personName'])?$cmf_edu_xingzheng_tiaoxiububan['personName']:''; ?>">
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