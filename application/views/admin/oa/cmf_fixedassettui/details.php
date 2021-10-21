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
            <div class="panel-heading">固定资产详细内容<a href="<?php echo site_url('/oa/CmfFixedassettui/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfFixedassettui['ID'])?$CmfFixedassettui['ID']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>资产名称：</label>
                    <p><?php echo !empty($CmfFixedassettui['setName'])?$CmfFixedassettui['setName']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>资产编号：</label>
                    <p><?php echo !empty($CmfFixedassettui['setNo'])?$CmfFixedassettui['setNo']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>所在部门：</label>
                    <p><?php echo !empty($CmfFixedassettui['inDepartment'])?$CmfFixedassettui['inDepartment']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>归还人：</label>
                    <p><?php echo !empty($CmfFixedassettui['returnMan'])?$CmfFixedassettui['returnMan']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>批准人：</label>
                    <p><?php echo !empty($CmfFixedassettui['approvalMan'])?$CmfFixedassettui['approvalMan']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>备注：</label>
                    <p><?php echo !empty($CmfFixedassettui['memo'])?$CmfFixedassettui['memo']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建人：</label>
                    <p><?php echo !empty($CmfFixedassettui['creator'])?$CmfFixedassettui['creator']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建时间：</label>
                    <p><?php echo !empty($CmfFixedassettui['createTime'])?$CmfFixedassettui['createTime']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>价格：</label>
                    <p><?php echo !empty($CmfFixedassettui['price'])?$CmfFixedassettui['price']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>数量：</label>
                    <p><?php echo !empty($CmfFixedassettui['quantity'])?$CmfFixedassettui['quantity']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>金额：</label>
                    <p><?php echo !empty($CmfFixedassettui['count'])?$CmfFixedassettui['count']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>