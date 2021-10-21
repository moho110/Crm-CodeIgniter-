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
                <div class="panel-heading"><?php echo $action; ?> 学期执行 <a href="<?php echo site_url('/oa/CmfEduXueqiexec/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="flowId">flowId</label>
                            <input type="text" class="form-control" name="flowId" placeholder="Enter flowId" value="<?php echo !empty($cmf_edu_xueqiexec['flowId'])?$cmf_edu_xueqiexec['flowId']:''; ?>">
                            <?php echo form_error('flowId','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="termName">银行ID：</label>
                            <input type="text" class="form-control" name="termName" placeholder="Enter termName" value="<?php echo !empty($cmf_edu_xueqiexec['termName'])?$cmf_edu_xueqiexec['termName']:''; ?>">
                            <?php echo form_error('termName','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="recentTerm">银行代码：</label>
                            <input type="text" class="form-control" name="recentTerm" placeholder="Enter recentTerm" value="<?php echo !empty($cmf_edu_xueqiexec['recentTerm'])?$cmf_edu_xueqiexec['recentTerm']:''; ?>">
                            <?php echo form_error('recentTerm','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="isMorningHaveClass">银行名称：</label>
                            <input type="text" class="form-control" name="isMorningHaveClass" placeholder="Enter isMorningHaveClass" value="<?php echo !empty($cmf_edu_xueqiexec['isMorningHaveClass'])?$cmf_edu_xueqiexec['isMorningHaveClass']:''; ?>">
                            <?php echo form_error('isMorningHaveClass','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="isEveningHaveClass">系统锁定：</label>
                            <input type="text" class="form-control" name="isEveningHaveClass" placeholder="Enter isEveningHaveClass" value="<?php echo !empty($cmf_edu_xueqiexec['isEveningHaveClass'])?$cmf_edu_xueqiexec['isEveningHaveClass']:''; ?>">
                            <?php echo form_error('isEveningHaveClass','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="studyYear">金额：</label>
                            <input type="text" class="form-control" name="studyYear" placeholder="Enter studyYear" value="<?php echo !empty($cmf_edu_xueqiexec['studyYear'])?$cmf_edu_xueqiexec['studyYear']:''; ?>">
                            <?php echo form_error('studyYear','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="isSatClass">所属：</label>
                            <input type="text" class="form-control" name="isSatClass" placeholder="Enter isSatClass" value="<?php echo !empty($cmf_edu_xueqiexec['isSatClass'])?$cmf_edu_xueqiexec['isSatClass']:''; ?>">
                            <?php echo form_error('isSatClass','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="isSunClass">所属：</label>
                            <input type="text" class="form-control" name="isSunClass" placeholder="Enter isSunClass" value="<?php echo !empty($cmf_edu_xueqiexec['isSunClass'])?$cmf_edu_xueqiexec['isSunClass']:''; ?>">
                            <?php echo form_error('isSunClass','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="startTime">所属：</label>
                            <input type="text" class="form-control" name="startTime" placeholder="Enter startTime" value="<?php echo !empty($cmf_edu_xueqiexec['startTime'])?$cmf_edu_xueqiexec['startTime']:''; ?>">
                            <?php echo form_error('startTime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="endTime">所属：</label>
                            <input type="text" class="form-control" name="endTime" placeholder="Enter endTime" value="<?php echo !empty($cmf_edu_xueqiexec['endTime'])?$cmf_edu_xueqiexec['endTime']:''; ?>">
                            <?php echo form_error('endTime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="memo">所属：</label>
                            <textarea name="memo" cols="50" rows="10">
                                <?php echo !empty($cmf_edu_xueqiexec['isSatClass'])?$cmf_edu_xueqiexec['isSatClass']:''; ?>
                            </textarea>
                            <?php echo form_error('isSatClass','<p class="help-block text-danger">','</p>'); ?>
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