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
            <div class="panel-heading">通知详细内容<a href="<?php echo site_url('/oa/CmfNotify/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfNotify['id'])?$CmfNotify['id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>标题：</label>
                    <p><?php echo !empty($CmfNotify['title'])?$CmfNotify['title']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>内容：</label>
                    <p><?php echo !empty($CmfNotify['content'])?$CmfNotify['content']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>发送用户：</label>
                    <p><?php echo !empty($CmfNotify['to_user'])?$CmfNotify['to_user']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>来自用户：</label>
                    <p><?php echo !empty($CmfNotify['from_user'])?$CmfNotify['from_user']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>附件：</label>
                    <p><?php echo !empty($CmfNotify['ATTACHMENT'])?$CmfNotify['ATTACHMENT']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建时间：</label>
                    <p><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfCallchuli['createtime'])); ?></p>
                </div>
                <div class="form-group">
                    <label>是否读取：</label>
                    <p>
                        <?php if ($CmfNotify['ifread'] == '1') {?>
                            是
                        <?php } elseif ($CmfNotify['ifread'] == '0') {?>
                            否
                        <?php } else {?>
                            其他类型
                        <?php } ?>
                    </p>
                </div>
                <div class="form-group">
                    <label>是否短信：</label>
                    <p>
                        <?php if ($CmfNotify['ifsms'] == '1') {?>
                            是
                        <?php } elseif ($CmfNotify['ifsms'] == '0') {?>
                            否
                        <?php } else {?>
                            其他类型
                        <?php } ?>
                    </p>
                </div>
                <div class="form-group">
                    <label>等级：</label>
                    <p><?php echo !empty($CmfNotify['grade'])?$CmfNotify['grade']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>是否发送邮件：</label>
                    <p>
                        <?php if ($CmfNotify['ifemail'] == '1') {?>
                            是
                        <?php } elseif ($CmfNotify['ifemail'] == '0') {?>
                            否
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