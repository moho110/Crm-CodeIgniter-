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
            <div class="panel-heading">办公用品出库详细内容<a href="<?php echo site_url('/oa/CmfOfficeproductout/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfOfficeproductout['ID'])?$CmfOfficeproductout['ID']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>办公用品名称：</label>
                    <p><?php echo !empty($CmfOfficeproductout['officeName'])?$CmfOfficeproductout['officeName']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>办公用品编号：</label>
                    <p><?php echo !empty($CmfOfficeproductout['officeNo'])?$CmfOfficeproductout['officeNo']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>出库仓库：</label>
                    <p><?php echo !empty($CmfOfficeproductout['outWarehouse'])?$CmfOfficeproductout['outWarehouse']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>出库数量：</label>
                    <p><?php echo !empty($CmfOfficeproductout['outQuantity'])?$CmfOfficeproductout['outQuantity']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>申请人：</label>
                    <p><?php echo !empty($CmfOfficeproductout['applyMan'])?$CmfOfficeproductout['applyMan']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>出库状态：</label>
                    <p><?php echo !empty($CmfOfficeproductout['outStatus'])?$CmfOfficeproductout['outStatus']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>是否审核：</label>
                    <p><?php echo !empty($CmfOfficeproductout['isExamine'])?$CmfOfficeproductout['isExamine']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>批准人：</label>
                    <p><?php echo !empty($CmfOfficeproductout['approvalMan'])?$CmfOfficeproductout['approvalMan']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>备注：</label>
                    <p><?php echo !empty($CmfOfficeproductout['memo'])?$CmfOfficeproductout['memo']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建人：</label>
                    <p><?php echo !empty($CmfOfficeproductout['creator'])?$CmfOfficeproductout['creator']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建时间：</label>
                    <p><?php echo !empty($CmfOfficeproductout['createTime'])?$CmfOfficeproductout['createTime']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>价格：</label>
                    <p><?php echo !empty($CmfOfficeproductout['price'])?$CmfOfficeproductout['price']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>数量：</label>
                    <p><?php echo !empty($CmfOfficeproductout['quantity'])?$CmfOfficeproductout['quantity']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>金额：</label>
                    <p><?php echo !empty($CmfOfficeproductout['count'])?$CmfOfficeproductout['count']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>归还期限：</label>
                    <p><?php echo !empty($CmfOfficeproductout['returnLimited'])?$CmfOfficeproductout['returnLimited']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>是否归还：</label>
                    <p><?php echo !empty($CmfOfficeproductout['isReturn'])?$CmfOfficeproductout['isReturn']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>归还接收人：</label>
                    <p><?php echo !empty($CmfOfficeproductout['returnReiceiver'])?$CmfOfficeproductout['returnReiceiver']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>实际归还日期：</label>
                    <p><?php echo !empty($CmfOfficeproductout['realReturnDate'])?$CmfOfficeproductout['realReturnDate']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>审核日期：</label>
                    <p><?php echo !empty($CmfOfficeproductout['examineTime'])?$CmfOfficeproductout['examineTime']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>