<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_header");
?>
<?php if(!empty($success_msg)){ ?>
    <div class="col-xs-12">
        <div class="alert alert-success"><?php echo $success_msg; ?></div>
    </div>
    <?php }elseif(!empty($error_msg)){ ?>
    <div class="col-xs-12">
        <div class="alert alert-danger"><?php echo $error_msg; ?></div>
    </div>
    <?php } ?>
<div class="container">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">工作检测注册详细内容<a href="<?php echo site_url('/oa/CmfEduXingzhengWorkCheckRegister/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfEduXingzhengWorkCheckRegister['ID'])?$CmfEduXingzhengWorkCheckRegister['ID']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>学校名称：</label>
                    <p><?php echo !empty($CmfEduXingzhengWorkCheckRegister['schoolName'])?$CmfEduXingzhengWorkCheckRegister['schoolName']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>学年：</label>
                    <p><?php echo !empty($CmfEduXingzhengWorkCheckRegister['studyYear'])?$CmfEduXingzhengWorkCheckRegister['studyYear']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>名称：</label>
                    <p><?php echo !empty($CmfEduXingzhengWorkCheckRegister['name'])?$CmfEduXingzhengWorkCheckRegister['name']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>用户名称：</label>
                    <p><?php echo !empty($CmfEduXingzhengWorkCheckRegister['userName'])?$CmfEduXingzhengWorkCheckRegister['userName']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>教室：</label>
                    <p><?php echo !empty($CmfEduXingzhengWorkCheckRegister['classRoom'])?$CmfEduXingzhengWorkCheckRegister['classRoom']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>职务：</label>
                    <p><?php echo !empty($CmfEduXingzhengWorkCheckRegister['staff'])?$CmfEduXingzhengWorkCheckRegister['staff']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>填写日期：</label>
                    <p><?php echo !empty($CmfEduXingzhengWorkCheckRegister['fillDate'])?$CmfEduXingzhengWorkCheckRegister['fillDate']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>责任对象：</label>
                    <p><?php echo !empty($CmfEduXingzhengWorkCheckRegister['dutyAndYearObj'])?$CmfEduXingzhengWorkCheckRegister['dutyAndYearObj']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>个人总结：</label>
                    <p><?php echo !empty($CmfEduXingzhengWorkCheckRegister['personSummary'])?$CmfEduXingzhengWorkCheckRegister['personSummary']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>个人签名：</label>
                    <p><?php echo !empty($CmfEduXingzhengWorkCheckRegister['personSySign'])?$CmfEduXingzhengWorkCheckRegister['personSySign']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>个人签名日期：</label>
                    <p><?php echo !empty($CmfEduXingzhengWorkCheckRegister['personSySignDate'])?$CmfEduXingzhengWorkCheckRegister['personSySignDate']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>近年奖惩情况：</label>
                    <p><?php echo !empty($CmfEduXingzhengWorkCheckRegister['recentYearPunishThings'])?$CmfEduXingzhengWorkCheckRegister['recentYearPunishThings']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>教室：</label>
                    <p><?php echo !empty($CmfEduXingzhengWorkCheckRegister['classRoomIdeal'])?$CmfEduXingzhengWorkCheckRegister['classRoomIdeal']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>排名等级：</label>
                    <p><?php echo !empty($CmfEduXingzhengWorkCheckRegister['rankandLevel'])?$CmfEduXingzhengWorkCheckRegister['rankandLevel']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>教室签名：</label>
                    <p><?php echo !empty($CmfEduXingzhengWorkCheckRegister['classRoomSign'])?$CmfEduXingzhengWorkCheckRegister['classRoomSign']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>教室签名日期：</label>
                    <p><?php echo !empty($CmfEduXingzhengWorkCheckRegister['classRoomDate'])?$CmfEduXingzhengWorkCheckRegister['classRoomDate']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>学校意见：</label>
                    <p><?php echo !empty($CmfEduXingzhengWorkCheckRegister['schoolOpinion'])?$CmfEduXingzhengWorkCheckRegister['schoolOpinion']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>领导审核类别签名：</label>
                    <p><?php echo !empty($CmfEduXingzhengWorkCheckRegister['ExLeaderGroupSign'])?$CmfEduXingzhengWorkCheckRegister['ExLeaderGroupSign']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>领导审核类别签名日期：</label>
                    <p><?php echo !empty($CmfEduXingzhengWorkCheckRegister['ExLeaderGroupSignDate'])?$CmfEduXingzhengWorkCheckRegister['ExLeaderGroupSignDate']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>个人意见：</label>
                    <p><?php echo !empty($CmfEduXingzhengWorkCheckRegister['personOpinion'])?$CmfEduXingzhengWorkCheckRegister['personOpinion']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>个人签名：</label>
                    <p><?php echo !empty($CmfEduXingzhengWorkCheckRegister['personSign'])?$CmfEduXingzhengWorkCheckRegister['personSign']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>个人意见日期：</label>
                    <p><?php echo !empty($CmfEduXingzhengWorkCheckRegister['personOpinionDate'])?$CmfEduXingzhengWorkCheckRegister['personOpinionDate']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>工作流：</label>
                    <p><?php echo !empty($CmfEduXingzhengWorkCheckRegister['workFlow'])?$CmfEduXingzhengWorkCheckRegister['workFlow']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>