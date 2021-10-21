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
            <div class="panel-heading">行政调休补班详细内容<a href="<?php echo site_url('/oa/CmfEduXingzhengTiaoxiububan/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfEduXingzhengTiaoxiububan['ID'])?$CmfEduXingzhengTiaoxiububan['ID']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>期限：</label>
                    <p><?php echo !empty($CmfEduXingzhengTiaoxiububan['term'])?$CmfEduXingzhengTiaoxiububan['term']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>部门：</label>
                    <p><?php echo !empty($CmfEduXingzhengTiaoxiububan['department'])?$CmfEduXingzhengTiaoxiububan['department']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>工作人员：</label>
                    <p><?php echo !empty($CmfEduXingzhengTiaoxiububan['person'])?$CmfEduXingzhengTiaoxiububan['person']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>调休时间：</label>
                    <p><?php echo !empty($CmfEduXingzhengTiaoxiububan['tiaoxiuTime'])?$CmfEduXingzhengTiaoxiububan['tiaoxiuTime']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>调休上班：</label>
                    <p><?php echo !empty($CmfEduXingzhengTiaoxiububan['tiaoxiuStart'])?$CmfEduXingzhengTiaoxiububan['tiaoxiuStart']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>补班时间：</label>
                    <p><?php echo !empty($CmfEduXingzhengTiaoxiububan['bubanTime'])?$CmfEduXingzhengTiaoxiububan['bubanTime']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>补班上班：</label>
                    <p><?php echo !empty($CmfEduXingzhengTiaoxiububan['bubanStart'])?$CmfEduXingzhengTiaoxiububan['bubanStart']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>调休审核状态：</label>
                    <p><?php echo !empty($CmfEduXingzhengTiaoxiububan['tiaoxiuExStatus'])?$CmfEduXingzhengTiaoxiububan['tiaoxiuExStatus']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>调休工作流ID：</label>
                    <p><?php echo !empty($CmfEduXingzhengTiaoxiububan['tiaoxiuWorkFlowID'])?$CmfEduXingzhengTiaoxiububan['tiaoxiuWorkFlowID']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>调休审核人员：</label>
                    <p><?php echo !empty($CmfEduXingzhengTiaoxiububan['tiaoxiuExMan'])?$CmfEduXingzhengTiaoxiububan['tiaoxiuExMan']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>调休审核时间：</label>
                    <p><?php echo !empty($CmfEduXingzhengTiaoxiububan['tiaoxiuExTime'])?$CmfEduXingzhengTiaoxiububan['tiaoxiuExTime']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>补班审核状态：</label>
                    <p><?php echo !empty($CmfEduXingzhengTiaoxiububan['bubanExStatus'])?$CmfEduXingzhengTiaoxiububan['bubanExStatus']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>补班工作流ID：</label>
                    <p><?php echo !empty($CmfEduXingzhengTiaoxiububan['bubanWorkFlowID'])?$CmfEduXingzhengTiaoxiububan['bubanWorkFlowID']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>补班审核人员：</label>
                    <p><?php echo !empty($CmfEduXingzhengTiaoxiububan['bubanExMan'])?$CmfEduXingzhengTiaoxiububan['bubanExMan']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>补班审核时间：</label>
                    <p><?php echo !empty($CmfEduXingzhengTiaoxiububan['bubanExTime'])?$CmfEduXingzhengTiaoxiububan['bubanExTime']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>工作人员名称：</label>
                    <p><?php echo !empty($CmfEduXingzhengTiaoxiububan['personName'])?$CmfEduXingzhengTiaoxiububan['personName']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>