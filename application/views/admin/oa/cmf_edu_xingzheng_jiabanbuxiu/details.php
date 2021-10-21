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
            <div class="panel-heading">行政加班补休详细内容<a href="<?php echo site_url('/oa/CmfEduXingzhengJiabanbuxiu/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfEduXingzhengJiabanbuxiu['Id'])?$CmfEduXingzhengJiabanbuxiu['Id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>期限：</label>
                    <p><?php echo !empty($CmfEduXingzhengJiabanbuxiu['term'])?$CmfEduXingzhengJiabanbuxiu['term']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>部门：</label>
                    <p><?php echo !empty($CmfEduXingzhengJiabanbuxiu['department'])?$CmfEduXingzhengJiabanbuxiu['department']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>人员：</label>
                    <p><?php echo !empty($CmfEduXingzhengJiabanbuxiu['person'])?$CmfEduXingzhengJiabanbuxiu['person']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>迟到工作时间：</label>
                    <p><?php echo !empty($CmfEduXingzhengJiabanbuxiu['delayWorkTime'])?$CmfEduXingzhengJiabanbuxiu['delayWorkTime']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>迟到工作数量：</label>
                    <p><?php echo !empty($CmfEduXingzhengJiabanbuxiu['delayWorkNum'])?$CmfEduXingzhengJiabanbuxiu['delayWorkNum']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>补休时间：</label>
                    <p><?php echo !empty($CmfEduXingzhengJiabanbuxiu['buxiuTime'])?$CmfEduXingzhengJiabanbuxiu['buxiuTime']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>补休类别：</label>
                    <p><?php echo !empty($CmfEduXingzhengJiabanbuxiu['buxiuClass'])?$CmfEduXingzhengJiabanbuxiu['buxiuClass']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>迟到工作状态：</label>
                    <p><?php echo !empty($CmfEduXingzhengJiabanbuxiu['delayWorkStatus'])?$CmfEduXingzhengJiabanbuxiu['delayWorkStatus']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>迟到工作ID：</label>
                    <p><?php echo !empty($CmfEduXingzhengJiabanbuxiu['delayWorkID'])?$CmfEduXingzhengJiabanbuxiu['delayWorkID']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>迟到工作人：</label>
                    <p><?php echo !empty($CmfEduXingzhengJiabanbuxiu['delayWorkMan'])?$CmfEduXingzhengJiabanbuxiu['delayWorkMan']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>迟到工作审核时间：</label>
                    <p><?php echo !empty($CmfEduXingzhengJiabanbuxiu['delayWorkExTime'])?$CmfEduXingzhengJiabanbuxiu['delayWorkExTime']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>补休状态：</label>
                    <p><?php echo !empty($CmfEduXingzhengJiabanbuxiu['buxiuStatus'])?$CmfEduXingzhengJiabanbuxiu['buxiuStatus']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>补休工作流：</label>
                    <p><?php echo !empty($CmfEduXingzhengJiabanbuxiu['buxiuFlowId'])?$CmfEduXingzhengJiabanbuxiu['buxiuFlowId']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>补休审核人：</label>
                    <p><?php echo !empty($CmfEduXingzhengJiabanbuxiu['buxiuExMan'])?$CmfEduXingzhengJiabanbuxiu['buxiuExMan']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>补休审核时间：</label>
                    <p><?php echo !empty($CmfEduXingzhengJiabanbuxiu['buxiuExTime'])?$CmfEduXingzhengJiabanbuxiu['buxiuExTime']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>工作人员：</label>
                    <p><?php echo !empty($CmfEduXingzhengJiabanbuxiu['personName'])?$CmfEduXingzhengJiabanbuxiu['personName']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>