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
            <div class="panel-heading">发货类型详细内容<a href="<?php echo site_url('/oa/CmfFahuotype/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfFahuotype['id'])?$CmfFahuotype['id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>名称：</label>
                    <p><?php echo !empty($CmfFahuotype['name'])?$CmfFahuotype['name']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>快递单：</label>
                    <p><?php echo !empty($CmfFahuotype['kuaididan'])?$CmfFahuotype['kuaididan']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>设计：</label>
                    <p><?php echo !empty($CmfFahuotype['design'])?$CmfFahuotype['design']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>联系人：</label>
                    <p><?php echo !empty($CmfFahuotype['linkman'])?$CmfFahuotype['linkman']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>电话号码：</label>
                    <p><?php echo !empty($CmfFahuotype['tel'])?$CmfFahuotype['tel']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>顺序：</label>
                    <p><?php echo !empty($CmfFahuotype['shunxu'])?$CmfFahuotype['shunxu']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>