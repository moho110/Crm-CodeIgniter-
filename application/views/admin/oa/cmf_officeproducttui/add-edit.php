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
                <div class="panel-heading"><?php echo $action; ?> 办公用品 <a href="<?php echo site_url('/oa/CmfOfficeproducttui/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="ID">编号：</label>
                            <input type="text" class="form-control" name="ID" placeholder="Enter ID" value="<?php echo !empty($cmf_officeproducttui['ID'])?$cmf_officeproducttui['ID']:''; ?>">
                            <?php echo form_error('ID','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="officeName">办公用品名称：</label>
                            <input type="text" class="form-control" name="officeName" placeholder="Enter officeName" value="<?php echo !empty($cmf_officeproducttui['officeName'])?$cmf_officeproducttui['officeName']:''; ?>">
                            <?php echo form_error('officeName','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="officeNo">办公用品编号：</label>
                            <input type="text" class="form-control" name="officeNo" placeholder="Enter officeNo" value="<?php echo !empty($cmf_officeproducttui['officeNo'])?$cmf_officeproducttui['officeNo']:''; ?>">
                            <?php echo form_error('officeNo','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="quitWarehouse">退还仓库：</label>
                            <input type="text" class="form-control" name="quitWarehouse" placeholder="Enter quitWarehouse" value="<?php echo !empty($cmf_officeproducttui['quitWarehouse'])?$cmf_officeproducttui['quitWarehouse']:''; ?>">
                            <?php echo form_error('quitWarehouse','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="quitWareQuantity">退还仓库数量：</label>
                            <input type="text" class="form-control" name="quitWareQuantity" placeholder="Enter quitWareQuantity" value="<?php echo !empty($cmf_officeproducttui['quitWareQuantity'])?$cmf_officeproducttui['quitWareQuantity']:''; ?>">
                            <?php echo form_error('quitWareQuantity','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="quitObjects">退还对象：</label>
                            <input type="text" class="form-control" name="quitObjects" placeholder="Enter quitObjects" value="<?php echo !empty($cmf_officeproducttui['quitObjects'])?$cmf_officeproducttui['quitObjects']:''; ?>">
                            <?php echo form_error('quitObjects','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="staffMan">职员：</label>
                            <input type="text" class="form-control" name="staffMan" placeholder="Enter staffMan" value="<?php echo !empty($cmf_officeproducttui['staffMan'])?$cmf_officeproducttui['staffMan']:''; ?>">
                            <?php echo form_error('staffMan','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="approvalMan">批准人：</label>
                            <input type="text" class="form-control" name="approvalMan" placeholder="Enter approvalMan" value="<?php echo !empty($cmf_officeproducttui['approvalMan'])?$cmf_officeproducttui['approvalMan']:''; ?>">
                            <?php echo form_error('approvalMan','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="memo">备注：</label>
                            <input type="text" class="form-control" name="memo" placeholder="Enter memo" value="<?php echo !empty($cmf_officeproducttui['memo'])?$cmf_officeproducttui['memo']:''; ?>">
                            <?php echo form_error('memo','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="creator">创建人：</label>
                            <input type="text" class="form-control" name="creator" placeholder="Enter creator" value="<?php echo !empty($cmf_officeproducttui['creator'])?$cmf_officeproducttui['creator']:''; ?>">
                            <?php echo form_error('creator','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="creatTime">创建时间：</label>
                            <input type="text" class="form-control" name="creatTime" placeholder="Enter creatTime" value="<?php echo !empty($cmf_officeproducttui['creatTime'])?$cmf_officeproducttui['creatTime']:''; ?>">
                            <?php echo form_error('creatTime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="price">价格：</label>
                            <input type="text" class="form-control" name="price" placeholder="Enter price" value="<?php echo !empty($cmf_officeproducttui['price'])?$cmf_officeproducttui['price']:''; ?>">
                            <?php echo form_error('price','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="quantity">数量：</label>
                            <input type="text" class="form-control" name="quantity" placeholder="Enter quantity" value="<?php echo !empty($cmf_officeproducttui['quantity'])?$cmf_officeproducttui['quantity']:''; ?>">
                            <?php echo form_error('quantity','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="count">金额：</label>
                            <input type="text" class="form-control" name="count" placeholder="Enter count" value="<?php echo !empty($cmf_officeproducttui['count'])?$cmf_officeproducttui['count']:''; ?>">
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