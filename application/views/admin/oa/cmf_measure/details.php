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
            <div class="panel-heading">测量详细内容<a href="<?php echo site_url('/oa/CmfMeasure/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfMeasure['ROWID'])?$CmfMeasure['ROWID']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>名称：</label>
                    <p><?php echo !empty($CmfMeasure['name'])?$CmfMeasure['name']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>用户ID：</label>
                    <p><?php echo !empty($CmfMeasure['user_id'])?$CmfMeasure['user_id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>代码：</label>
                    <p><?php echo !empty($CmfMeasure['code'])?$CmfMeasure['code']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>用户标识：</label>
                    <p><?php echo !empty($CmfMeasure['user_flag'])?$CmfMeasure['user_flag']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>