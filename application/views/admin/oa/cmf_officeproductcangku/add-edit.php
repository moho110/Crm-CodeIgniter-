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
                <div class="panel-heading"><?php echo $action; ?> 办公用品仓库 <a href="<?php echo site_url('/oa/CmfOfficeproductcangku/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="ID">编号：</label>
                            <input type="text" class="form-control" name="ID" placeholder="Enter ID" value="<?php echo !empty($cmf_officeproductcangku['ID'])?$cmf_officeproductcangku['ID']:''; ?>">
                            <?php echo form_error('ID','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="warehouseName">仓库名称：</label>
                            <input type="text" class="form-control" name="warehouseName" placeholder="Enter warehouseName" value="<?php echo !empty($cmf_officeproductcangku['warehouseName'])?$cmf_officeproductcangku['warehouseName']:''; ?>">
                            <?php echo form_error('warehouseName','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="warehouseMan">仓库管理员：</label>
                            <input type="text" class="form-control" name="warehouseMan" placeholder="Enter warehouseMan" value="<?php echo !empty($cmf_officeproductcangku['warehouseMan'])?$cmf_officeproductcangku['warehouseMan']:''; ?>">
                            <?php echo form_error('warehouseMan','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="telphone">电话号码：</label>
                            <input type="text" class="form-control" name="telphone" placeholder="Enter telphone" value="<?php echo !empty($cmf_officeproductcangku['telphone'])?$cmf_officeproductcangku['telphone']:''; ?>">
                            <?php echo form_error('telphone','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="warehouseAddress">仓库地址：</label>
                            <input type="text" class="form-control" name="warehouseAddress" placeholder="Enter warehouseAddress" value="<?php echo !empty($cmf_officeproductcangku['warehouseAddress'])?$cmf_officeproductcangku['warehouseAddress']:''; ?>">
                            <?php echo form_error('warehouseAddress','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="memo">备注：</label>
                            <textarea name="memo" cols="140" rows="10" style="resize: none;">
                                <?php echo !empty($cmf_officeproductcangku['memo'])?$cmf_officeproductcangku['memo']:''; ?>
                            </textarea>
                            <?php echo form_error('memo','<p class="help-block text-danger">','</p>'); ?>
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