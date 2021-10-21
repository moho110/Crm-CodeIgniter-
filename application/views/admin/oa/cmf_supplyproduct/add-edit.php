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
                <div class="panel-heading"><?php echo $action; ?> 供应商产品 <a href="<?php echo site_url('/oa/CmfSupplyproduct/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="user_id">用户ID：</label>
                            <input type="text" class="form-control" name="user_id" placeholder="Enter user_id" value="<?php echo !empty($cmf_supplyproduct['user_id'])?$cmf_supplyproduct['user_id']:''; ?>">
                            <?php echo form_error('user_id','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="supplyid">供应商ID：</label>
                            <input type="text" class="form-control" name="supplyid" placeholder="Enter supplyid" value="<?php echo !empty($cmf_supplyproduct['supplyid'])?$cmf_supplyproduct['supplyid']:''; ?>">
                            <?php echo form_error('supplyid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="productid">产品ID：</label>
                            <input type="text" class="form-control" name="productid" placeholder="Enter productid" value="<?php echo !empty($cmf_supplyproduct['productid'])?$cmf_supplyproduct['productid']:''; ?>">
                            <?php echo form_error('productid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="productprice">产品价格：</label>
                            <input type="text" class="form-control" name="productprice" placeholder="Enter productprice" value="<?php echo !empty($cmf_supplyproduct['productprice'])?$cmf_supplyproduct['productprice']:''; ?>">
                            <?php echo form_error('productprice','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="pricedate">价格日期：</label>
                            <input readonly class="form-control" type="text" id="date-group1-4" placeholder="YYYY-MM-DD hh:mm" name="pricedate">
                            <?php echo form_error('pricedate','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="explianstr">Explianstr：</label>
                            <input type="text" class="form-control" name="explianstr" placeholder="Enter explianstr" value="<?php echo !empty($cmf_supplyproduct['explianstr'])?$cmf_supplyproduct['explianstr']:''; ?>">
                            <?php echo form_error('explianstr','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="user_flag">用户标识：</label>
                            <input type="radio" name="user_flag" value="1">保留
                            <input type="radio" name="user_flag" value="0">删除
                            <?php echo form_error('user_flag','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="cycle">回收站：</label>
                            <input type="text" class="form-control" name="cycle" placeholder="Enter cycle" value="<?php echo !empty($cmf_supplyproduct['cycle'])?$cmf_supplyproduct['cycle']:''; ?>">
                            <?php echo form_error('cycle','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="fujian">附件：</label>
                            <input type="text" class="form-control" name="fujian" placeholder="Enter fujian" value="<?php echo !empty($cmf_supplyproduct['fujian'])?$cmf_supplyproduct['fujian']:''; ?>">
                            <?php echo form_error('fujian','<p class="help-block text-danger">','</p>'); ?>
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