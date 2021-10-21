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
            <div class="panel-heading">中层项目详细内容<a href="<?php echo site_url('/oa/CmfEduZhongcengxingmu/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfEduZhongcengxingmu['ID'])?$CmfEduZhongcengxingmu['ID']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>项目：</label>
                    <p><?php echo !empty($CmfEduZhongcengxingmu['projects'])?$CmfEduZhongcengxingmu['projects']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>分值：</label>
                    <p><?php echo !empty($CmfEduZhongcengxingmu['scoreinvalue'])?$CmfEduZhongcengxingmu['scoreinvalue']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>