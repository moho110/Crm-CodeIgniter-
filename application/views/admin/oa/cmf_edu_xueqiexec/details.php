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
            <div class="panel-heading">学期执行详细内容<a href="<?php echo site_url('/oa/CmfEduXueqiexec/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfEduXueqiexec['flowId'])?$CmfEduXueqiexec['flowId']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>学期名称：</label>
                    <p><?php echo !empty($CmfEduXueqiexec['termName'])?$CmfEduXueqiexec['termName']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>最近学期：</label>
                    <p><?php echo !empty($CmfEduXueqiexec['recentTerm'])?$CmfEduXueqiexec['recentTerm']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>是否有早课：</label>
                    <p><?php echo !empty($CmfEduXueqiexec['isMorningHaveClass'])?$CmfEduXueqiexec['isMorningHaveClass']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>是否有晚课：</label>
                    <p><?php echo !empty($CmfEduXueqiexec['isEveningHaveClass'])?$CmfEduXueqiexec['isEveningHaveClass']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>学年：</label>
                    <p><?php echo !empty($CmfEduXueqiexec['studyYear'])?$CmfEduXueqiexec['studyYear']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>是否周六有课：</label>
                    <p><?php echo !empty($CmfEduXueqiexec['isSatClass'])?$CmfEduXueqiexec['isSatClass']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>是否周日有课：</label>
                    <p><?php echo !empty($CmfEduXueqiexec['isSunClass'])?$CmfEduXueqiexec['isSunClass']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>开始时间：</label>
                    <p><?php echo !empty($CmfEduXueqiexec['startTime'])?$CmfEduXueqiexec['startTime']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>结束时间：</label>
                    <p><?php echo !empty($CmfEduXueqiexec['endTime'])?$CmfEduXueqiexec['endTime']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>备注：</label>
                    <p><?php echo !empty($CmfEduXueqiexec['memo'])?$CmfEduXueqiexec['memo']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>