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
            <div class="panel-heading">呼叫处理详细内容<a href="<?php echo site_url('/oa/CmfCallchuli/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfCallchuli['id'])?$CmfCallchuli['id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>电话号码：</label>
                    <p><?php echo !empty($CmfCallchuli['tel'])?$CmfCallchuli['tel']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>客户：</label>
                    <p><?php echo !empty($CmfCallchuli['customer'])?$CmfCallchuli['customer']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>联系人：</label>
                    <p><?php echo !empty($CmfCallchuli['linkman'])?$CmfCallchuli['linkman']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>内容：</label>
                    <p><?php echo !empty($CmfCallchuli['content'])?$CmfCallchuli['content']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建人：</label>
                    <p><?php echo !empty($CmfCallchuli['createman'])?$CmfCallchuli['createman']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建时间：</label>
                    <p><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfCallchuli['createtime'])); ?></p>
                </div>
                <div class="form-group">
                    <label>是否处理：</label>
                    <p>
                        <?php if ($CmfCallchuli['ifchuli'] == '1') {?>
                            已处理
                        <?php } elseif ($CmfCallchuli['ifchuli'] == '0') {?>
                            未处理
                        <?php } else {?>
                            其他类型
                        <?php } ?>
                    </p>
                </div>
                <div class="form-group">
                    <label>处理时间：</label>
                    <p><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfCallchuli['chulitime'])); ?></p>
                </div>
                <div class="form-group">
                    <label>呼叫类型：</label>
                    <p><?php echo !empty($CmfCallchuli['calltype'])?$CmfCallchuli['calltype']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>呼叫者类型：</label>
                    <p><?php echo !empty($CmfCallchuli['callertype'])?$CmfCallchuli['callertype']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>客户ID：</label>
                    <p><?php echo !empty($CmfCallchuli['customerid'])?$CmfCallchuli['customerid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>处理内容：</label>
                    <p><?php echo !empty($CmfCallchuli['chulicontent'])?$CmfCallchuli['chulicontent']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>联系人ID：</label>
                    <p><?php echo !empty($CmfCallchuli['linkmanid'])?$CmfCallchuli['linkmanid']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>