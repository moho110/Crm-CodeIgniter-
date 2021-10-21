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
            <div class="panel-heading">联系人详细内容<a href="<?php echo site_url('/oa/CmfCrmContact/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfCrmContact['id'])?$CmfCrmContact['id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>客户ID：</label>
                    <p><?php echo !empty($CmfCrmContact['customerid'])?$CmfCrmContact['customerid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>联系人ID：</label>
                    <p><?php echo !empty($CmfCrmContact['linkmanid'])?$CmfCrmContact['linkmanid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>用户ID：</label>
                    <p><?php echo !empty($CmfCrmContact['user_id'])?$CmfCrmContact['user_id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建人：</label>
                    <p><?php echo !empty($CmfCrmContact['createman'])?$CmfCrmContact['createman']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>联系方式：</label>
                    <p><?php echo !empty($CmfCrmContact['contact'])?$CmfCrmContact['contact']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>机会：</label>
                    <p><?php echo !empty($CmfCrmContact['chance'])?$CmfCrmContact['chance']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>阶段：</label>
                    <p><?php echo !empty($CmfCrmContact['stage'])?$CmfCrmContact['stage']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>描述：</label>
                    <p><?php echo !empty($CmfCrmContact['describes'])?$CmfCrmContact['describes']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建时间：</label>
                    <p><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfCrmContact['createtime'])); ?></p>
                </div>
                <div class="form-group">
                    <label>联系时间：</label>
                    <p><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfCrmContact['contacttime'])); ?></p>
                </div>
                <div class="form-group">
                    <label>下次联系时间：</label>
                    <p><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfCrmContact['nextcontacttime'])); ?></p>
                </div>
                <div class="form-group">
                    <label>下次讨论：</label>
                    <p><?php echo !empty($CmfCrmContact['nextissue'])?$CmfCrmContact['nextissue']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>已经联系：</label>
                    <p><?php echo !empty($CmfCrmContact['alreadycontact'])?$CmfCrmContact['alreadycontact']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>公共资源：</label>
                    <p><?php echo !empty($CmfCrmContact['public'])?$CmfCrmContact['public']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>优先级：</label>
                    <p><?php echo !empty($CmfCrmContact['priority'])?$CmfCrmContact['priority']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>