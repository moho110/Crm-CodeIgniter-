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
                <div class="panel-heading"><?php echo $action; ?> 产品 <a href="<?php echo site_url('/oa/CmfProduct/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="productid">产品ID：</label>
                            <input type="text" class="form-control" name="productid" placeholder="Enter productid" value="<?php echo !empty($cmf_product['productid'])?$cmf_product['productid']:''; ?>">
                            <?php echo form_error('productid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="productname">产品名称：</label>
                            <input type="text" class="form-control" name="productname" placeholder="Enter productname" value="<?php echo !empty($cmf_product['productname'])?$cmf_product['productname']:''; ?>">
                            <?php echo form_error('productname','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="measureid">测量ID：</label>
                            <input type="text" class="form-control" name="measureid" placeholder="Enter measureid" value="<?php echo !empty($cmf_product['measureid'])?$cmf_product['measureid']:''; ?>">
                            <?php echo form_error('measureid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="mode">模式：</label>
                            <input type="text" class="form-control" name="mode" placeholder="Enter mode" value="<?php echo !empty($cmf_product['mode'])?$cmf_product['mode']:''; ?>">
                            <?php echo form_error('mode','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="standard">标准：</label>
                            <input type="text" class="form-control" name="standard" placeholder="Enter standard" value="<?php echo !empty($cmf_product['standard'])?$cmf_product['standard']:''; ?>">
                            <?php echo form_error('standard','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="producttype">产品类型：</label>
                            <input type="text" class="form-control" name="producttype" placeholder="Enter producttype" value="<?php echo !empty($cmf_product['producttype'])?$cmf_product['producttype']:''; ?>">
                            <?php echo form_error('producttype','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="storemin">最小库存：</label>
                            <input type="text" class="form-control" name="storemin" placeholder="Enter storemin" value="<?php echo !empty($cmf_product['storemin'])?$cmf_product['storemin']:''; ?>">
                            <?php echo form_error('storemin','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="storemax">最大库存：</label>
                            <input type="text" class="form-control" name="storemax" placeholder="Enter storemax" value="<?php echo !empty($cmf_product['storemax'])?$cmf_product['storemax']:''; ?>">
                            <?php echo form_error('storemax','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="user_flag">用户标识：</label>
                            <input type="text" class="form-control" name="user_flag" placeholder="Enter user_flag" value="<?php echo !empty($cmf_product['user_flag'])?$cmf_product['user_flag']:''; ?>">
                            <?php echo form_error('user_flag','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="sellprice">贩卖价格：</label>
                            <input type="text" class="form-control" name="sellprice" placeholder="Enter sellprice" value="<?php echo !empty($cmf_product['sellprice'])?$cmf_product['sellprice']:''; ?>">
                            <?php echo form_error('sellprice','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="productcn">产品编号：</label>
                            <input type="text" class="form-control" name="productcn" placeholder="Enter productcn" value="<?php echo !empty($cmf_product['productcn'])?$cmf_product['productcn']:''; ?>">
                            <?php echo form_error('productcn','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="sellprice2">贩卖价格二：</label>
                            <input type="text" class="form-control" name="sellprice2" placeholder="Enter sellprice2" value="<?php echo !empty($cmf_product['sellprice2'])?$cmf_product['sellprice2']:''; ?>">
                            <?php echo form_error('sellprice2','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="sellprice3">贩卖价格三：</label>
                            <input type="text" class="form-control" name="sellprice3" placeholder="Enter sellprice3" value="<?php echo !empty($cmf_product['sellprice3'])?$cmf_product['sellprice3']:''; ?>">
                            <?php echo form_error('sellprice3','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="fileaddress">文件地址：</label>
                            <input type="text" class="form-control" name="fileaddress" placeholder="Enter fileaddress" value="<?php echo !empty($cmf_product['fileaddress'])?$cmf_product['fileaddress']:''; ?>">
                            <?php echo form_error('fileaddress','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="oldproductid">过往产品ID：</label>
                            <input type="text" class="form-control" name="oldproductid" placeholder="Enter oldproductid" value="<?php echo !empty($cmf_product['oldproductid'])?$cmf_product['oldproductid']:''; ?>">
                            <?php echo form_error('oldproductid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="ifkucun">是否库存：</label>
                            <input type="text" class="form-control" name="ifkucun" placeholder="Enter ifkucun" value="<?php echo !empty($cmf_product['ifkucun'])?$cmf_product['ifkucun']:''; ?>">
                            <?php echo form_error('ifkucun','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="relatefiles">相关文件：</label>
                            <input type="text" class="form-control" name="relatefiles" placeholder="Enter relatefiles" value="<?php echo !empty($cmf_product['relatefiles'])?$cmf_product['relatefiles']:''; ?>">
                            <?php echo form_error('relatefiles','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="supplyid">供应商ID：</label>
                            <input type="text" class="form-control" name="supplyid" placeholder="Enter supplyid" value="<?php echo !empty($cmf_product['supplyid'])?$cmf_product['supplyid']:''; ?>">
                            <?php echo form_error('supplyid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="hascolor">是否有颜色：</label>
                            <input type="text" class="form-control" name="hascolor" placeholder="Enter hascolor" value="<?php echo !empty($cmf_product['hascolor'])?$cmf_product['hascolor']:''; ?>">
                            <?php echo form_error('hascolor','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="sellprice4">贩卖价格四：</label>
                            <input type="text" class="form-control" name="sellprice4" placeholder="Enter sellprice4" value="<?php echo !empty($cmf_product['sellprice4'])?$cmf_product['sellprice4']:''; ?>">
                            <?php echo form_error('sellprice4','<p class="help-block text-danger">','</p>'); ?>
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