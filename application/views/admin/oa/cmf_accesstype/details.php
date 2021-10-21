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
            <div class="panel-heading">收款类型详细内容 <a href="<?php echo site_url('/oa/CmfAccesstype/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>id:</label>
                    <p><?php echo !empty($cmf_accesstype['id'])?$cmf_accesstype['id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>类型名称：</label>
                    <p><?php echo !empty($cmf_accesstype['name'])?$cmf_accesstype['createtime']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>父级ID：</label>
                    <p><?php echo !empty($cmf_accesstype['parent'])?$cmf_accesstype['parent']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>输入输出：</label>
                    <p><?php echo !empty($cmf_accesstype['inout'])?$cmf_accesstype['inout']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>