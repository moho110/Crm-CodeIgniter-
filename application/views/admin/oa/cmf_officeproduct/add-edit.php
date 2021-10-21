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
                <div class="panel-heading"><?php echo $action; ?> 办公用品 <a href="<?php echo site_url('/oa/CmfOfficeproduct/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="ID">编号：</label>
                            <input type="text" class="form-control" name="ID" placeholder="Enter ID" value="<?php echo !empty($cmf_officeproduct['ID'])?$cmf_officeproduct['ID']:''; ?>">
                            <?php echo form_error('ID','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="officeName">办公用品名称：</label>
                            <input type="text" class="form-control" name="officeName" placeholder="Enter officeName" value="<?php echo !empty($cmf_officeproduct['officeName'])?$cmf_officeproduct['officeName']:''; ?>">
                            <?php echo form_error('officeName','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="officeName">办公用品编号：</label>
                            <input type="text" class="form-control" name="officeName" placeholder="Enter officeName" value="<?php echo !empty($cmf_officeproduct['officeName'])?$cmf_officeproduct['officeName']:''; ?>">
                            <?php echo form_error('officeName','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="officeType">办公用品类型：</label>
                            <input type="text" class="form-control" name="officeType" placeholder="Enter officeType" value="<?php echo !empty($cmf_officeproduct['officeType'])?$cmf_officeproduct['officeType']:''; ?>">
                            <?php echo form_error('officeType','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="specSize">规格尺寸：</label>
                            <input type="text" class="form-control" name="specSize" placeholder="Enter specSize" value="<?php echo !empty($cmf_officeproduct['specSize'])?$cmf_officeproduct['specSize']:''; ?>">
                            <?php echo form_error('specSize','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="unit">单元：</label>
                            <input type="text" class="form-control" name="unit" placeholder="Enter unit" value="<?php echo !empty($cmf_officeproduct['unit'])?$cmf_officeproduct['unit']:''; ?>">
                            <?php echo form_error('unit','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="quantity">数量：</label>
                            <input type="text" class="form-control" name="quantity" placeholder="Enter quantity" value="<?php echo !empty($cmf_officeproduct['quantity'])?$cmf_officeproduct['quantity']:''; ?>">
                            <?php echo form_error('quantity','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="warehouseInfo">仓库信息：</label>
                            <input type="text" class="form-control" name="warehouseInfo" placeholder="Enter warehouseInfo" value="<?php echo !empty($cmf_officeproduct['warehouseInfo'])?$cmf_officeproduct['warehouseInfo']:''; ?>">
                            <?php echo form_error('warehouseInfo','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="price">价格：</label>
                            <input type="text" class="form-control" name="price" placeholder="Enter price" value="<?php echo !empty($cmf_officeproduct['price'])?$cmf_officeproduct['price']:''; ?>">
                            <?php echo form_error('price','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="totalCount">总金额：</label>
                            <input type="text" class="form-control" name="totalCount" placeholder="Enter totalCount" value="<?php echo !empty($cmf_officeproduct['totalCount'])?$cmf_officeproduct['totalCount']:''; ?>">
                            <?php echo form_error('totalCount','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="brand">品牌：</label>
                            <input type="text" class="form-control" name="brand" placeholder="Enter brand" value="<?php echo !empty($cmf_officeproduct['brand'])?$cmf_officeproduct['brand']:''; ?>">
                            <?php echo form_error('brand','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="savedPlace">保存位置：</label>
                            <input type="text" class="form-control" name="savedPlace" placeholder="Enter savedPlace" value="<?php echo !empty($cmf_officeproduct['savedPlace'])?$cmf_officeproduct['savedPlace']:''; ?>">
                            <?php echo form_error('savedPlace','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="memo">备注：</label>
                            <input type="text" class="form-control" name="memo" placeholder="Enter memo" value="<?php echo !empty($cmf_officeproduct['memo'])?$cmf_officeproduct['memo']:''; ?>">
                            <?php echo form_error('memo','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="creator">创建人：</label>
                            <input type="text" class="form-control" name="creator" placeholder="Enter creator" value="<?php echo !empty($cmf_officeproduct['creator'])?$cmf_officeproduct['creator']:''; ?>">
                            <?php echo form_error('creator','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="createTime">创建时间：</label>
                            <input type="text" class="form-control" name="createTime" placeholder="Enter createTime" value="<?php echo !empty($cmf_officeproduct['createTime'])?$cmf_officeproduct['createTime']:''; ?>">
                            <?php echo form_error('createTime','<p class="help-block text-danger">','</p>'); ?>
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