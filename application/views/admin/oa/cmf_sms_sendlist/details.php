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
            <div class="panel-heading">短信列表详细内容<a href="<?php echo site_url('/oa/CmfSmsSendlist/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfSmsSendlist['id'])?$CmfSmsSendlist['id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>消息：</label>
                    <p><?php echo !empty($CmfSmsSendlist['msg'])?$CmfSmsSendlist['msg']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>现在时间：</label>
                    <p><?php echo date('Y年m月d日h时m分s秒', strtotime($CmfSmsSendlist['nowtime'])); ?></p>
                </div>
                <div class="form-group">
                    <label>进行时间：</label>
                    <p><?php echo date('Y年m月d日h时m分s秒', strtotime($CmfSmsSendlist['attime'])); ?></p>
                </div>
                <div class="form-group">
                    <label>目标数：</label>
                    <p><?php echo !empty($CmfSmsSendlist['destcount'])?$CmfSmsSendlist['destcount']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>结果：</label>
                    <p><?php echo !empty($CmfSmsSendlist['result'])?$CmfSmsSendlist['result']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>错误消息：</label>
                    <p><?php echo !empty($CmfSmsSendlist['errmsg'])?$CmfSmsSendlist['errmsg']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>尝试次数：</label>
                    <p><?php echo !empty($CmfSmsSendlist['trytimes'])?$CmfSmsSendlist['trytimes']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>用户ID：</label>
                    <p><?php echo !empty($CmfSmsSendlist['userid'])?$CmfSmsSendlist['userid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>批次ID：</label>
                    <p><?php echo !empty($CmfSmsSendlist['batchid'])?$CmfSmsSendlist['batchid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>目标ID：</label>
                    <p><?php echo !empty($CmfSmsSendlist['destid'])?$CmfSmsSendlist['destid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>数量：</label>
                    <p><?php echo !empty($CmfSmsSendlist['leftcount'])?$CmfSmsSendlist['leftcount']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>