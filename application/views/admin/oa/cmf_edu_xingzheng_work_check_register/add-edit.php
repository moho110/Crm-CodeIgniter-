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
                <div class="panel-heading"><?php echo $action; ?> 工作检测注册 <a href="<?php echo site_url('/oa/CmfEduXingzhengWorkCheckRegister/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="ID">编号：</label>
                            <input type="text" class="form-control" name="ID" placeholder="Enter ID" value="<?php echo !empty($cmf_edu_xingzheng_work_check_register['ID'])?$cmf_edu_xingzheng_work_check_register['ID']:''; ?>">
                            <?php echo form_error('ID','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="schoolName">学校名称：</label>
                            <input type="text" class="form-control" name="schoolName" placeholder="Enter schoolName" value="<?php echo !empty($cmf_edu_xingzheng_work_check_register['schoolName'])?$cmf_edu_xingzheng_work_check_register['schoolName']:''; ?>">
                            <?php echo form_error('schoolName','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="studyYear">学年：</label>
                            <input type="text" class="form-control" name="studyYear" placeholder="Enter studyYear" value="<?php echo !empty($cmf_edu_xingzheng_work_check_register['studyYear'])?$cmf_edu_xingzheng_work_check_register['studyYear']:''; ?>">
                            <?php echo form_error('studyYear','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="name">名称：</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter name" value="<?php echo !empty($cmf_edu_xingzheng_work_check_register['name'])?$cmf_edu_xingzheng_work_check_register['name']:''; ?>">
                            <?php echo form_error('name','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="userName">用户名称：</label>
                            <input type="text" class="form-control" name="userName" placeholder="Enter userName" value="<?php echo !empty($cmf_edu_xingzheng_work_check_register['userName'])?$cmf_edu_xingzheng_work_check_register['userName']:''; ?>">
                            <?php echo form_error('userName','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="classRoom">教室：</label>
                            <input type="text" class="form-control" name="classRoom" placeholder="Enter classRoom" value="<?php echo !empty($cmf_edu_xingzheng_work_check_register['classRoom'])?$cmf_edu_xingzheng_work_check_register['classRoom']:''; ?>">
                            <?php echo form_error('classRoom','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="staff">职务：</label>
                            <input type="text" class="form-control" name="staff" placeholder="Enter staff" value="<?php echo !empty($cmf_edu_xingzheng_work_check_register['staff'])?$cmf_edu_xingzheng_work_check_register['staff']:''; ?>">
                            <?php echo form_error('staff','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="fillDate">填写日期：</label>
                            <input type="text" class="form-control" name="fillDate" placeholder="Enter fillDate" value="<?php echo !empty($cmf_edu_xingzheng_work_check_register['fillDate'])?$cmf_edu_xingzheng_work_check_register['fillDate']:''; ?>">
                            <?php echo form_error('fillDate','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="dutyAndYearObj">责任对象：</label>
                            <input type="text" class="form-control" name="dutyAndYearObj" placeholder="Enter dutyAndYearObj" value="<?php echo !empty($cmf_edu_xingzheng_work_check_register['dutyAndYearObj'])?$cmf_edu_xingzheng_work_check_register['dutyAndYearObj']:''; ?>">
                            <?php echo form_error('dutyAndYearObj','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="personSummary">个人总结：</label>
                            <input type="text" class="form-control" name="personSummary" placeholder="Enter personSummary" value="<?php echo !empty($cmf_edu_xingzheng_work_check_register['personSummary'])?$cmf_edu_xingzheng_work_check_register['personSummary']:''; ?>">
                            <?php echo form_error('personSummary','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="personSySign">个人签名：</label>
                            <input type="text" class="form-control" name="personSySign" placeholder="Enter personSySign" value="<?php echo !empty($cmf_edu_xingzheng_work_check_register['personSySign'])?$cmf_edu_xingzheng_work_check_register['personSySign']:''; ?>">
                            <?php echo form_error('personSySign','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="personSySignDate">个人签名日期：</label>
                            <input type="text" class="form-control" name="personSySignDate" placeholder="Enter personSySignDate" value="<?php echo !empty($cmf_edu_xingzheng_work_check_register['personSySignDate'])?$cmf_edu_xingzheng_work_check_register['personSySignDate']:''; ?>">
                            <?php echo form_error('personSySignDate','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="recentYearPunishThings">近年奖惩情况：</label>
                            <input type="text" class="form-control" name="recentYearPunishThings" placeholder="Enter recentYearPunishThings" value="<?php echo !empty($cmf_edu_xingzheng_work_check_register['recentYearPunishThings'])?$cmf_edu_xingzheng_work_check_register['recentYearPunishThings']:''; ?>">
                            <?php echo form_error('recentYearPunishThings','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="classRoomIdeal">教室：</label>
                            <input type="text" class="form-control" name="classRoomIdeal" placeholder="Enter classRoomIdeal" value="<?php echo !empty($cmf_edu_xingzheng_work_check_register['classRoomIdeal'])?$cmf_edu_xingzheng_work_check_register['classRoomIdeal']:''; ?>">
                            <?php echo form_error('classRoomIdeal','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="rankandLevel">排名等级：</label>
                            <input type="text" class="form-control" name="rankandLevel" placeholder="Enter rankandLevel" value="<?php echo !empty($cmf_edu_xingzheng_work_check_register['rankandLevel'])?$cmf_edu_xingzheng_work_check_register['rankandLevel']:''; ?>">
                            <?php echo form_error('rankandLevel','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="classRoomSign">教室签名：</label>
                            <input type="text" class="form-control" name="classRoomSign" placeholder="Enter classRoomSign" value="<?php echo !empty($cmf_edu_xingzheng_work_check_register['classRoomSign'])?$cmf_edu_xingzheng_work_check_register['classRoomSign']:''; ?>">
                            <?php echo form_error('classRoomSign','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="classRoomDate">教室签名日期：</label>
                            <input type="text" class="form-control" name="classRoomDate" placeholder="Enter classRoomDate" value="<?php echo !empty($cmf_edu_xingzheng_work_check_register['classRoomDate'])?$cmf_edu_xingzheng_work_check_register['classRoomDate']:''; ?>">
                            <?php echo form_error('classRoomDate','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="schoolOpinion">学校意见：</label>
                            <input type="text" class="form-control" name="schoolOpinion" placeholder="Enter schoolOpinion" value="<?php echo !empty($cmf_edu_xingzheng_work_check_register['schoolOpinion'])?$cmf_edu_xingzheng_work_check_register['schoolOpinion']:''; ?>">
                            <?php echo form_error('schoolOpinion','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="ExLeaderGroupSign">领导审核类别签名：</label>
                            <input type="text" class="form-control" name="ExLeaderGroupSign" placeholder="Enter ExLeaderGroupSign" value="<?php echo !empty($cmf_edu_xingzheng_work_check_register['ExLeaderGroupSign'])?$cmf_edu_xingzheng_work_check_register['ExLeaderGroupSign']:''; ?>">
                            <?php echo form_error('ExLeaderGroupSign','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="ExLeaderGroupSignDate">领导审核类别签名日期：</label>
                            <input type="text" class="form-control" name="ExLeaderGroupSignDate" placeholder="Enter ExLeaderGroupSignDate" value="<?php echo !empty($cmf_edu_xingzheng_work_check_register['ExLeaderGroupSignDate'])?$cmf_edu_xingzheng_work_check_register['ExLeaderGroupSignDate']:''; ?>">
                            <?php echo form_error('ExLeaderGroupSignDate','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="personOpinion">个人意见：</label>
                            <input type="text" class="form-control" name="personOpinion" placeholder="Enter personOpinion" value="<?php echo !empty($cmf_edu_xingzheng_work_check_register['personOpinion'])?$cmf_edu_xingzheng_work_check_register['personOpinion']:''; ?>">
                            <?php echo form_error('personOpinion','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="personSign">个人签名：</label>
                            <input type="text" class="form-control" name="personSign" placeholder="Enter personSign" value="<?php echo !empty($cmf_edu_xingzheng_work_check_register['personSign'])?$cmf_edu_xingzheng_work_check_register['personSign']:''; ?>">
                            <?php echo form_error('personSign','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="personOpinionDate">个人意见日期：</label>
                            <input type="text" class="form-control" name="personOpinionDate" placeholder="Enter personOpinionDate" value="<?php echo !empty($cmf_edu_xingzheng_work_check_register['personOpinionDate'])?$cmf_edu_xingzheng_work_check_register['personOpinionDate']:''; ?>">
                            <?php echo form_error('personOpinionDate','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="workFlow">工作流：</label>
                            <input type="text" class="form-control" name="workFlow" placeholder="Enter workFlow" value="<?php echo !empty($cmf_edu_xingzheng_work_check_register['workFlow'])?$cmf_edu_xingzheng_work_check_register['workFlow']:''; ?>">
                            <?php echo form_error('workFlow','<p class="help-block text-danger">','</p>'); ?>
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