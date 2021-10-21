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
            <div class="panel-heading">办公用品分类详细内容<a href="<?php echo site_url('/oa/CmfOfficeproductgroup/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfOfficeproductgroup['ID'])?$CmfOfficeproductgroup['ID']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>名称：</label>
                    <p><?php echo !empty($CmfOfficeproductgroup['Name'])?$CmfOfficeproductgroup['Name']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>排序：</label>
                    <p><?php echo !empty($CmfOfficeproductgroup['sort'])?$CmfOfficeproductgroup['sort']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>分类类型：</label>
                    <p><?php echo !empty($CmfOfficeproductgroup['preClassType'])?$CmfOfficeproductgroup['preClassType']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>