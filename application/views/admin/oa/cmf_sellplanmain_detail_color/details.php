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
            <div class="panel-heading">采购计划明细颜色详细内容<a href="<?php echo site_url('/oa/CmfSellplanmainDetailColor/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfSellplanmainDetailColor['id'])?$CmfSellplanmainDetailColor['id']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>颜色：</label>
                    <p><?php echo !empty($CmfSellplanmainDetailColor['color'])?$CmfSellplanmainDetailColor['color']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>数量：</label>
                    <p><?php echo !empty($CmfSellplanmainDetailColor['num'])?$CmfSellplanmainDetailColor['num']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>