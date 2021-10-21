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
            <div class="panel-heading">固定资产维修详细内容<a href="<?php echo site_url('/oa/CmfFixedassetweixiu/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>编号：</label>
                    <p><?php echo !empty($CmfFixedassetweixiu['ID'])?$CmfFixedassetweixiu['ID']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>资产名称：</label>
                    <p><?php echo !empty($CmfFixedassetweixiu['setName'])?$CmfFixedassetweixiu['setName']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>资产编号：</label>
                    <p><?php echo !empty($CmfFixedassetweixiu['setNo'])?$CmfFixedassetweixiu['setNo']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>所在部门：</label>
                    <p><?php echo !empty($CmfFixedassetweixiu['inDepartment'])?$CmfFixedassetweixiu['inDepartment']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>维修单元：</label>
                    <p><?php echo !empty($CmfFixedassetweixiu['repairUnit'])?$CmfFixedassetweixiu['repairUnit']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>维修人：</label>
                    <p><?php echo !empty($CmfFixedassetweixiu['repairMan'])?$CmfFixedassetweixiu['repairMan']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>情况介绍：</label>
                    <p><?php echo !empty($CmfFixedassetweixiu['thingIntro'])?$CmfFixedassetweixiu['thingIntro']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>批准人：</label>
                    <p><?php echo !empty($CmfFixedassetweixiu['approvalMan'])?$CmfFixedassetweixiu['approvalMan']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>备注：</label>
                    <p><?php echo !empty($CmfFixedassetweixiu['memo'])?$CmfFixedassetweixiu['memo']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建人：</label>
                    <p><?php echo !empty($CmfFixedassetweixiu['creator'])?$CmfFixedassetweixiu['creator']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>创建时间：</label>
                    <p><?php echo !empty($CmfFixedassetweixiu['creatTime'])?$CmfFixedassetweixiu['creatTime']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>数量：</label>
                    <p><?php echo !empty($CmfFixedassetweixiu['quantity'])?$CmfFixedassetweixiu['quantity']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>金额：</label>
                    <p><?php echo !empty($CmfFixedassetweixiu['count'])?$CmfFixedassetweixiu['count']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>