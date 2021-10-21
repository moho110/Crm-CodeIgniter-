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
            <div class="panel-heading">行政调班项目详细内容<a href="<?php echo site_url('/oa/CmfEduXingzhengTiaobanxianghu/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfEduXingzhengTiaobanxianghu['ID'])?$CmfEduXingzhengTiaobanxianghu['ID']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>期限：</label>
                    <p><?php echo !empty($CmfEduXingzhengTiaobanxianghu['term'])?$CmfEduXingzhengTiaobanxianghu['term']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>原部门：</label>
                    <p><?php echo !empty($CmfEduXingzhengTiaobanxianghu['oriDepartment'])?$CmfEduXingzhengTiaobanxianghu['oriDepartment']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>原工作人员：</label>
                    <p><?php echo !empty($CmfEduXingzhengTiaobanxianghu['oriPerson'])?$CmfEduXingzhengTiaobanxianghu['oriPerson']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>原上班时间：</label>
                    <p><?php echo !empty($CmfEduXingzhengTiaobanxianghu['oriStartTime'])?$CmfEduXingzhengTiaobanxianghu['oriStartTime']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>原上班：</label>
                    <p><?php echo !empty($CmfEduXingzhengTiaobanxianghu['oriStart'])?$CmfEduXingzhengTiaobanxianghu['oriStart']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>新部门：</label>
                    <p><?php echo !empty($CmfEduXingzhengTiaobanxianghu['newDepartment'])?$CmfEduXingzhengTiaobanxianghu['newDepartment']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>新雇员：</label>
                    <p><?php echo !empty($CmfEduXingzhengTiaobanxianghu['newCruit'])?$CmfEduXingzhengTiaobanxianghu['newCruit']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>新上班时间：</label>
                    <p><?php echo !empty($CmfEduXingzhengTiaobanxianghu['newStartTime'])?$CmfEduXingzhengTiaobanxianghu['newStartTime']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>审核状态：</label>
                    <p><?php echo !empty($CmfEduXingzhengTiaobanxianghu['exStatus'])?$CmfEduXingzhengTiaobanxianghu['exStatus']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>工作流ID：</label>
                    <p><?php echo !empty($CmfEduXingzhengTiaobanxianghu['workFlowID'])?$CmfEduXingzhengTiaobanxianghu['workFlowID']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>审核人员：</label>
                    <p><?php echo !empty($CmfEduXingzhengTiaobanxianghu['exMan'])?$CmfEduXingzhengTiaobanxianghu['exMan']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>审核时间：</label>
                    <p><?php echo !empty($CmfEduXingzhengTiaobanxianghu['exTime'])?$CmfEduXingzhengTiaobanxianghu['exTime']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>原工作人员名称：</label>
                    <p><?php echo !empty($CmfEduXingzhengTiaobanxianghu['oriPersonName'])?$CmfEduXingzhengTiaobanxianghu['oriPersonName']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>新工作人员名称：</label>
                    <p><?php echo !empty($CmfEduXingzhengTiaobanxianghu['newPersonName'])?$CmfEduXingzhengTiaobanxianghu['newPersonName']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>