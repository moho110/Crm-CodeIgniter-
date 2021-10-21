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
            <div class="panel-heading">行政调班详细内容<a href="<?php echo site_url('/oa/CmfEduXingzhengTiaoban/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfEduXingzhengTiaoban['ID'])?$CmfEduXingzhengTiaoban['ID']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>期限：</label>
                    <p><?php echo !empty($CmfEduXingzhengTiaoban['term'])?$CmfEduXingzhengTiaoban['term']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>部门：</label>
                    <p><?php echo !empty($CmfEduXingzhengTiaoban['department'])?$CmfEduXingzhengTiaoban['department']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>人员：</label>
                    <p><?php echo !empty($CmfEduXingzhengTiaoban['person'])?$CmfEduXingzhengTiaoban['person']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>原上班时间：</label>
                    <p><?php echo !empty($CmfEduXingzhengTiaoban['oriStartTime'])?$CmfEduXingzhengTiaoban['oriStartTime']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>原上班：</label>
                    <p><?php echo !empty($CmfEduXingzhengTiaoban['oriStart'])?$CmfEduXingzhengTiaoban['oriStart']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>新上班时间：</label>
                    <p><?php echo !empty($CmfEduXingzhengTiaoban['newStartTime'])?$CmfEduXingzhengTiaoban['newStartTime']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>新上班：</label>
                    <p><?php echo !empty($CmfEduXingzhengTiaoban['newStart'])?$CmfEduXingzhengTiaoban['newStart']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>审核状态：</label>
                    <p><?php echo !empty($CmfEduXingzhengTiaoban['exStatus'])?$CmfEduXingzhengTiaoban['exStatus']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>工作流ID：</label>
                    <p><?php echo !empty($CmfEduXingzhengTiaoban['workFlowID'])?$CmfEduXingzhengTiaoban['workFlowID']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>审核人：</label>
                    <p><?php echo !empty($CmfEduXingzhengTiaoban['exMan'])?$CmfEduXingzhengTiaoban['exMan']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>审核时间：</label>
                    <p><?php echo !empty($CmfEduXingzhengTiaoban['exTime'])?$CmfEduXingzhengTiaoban['exTime']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>人员名称：</label>
                    <p><?php echo !empty($CmfEduXingzhengTiaoban['personName'])?$CmfEduXingzhengTiaoban['personName']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>