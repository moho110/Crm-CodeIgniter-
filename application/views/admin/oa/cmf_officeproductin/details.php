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
            <div class="panel-heading">办公用品入库详细内容<a href="<?php echo site_url('/oa/CmfOfficeproductin/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfOfficeproductin['ID'])?$CmfOfficeproductin['ID']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>办公用品名称：</label>
                    <p><?php echo !empty($CmfOfficeproductin['officeName'])?$CmfOfficeproductin['officeName']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>办公用品编号：</label>
                    <p><?php echo !empty($CmfOfficeproductin['officeNo'])?$CmfOfficeproductin['officeNo']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>入库：</label>
                    <p><?php echo !empty($CmfOfficeproductin['inWarehouse'])?$CmfOfficeproductin['inWarehouse']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>入库数量：</label>
                    <p><?php echo !empty($CmfOfficeproductin['inQuantity'])?$CmfOfficeproductin['inQuantity']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>职员：</label>
                    <p><?php echo !empty($CmfOfficeproductin['staffMan'])?$CmfOfficeproductin['staffMan']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>批准人：</label>
                    <p><?php echo !empty($CmfOfficeproductin['approvalMan'])?$CmfOfficeproductin['approvalMan']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>备注：</label>
                    <p><?php echo !empty($CmfOfficeproductin['memo'])?$CmfOfficeproductin['memo']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建人：</label>
                    <p><?php echo !empty($CmfOfficeproductin['creator'])?$CmfOfficeproductin['creator']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建时间：</label>
                    <p><?php echo !empty($CmfOfficeproductin['createTime'])?$CmfOfficeproductin['createTime']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>价格：</label>
                    <p><?php echo !empty($CmfOfficeproductin['price'])?$CmfOfficeproductin['price']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>数量：</label>
                    <p><?php echo !empty($CmfOfficeproductin['quantity'])?$CmfOfficeproductin['quantity']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>金额：</label>
                    <p><?php echo !empty($CmfOfficeproductin['count'])?$CmfOfficeproductin['count']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>