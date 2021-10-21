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
            <div class="panel-heading">部门详细内容<a href="<?php echo site_url('/oa/CmfDepartment/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>部门ID：</label>
                    <p><?php echo !empty($CmfDepartment['DEPT_ID'])?$CmfDepartment['DEPT_ID']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>部门名称：</label>
                    <p><?php echo !empty($CmfDepartment['DEPT_NAME'])?$CmfDepartment['DEPT_NAME']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>电话号码：</label>
                    <p><?php echo !empty($CmfDepartment['TEL_NO'])?$CmfDepartment['TEL_NO']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>传真号码：</label>
                    <p><?php echo !empty($CmfDepartment['FAX_NO'])?$CmfDepartment['FAX_NO']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>部门编号：</label>
                    <p><?php echo !empty($CmfDepartment['DEPT_NO'])?$CmfDepartment['DEPT_NO']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>上级部门：</label>
                    <p><?php echo !empty($CmfDepartment['DEPT_PARENT'])?$CmfDepartment['DEPT_PARENT']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>部门经理：</label>
                    <p><?php echo !empty($CmfDepartment['MANAGER'])?$CmfDepartment['MANAGER']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>部门领导一：</label>
                    <p><?php echo !empty($CmfDepartment['LEADER1'])?$CmfDepartment['LEADER1']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>部门领导二：</label>
                    <p><?php echo !empty($CmfDepartment['LEADER2'])?$CmfDepartment['LEADER2']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>部门职能：</label>
                    <p><?php echo !empty($CmfDepartment['DEPT_FUNC'])?$CmfDepartment['DEPT_FUNC']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>顺序编号：</label>
                    <p><?php echo !empty($CmfDepartment['orderno'])?$CmfDepartment['orderno']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>