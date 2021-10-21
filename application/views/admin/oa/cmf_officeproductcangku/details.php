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
            <div class="panel-heading">办公用品仓库详细内容<a href="<?php echo site_url('/oa/CmfOfficeproductcangku/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfOfficeproductcangku['ID'])?$CmfOfficeproductcangku['ID']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>仓库名称：</label>
                    <p><?php echo !empty($CmfOfficeproductcangku['warehouseName'])?$CmfOfficeproductcangku['warehouseName']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>仓库管理员：</label>
                    <p><?php echo !empty($CmfOfficeproductcangku['warehouseMan'])?$CmfOfficeproductcangku['warehouseMan']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>电话号码：</label>
                    <p><?php echo !empty($CmfOfficeproductcangku['telphone'])?$CmfOfficeproductcangku['telphone']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>仓库地址：</label>
                    <p><?php echo !empty($CmfOfficeproductcangku['warehouseAddress'])?$CmfOfficeproductcangku['warehouseAddress']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>备注：</label>
                    <p><?php echo !empty($CmfOfficeproductcangku['memo'])?$CmfOfficeproductcangku['memo']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>