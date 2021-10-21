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
            <div class="panel-heading">入固定资产详细内容<a href="<?php echo site_url('/oa/CmfFixedassetin/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfFixedassetin['ID'])?$CmfFixedassetin['ID']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>资产名称：</label>
                    <p><?php echo !empty($CmfFixedassetin['setName'])?$CmfFixedassetin['setName']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>资产编号：</label>
                    <p><?php echo !empty($CmfFixedassetin['setNo'])?$CmfFixedassetin['setNo']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>所在部门：</label>
                    <p><?php echo !empty($CmfFixedassetin['inDepartment'])?$CmfFixedassetin['inDepartment']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>批准人：</label>
                    <p><?php echo !empty($CmfFixedassetin['approvalMan'])?$CmfFixedassetin['approvalMan']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>备注：</label>
                    <p><?php echo !empty($CmfFixedassetin['memo'])?$CmfFixedassetin['memo']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建人：</label>
                    <p><?php echo !empty($CmfFixedassetin['creator'])?$CmfFixedassetin['creator']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建时间：</label>
                    <p><?php echo !empty($CmfFixedassetin['createTime'])?$CmfFixedassetin['createTime']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>价格：</label>
                    <p><?php echo !empty($CmfFixedassetin['price'])?$CmfFixedassetin['price']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>数量：</label>
                    <p><?php echo !empty($CmfFixedassetin['quantity'])?$CmfFixedassetin['quantity']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>金额：</label>
                    <p><?php echo !empty($CmfFixedassetin['count'])?$CmfFixedassetin['count']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>