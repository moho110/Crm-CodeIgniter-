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
            <div class="panel-heading">固定资产报废详细内容<a href="<?php echo site_url('/oa/CmfFixedassetbaofei/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfFixedassetbaofei['ID'])?$CmfFixedassetbaofei['ID']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>资产名称：</label>
                    <p><?php echo !empty($CmfFixedassetbaofei['setName'])?$CmfFixedassetbaofei['setName']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>资产编号：</label>
                    <p><?php echo !empty($CmfFixedassetbaofei['setNo'])?$CmfFixedassetbaofei['setNo']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>所在部门：</label>
                    <p><?php echo !empty($CmfFixedassetbaofei['inDepartment'])?$CmfFixedassetbaofei['inDepartment']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>报废时间：</label>
                    <p><?php echo !empty($CmfFixedassetbaofei['baofeiTime'])?$CmfFixedassetbaofei['baofeiTime']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>报废申请人：</label>
                    <p><?php echo !empty($CmfFixedassetbaofei['baofeiApplyMan'])?$CmfFixedassetbaofei['baofeiApplyMan']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>批准人：</label>
                    <p><?php echo !empty($CmfFixedassetbaofei['approvalMan'])?$CmfFixedassetbaofei['approvalMan']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>备注：</label>
                    <p><?php echo !empty($CmfFixedassetbaofei['memo'])?$CmfFixedassetbaofei['memo']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建人：</label>
                    <p><?php echo !empty($CmfFixedassetbaofei['creator'])?$CmfFixedassetbaofei['creator']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建时间：</label>
                    <p><?php echo !empty($CmfFixedassetbaofei['createTime'])?$CmfFixedassetbaofei['createTime']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>价格：</label>
                    <p><?php echo !empty($CmfFixedassetbaofei['price'])?$CmfFixedassetbaofei['price']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>数量：</label>
                    <p><?php echo !empty($CmfFixedassetbaofei['quantity'])?$CmfFixedassetbaofei['quantity']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>金额：</label>
                    <p><?php echo !empty($CmfFixedassetbaofei['count'])?$CmfFixedassetbaofei['count']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>