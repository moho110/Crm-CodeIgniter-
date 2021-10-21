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
            <div class="panel-heading">固定资产出详细内容<a href="<?php echo site_url('/oa/CmfFixedassetout/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfFixedassetout['ID'])?$CmfFixedassetout['ID']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>资产名称：</label>
                    <p><?php echo !empty($CmfFixedassetout['setName'])?$CmfFixedassetout['setName']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>资产编号：</label>
                    <p><?php echo !empty($CmfFixedassetout['setNo'])?$CmfFixedassetout['setNo']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>所在部门：</label>
                    <p><?php echo !empty($CmfFixedassetout['inDepartment'])?$CmfFixedassetout['inDepartment']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>借领条件：</label>
                    <p><?php echo !empty($CmfFixedassetout['jielingCondition'])?$CmfFixedassetout['jielingCondition']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>借领人：</label>
                    <p><?php echo !empty($CmfFixedassetout['jielingMan'])?$CmfFixedassetout['jielingMan']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>批准人：</label>
                    <p><?php echo !empty($CmfFixedassetout['approvalMan'])?$CmfFixedassetout['approvalMan']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>备注：</label>
                    <p><?php echo !empty($CmfFixedassetout['memo'])?$CmfFixedassetout['memo']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建人：</label>
                    <p><?php echo !empty($CmfFixedassetout['creator'])?$CmfFixedassetout['creator']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建时间：</label>
                    <p><?php echo !empty($CmfFixedassetout['createTime'])?$CmfFixedassetout['createTime']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>价格：</label>
                    <p><?php echo !empty($CmfFixedassetout['price'])?$CmfFixedassetout['price']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>数量：</label>
                    <p><?php echo !empty($CmfFixedassetout['quantity'])?$CmfFixedassetout['quantity']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>金额：</label>
                    <p><?php echo !empty($CmfFixedassetout['count'])?$CmfFixedassetout['count']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>