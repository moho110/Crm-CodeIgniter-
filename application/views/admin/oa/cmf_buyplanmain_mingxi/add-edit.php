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
                <div class="panel-heading"><?php echo $action; ?> 采购计划明细 <a href="<?php echo site_url('/oa/CmfBuyplanmainMingxi/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="id">编号：</label>
                            <input type="text" class="form-control" name="id" placeholder="Enter id" value="<?php echo !empty($cmf_buyplanmain_mingxi['id'])?$cmf_buyplanmain_mingxi['id']:''; ?>">
                            <?php echo form_error('id','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="oldproductid">过往产品ID：</label>
                            <input type="text" class="form-control" name="oldproductid" placeholder="Enter oldproductid" value="<?php echo !empty($cmf_buyplanmain_mingxi['oldproductid'])?$cmf_buyplanmain_mingxi['oldproductid']:''; ?>">
                            <?php echo form_error('oldproductid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="prodid">产品ID：</label>
                            <input type="text" class="form-control" name="prodid" placeholder="Enter prodid" value="<?php echo !empty($cmf_buyplanmain_mingxi['prodid'])?$cmf_buyplanmain_mingxi['prodid']:''; ?>">
                            <?php echo form_error('prodid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="lastprice">最终价格：</label>
                            <input type="text" class="form-control" name="lastprice" placeholder="Enter lastprice" value="<?php echo !empty($cmf_buyplanmain_mingxi['lastprice'])?$cmf_buyplanmain_mingxi['lastprice']:''; ?>">
                            <?php echo form_error('lastprice','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="prodname">产品名称：</label>
                            <input type="text" class="form-control" name="prodname" placeholder="Enter prodname" value="<?php echo !empty($cmf_buyplanmain_mingxi['prodname'])?$cmf_buyplanmain_mingxi['prodname']:''; ?>">
                            <?php echo form_error('prodname','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="num">产品数量：</label>
                            <input type="text" class="form-control" name="num" placeholder="Enter num" value="<?php echo !empty($cmf_buyplanmain_mingxi['num'])?$cmf_buyplanmain_mingxi['num']:''; ?>">
                            <?php echo form_error('num','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="price">产品价格：</label>
                            <input type="text" class="form-control" name="price" placeholder="Enter price" value="<?php echo !empty($cmf_buyplanmain_mingxi['price'])?$cmf_buyplanmain_mingxi['price']:''; ?>">
                            <?php echo form_error('price','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="jine">产品金额：</label>
                            <input type="text" class="form-control" name="jine" placeholder="Enter jine" value="<?php echo !empty($cmf_buyplanmain_mingxi['jine'])?$cmf_buyplanmain_mingxi['jine']:''; ?>">
                            <?php echo form_error('jine','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="beizhu">产品备注：</label>
                            <textarea name="beizhu" cols="120" rows="10" style="resize: none;"></textarea>
                            <?php echo form_error('beizhu','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="mainrowid">产品主ID：</label>
                            <input type="text" class="form-control" name="mainrowid" placeholder="Enter mainrowid" value="<?php echo !empty($cmf_buyplanmain_mingxi['mainrowid'])?$cmf_buyplanmain_mingxi['mainrowid']:''; ?>">
                            <?php echo form_error('mainrowid','<p class="help-block text-danger">','</p>'); ?>
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