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
                <div class="panel-heading"><?php echo $action; ?> 办公用品报废 <a href="<?php echo site_url('/oa/CmfOfficeproductbaofei/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="ID">编号：</label>
                            <input type="text" class="form-control" name="ID" placeholder="Enter ID" value="<?php echo !empty($cmf_officeproductbaofei['ID'])?$cmf_officeproductbaofei['ID']:''; ?>">
                            <?php echo form_error('ID','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="officeName">办公用品名称：</label>
                            <input type="text" class="form-control" name="officeName" placeholder="Enter officeName" value="<?php echo !empty($cmf_officeproductbaofei['officeName'])?$cmf_officeproductbaofei['officeName']:''; ?>">
                            <?php echo form_error('officeName','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="officeNo">办公用品编号：</label>
                            <input type="text" class="form-control" name="officeNo" placeholder="Enter officeNo" value="<?php echo !empty($cmf_officeproductbaofei['officeNo'])?$cmf_officeproductbaofei['officeNo']:''; ?>">
                            <?php echo form_error('officeNo','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="inWarehouse">入库：</label>
                            <input type="text" class="form-control" name="inWarehouse" placeholder="Enter inWarehouse" value="<?php echo !empty($cmf_officeproductbaofei['inWarehouse'])?$cmf_officeproductbaofei['inWarehouse']:''; ?>">
                            <?php echo form_error('inWarehouse','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="baofeiQuantity">报废数量：</label>
                            <input type="text" class="form-control" name="baofeiQuantity" placeholder="Enter baofeiQuantity" value="<?php echo !empty($cmf_officeproductbaofei['baofeiQuantity'])?$cmf_officeproductbaofei['baofeiQuantity']:''; ?>">
                            <?php echo form_error('baofeiQuantity','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="baofeiApplyMan">报废申请人：</label>
                            <input type="text" class="form-control" name="baofeiApplyMan" placeholder="Enter baofeiApplyMan" value="<?php echo !empty($cmf_officeproductbaofei['baofeiApplyMan'])?$cmf_officeproductbaofei['baofeiApplyMan']:''; ?>">
                            <?php echo form_error('baofeiApplyMan','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="dutyMan">责任人：</label>
                            <input type="text" class="form-control" name="dutyMan" placeholder="Enter dutyMan" value="<?php echo !empty($cmf_officeproductbaofei['dutyMan'])?$cmf_officeproductbaofei['dutyMan']:''; ?>">
                            <?php echo form_error('dutyMan','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="approvalMan">批准人：</label>
                            <input type="text" class="form-control" name="approvalMan" placeholder="Enter approvalMan" value="<?php echo !empty($cmf_officeproductbaofei['approvalMan'])?$cmf_officeproductbaofei['approvalMan']:''; ?>">
                            <?php echo form_error('approvalMan','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="memo">备注：</label>
                            <input type="text" class="form-control" name="memo" placeholder="Enter memo" value="<?php echo !empty($cmf_officeproductbaofei['memo'])?$cmf_officeproductbaofei['memo']:''; ?>">
                            <?php echo form_error('memo','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="creator">创建人：</label>
                            <input type="text" class="form-control" name="creator" placeholder="Enter creator" value="<?php echo !empty($cmf_officeproductbaofei['creator'])?$cmf_officeproductbaofei['creator']:''; ?>">
                            <?php echo form_error('creator','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="creatTime">创建时间：</label>
                            <input type="text" class="form-control" name="creatTime" placeholder="Enter creatTime" value="<?php echo !empty($cmf_officeproductbaofei['creatTime'])?$cmf_officeproductbaofei['creatTime']:''; ?>">
                            <?php echo form_error('creatTime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="price">价格：</label>
                            <input type="text" class="form-control" name="price" placeholder="Enter price" value="<?php echo !empty($cmf_officeproductbaofei['price'])?$cmf_officeproductbaofei['price']:''; ?>">
                            <?php echo form_error('price','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="quantity">数量：</label>
                            <input type="text" class="form-control" name="quantity" placeholder="Enter quantity" value="<?php echo !empty($cmf_officeproductbaofei['quantity'])?$cmf_officeproductbaofei['quantity']:''; ?>">
                            <?php echo form_error('quantity','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="count">金额：</label>
                            <input type="text" class="form-control" name="count" placeholder="Enter count" value="<?php echo !empty($cmf_officeproductbaofei['count'])?$cmf_officeproductbaofei['count']:''; ?>">
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