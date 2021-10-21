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
                <div class="panel-heading"><?php echo $action; ?> 人力档案 <a href="<?php echo site_url('/oa/CmfHrmsFile/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="workId">工作ID：</label>
                            <input type="text" class="form-control" name="workId" placeholder="Enter workId" value="<?php echo !empty($cmf_hrms_file['workId'])?$cmf_hrms_file['workId']:''; ?>">
                            <?php echo form_error('workId','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="name">名称：</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter name" value="<?php echo !empty($cmf_hrms_file['name'])?$cmf_hrms_file['name']:''; ?>">
                            <?php echo form_error('name','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="inDepartment">所在部门：</label>
                            <input type="text" class="form-control" name="inDepartment" placeholder="Enter inDepartment" value="<?php echo !empty($cmf_hrms_file['inDepartment'])?$cmf_hrms_file['inDepartment']:''; ?>">
                            <?php echo form_error('inDepartment','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="sex">性别：</label>
                            <input type="radio" name="sex" value="1">男
                            <input type="radio" name="sex" value="0">女
                            <?php echo form_error('sex','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="marriage">婚否：</label>
                            <input type="radio" name="marriage" value="1">已婚
                            <input type="radio" name="marriage" value="0">未婚
                            <?php echo form_error('marriage','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="birthday">生日：</label>
                            <input readonly class="form-control" type="text" id="date-group1-4" placeholder="YYYY-MM-DD hh:mm" name="birthday">
                            <?php echo form_error('birthday','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="national">国籍：</label>
                            <input type="text" class="form-control" name="national" placeholder="Enter national" value="<?php echo !empty($cmf_hrms_file['national'])?$cmf_hrms_file['national']:''; ?>">
                            <?php echo form_error('national','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="political">政治面貌：</label>
                            <input type="radio" name="political" value="1">党员
                            <input type="radio" name="political" value="2">团员
                            <input type="radio" name="political" value="3">学生
                            <input type="radio" name="political" value="4">群众
                            <input type="radio" name="political" value="5">其他
                            <?php echo form_error('political','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="IDNo">身份证号码：</label>
                            <input type="text" class="form-control" name="IDNo" placeholder="Enter IDNo" value="<?php echo !empty($cmf_hrms_file['IDNo'])?$cmf_hrms_file['IDNo']:''; ?>">
                            <?php echo form_error('IDNo','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="hukou">户口：</label>
                            <input type="text" class="form-control" name="hukou" placeholder="Enter hukou" value="<?php echo !empty($cmf_hrms_file['hukou'])?$cmf_hrms_file['hukou']:''; ?>">
                            <?php echo form_error('hukou','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="jiguan">籍贯：</label>
                            <input type="text" class="form-control" name="jiguan" placeholder="Enter jiguan" value="<?php echo !empty($cmf_hrms_file['jiguan'])?$cmf_hrms_file['jiguan']:''; ?>">
                            <?php echo form_error('jiguan','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="insuranceNo">社会保险号码：</label>
                            <input type="text" class="form-control" name="insuranceNo" placeholder="Enter insuranceNo" value="<?php echo !empty($cmf_hrms_file['insuranceNo'])?$cmf_hrms_file['insuranceNo']:''; ?>">
                            <?php echo form_error('insuranceNo','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="address">家庭住址：</label>
                            <input type="text" class="form-control" name="address" placeholder="Enter address" value="<?php echo !empty($cmf_hrms_file['address'])?$cmf_hrms_file['address']:''; ?>">
                            <?php echo form_error('address','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="postalCode">邮政编码：</label>
                            <input type="text" class="form-control" name="postalCode" placeholder="Enter postalCode" value="<?php echo !empty($cmf_hrms_file['postalCode'])?$cmf_hrms_file['postalCode']:''; ?>">
                            <?php echo form_error('postalCode','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="email">电子邮件：</label>
                            <input type="text" class="form-control" name="email" placeholder="Enter email" value="<?php echo !empty($cmf_hrms_file['email'])?$cmf_hrms_file['email']:''; ?>">
                            <?php echo form_error('email','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="telephone">电话号码：</label>
                            <input type="text" class="form-control" name="telephone" placeholder="Enter telephone" value="<?php echo !empty($cmf_hrms_file['telephone'])?$cmf_hrms_file['telephone']:''; ?>">
                            <?php echo form_error('telephone','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="studyExp">学习经历：</label>
                            <textarea name="studyExp" cols="50" rows="10" style="resize: none;">
                                <?php echo !empty($cmf_hrms_file['studyExp'])?$cmf_hrms_file['studyExp']:''; ?>
                            </textarea>
                            <?php echo form_error('studyExp','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="professional">专业：</label>
                            <input type="text" class="form-control" name="professional" placeholder="Enter professional" value="<?php echo !empty($cmf_hrms_file['professional'])?$cmf_hrms_file['professional']:''; ?>">
                            <?php echo form_error('professional','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="college">院校：</label>
                            <input type="text" class="form-control" name="college" placeholder="Enter college" value="<?php echo !empty($cmf_hrms_file['college'])?$cmf_hrms_file['college']:''; ?>">
                            <?php echo form_error('college','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="staff">职员：</label>
                            <input type="text" class="form-control" name="staff" placeholder="Enter staff" value="<?php echo !empty($cmf_hrms_file['staff'])?$cmf_hrms_file['staff']:''; ?>">
                            <?php echo form_error('staff','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="staffName">职员名称：</label>
                            <input type="text" class="form-control" name="staffName" placeholder="Enter staffName" value="<?php echo !empty($cmf_hrms_file['staffName'])?$cmf_hrms_file['staffName']:''; ?>">
                            <?php echo form_error('staffName','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="politicalLevel">政治面貌等级：</label>
                            <input type="radio" name="politicalLevel" value="1">一级
                            <input type="radio" name="politicalLevel" value="2">二级
                            <input type="radio" name="politicalLevel" value="3">三级
                            <input type="radio" name="politicalLevel" value="4">四级
                            <input type="radio" name="politicalLevel" value="5">五级
                            <?php echo form_error('politicalLevel','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="computerLevel">计算机等级：</label>
                            <input type="radio" name="computerLevel" value="1">一级
                            <input type="radio" name="computerLevel" value="2">二级
                            <input type="radio" name="computerLevel" value="3">三级
                            <?php echo form_error('computerLevel','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="foreign">外语：</label>
                            <input type="radio" name="foreign" value="1">英语
                            <input type="radio" name="foreign" value="2">日语
                            <input type="radio" name="foreign" value="3">韩语
                            <input type="radio" name="foreign" value="4">法语
                            <input type="radio" name="foreign" value="5">德语
                            <input type="radio" name="foreign" value="6">其他
                            <?php echo form_error('foreign','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="foreignLevel">外语能力：</label>
                            <input type="text" class="form-control" name="foreignLevel" placeholder="Enter foreignLevel" value="<?php echo !empty($cmf_hrms_file['foreignLevel'])?$cmf_hrms_file['foreignLevel']:''; ?>">
                            <?php echo form_error('foreignLevel','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="whenWork">何时工作：</label>
                            <input type="text" class="form-control" name="whenWork" placeholder="Enter whenWork" value="<?php echo !empty($cmf_hrms_file['whenWork'])?$cmf_hrms_file['whenWork']:''; ?>">
                            <?php echo form_error('whenWork','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="workTime">工作时间：</label>
                            <input type="text" class="form-control" name="workTime" placeholder="Enter workTime" value="<?php echo !empty($cmf_hrms_file['workTime'])?$cmf_hrms_file['workTime']:''; ?>">
                            <?php echo form_error('workTime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="workStatus">工作状态：</label>
                            <input type="radio" name="workStatus" value="1">良好
                            <input type="radio" name="workStatus" value="2">一般
                            <input type="radio" name="workStatus" value="0">其他
                            <?php echo form_error('workStatus','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="special">特殊情况：</label>
                            <textarea name="special" cols="50" rows="10" style="resize: none;">
                                <?php echo !empty($cmf_hrms_file['special'])?$cmf_hrms_file['special']:''; ?>
                            </textarea>
                            <?php echo form_error('special','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="memo">备注：</label>
                            <textarea name="memo" cols="50" rows="10" style="resize: none;">
                                <?php echo !empty($cmf_hrms_file['memo'])?$cmf_hrms_file['memo']:''; ?>
                            </textarea>
                            <?php echo form_error('memo','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="attach">附件：</label>
                            <input type="text" class="form-control" name="attach" placeholder="Enter attach" value="<?php echo !empty($cmf_hrms_file['attach'])?$cmf_hrms_file['attach']:''; ?>">
                            <?php echo form_error('attach','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="photo">照片：</label>
                            <input type="text" class="form-control" name="photo" placeholder="Enter photo" value="<?php echo !empty($cmf_hrms_file['photo'])?$cmf_hrms_file['photo']:''; ?>">
                            <?php echo form_error('photo','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="entryUnitDate">入职日期：</label>
                            <input readonly class="form-control" type="text" id="date-group1-5" placeholder="YYYY-MM-DD hh:mm" name="entryUnitDate">
                            <?php echo form_error('entryUnitDate','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="unitWorkTime">工作时间：</label>
                            <input type="text" class="form-control" name="unitWorkTime" placeholder="Enter unitWorkTime" value="<?php echo !empty($cmf_hrms_file['unitWorkTime'])?$cmf_hrms_file['unitWorkTime']:''; ?>">
                            <?php echo form_error('unitWorkTime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="quitDate">辞职日期：</label>
                            <input readonly class="form-control" type="text" id="date-group1-2" placeholder="YYYY-MM-DD hh:mm" name="quitDate">
                            <?php echo form_error('quitDate','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="nowContractDate">现合同日期：</label>
                            <input readonly class="form-control" type="text" id="date-group1-3" placeholder="YYYY-MM-DD hh:mm" name="nowContractDate">
                            <?php echo form_error('nowContractDate','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="nowContractEndDate">现合同结束日期：</label>
                            <input readonly class="form-control" type="text" id="pay_time" placeholder="YYYY-MM-DD hh:mm" name="nowContractEndDate">
                            <?php echo form_error('nowContractEndDate','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="tuixiuDate">退休日期：</label>
                            <input readonly class="form-control" type="text" id="create_time" placeholder="YYYY-MM-DD hh:mm" name="tuixiuDate">
                            <?php echo form_error('tuixiuDate','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="tuixiuAge">退休年龄：</label>
                            <input type="text" class="form-control" name="tuixiuAge" placeholder="Enter tuixiuAge" value="<?php echo !empty($cmf_hrms_file['tuixiuAge'])?$cmf_hrms_file['tuixiuAge']:''; ?>">
                            <?php echo form_error('tuixiuAge','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="workInFormal">工作形式：</label>
                            <input type="text" class="form-control" name="workInFormal" placeholder="Enter workInFormal" value="<?php echo !empty($cmf_hrms_file['workInFormal'])?$cmf_hrms_file['workInFormal']:''; ?>">
                            <?php echo form_error('workInFormal','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="firstContractDate">首次合同日期：</label>
                            <input readonly class="form-control" type="text" id="contract" placeholder="YYYY-MM-DD hh:mm" name="firstContractDate">
                            <?php echo form_error('firstContractDate','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="techLevel">教学等级：</label>
                            <input type="text" class="form-control" name="techLevel" placeholder="Enter techLevel" value="<?php echo !empty($cmf_hrms_file['techLevel'])?$cmf_hrms_file['techLevel']:''; ?>">
                            <?php echo form_error('techLevel','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="techExDate">教学审核日期：</label>
                            <input readonly class="form-control" type="text" id="teach" placeholder="YYYY-MM-DD hh:mm" name="techExDate">
                            <?php echo form_error('techExDate','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="staffType">职员类型：</label>
                            <input type="text" class="form-control" name="staffType" placeholder="Enter staffType" value="<?php echo !empty($cmf_hrms_file['staffType'])?$cmf_hrms_file['staffType']:''; ?>">
                            <?php echo form_error('staffType','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="staffbyName">由职员名称：</label>
                            <input type="text" class="form-control" name="staffbyName" placeholder="Enter staffbyName" value="<?php echo !empty($cmf_hrms_file['staffbyName'])?$cmf_hrms_file['staffbyName']:''; ?>">
                            <?php echo form_error('staffbyName','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="staffTechScore">职员教学分数：</label>
                            <input type="text" class="form-control" name="staffTechScore" placeholder="Enter staffTechScore" value="<?php echo !empty($cmf_hrms_file['staffTechScore'])?$cmf_hrms_file['staffTechScore']:''; ?>">
                            <?php echo form_error('staffTechScore','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="bank">银行：</label>
                            <input type="text" class="form-control" name="bank" placeholder="Enter bank" value="<?php echo !empty($cmf_hrms_file['bank'])?$cmf_hrms_file['bank']:''; ?>">
                            <?php echo form_error('bank','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="bankNo">银行帐号：</label>
                            <input type="text" class="form-control" name="bankNo" placeholder="Enter bankNo" value="<?php echo !empty($cmf_hrms_file['bankNo'])?$cmf_hrms_file['bankNo']:''; ?>">
                            <?php echo form_error('bankNo','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="salaryLevel">工资等级：</label>
                            <input type="text" class="form-control" name="salaryLevel" placeholder="Enter salaryLevel" value="<?php echo !empty($cmf_hrms_file['salaryLevel'])?$cmf_hrms_file['salaryLevel']:''; ?>">
                            <?php echo form_error('salaryLevel','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="staffyinliBirthday">职员生日：</label>
                            <input readonly class="form-control" type="text" id="birthday" placeholder="YYYY-MM-DD hh:mm" name="staffyinliBirthday">
                            <?php echo form_error('staffyinliBirthday','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="personDesp">个人描述：</label>
                            <textarea name="personDesp" cols="50" rows="10" style="resize: none;">
                                <?php echo !empty($cmf_hrms_file['personDesp'])?$cmf_hrms_file['personDesp']:''; ?>
                            </textarea>
                            <?php echo form_error('personDesp','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="passport">护照：</label>
                            <input type="text" class="form-control" name="passport" placeholder="Enter passport" value="<?php echo !empty($cmf_hrms_file['passport'])?$cmf_hrms_file['passport']:''; ?>">
                            <?php echo form_error('passport','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="bloody">血型：</label>
                            <input type="radio" name="bloody" value="1">A型
                            <input type="radio" name="bloody" value="2">B型
                            <input type="radio" name="bloody" value="3">O型
                            <input type="radio" name="bloody" value="4">AB型
                            <input type="radio" name="bloody" value="5">其他类型
                            <?php echo form_error('bloody','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="height">身高：</label>
                            <input type="text" class="form-control" name="height" placeholder="Enter height" value="<?php echo !empty($cmf_hrms_file['height'])?$cmf_hrms_file['height']:''; ?>">
                            <?php echo form_error('height','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="weight">体重：</label>
                            <input type="text" class="form-control" name="weight" placeholder="Enter weight" value="<?php echo !empty($cmf_hrms_file['weight'])?$cmf_hrms_file['weight']:''; ?>">
                            <?php echo form_error('weight','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="eyesight">视力：</label>
                            <input type="text" class="form-control" name="eyesight" placeholder="Enter eyesight" value="<?php echo !empty($cmf_hrms_file['eyesight'])?$cmf_hrms_file['eyesight']:''; ?>">
                            <?php echo form_error('eyesight','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="health">健康状况：</label>
                            <input type="radio" name="health" value="1">良好
                            <input type="radio" name="health" value="2">一般
                            <input type="radio" name="health" value="0">其他
                            <input type="text" class="form-control" name="health" placeholder="Enter health" value="<?php echo !empty($cmf_hrms_file['health'])?$cmf_hrms_file['health']:''; ?>">
                            <?php echo form_error('health','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="drivers">驾照：</label>
                            <input type="text" class="form-control" name="drivers" placeholder="Enter drivers" value="<?php echo !empty($cmf_hrms_file['drivers'])?$cmf_hrms_file['drivers']:''; ?>">
                            <?php echo form_error('drivers','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="workExp">工作经验：</label>
                            <input type="text" class="form-control" name="workExp" placeholder="Enter workExp" value="<?php echo !empty($cmf_hrms_file['workExp'])?$cmf_hrms_file['workExp']:''; ?>">
                            <?php echo form_error('workExp','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="workExpAttach">工作经验附件：</label>
                            <input type="text" class="form-control" name="workExpAttach" placeholder="Enter workExpAttach" value="<?php echo !empty($cmf_hrms_file['workExpAttach'])?$cmf_hrms_file['workExpAttach']:''; ?>">
                            <?php echo form_error('workExpAttach','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="socialRelation">社会关系：</label>
                            <input type="text" class="form-control" name="socialRelation" placeholder="Enter socialRelation" value="<?php echo !empty($cmf_hrms_file['socialRelation'])?$cmf_hrms_file['socialRelation']:''; ?>">
                            <?php echo form_error('socialRelation','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="socialRelationAttach">社会关系附件：</label>
                            <input type="text" class="form-control" name="socialRelationAttach" placeholder="Enter socialRelationAttach" value="<?php echo !empty($cmf_hrms_file['socialRelationAttach'])?$cmf_hrms_file['socialRelationAttach']:''; ?>">
                            <?php echo form_error('socialRelationAttach','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="recoverStaffDate">复职日期：</label>
                            <input readonly class="form-control" type="text" id="recovery" placeholder="YYYY-MM-DD hh:mm" name="recoverStaffDate">
                            <?php echo form_error('recoverStaffDate','<p class="help-block text-danger">','</p>'); ?>
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