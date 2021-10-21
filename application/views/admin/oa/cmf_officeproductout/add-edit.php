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
                <div class="panel-heading"><?php echo $action; ?> 办公用品出库 <a href="<?php echo site_url('/oa/CmfOfficeproductout/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="ID">编号：</label>
                            <input type="text" class="form-control" name="ID" placeholder="Enter ID" value="<?php echo !empty($cmf_officeproductout['ID'])?$cmf_officeproductout['ID']:''; ?>">
                            <?php echo form_error('ID','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="officeName">办公用品名称：</label>
                            <input type="text" class="form-control" name="officeName" placeholder="Enter officeName" value="<?php echo !empty($cmf_officeproductout['officeName'])?$cmf_officeproductout['officeName']:''; ?>">
                            <?php echo form_error('officeName','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="officeNo">办公用品编号：</label>
                            <input type="text" class="form-control" name="officeNo" placeholder="Enter officeNo" value="<?php echo !empty($cmf_officeproductout['officeNo'])?$cmf_officeproductout['officeNo']:''; ?>">
                            <?php echo form_error('officeNo','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="outWarehouse">出库仓库：</label>
                            <input type="text" class="form-control" name="outWarehouse" placeholder="Enter outWarehouse" value="<?php echo !empty($cmf_officeproductout['outWarehouse'])?$cmf_officeproductout['outWarehouse']:''; ?>">
                            <?php echo form_error('outWarehouse','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="outQuantity">出库数量：</label>
                            <input type="text" class="form-control" name="outQuantity" placeholder="Enter outQuantity" value="<?php echo !empty($cmf_officeproductout['outQuantity'])?$cmf_officeproductout['outQuantity']:''; ?>">
                            <?php echo form_error('outQuantity','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="applyMan">申请人：</label>
                            <input type="text" class="form-control" name="applyMan" placeholder="Enter applyMan" value="<?php echo !empty($cmf_officeproductout['applyMan'])?$cmf_officeproductout['applyMan']:''; ?>">
                            <?php echo form_error('applyMan','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="outStatus">出库状态：</label>
                            <input type="text" class="form-control" name="outStatus" placeholder="Enter outStatus" value="<?php echo !empty($cmf_officeproductout['outStatus'])?$cmf_officeproductout['outStatus']:''; ?>">
                            <?php echo form_error('outStatus','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="isExamine">是否审核：</label>
                            <input type="text" class="form-control" name="isExamine" placeholder="Enter isExamine" value="<?php echo !empty($cmf_officeproductout['isExamine'])?$cmf_officeproductout['isExamine']:''; ?>">
                            <?php echo form_error('isExamine','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="approvalMan">批准人：</label>
                            <input type="text" class="form-control" name="approvalMan" placeholder="Enter approvalMan" value="<?php echo !empty($cmf_officeproductout['approvalMan'])?$cmf_officeproductout['approvalMan']:''; ?>">
                            <?php echo form_error('approvalMan','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="memo">备注：</label>
                            <input type="text" class="form-control" name="memo" placeholder="Enter memo" value="<?php echo !empty($cmf_officeproductout['memo'])?$cmf_officeproductout['memo']:''; ?>">
                            <?php echo form_error('memo','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="creator">创建人：</label>
                            <input type="text" class="form-control" name="creator" placeholder="Enter creator" value="<?php echo !empty($cmf_officeproductout['creator'])?$cmf_officeproductout['creator']:''; ?>">
                            <?php echo form_error('creator','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="createTime">创建时间：</label>
                            <input type="text" class="form-control" name="createTime" placeholder="Enter createTime" value="<?php echo !empty($cmf_officeproductout['createTime'])?$cmf_officeproductout['createTime']:''; ?>">
                            <?php echo form_error('createTime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="price">价格：</label>
                            <input type="text" class="form-control" name="price" placeholder="Enter price" value="<?php echo !empty($cmf_officeproductout['price'])?$cmf_officeproductout['price']:''; ?>">
                            <?php echo form_error('price','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="quantity">数量：</label>
                            <input type="text" class="form-control" name="quantity" placeholder="Enter quantity" value="<?php echo !empty($cmf_officeproductout['quantity'])?$cmf_officeproductout['quantity']:''; ?>">
                            <?php echo form_error('quantity','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="count">金额：</label>
                            <input type="text" class="form-control" name="count" placeholder="Enter count" value="<?php echo !empty($cmf_officeproductout['count'])?$cmf_officeproductout['count']:''; ?>">
                            <?php echo form_error('count','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="returnLimited">归还期限：</label>
                            <input type="text" class="form-control" name="returnLimited" placeholder="Enter returnLimited" value="<?php echo !empty($cmf_officeproductout['returnLimited'])?$cmf_officeproductout['returnLimited']:''; ?>">
                            <?php echo form_error('returnLimited','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="isReturn">是否归还：</label>
                            <input type="text" class="form-control" name="isReturn" placeholder="Enter isReturn" value="<?php echo !empty($cmf_officeproductout['isReturn'])?$cmf_officeproductout['isReturn']:''; ?>">
                            <?php echo form_error('isReturn','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="returnReiceiver">归还接收人：</label>
                            <input type="text" class="form-control" name="returnReiceiver" placeholder="Enter returnReiceiver" value="<?php echo !empty($cmf_officeproductout['returnReiceiver'])?$cmf_officeproductout['returnReiceiver']:''; ?>">
                            <?php echo form_error('returnReiceiver','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="realReturnDate">实际归还日期：</label>
                            <input type="text" class="form-control" name="realReturnDate" placeholder="Enter realReturnDate" value="<?php echo !empty($cmf_officeproductout['realReturnDate'])?$cmf_officeproductout['realReturnDate']:''; ?>">
                            <?php echo form_error('realReturnDate','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="examineTime">审核日期：</label>
                            <input type="text" class="form-control" name="examineTime" placeholder="Enter examineTime" value="<?php echo !empty($cmf_officeproductout['examineTime'])?$cmf_officeproductout['examineTime']:''; ?>">
                            <?php echo form_error('examineTime','<p class="help-block text-danger">','</p>'); ?>
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