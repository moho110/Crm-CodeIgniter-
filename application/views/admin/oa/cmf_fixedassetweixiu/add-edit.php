<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_header");
?>
<div class="container">
    <div class="col-xs-12">
    <?php 
        if(!empty($success_msg)){
            echo '<div class="alert alert-success">'.$success_msg.'</div>';
        }elseif(!empty($error_msg)){
            echo '<div class="alert alert-danger">'.$error_msg.'</div>';
        }
    ?>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading"><?php echo $action; ?> 固定资产维修 <a href="<?php echo site_url('/oa/CmfFixedassetweixiu/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="ID">编号：</label>
                            <input type="text" class="form-control" name="ID" placeholder="Enter ID" value="<?php echo !empty($cmf_fixedassetweixiu['ID'])?$cmf_fixedassetweixiu['ID']:''; ?>">
                            <?php echo form_error('ID','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="setName">资产名称：</label>
                            <input type="text" class="form-control" name="setName" placeholder="Enter setName" value="<?php echo !empty($cmf_fixedassetweixiu['setName'])?$cmf_fixedassetweixiu['setName']:''; ?>">
                            <?php echo form_error('setName','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="setNo">资产编号：</label>
                            <input type="text" class="form-control" name="setNo" placeholder="Enter setNo" value="<?php echo !empty($cmf_fixedassetweixiu['setNo'])?$cmf_fixedassetweixiu['setNo']:''; ?>">
                            <?php echo form_error('setNo','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="inDepartment">所在部门：</label>
                            <input type="text" class="form-control" name="inDepartment" placeholder="Enter inDepartment" value="<?php echo !empty($cmf_fixedassetweixiu['inDepartment'])?$cmf_fixedassetweixiu['inDepartment']:''; ?>">
                            <?php echo form_error('inDepartment','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="repairUnit">维修单元：</label>
                            <input type="text" class="form-control" name="repairUnit" placeholder="Enter repairUnit" value="<?php echo !empty($cmf_fixedassetweixiu['repairUnit'])?$cmf_fixedassetweixiu['repairUnit']:''; ?>">
                            <?php echo form_error('repairUnit','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="repairMan">维修人：</label>
                            <input type="text" class="form-control" name="repairMan" placeholder="Enter repairMan" value="<?php echo !empty($cmf_fixedassetweixiu['repairMan'])?$cmf_fixedassetweixiu['repairMan']:''; ?>">
                            <?php echo form_error('repairMan','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="thingIntro">情况介绍：</label>
                            <input type="text" class="form-control" name="thingIntro" placeholder="Enter thingIntro" value="<?php echo !empty($cmf_fixedassetweixiu['thingIntro'])?$cmf_fixedassetweixiu['thingIntro']:''; ?>">
                            <?php echo form_error('thingIntro','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="approvalMan">批准人：</label>
                            <input type="text" class="form-control" name="approvalMan" placeholder="Enter approvalMan" value="<?php echo !empty($cmf_fixedassetweixiu['approvalMan'])?$cmf_fixedassetweixiu['approvalMan']:''; ?>">
                            <?php echo form_error('approvalMan','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="memo">备注：</label>
                            <input type="text" class="form-control" name="memo" placeholder="Enter memo" value="<?php echo !empty($cmf_fixedassetweixiu['memo'])?$cmf_fixedassetweixiu['memo']:''; ?>">
                            <?php echo form_error('memo','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="creator">创建人：</label>
                            <input type="text" class="form-control" name="creator" placeholder="Enter creator" value="<?php echo !empty($cmf_fixedassetweixiu['creator'])?$cmf_fixedassetweixiu['creator']:''; ?>">
                            <?php echo form_error('creator','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="creatTime">创建时间：</label>
                            <input type="text" class="form-control" name="creatTime" placeholder="Enter creatTime" value="<?php echo !empty($cmf_fixedassetweixiu['creatTime'])?$cmf_fixedassetweixiu['creatTime']:''; ?>">
                            <?php echo form_error('creatTime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="quantity">数量：</label>
                            <input type="text" class="form-control" name="quantity" placeholder="Enter quantity" value="<?php echo !empty($cmf_fixedassetweixiu['quantity'])?$cmf_fixedassetweixiu['quantity']:''; ?>">
                            <?php echo form_error('quantity','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="count">金额：</label>
                            <input type="text" class="form-control" name="count" placeholder="Enter count" value="<?php echo !empty($cmf_fixedassetweixiu['count'])?$cmf_fixedassetweixiu['count']:''; ?>">
                            <?php echo form_error('count','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <input type="submit" name="postSubmit" class="btn btn-primary" value="提交"/>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view(__ADMIN_TEMPLATE__ . "/common_footer");
?>