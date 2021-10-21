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
            <div class="panel-heading">人力开支详细内容<a href="<?php echo site_url('/oa/CmfHrmsExpense/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfHrmsExpense['ID'])?$CmfHrmsExpense['ID']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>工作ID：</label>
                    <p><?php echo !empty($CmfHrmsExpense['workId'])?$CmfHrmsExpense['workId']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>名称：</label>
                    <p><?php echo !empty($CmfHrmsExpense['name'])?$CmfHrmsExpense['name']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>性别：</label>
                    <p><?php echo !empty($CmfHrmsExpense['sex'])?$CmfHrmsExpense['sex']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>所在部门：</label>
                    <p><?php echo !empty($CmfHrmsExpense['inDepartment'])?$CmfHrmsExpense['inDepartment']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>费用类型：</label>
                    <p><?php echo !empty($CmfHrmsExpense['feeType'])?$CmfHrmsExpense['feeType']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>费用数量：</label>
                    <p><?php echo !empty($CmfHrmsExpense['feeNumber'])?$CmfHrmsExpense['feeNumber']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>使用理由：</label>
                    <p><?php echo !empty($CmfHrmsExpense['useReason'])?$CmfHrmsExpense['useReason']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建者：</label>
                    <p><?php echo !empty($CmfHrmsExpense['creator'])?$CmfHrmsExpense['creator']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建时间：</label>
                    <p><?php echo !empty($CmfHrmsExpense['createTime'])?$CmfHrmsExpense['createTime']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>