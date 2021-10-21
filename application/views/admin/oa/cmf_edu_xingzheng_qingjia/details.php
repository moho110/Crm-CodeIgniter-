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
            <div class="panel-heading">行政请假详细内容<a href="<?php echo site_url('/oa/CmfEduXingzhengQingjia/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfEduXingzhengQingjia['ID'])?$CmfEduXingzhengQingjia['ID']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>期限：</label>
                    <p><?php echo !empty($CmfEduXingzhengQingjia['term'])?$CmfEduXingzhengQingjia['term']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>部门：</label>
                    <p><?php echo !empty($CmfEduXingzhengQingjia['department'])?$CmfEduXingzhengQingjia['department']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>人员：</label>
                    <p><?php echo !empty($CmfEduXingzhengQingjia['person'])?$CmfEduXingzhengQingjia['person']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>时间：</label>
                    <p><?php echo !empty($CmfEduXingzhengQingjia['time'])?$CmfEduXingzhengQingjia['time']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>周：</label>
                    <p><?php echo !empty($CmfEduXingzhengQingjia['week'])?$CmfEduXingzhengQingjia['week']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>类别：</label>
                    <p><?php echo !empty($CmfEduXingzhengQingjia['class'])?$CmfEduXingzhengQingjia['class']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>请假类型：</label>
                    <p><?php echo !empty($CmfEduXingzhengQingjia['qingjiaType'])?$CmfEduXingzhengQingjia['qingjiaType']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>审核状态：</label>
                    <p><?php echo !empty($CmfEduXingzhengQingjia['exStatus'])?$CmfEduXingzhengQingjia['exStatus']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>工作流ID：</label>
                    <p><?php echo !empty($CmfEduXingzhengQingjia['workFlowID'])?$CmfEduXingzhengQingjia['workFlowID']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>审核人：</label>
                    <p><?php echo !empty($CmfEduXingzhengQingjia['exMan'])?$CmfEduXingzhengQingjia['exMan']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>审核时间：</label>
                    <p><?php echo !empty($CmfEduXingzhengQingjia['exTime'])?$CmfEduXingzhengQingjia['exTime']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>人员名称：</label>
                    <p><?php echo !empty($CmfEduXingzhengQingjia['personName'])?$CmfEduXingzhengQingjia['personName']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>