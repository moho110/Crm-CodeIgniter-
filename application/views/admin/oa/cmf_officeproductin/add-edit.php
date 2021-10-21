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
                <div class="panel-heading"><?php echo $action; ?> 办公用品入库 <a href="<?php echo site_url('/oa/CmfOfficeproductin/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="ID">编号：</label>
                            <input type="text" class="form-control" name="ID" placeholder="Enter ID" value="<?php echo !empty($cmf_officeproductin['ID'])?$cmf_officeproductin['ID']:''; ?>">
                            <?php echo form_error('ID','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="officeName">办公用品名称：</label>
                            <input type="text" class="form-control" name="officeName" placeholder="Enter officeName" value="<?php echo !empty($cmf_officeproductin['officeName'])?$cmf_officeproductin['officeName']:''; ?>">
                            <?php echo form_error('officeName','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="officeNo">办公用品编号：</label>
                            <input type="text" class="form-control" name="officeNo" placeholder="Enter officeNo" value="<?php echo !empty($cmf_officeproductin['officeNo'])?$cmf_officeproductin['officeNo']:''; ?>">
                            <?php echo form_error('officeNo','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="inWarehouse">入库：</label>
                            <input type="text" class="form-control" name="inWarehouse" placeholder="Enter inWarehouse" value="<?php echo !empty($cmf_officeproductin['inWarehouse'])?$cmf_officeproductin['inWarehouse']:''; ?>">
                            <?php echo form_error('inWarehouse','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="inQuantity">入库数量：</label>
                            <input type="text" class="form-control" name="inQuantity" placeholder="Enter inQuantity" value="<?php echo !empty($cmf_officeproductin['inQuantity'])?$cmf_officeproductin['inQuantity']:''; ?>">
                            <?php echo form_error('inQuantity','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="staffMan">职员：</label>
                            <input type="text" class="form-control" name="staffMan" placeholder="Enter staffMan" value="<?php echo !empty($cmf_officeproductin['staffMan'])?$cmf_officeproductin['staffMan']:''; ?>">
                            <?php echo form_error('staffMan','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="approvalMan">批准人：</label>
                            <input type="text" class="form-control" name="approvalMan" placeholder="Enter approvalMan" value="<?php echo !empty($cmf_officeproductin['approvalMan'])?$cmf_officeproductin['approvalMan']:''; ?>">
                            <?php echo form_error('approvalMan','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="memo">备注：</label>
                            <input type="text" class="form-control" name="memo" placeholder="Enter memo" value="<?php echo !empty($cmf_officeproductin['memo'])?$cmf_officeproductin['memo']:''; ?>">
                            <?php echo form_error('memo','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="creator">创建人：</label>
                            <input type="text" class="form-control" name="creator" placeholder="Enter creator" value="<?php echo !empty($cmf_officeproductin['creator'])?$cmf_officeproductin['creator']:''; ?>">
                            <?php echo form_error('creator','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="createTime">创建时间：</label>
                            <input type="text" class="form-control" name="createTime" placeholder="Enter createTime" value="<?php echo !empty($cmf_officeproductin['createTime'])?$cmf_officeproductin['createTime']:''; ?>">
                            <?php echo form_error('createTime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="price">价格：</label>
                            <input type="text" class="form-control" name="price" placeholder="Enter price" value="<?php echo !empty($cmf_officeproductin['price'])?$cmf_officeproductin['price']:''; ?>">
                            <?php echo form_error('price','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="quantity">数量：</label>
                            <input type="text" class="form-control" name="quantity" placeholder="Enter quantity" value="<?php echo !empty($cmf_officeproductin['quantity'])?$cmf_officeproductin['quantity']:''; ?>">
                            <?php echo form_error('quantity','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="count">金额：</label>
                            <input type="text" class="form-control" name="count" placeholder="Enter count" value="<?php echo !empty($cmf_officeproductin['count'])?$cmf_officeproductin['count']:''; ?>">
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