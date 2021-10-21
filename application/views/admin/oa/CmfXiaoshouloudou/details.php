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
            <div class="panel-heading">销售对比详细内容 <a href="<?php echo site_url('/oa/CmfXiaoshouloudou/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfXiaoshouloudou['Id'])?$CmfXiaoshouloudou['Id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>阶段：</label>
                    <p><?php echo !empty($CmfXiaoshouloudou['stage'])?$CmfXiaoshouloudou['stage']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>客户名称：</label>
                    <p><?php echo !empty($CmfXiaoshouloudou['clientName'])?$CmfXiaoshouloudou['clientName']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>联系人：</label>
                    <p><?php echo !empty($CmfXiaoshouloudou['linkMan'])?$CmfXiaoshouloudou['linkMan']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>预计数：</label>
                    <p><?php echo !empty($CmfXiaoshouloudou['preCount'])?$CmfXiaoshouloudou['preCount']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>预登陆时间：</label>
                    <p><?php echo !empty($CmfXiaoshouloudou['preSignTime'])?$CmfXiaoshouloudou['preSignTime']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>