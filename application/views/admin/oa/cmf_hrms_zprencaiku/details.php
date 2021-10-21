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
            <div class="panel-heading">人才库详细内容<a href="<?php echo site_url('/oa/CmfHrmsZprencaiku/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfHrmsZprencaiku['ID'])?$CmfHrmsZprencaiku['ID']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>名称：</label>
                    <p><?php echo !empty($CmfHrmsZprencaiku['Name'])?$CmfHrmsZprencaiku['Name']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>性别：</label>
                    <p><?php echo !empty($CmfHrmsZprencaiku['sex'])?$CmfHrmsZprencaiku['sex']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>联系方式：</label>
                    <p><?php echo !empty($CmfHrmsZprencaiku['contact'])?$CmfHrmsZprencaiku['contact']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>身份证号码：</label>
                    <p><?php echo !empty($CmfHrmsZprencaiku['IDNo'])?$CmfHrmsZprencaiku['IDNo']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>国籍：</label>
                    <p><?php echo !empty($CmfHrmsZprencaiku['national'])?$CmfHrmsZprencaiku['national']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>出生年月日：</label>
                    <p><?php echo !empty($CmfHrmsZprencaiku['birthday'])?$CmfHrmsZprencaiku['birthday']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>政治面貌：</label>
                    <p><?php echo !empty($CmfHrmsZprencaiku['political'])?$CmfHrmsZprencaiku['political']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>籍贯：</label>
                    <p><?php echo !empty($CmfHrmsZprencaiku['jiguan'])?$CmfHrmsZprencaiku['jiguan']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>户口所在地：</label>
                    <p><?php echo !empty($CmfHrmsZprencaiku['hukouInPos'])?$CmfHrmsZprencaiku['hukouInPos']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>学习经历：</label>
                    <p><?php echo !empty($CmfHrmsZprencaiku['studyExp'])?$CmfHrmsZprencaiku['studyExp']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>职员名称：</label>
                    <p><?php echo !empty($CmfHrmsZprencaiku['staffName'])?$CmfHrmsZprencaiku['staffName']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>院校：</label>
                    <p><?php echo !empty($CmfHrmsZprencaiku['college'])?$CmfHrmsZprencaiku['college']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>专业：</label>
                    <p><?php echo !empty($CmfHrmsZprencaiku['professional'])?$CmfHrmsZprencaiku['professional']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>第二专业：</label>
                    <p><?php echo !empty($CmfHrmsZprencaiku['secPro'])?$CmfHrmsZprencaiku['secPro']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>电子邮件：</label>
                    <p><?php echo !empty($CmfHrmsZprencaiku['email'])?$CmfHrmsZprencaiku['email']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>家庭电话：</label>
                    <p><?php echo !empty($CmfHrmsZprencaiku['familyTelephone'])?$CmfHrmsZprencaiku['familyTelephone']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>家庭住址：</label>
                    <p><?php echo !empty($CmfHrmsZprencaiku['familyAddr'])?$CmfHrmsZprencaiku['familyAddr']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>邮政编码：</label>
                    <p><?php echo !empty($CmfHrmsZprencaiku['postalCode'])?$CmfHrmsZprencaiku['postalCode']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>教育程度：</label>
                    <p><?php echo !empty($CmfHrmsZprencaiku['edution'])?$CmfHrmsZprencaiku['edution']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>工作经历：</label>
                    <p><?php echo !empty($CmfHrmsZprencaiku['workExp'])?$CmfHrmsZprencaiku['workExp']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>自我评估：</label>
                    <p><?php echo !empty($CmfHrmsZprencaiku['selfEval'])?$CmfHrmsZprencaiku['selfEval']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>英语能力：</label>
                    <p><?php echo !empty($CmfHrmsZprencaiku['englishAbillity'])?$CmfHrmsZprencaiku['englishAbillity']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>培训经历：</label>
                    <p><?php echo !empty($CmfHrmsZprencaiku['traingExp'])?$CmfHrmsZprencaiku['traingExp']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>照片：</label>
                    <p><?php echo !empty($CmfHrmsZprencaiku['photo'])?$CmfHrmsZprencaiku['photo']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>附件：</label>
                    <p><?php echo !empty($CmfHrmsZprencaiku['attach'])?$CmfHrmsZprencaiku['attach']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>项目经验：</label>
                    <p><?php echo !empty($CmfHrmsZprencaiku['projectExp'])?$CmfHrmsZprencaiku['projectExp']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>求职信：</label>
                    <p><?php echo !empty($CmfHrmsZprencaiku['resumeLetter'])?$CmfHrmsZprencaiku['resumeLetter']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>项目对象：</label>
                    <p><?php echo !empty($CmfHrmsZprencaiku['proObject'])?$CmfHrmsZprencaiku['proObject']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>录用状态：</label>
                    <p><?php echo !empty($CmfHrmsZprencaiku['luyongStatus'])?$CmfHrmsZprencaiku['luyongStatus']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建人：</label>
                    <p><?php echo !empty($CmfHrmsZprencaiku['creator'])?$CmfHrmsZprencaiku['creator']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建时间：</label>
                    <p><?php echo !empty($CmfHrmsZprencaiku['createTime'])?$CmfHrmsZprencaiku['createTime']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>