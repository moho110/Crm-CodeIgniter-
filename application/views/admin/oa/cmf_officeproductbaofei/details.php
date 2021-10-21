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
            <div class="panel-heading">办公用品报废详细内容<a href="<?php echo site_url('/oa/CmfOfficeproductbaofei/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfOfficeproductbaofei['ID'])?$CmfOfficeproductbaofei['ID']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>办公用品名称：</label>
                    <p><?php echo !empty($CmfOfficeproductbaofei['officeName'])?$CmfOfficeproductbaofei['officeName']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>办公用品编号：</label>
                    <p><?php echo !empty($CmfOfficeproductbaofei['officeNo'])?$CmfOfficeproductbaofei['officeNo']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>入库：</label>
                    <p><?php echo !empty($CmfOfficeproductbaofei['inWarehouse'])?$CmfOfficeproductbaofei['inWarehouse']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>报废数量：</label>
                    <p><?php echo !empty($CmfOfficeproductbaofei['baofeiQuantity'])?$CmfOfficeproductbaofei['baofeiQuantity']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>报废申请人：</label>
                    <p><?php echo !empty($CmfOfficeproductbaofei['baofeiApplyMan'])?$CmfOfficeproductbaofei['baofeiApplyMan']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>责任人：</label>
                    <p><?php echo !empty($CmfOfficeproductbaofei['dutyMan'])?$CmfOfficeproductbaofei['dutyMan']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>批准人：</label>
                    <p><?php echo !empty($CmfOfficeproductbaofei['approvalMan'])?$CmfOfficeproductbaofei['approvalMan']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>备注：</label>
                    <p><?php echo !empty($CmfOfficeproductbaofei['memo'])?$CmfOfficeproductbaofei['memo']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建人：</label>
                    <p><?php echo !empty($CmfOfficeproductbaofei['creator'])?$CmfOfficeproductbaofei['creator']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建时间：</label>
                    <p><?php echo !empty($CmfOfficeproductbaofei['creatTime'])?$CmfOfficeproductbaofei['creatTime']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>价格：</label>
                    <p><?php echo !empty($CmfOfficeproductbaofei['price'])?$CmfOfficeproductbaofei['price']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>数量：</label>
                    <p><?php echo !empty($CmfOfficeproductbaofei['quantity'])?$CmfOfficeproductbaofei['quantity']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>金额：</label>
                    <p><?php echo !empty($CmfOfficeproductbaofei['count'])?$CmfOfficeproductbaofei['count']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>