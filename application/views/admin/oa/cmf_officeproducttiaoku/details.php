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
            <div class="panel-heading">办公用品调库详细内容<a href="<?php echo site_url('/oa/CmfOfficeproducttiaoku/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfOfficeproducttiaoku['ID'])?$CmfOfficeproducttiaoku['ID']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>办公用品名称：</label>
                    <p><?php echo !empty($CmfOfficeproducttiaoku['officeName'])?$CmfOfficeproducttiaoku['officeName']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>办公用品编号：</label>
                    <p><?php echo !empty($CmfOfficeproducttiaoku['officeNo'])?$CmfOfficeproducttiaoku['officeNo']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>转移出库仓库：</label>
                    <p><?php echo !empty($CmfOfficeproducttiaoku['transferOutWarehouse'])?$CmfOfficeproducttiaoku['transferOutWarehouse']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>转移入库仓库：</label>
                    <p><?php echo !empty($CmfOfficeproducttiaoku['transferInWarehouse'])?$CmfOfficeproducttiaoku['transferInWarehouse']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>转移数量：</label>
                    <p><?php echo !empty($CmfOfficeproducttiaoku['transferQuantity'])?$CmfOfficeproducttiaoku['transferQuantity']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>职员：</label>
                    <p><?php echo !empty($CmfOfficeproducttiaoku['staffMan'])?$CmfOfficeproducttiaoku['staffMan']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>批准人：</label>
                    <p><?php echo !empty($CmfOfficeproducttiaoku['approvalMan'])?$CmfOfficeproducttiaoku['approvalMan']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>备注：</label>
                    <p><?php echo !empty($CmfOfficeproducttiaoku['memo'])?$CmfOfficeproducttiaoku['memo']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建人：</label>
                    <p><?php echo !empty($CmfOfficeproducttiaoku['creator'])?$CmfOfficeproducttiaoku['creator']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建时间：</label>
                    <p><?php echo !empty($CmfOfficeproducttiaoku['creatTime'])?$CmfOfficeproducttiaoku['creatTime']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>价格：</label>
                    <p><?php echo !empty($CmfOfficeproducttiaoku['price'])?$CmfOfficeproducttiaoku['price']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>数量：</label>
                    <p><?php echo !empty($CmfOfficeproducttiaoku['quantity'])?$CmfOfficeproducttiaoku['quantity']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>金额：</label>
                    <p><?php echo !empty($CmfOfficeproducttiaoku['count'])?$CmfOfficeproducttiaoku['count']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>是否审核：</label>
                    <p><?php echo !empty($CmfOfficeproducttiaoku['isExamine'])?$CmfOfficeproducttiaoku['isExamine']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>审核时间：</label>
                    <p><?php echo !empty($CmfOfficeproducttiaoku['exTime'])?$CmfOfficeproducttiaoku['exTime']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>