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
            <div class="panel-heading">人力档案录用详细内容<a href="<?php echo site_url('/oa/CmfHrmsFileLuyong/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfHrmsFileLuyong['Id'])?$CmfHrmsFileLuyong['Id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>名称：</label>
                    <p><?php echo !empty($CmfHrmsFileLuyong['Name'])?$CmfHrmsFileLuyong['Name']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>性别：</label>
                    <p><?php echo !empty($CmfHrmsFileLuyong['sex'])?$CmfHrmsFileLuyong['sex']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>生日：</label>
                    <p><?php echo !empty($CmfHrmsFileLuyong['birthday'])?$CmfHrmsFileLuyong['birthday']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>国籍：</label>
                    <p><?php echo !empty($CmfHrmsFileLuyong['national'])?$CmfHrmsFileLuyong['national']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>政治面貌：</label>
                    <p><?php echo !empty($CmfHrmsFileLuyong['political'])?$CmfHrmsFileLuyong['political']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>身份证号码：</label>
                    <p><?php echo !empty($CmfHrmsFileLuyong['IDNo'])?$CmfHrmsFileLuyong['IDNo']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>籍贯：</label>
                    <p><?php echo !empty($CmfHrmsFileLuyong['jiguan'])?$CmfHrmsFileLuyong['jiguan']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>院校：</label>
                    <p><?php echo !empty($CmfHrmsFileLuyong['college'])?$CmfHrmsFileLuyong['college']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>学习经历：</label>
                    <p><?php echo !empty($CmfHrmsFileLuyong['studyExp'])?$CmfHrmsFileLuyong['studyExp']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>职员名称：</label>
                    <p><?php echo !empty($CmfHrmsFileLuyong['staffName'])?$CmfHrmsFileLuyong['staffName']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>专业：</label>
                    <p><?php echo !empty($CmfHrmsFileLuyong['professional'])?$CmfHrmsFileLuyong['professional']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>电子邮件：</label>
                    <p><?php echo !empty($CmfHrmsFileLuyong['email'])?$CmfHrmsFileLuyong['email']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建人：</label>
                    <p><?php echo !empty($CmfHrmsFileLuyong['creator'])?$CmfHrmsFileLuyong['creator']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建时间：</label>
                    <p><?php echo !empty($CmfHrmsFileLuyong['createTime'])?$CmfHrmsFileLuyong['createTime']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>