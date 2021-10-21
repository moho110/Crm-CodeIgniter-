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
            <div class="panel-heading">工作计划明细详细内容<a href="<?php echo site_url('/oa/CmfWorkplanmainDetail/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfWorkplanmainDetail['id'])?$CmfWorkplanmainDetail['id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>产品主ID：</label>
                    <p><?php echo !empty($CmfWorkplanmainDetail['mainrowid'])?$CmfWorkplanmainDetail['mainrowid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建人：</label>
                    <p><?php echo !empty($CmfWorkplanmainDetail['createman'])?$CmfWorkplanmainDetail['createman']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建时间：</label>
                    <p><?php echo date('Y年m月d日h时m分s秒',strtotime($CmfWorkplanmainDetail['createtime'])); ?></p>
                </div>
                <div class="form-group">
                    <label>开始时间：</label>
                    <p><?php echo date('Y年m月d日h时m分s秒',strtotime($CmfWorkplanmainDetail['begintime'])); ?></p>
                </div>
                <div class="form-group">
                    <label>结束时间：</label>
                    <p><?php echo date('Y年m月d日h时m分s秒',strtotime($CmfWorkplanmainDetail['endtime'])); ?></p>
                </div>
                <div class="form-group">
                    <label>内容：</label>
                    <p><?php echo !empty($CmfWorkplanmainDetail['content'])?$CmfWorkplanmainDetail['content']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>结果：</label>
                    <p><?php echo !empty($CmfWorkplanmainDetail['result'])?$CmfWorkplanmainDetail['result']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>下次时间：</label>
                    <p><?php echo date('Y年m月d日h时m分s秒',strtotime($CmfWorkplanmainDetail['nexttime'])); ?></p>
                </div>
                <div class="form-group">
                    <label>下次内容：</label>
                    <p><?php echo !empty($CmfWorkplanmainDetail['nextcontent'])?$CmfWorkplanmainDetail['nextcontent']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>附件：</label>
                    <p><?php echo !empty($CmfWorkplanmainDetail['fujian'])?$CmfWorkplanmainDetail['fujian']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>