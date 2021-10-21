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
            <div class="panel-heading">招聘计划详细内容<a href="<?php echo site_url('/oa/CmfHrmsZpjihua/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfHrmsZpjihua['ID'])?$CmfHrmsZpjihua['ID']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>部门名称：</label>
                    <p><?php echo !empty($CmfHrmsZpjihua['departName'])?$CmfHrmsZpjihua['departName']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>描述：</label>
                    <p><?php echo !empty($CmfHrmsZpjihua['desp'])?$CmfHrmsZpjihua['desp']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>需求：</label>
                    <p><?php echo !empty($CmfHrmsZpjihua['need'])?$CmfHrmsZpjihua['need']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>人员名称：</label>
                    <p><?php echo !empty($CmfHrmsZpjihua['personNumber'])?$CmfHrmsZpjihua['personNumber']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>开始时间：</label>
                    <p><?php echo !empty($CmfHrmsZpjihua['startTime'])?$CmfHrmsZpjihua['startTime']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>结束时间：</label>
                    <p><?php echo !empty($CmfHrmsZpjihua['endTime'])?$CmfHrmsZpjihua['endTime']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>申请人：</label>
                    <p><?php echo !empty($CmfHrmsZpjihua['applyMan'])?$CmfHrmsZpjihua['applyMan']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>申请时间：</label>
                    <p><?php echo !empty($CmfHrmsZpjihua['applyTime'])?$CmfHrmsZpjihua['applyTime']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>审核人：</label>
                    <p><?php echo !empty($CmfHrmsZpjihua['exMan'])?$CmfHrmsZpjihua['exMan']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>审核时间：</label>
                    <p><?php echo !empty($CmfHrmsZpjihua['exTime'])?$CmfHrmsZpjihua['exTime']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>审核状态：</label>
                    <p><?php echo !empty($CmfHrmsZpjihua['exStatus'])?$CmfHrmsZpjihua['exStatus']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>