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
            <div class="panel-heading">人力档案详细内容<a href="<?php echo site_url('/oa/CmfHrmsFile/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfHrmsFile['ID'])?$CmfHrmsFile['ID']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>工作ID：</label>
                    <p><?php echo !empty($CmfHrmsFile['workId'])?$CmfHrmsFile['workId']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>名称：</label>
                    <p><?php echo !empty($CmfHrmsFile['name'])?$CmfHrmsFile['name']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>所在部门：</label>
                    <p><?php echo !empty($CmfHrmsFile['inDepartment'])?$CmfHrmsFile['inDepartment']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>性别：</label>
                    <p><?php echo !empty($CmfHrmsFile['sex'])?$CmfHrmsFile['sex']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>婚否：</label>
                    <p><?php echo !empty($CmfHrmsFile['marriage'])?$CmfHrmsFile['marriage']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>生日：</label>
                    <p><?php echo !empty($CmfHrmsFile['birthday'])?$CmfHrmsFile['birthday']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>国籍：</label>
                    <p><?php echo !empty($CmfHrmsFile['national'])?$CmfHrmsFile['national']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>政治面貌：</label>
                    <p><?php echo !empty($CmfHrmsFile['political'])?$CmfHrmsFile['political']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>身份证号码：</label>
                    <p><?php echo !empty($CmfHrmsFile['IDNo'])?$CmfHrmsFile['IDNo']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>户口：</label>
                    <p><?php echo !empty($CmfHrmsFile['hukou'])?$CmfHrmsFile['hukou']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>籍贯：</label>
                    <p><?php echo !empty($CmfHrmsFile['jiguan'])?$CmfHrmsFile['jiguan']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>社会保险号码：</label>
                    <p><?php echo !empty($CmfHrmsFile['insuranceNo'])?$CmfHrmsFile['insuranceNo']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>家庭住址：</label>
                    <p><?php echo !empty($CmfHrmsFile['address'])?$CmfHrmsFile['address']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>邮政编码：</label>
                    <p><?php echo !empty($CmfHrmsFile['postalCode'])?$CmfHrmsFile['postalCode']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>电子邮件：</label>
                    <p><?php echo !empty($CmfHrmsFile['email'])?$CmfHrmsFile['email']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>电话号码：</label>
                    <p><?php echo !empty($CmfHrmsFile['telephone'])?$CmfHrmsFile['telephone']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>学习经历：</label>
                    <p><?php echo !empty($CmfHrmsFile['studyExp'])?$CmfHrmsFile['studyExp']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>专业：</label>
                    <p><?php echo !empty($CmfHrmsFile['professional'])?$CmfHrmsFile['professional']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>院校：</label>
                    <p><?php echo !empty($CmfHrmsFile['college'])?$CmfHrmsFile['college']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>职员：</label>
                    <p><?php echo !empty($CmfHrmsFile['staff'])?$CmfHrmsFile['staff']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>职员名称：</label>
                    <p><?php echo !empty($CmfHrmsFile['staffName'])?$CmfHrmsFile['staffName']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>政治面貌等级：</label>
                    <p><?php echo !empty($CmfHrmsFile['politicalLevel'])?$CmfHrmsFile['politicalLevel']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>计算机等级：</label>
                    <p><?php echo !empty($CmfHrmsFile['computerLevel'])?$CmfHrmsFile['computerLevel']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>外语：</label>
                    <p><?php echo !empty($CmfHrmsFile['foreign'])?$CmfHrmsFile['foreign']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>外语能力：</label>
                    <p><?php echo !empty($CmfHrmsFile['foreignLevel'])?$CmfHrmsFile['foreignLevel']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>何时工作：</label>
                    <p><?php echo !empty($CmfHrmsFile['whenWork'])?$CmfHrmsFile['whenWork']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>工作时间：</label>
                    <p><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfHrmsFile['workTime'])); ?></p>
                </div>
                <div class="form-group">
                    <label>工作状态：</label>
                    <p><?php echo !empty($CmfHrmsFile['workStatus'])?$CmfHrmsFile['workStatus']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>特殊情况：</label>
                    <p><?php echo !empty($CmfHrmsFile['special'])?$CmfHrmsFile['special']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>备注：</label>
                    <p><?php echo !empty($CmfHrmsFile['memo'])?$CmfHrmsFile['memo']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>附件：</label>
                    <p><?php echo !empty($CmfHrmsFile['attach'])?$CmfHrmsFile['attach']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>照片：</label>
                    <p><?php echo !empty($CmfHrmsFile['photo'])?$CmfHrmsFile['photo']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>入职日期：</label>
                    <p><?php echo !empty($CmfHrmsFile['entryUnitDate'])?$CmfHrmsFile['entryUnitDate']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>工作时间：</label>
                    <p><?php echo !empty($CmfHrmsFile['unitWorkTime'])?$CmfHrmsFile['unitWorkTime']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>辞职日期：</label>
                    <p><?php echo !empty($CmfHrmsFile['quitDate'])?$CmfHrmsFile['quitDate']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>现合同日期：</label>
                    <p><?php echo !empty($CmfHrmsFile['nowContractDate'])?$CmfHrmsFile['nowContractDate']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>现合同结束日期：</label>
                    <p><?php echo !empty($CmfHrmsFile['nowContractEndDate'])?$CmfHrmsFile['nowContractEndDate']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>退休日期：</label>
                    <p><?php echo !empty($CmfHrmsFile['tuixiuDate'])?$CmfHrmsFile['tuixiuDate']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>退休年龄：</label>
                    <p><?php echo !empty($CmfHrmsFile['tuixiuAge'])?$CmfHrmsFile['tuixiuAge']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>工作形式：</label>
                    <p><?php echo !empty($CmfHrmsFile['workInFormal'])?$CmfHrmsFile['workInFormal']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>首次合同日期：</label>
                    <p><?php echo !empty($CmfHrmsFile['firstContractDate'])?$CmfHrmsFile['firstContractDate']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>教学等级：</label>
                    <p><?php echo !empty($CmfHrmsFile['techLevel'])?$CmfHrmsFile['techLevel']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>教学审核日期：</label>
                    <p><?php echo !empty($CmfHrmsFile['techExDate'])?$CmfHrmsFile['techExDate']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>职员类型：</label>
                    <p><?php echo !empty($CmfHrmsFile['staffType'])?$CmfHrmsFile['staffType']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>由职员名称：</label>
                    <p><?php echo !empty($CmfHrmsFile['staffbyName'])?$CmfHrmsFile['staffbyName']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>职员教学分数：</label>
                    <p><?php echo !empty($CmfHrmsFile['staffTechScore'])?$CmfHrmsFile['staffTechScore']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>银行：</label>
                    <p><?php echo !empty($CmfHrmsFile['bank'])?$CmfHrmsFile['bank']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>银行帐号：</label>
                    <p><?php echo !empty($CmfHrmsFile['bankNo'])?$CmfHrmsFile['bankNo']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>工资等级：</label>
                    <p><?php echo !empty($CmfHrmsFile['salaryLevel'])?$CmfHrmsFile['salaryLevel']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>职员生日：</label>
                    <p><?php echo !empty($CmfHrmsFile['staffyinliBirthday'])?$CmfHrmsFile['staffyinliBirthday']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>个人描述：</label>
                    <p><?php echo !empty($CmfHrmsFile['personDesp'])?$CmfHrmsFile['personDesp']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>护照：</label>
                    <p><?php echo !empty($CmfHrmsFile['passport'])?$CmfHrmsFile['passport']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>血型：</label>
                    <p><?php echo !empty($CmfHrmsFile['bloody'])?$CmfHrmsFile['bloody']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>身高：</label>
                    <p><?php echo !empty($CmfHrmsFile['height'])?$CmfHrmsFile['height']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>体重：</label>
                    <p><?php echo !empty($CmfHrmsFile['weight'])?$CmfHrmsFile['weight']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>视力：</label>
                    <p><?php echo !empty($CmfHrmsFile['eyesight'])?$CmfHrmsFile['eyesight']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>健康状况：</label>
                    <p><?php echo !empty($CmfHrmsFile['health'])?$CmfHrmsFile['health']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>驾照：</label>
                    <p><?php echo !empty($CmfHrmsFile['drivers'])?$CmfHrmsFile['drivers']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>工作经验：</label>
                    <p><?php echo !empty($CmfHrmsFile['workExp'])?$CmfHrmsFile['workExp']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>工作经验附件：</label>
                    <p><?php echo !empty($CmfHrmsFile['workExpAttach'])?$CmfHrmsFile['workExpAttach']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>社会关系：</label>
                    <p><?php echo !empty($CmfHrmsFile['socialRelation'])?$CmfHrmsFile['socialRelation']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>社会关系附件：</label>
                    <p><?php echo !empty($CmfHrmsFile['socialRelationAttach'])?$CmfHrmsFile['socialRelationAttach']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>复职日期：</label>
                    <p><?php echo !empty($CmfHrmsFile['recoverStaffDate'])?$CmfHrmsFile['recoverStaffDate']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>