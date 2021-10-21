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
            <div class="panel-heading">工作报告详细内容<a href="<?php echo site_url('/oa/CmfWorkreport/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfWorkreport['id'])?$CmfWorkreport['id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建人：</label>
                    <p><?php echo !empty($CmfWorkreport['createman'])?$CmfWorkreport['createman']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>工作日期：</label>
                    <p><?php echo date('Y年m月d日h时m分s秒',$CmfWorkreport['workdate'])?$CmfWorkreport['workdate']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>内容：</label>
                    <p><?php echo !empty($CmfWorkreport['content'])?$CmfWorkreport['content']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建时间：</label>
                    <p><?php echo date('Y年m月d日h时m分s秒',$CmfWorkreport['workdate'])?$CmfWorkreport['createtime']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>审核人：</label>
                    <p><?php echo !empty($CmfWorkreport['shenheren'])?$CmfWorkreport['shenheren']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>批阅：</label>
                    <p><?php echo !empty($CmfWorkreport['piyu'])?$CmfWorkreport['piyu']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>审核时间：</label>
                    <p><?php echo date('Y年m月d日h时m分s秒',$CmfWorkreport['workdate'])?$CmfWorkreport['shenhetime']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>状态：</label>
                    <p>
                        <?php if ($CmfWorkreport['state'] == '1') {?>
                            良好
                        <?php } elseif ($CmfWorkreport['state'] == '0') {?>
                            正常
                        <?php } else {?>
                            其他类型
                        <?php } ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>