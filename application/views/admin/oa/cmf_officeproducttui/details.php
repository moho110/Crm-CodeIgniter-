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
            <div class="panel-heading">办公用品详细内容<a href="<?php echo site_url('/oa/CmfOfficeproducttui/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfOfficeproducttui['ID'])?$CmfOfficeproducttui['ID']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>办公用品名称：</label>
                    <p><?php echo !empty($CmfOfficeproducttui['officeName'])?$CmfOfficeproducttui['officeName']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>办公用品编号：</label>
                    <p><?php echo !empty($CmfOfficeproducttui['officeNo'])?$CmfOfficeproducttui['officeNo']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>退还仓库：</label>
                    <p><?php echo !empty($CmfOfficeproducttui['quitWarehouse'])?$CmfOfficeproducttui['quitWarehouse']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>退还仓库数量：</label>
                    <p><?php echo !empty($CmfOfficeproducttui['quitWareQuantity'])?$CmfOfficeproducttui['quitWareQuantity']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>退还对象：</label>
                    <p><?php echo !empty($CmfOfficeproducttui['quitObjects'])?$CmfOfficeproducttui['quitObjects']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>职员：</label>
                    <p><?php echo !empty($CmfOfficeproducttui['staffMan'])?$CmfOfficeproducttui['staffMan']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>批准人：</label>
                    <p><?php echo !empty($CmfOfficeproducttui['approvalMan'])?$CmfOfficeproducttui['approvalMan']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>备注：</label>
                    <p><?php echo !empty($CmfOfficeproducttui['memo'])?$CmfOfficeproducttui['memo']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建人：</label>
                    <p><?php echo !empty($CmfOfficeproducttui['creator'])?$CmfOfficeproducttui['creator']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建时间：</label>
                    <p><?php echo !empty($CmfOfficeproducttui['creatTime'])?$CmfOfficeproducttui['creatTime']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>价格：</label>
                    <p><?php echo !empty($CmfOfficeproducttui['price'])?$CmfOfficeproducttui['price']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>数量：</label>
                    <p><?php echo !empty($CmfOfficeproducttui['quantity'])?$CmfOfficeproducttui['quantity']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>金额：</label>
                    <p><?php echo !empty($CmfOfficeproducttui['count'])?$CmfOfficeproducttui['count']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>