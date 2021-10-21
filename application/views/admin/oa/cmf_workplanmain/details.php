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
            <div class="panel-heading">工作计划详细内容<a href="<?php echo site_url('/oa/CmfWorkplanmain/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfWorkplanmain['id'])?$CmfWorkplanmain['id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建时间：</label>
                    <p><?php echo date('Y年m月d日h日m分s秒',strtotime($CmfWorkplanmain['createtime'])); ?></p>
                </div>
                <div class="form-group">
                    <label>创建人：</label>
                    <p><?php echo !empty($CmfWorkplanmain['createman'])?$CmfWorkplanmain['createman']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>状态：</label>
                    <p>
                        <?php if ($CmfWorkplanmain['state'] == '1') {?>
                            良好
                        <?php } elseif ($CmfWorkplanmain['state'] == '0') {?>
                            正常
                        <?php } else {?>
                            其他类型
                        <?php } ?>
                    </p>
                </div>
                <div class="form-group">
                    <label>主题：</label>
                    <p><?php echo !empty($CmfWorkplanmain['zhuti'])?$CmfWorkplanmain['zhuti']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>内容：</label>
                    <p><?php echo !empty($CmfWorkplanmain['content'])?$CmfWorkplanmain['content']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>种类：</label>
                    <p><?php echo !empty($CmfWorkplanmain['kind'])?$CmfWorkplanmain['kind']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>开始时间：</label>
                    <p><?php echo date('Y年m月d日h日m分s秒',strtotime($CmfWorkplanmain['begintime'])); ?></p>
                </div>
                <div class="form-group">
                    <label>结束时间：</label>
                    <p><?php echo date('Y年m月d日h日m分s秒',strtotime($CmfWorkplanmain['endtime'])); ?></p>
                </div>
                <div class="form-group">
                    <label>执行人：</label>
                    <p><?php echo !empty($CmfWorkplanmain['zhixingren'])?$CmfWorkplanmain['zhixingren']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>完成时间：</label>
                    <p><?php echo date('Y年m月d日h日m分s秒',strtotime($CmfWorkplanmain['finishtime'])); ?></p>
                </div>
                <div class="form-group">
                    <label>审核人：</label>
                    <p><?php echo !empty($CmfWorkplanmain['shenheren'])?$CmfWorkplanmain['shenheren']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>审核状态：</label>
                    <p>
                        <?php if ($CmfWorkplanmain['shenchastate'] == '1') {?>
                            已审核
                        <?php } elseif ($CmfWorkplanmain['shenchastate'] == '0') {?>
                            未审核
                        <?php } else {?>
                            其他类型
                        <?php } ?>
                    </p>
                </div>
                <div class="form-group">
                    <label>审核时间：</label>
                    <p><?php echo date('Y年m月d日h日m分s秒',strtotime($CmfWorkplanmain['shenhetime'])); ?></p>
                </div>
                <div class="form-group">
                    <label>审核批示：</label>
                    <p><?php echo !empty($CmfWorkplanmain['shenhepishi'])?$CmfWorkplanmain['shenhepishi']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>附件：</label>
                    <p><?php echo !empty($CmfWorkplanmain['fujian'])?$CmfWorkplanmain['fujian']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>是否发送短信：</label>
                    <p>
                        <?php if ($CmfWorkplanmain['ifsms'] == '1') {?>
                            已发送
                        <?php } elseif ($CmfWorkplanmain['ifsms'] == '0') {?>
                            未发送
                        <?php } else {?>
                            其他类型
                        <?php } ?>
                    </p>
                </div>
                <div class="form-group">
                    <label>是否发送邮件：</label>
                    <p>
                        <?php if ($CmfWorkplanmain['ifemail'] == '1') {?>
                            是
                        <?php } elseif ($CmfWorkplanmain['ifemail'] == '0') {?>
                            否
                        <?php } else {?>
                            其他类型
                        <?php } ?>
                    </p>
                </div>
                <div class="form-group">
                    <label>关联事务：</label>
                    <p><?php echo !empty($CmfWorkplanmain['guanlianshiwu'])?$CmfWorkplanmain['guanlianshiwu']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>关联URL地址：</label>
                    <p><?php echo !empty($CmfWorkplanmain['guanlianurl'])?$CmfWorkplanmain['guanlianurl']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>关联ID：</label>
                    <p><?php echo !empty($CmfWorkplanmain['guanlianid'])?$CmfWorkplanmain['guanlianid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>最后执行时间：</label>
                    <p><?php echo date('Y年m月d日h日m分s秒',strtotime($CmfWorkplanmain['lastzhixingtime'])); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>