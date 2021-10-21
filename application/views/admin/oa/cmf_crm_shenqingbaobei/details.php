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
            <div class="panel-heading">申请报备详细内容<a href="<?php echo site_url('/oa/CmfCrmShenqingbaobei/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfCrmShenqingbaobei['id'])?$CmfCrmShenqingbaobei['id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>客户ID：</label>
                    <p><?php echo !empty($CmfCrmShenqingbaobei['customerid'])?$CmfCrmShenqingbaobei['customerid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>联系人ID：</label>
                    <p><?php echo !empty($CmfCrmShenqingbaobei['linkmanid'])?$CmfCrmShenqingbaobei['linkmanid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>机会ID：</label>
                    <p><?php echo !empty($CmfCrmShenqingbaobei['chanceid'])?$CmfCrmShenqingbaobei['chanceid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>介绍：</label>
                    <p><?php echo !empty($CmfCrmShenqingbaobei['introduce'])?$CmfCrmShenqingbaobei['introduce']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>支持：</label>
                    <p><?php echo !empty($CmfCrmShenqingbaobei['zhichi'])?$CmfCrmShenqingbaobei['zhichi']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>附件：</label>
                    <p><?php echo !empty($CmfCrmShenqingbaobei['fujian'])?$CmfCrmShenqingbaobei['fujian']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建人：</label>
                    <p><?php echo !empty($CmfCrmShenqingbaobei['createman'])?$CmfCrmShenqingbaobei['createman']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建时间：</label>
                    <p><?php echo !empty($CmfCrmShenqingbaobei['createtime'])?$CmfCrmShenqingbaobei['createtime']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>状态：</label>
                    <p><?php echo !empty($CmfCrmShenqingbaobei['state'])?$CmfCrmShenqingbaobei['state']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>批阅：</label>
                    <p><?php echo !empty($CmfCrmShenqingbaobei['piyu'])?$CmfCrmShenqingbaobei['piyu']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>审核人：</label>
                    <p><?php echo !empty($CmfCrmShenqingbaobei['shenheman'])?$CmfCrmShenqingbaobei['shenheman']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>审核时间：</label>
                    <p><?php echo !empty($CmfCrmShenqingbaobei['shenhetime'])?$CmfCrmShenqingbaobei['shenhetime']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>主题：</label>
                    <p><?php echo !empty($CmfCrmShenqingbaobei['zhuti'])?$CmfCrmShenqingbaobei['zhuti']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>提醒人：</label>
                    <p><?php echo !empty($CmfCrmShenqingbaobei['tixingren'])?$CmfCrmShenqingbaobei['tixingren']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>