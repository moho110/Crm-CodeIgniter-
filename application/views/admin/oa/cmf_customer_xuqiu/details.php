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
            <div class="panel-heading">客户需求详细内容<a href="<?php echo site_url('/oa/CmfCustomerXuqiu/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfCustomerXuqiu['id'])?$CmfCustomerXuqiu['id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>主题：</label>
                    <p><?php echo !empty($CmfCustomerXuqiu['zhuti'])?$CmfCustomerXuqiu['zhuti']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>提供人：</label>
                    <p><?php echo !empty($CmfCustomerXuqiu['tigongren'])?$CmfCustomerXuqiu['tigongren']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>客户ID：</label>
                    <p><?php echo !empty($CmfCustomerXuqiu['customerid'])?$CmfCustomerXuqiu['customerid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>机会ID：</label>
                    <p><?php echo !empty($CmfCustomerXuqiu['chanceid'])?$CmfCustomerXuqiu['chanceid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>输入：</label>
                    <p><?php echo !empty($CmfCustomerXuqiu['import'])?$CmfCustomerXuqiu['import']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>内容：</label>
                    <p><?php echo !empty($CmfCustomerXuqiu['content'])?$CmfCustomerXuqiu['content']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建人：</label>
                    <p><?php echo !empty($CmfCustomerXuqiu['createman'])?$CmfCustomerXuqiu['createman']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建时间：</label>
                    <p><?php echo date('Y年m月d日H时i分s秒', strtotime($CmfCustomerXuqiu['createtime'])); ?></p>

                </div>
                <div class="form-group">
                    <label>附件：</label>
                    <p><?php echo !empty($CmfCustomerXuqiu['fujian'])?$CmfCustomerXuqiu['fujian']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>方案：</label>
                    <p><?php echo !empty($CmfCustomerXuqiu['fangan'])?$CmfCustomerXuqiu['fangan']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>