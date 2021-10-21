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
            <div class="panel-heading">纪念日详细内容<a href="<?php echo site_url('/oa/CmfCrmRemember/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfCrmRemember['id'])?$CmfCrmRemember['id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>联系人ID：</label>
                    <p><?php echo !empty($CmfCrmRemember['linkmanid'])?$CmfCrmRemember['linkmanid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>纪念日类型：</label>
                    <p><?php echo !empty($CmfCrmRemember['mem_type'])?$CmfCrmRemember['mem_type']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>客户ID：</label>
                    <p><?php echo !empty($CmfCrmRemember['customerid'])?$CmfCrmRemember['customerid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>纪念日日期：</label>
                    <p><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfCrmRemember['mem_date'])); ?></p>
                </div>
                <div class="form-group">
                    <label>创建时间：</label>
                    <p><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfCrmRemember['createtime'])); ?></p>
                </div>
                <div class="form-group">
                    <label>操作人：</label>
                    <p><?php echo !empty($CmfCrmRemember['operman'])?$CmfCrmRemember['operman']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>