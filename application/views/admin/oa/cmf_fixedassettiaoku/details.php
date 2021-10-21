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
            <div class="panel-heading">固定资产调库详细内容<a href="<?php echo site_url('/oa/CmfFixedassettiaoku/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfFixedassettiaoku['ID'])?$CmfFixedassettiaoku['ID']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>资产名称：</label>
                    <p><?php echo !empty($CmfFixedassettiaoku['setName'])?$CmfFixedassettiaoku['setName']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>资产编号：</label>
                    <p><?php echo !empty($CmfFixedassettiaoku['setNo'])?$CmfFixedassettiaoku['setNo']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>原所在部门：</label>
                    <p><?php echo !empty($CmfFixedassettiaoku['oriInDepartment'])?$CmfFixedassettiaoku['oriInDepartment']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>现所在部门：</label>
                    <p><?php echo !empty($CmfFixedassettiaoku['nowInDepartment'])?$CmfFixedassettiaoku['nowInDepartment']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>批准人：</label>
                    <p><?php echo !empty($CmfFixedassettiaoku['approvalMan'])?$CmfFixedassettiaoku['approvalMan']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>备注：</label>
                    <p><?php echo !empty($CmfFixedassettiaoku['memo'])?$CmfFixedassettiaoku['memo']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建人：</label>
                    <p><?php echo !empty($CmfFixedassettiaoku['creator'])?$CmfFixedassettiaoku['creator']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建时间：</label>
                    <p><?php echo !empty($CmfFixedassettiaoku['createTime'])?$CmfFixedassettiaoku['createTime']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>价格：</label>
                    <p><?php echo !empty($CmfFixedassettiaoku['price'])?$CmfFixedassettiaoku['price']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>数量：</label>
                    <p><?php echo !empty($CmfFixedassettiaoku['quantity'])?$CmfFixedassettiaoku['quantity']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>金额：</label>
                    <p><?php echo !empty($CmfFixedassettiaoku['count'])?$CmfFixedassettiaoku['count']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>