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
                <div class="panel-heading"><?php echo $action; ?> 人才库 <a href="<?php echo site_url('/oa/CmfHrmsZprencaiku/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="ID">编号：</label>
                            <input type="text" class="form-control" name="ID" placeholder="Enter ID" value="<?php echo !empty($cmf_hrms_zprencaiku['ID'])?$cmf_hrms_zprencaiku['ID']:''; ?>">
                            <?php echo form_error('ID','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="Name">名称：</label>
                            <input type="text" class="form-control" name="Name" placeholder="Enter Name" value="<?php echo !empty($cmf_hrms_zprencaiku['Name'])?$cmf_hrms_zprencaiku['Name']:''; ?>">
                            <?php echo form_error('Name','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="sex">性别：</label>
                            <input type="text" class="form-control" name="sex" placeholder="Enter sex" value="<?php echo !empty($cmf_hrms_zprencaiku['sex'])?$cmf_hrms_zprencaiku['sex']:''; ?>">
                            <?php echo form_error('sex','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="contact">联系方式：</label>
                            <input type="text" class="form-control" name="contact" placeholder="Enter contact" value="<?php echo !empty($cmf_hrms_zprencaiku['contact'])?$cmf_hrms_zprencaiku['contact']:''; ?>">
                            <?php echo form_error('contact','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="IDNo">身份证号码：</label>
                            <input type="text" class="form-control" name="IDNo" placeholder="Enter IDNo" value="<?php echo !empty($cmf_hrms_zprencaiku['IDNo'])?$cmf_hrms_zprencaiku['IDNo']:''; ?>">
                            <?php echo form_error('IDNo','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="national">国籍：</label>
                            <input type="text" class="form-control" name="national" placeholder="Enter national" value="<?php echo !empty($cmf_hrms_zprencaiku['national'])?$cmf_hrms_zprencaiku['national']:''; ?>">
                            <?php echo form_error('national','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="birthday">出生年月日：</label>
                            <input type="text" class="form-control" name="birthday" placeholder="Enter birthday" value="<?php echo !empty($cmf_hrms_zprencaiku['birthday'])?$cmf_hrms_zprencaiku['birthday']:''; ?>">
                            <?php echo form_error('birthday','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="political">政治面貌：</label>
                            <input type="text" class="form-control" name="political" placeholder="Enter political" value="<?php echo !empty($cmf_hrms_zprencaiku['political'])?$cmf_hrms_zprencaiku['political']:''; ?>">
                            <?php echo form_error('political','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="jiguan">籍贯：</label>
                            <input type="text" class="form-control" name="jiguan" placeholder="Enter jiguan" value="<?php echo !empty($cmf_hrms_zprencaiku['jiguan'])?$cmf_hrms_zprencaiku['jiguan']:''; ?>">
                            <?php echo form_error('jiguan','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="hukouInPos">户口所在地：</label>
                            <input type="text" class="form-control" name="hukouInPos" placeholder="Enter hukouInPos" value="<?php echo !empty($cmf_hrms_zprencaiku['hukouInPos'])?$cmf_hrms_zprencaiku['hukouInPos']:''; ?>">
                            <?php echo form_error('hukouInPos','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="studyExp">学习经历：</label>
                            <input type="text" class="form-control" name="studyExp" placeholder="Enter studyExp" value="<?php echo !empty($cmf_hrms_zprencaiku['studyExp'])?$cmf_hrms_zprencaiku['studyExp']:''; ?>">
                            <?php echo form_error('studyExp','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="staffName">职员名称：</label>
                            <input type="text" class="form-control" name="staffName" placeholder="Enter staffName" value="<?php echo !empty($cmf_hrms_zprencaiku['staffName'])?$cmf_hrms_zprencaiku['staffName']:''; ?>">
                            <?php echo form_error('staffName','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="college">院校：</label>
                            <input type="text" class="form-control" name="college" placeholder="Enter college" value="<?php echo !empty($cmf_hrms_zprencaiku['college'])?$cmf_hrms_zprencaiku['college']:''; ?>">
                            <?php echo form_error('college','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="professional">专业：</label>
                            <input type="text" class="form-control" name="professional" placeholder="Enter professional" value="<?php echo !empty($cmf_hrms_zprencaiku['professional'])?$cmf_hrms_zprencaiku['professional']:''; ?>">
                            <?php echo form_error('professional','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="secPro">第二专业：</label>
                            <input type="text" class="form-control" name="secPro" placeholder="Enter secPro" value="<?php echo !empty($cmf_hrms_zprencaiku['secPro'])?$cmf_hrms_zprencaiku['secPro']:''; ?>">
                            <?php echo form_error('secPro','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="email">电子邮件：</label>
                            <input type="text" class="form-control" name="email" placeholder="Enter email" value="<?php echo !empty($cmf_hrms_zprencaiku['email'])?$cmf_hrms_zprencaiku['email']:''; ?>">
                            <?php echo form_error('email','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="familyTelephone">家庭电话：</label>
                            <input type="text" class="form-control" name="familyTelephone" placeholder="Enter familyTelephone" value="<?php echo !empty($cmf_hrms_zprencaiku['familyTelephone'])?$cmf_hrms_zprencaiku['familyTelephone']:''; ?>">
                            <?php echo form_error('familyTelephone','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="familyAddr">家庭住址：</label>
                            <input type="text" class="form-control" name="familyAddr" placeholder="Enter familyAddr" value="<?php echo !empty($cmf_hrms_zprencaiku['familyAddr'])?$cmf_hrms_zprencaiku['familyAddr']:''; ?>">
                            <?php echo form_error('familyAddr','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="postalCode">邮政编码：</label>
                            <input type="text" class="form-control" name="postalCode" placeholder="Enter postalCode" value="<?php echo !empty($cmf_hrms_zprencaiku['postalCode'])?$cmf_hrms_zprencaiku['postalCode']:''; ?>">
                            <?php echo form_error('postalCode','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="edution">教育程度：</label>
                            <input type="text" class="form-control" name="edution" placeholder="Enter edution" value="<?php echo !empty($cmf_hrms_zprencaiku['edution'])?$cmf_hrms_zprencaiku['edution']:''; ?>">
                            <?php echo form_error('edution','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="workExp">工作经历：</label>
                            <input type="text" class="form-control" name="workExp" placeholder="Enter workExp" value="<?php echo !empty($cmf_hrms_zprencaiku['workExp'])?$cmf_hrms_zprencaiku['workExp']:''; ?>">
                            <?php echo form_error('workExp','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="selfEval">自我评估：</label>
                            <input type="text" class="form-control" name="selfEval" placeholder="Enter selfEval" value="<?php echo !empty($cmf_hrms_zprencaiku['selfEval'])?$cmf_hrms_zprencaiku['selfEval']:''; ?>">
                            <?php echo form_error('selfEval','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="englishAbillity">英语能力：</label>
                            <input type="text" class="form-control" name="englishAbillity" placeholder="Enter englishAbillity" value="<?php echo !empty($cmf_hrms_zprencaiku['englishAbillity'])?$cmf_hrms_zprencaiku['englishAbillity']:''; ?>">
                            <?php echo form_error('englishAbillity','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="traingExp">培训经历：</label>
                            <input type="text" class="form-control" name="traingExp" placeholder="Enter traingExp" value="<?php echo !empty($cmf_hrms_zprencaiku['traingExp'])?$cmf_hrms_zprencaiku['traingExp']:''; ?>">
                            <?php echo form_error('traingExp','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="photo">照片：</label>
                            <input type="text" class="form-control" name="photo" placeholder="Enter photo" value="<?php echo !empty($cmf_hrms_zprencaiku['photo'])?$cmf_hrms_zprencaiku['photo']:''; ?>">
                            <?php echo form_error('photo','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="attach">附件：</label>
                            <input type="text" class="form-control" name="attach" placeholder="Enter attach" value="<?php echo !empty($cmf_hrms_zprencaiku['attach'])?$cmf_hrms_zprencaiku['attach']:''; ?>">
                            <?php echo form_error('attach','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="projectExp">项目经验：</label>
                            <input type="text" class="form-control" name="projectExp" placeholder="Enter projectExp" value="<?php echo !empty($cmf_hrms_zprencaiku['projectExp'])?$cmf_hrms_zprencaiku['projectExp']:''; ?>">
                            <?php echo form_error('projectExp','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="resumeLetter">求职信：</label>
                            <input type="text" class="form-control" name="resumeLetter" placeholder="Enter resumeLetter" value="<?php echo !empty($cmf_hrms_zprencaiku['resumeLetter'])?$cmf_hrms_zprencaiku['resumeLetter']:''; ?>">
                            <?php echo form_error('resumeLetter','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="proObject">项目对象：</label>
                            <input type="text" class="form-control" name="proObject" placeholder="Enter proObject" value="<?php echo !empty($cmf_hrms_zprencaiku['proObject'])?$cmf_hrms_zprencaiku['proObject']:''; ?>">
                            <?php echo form_error('proObject','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="luyongStatus">录用状态：</label>
                            <input type="text" class="form-control" name="luyongStatus" placeholder="Enter luyongStatus" value="<?php echo !empty($cmf_hrms_zprencaiku['luyongStatus'])?$cmf_hrms_zprencaiku['luyongStatus']:''; ?>">
                            <?php echo form_error('luyongStatus','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="creator">创建人：</label>
                            <input type="text" class="form-control" name="creator" placeholder="Enter creator" value="<?php echo !empty($cmf_hrms_zprencaiku['creator'])?$cmf_hrms_zprencaiku['creator']:''; ?>">
                            <?php echo form_error('creator','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="createTime">创建时间：</label>
                            <input type="text" class="form-control" name="createTime" placeholder="Enter createTime" value="<?php echo !empty($cmf_hrms_zprencaiku['createTime'])?$cmf_hrms_zprencaiku['createTime']:''; ?>">
                            <?php echo form_error('createTime','<p class="help-block text-danger">','</p>'); ?>
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