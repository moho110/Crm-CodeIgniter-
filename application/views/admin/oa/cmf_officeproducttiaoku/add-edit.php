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
                <div class="panel-heading"><?php echo $action; ?> 办公用品调库 <a href="<?php echo site_url('/oa/CmfOfficeproducttiaoku/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="ID">编号：</label>
                            <input type="text" class="form-control" name="ID" placeholder="Enter ID" value="<?php echo !empty($cmf_officeproducttiaoku['ID'])?$cmf_officeproducttiaoku['ID']:''; ?>">
                            <?php echo form_error('ID','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="officeName">办公用品名称：</label>
                            <input type="text" class="form-control" name="officeName" placeholder="Enter officeName" value="<?php echo !empty($cmf_officeproducttiaoku['officeName'])?$cmf_officeproducttiaoku['officeName']:''; ?>">
                            <?php echo form_error('officeName','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="officeNo">办公用品编号：</label>
                            <input type="text" class="form-control" name="officeNo" placeholder="Enter officeNo" value="<?php echo !empty($cmf_officeproducttiaoku['officeNo'])?$cmf_officeproducttiaoku['officeNo']:''; ?>">
                            <?php echo form_error('officeNo','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="transferOutWarehouse">转移出库仓库：</label>
                            <input type="text" class="form-control" name="transferOutWarehouse" placeholder="Enter transferOutWarehouse" value="<?php echo !empty($cmf_officeproducttiaoku['transferOutWarehouse'])?$cmf_officeproducttiaoku['transferOutWarehouse']:''; ?>">
                            <?php echo form_error('transferOutWarehouse','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="transferInWarehouse">转移入库仓库：</label>
                            <input type="text" class="form-control" name="transferInWarehouse" placeholder="Enter transferInWarehouse" value="<?php echo !empty($cmf_officeproducttiaoku['transferInWarehouse'])?$cmf_officeproducttiaoku['transferInWarehouse']:''; ?>">
                            <?php echo form_error('transferInWarehouse','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="transferQuantity">转移数量：</label>
                            <input type="text" class="form-control" name="transferQuantity" placeholder="Enter transferQuantity" value="<?php echo !empty($cmf_officeproducttiaoku['transferQuantity'])?$cmf_officeproducttiaoku['transferQuantity']:''; ?>">
                            <?php echo form_error('transferQuantity','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="staffMan">职员：</label>
                            <input type="text" class="form-control" name="staffMan" placeholder="Enter staffMan" value="<?php echo !empty($cmf_officeproducttiaoku['staffMan'])?$cmf_officeproducttiaoku['staffMan']:''; ?>">
                            <?php echo form_error('staffMan','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="approvalMan">批准人：</label>
                            <input type="text" class="form-control" name="approvalMan" placeholder="Enter approvalMan" value="<?php echo !empty($cmf_officeproducttiaoku['approvalMan'])?$cmf_officeproducttiaoku['approvalMan']:''; ?>">
                            <?php echo form_error('approvalMan','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="memo">备注：</label>
                            <input type="text" class="form-control" name="memo" placeholder="Enter memo" value="<?php echo !empty($cmf_officeproducttiaoku['memo'])?$cmf_officeproducttiaoku['memo']:''; ?>">
                            <?php echo form_error('memo','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="creator">创建人：</label>
                            <input type="text" class="form-control" name="creator" placeholder="Enter creator" value="<?php echo !empty($cmf_officeproducttiaoku['creator'])?$cmf_officeproducttiaoku['creator']:''; ?>">
                            <?php echo form_error('creator','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="creatTime">创建时间：</label>
                            <input type="text" class="form-control" name="creatTime" placeholder="Enter creatTime" value="<?php echo !empty($cmf_officeproducttiaoku['creatTime'])?$cmf_officeproducttiaoku['creatTime']:''; ?>">
                            <?php echo form_error('creatTime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="price">价格：</label>
                            <input type="text" class="form-control" name="price" placeholder="Enter price" value="<?php echo !empty($cmf_officeproducttiaoku['price'])?$cmf_officeproducttiaoku['price']:''; ?>">
                            <?php echo form_error('price','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="quantity">数量：</label>
                            <input type="text" class="form-control" name="quantity" placeholder="Enter quantity" value="<?php echo !empty($cmf_officeproducttiaoku['quantity'])?$cmf_officeproducttiaoku['quantity']:''; ?>">
                            <?php echo form_error('quantity','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="count">金额：</label>
                            <input type="text" class="form-control" name="count" placeholder="Enter count" value="<?php echo !empty($cmf_officeproducttiaoku['count'])?$cmf_officeproducttiaoku['count']:''; ?>">
                            <?php echo form_error('count','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="isExamine">是否审核：</label>
                            <input type="text" class="form-control" name="isExamine" placeholder="Enter isExamine" value="<?php echo !empty($cmf_officeproducttiaoku['isExamine'])?$cmf_officeproducttiaoku['isExamine']:''; ?>">
                            <?php echo form_error('isExamine','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="exTime">审核时间：</label>
                            <input type="text" class="form-control" name="exTime" placeholder="Enter exTime" value="<?php echo !empty($cmf_officeproducttiaoku['exTime'])?$cmf_officeproducttiaoku['exTime']:''; ?>">
                            <?php echo form_error('exTime','<p class="help-block text-danger">','</p>'); ?>
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