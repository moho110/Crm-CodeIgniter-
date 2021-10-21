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
                <div class="panel-heading"><?php echo $action; ?> 仓库初始化 <a href="<?php echo site_url('/oa/CmfStoreInit/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="id">编号：</label>
                            <input readonly type="text" class="form-control" name="id" placeholder="Enter id" value="<?php echo !empty($cmf_store_init['id'])?$cmf_store_init['id']:''; ?>">
                            <?php echo form_error('id','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="prodid">产品ID：</label>
                            <input type="text" class="form-control" name="prodid" placeholder="Enter prodid" value="<?php echo !empty($cmf_store_init['prodid'])?$cmf_store_init['prodid']:''; ?>">
                            <?php echo form_error('prodid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="storeid">仓库ID：</label>
                            <input type="text" class="form-control" name="storeid" placeholder="Enter storeid" value="<?php echo !empty($cmf_store_init['storeid'])?$cmf_store_init['storeid']:''; ?>">
                            <?php echo form_error('storeid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="price">价格：</label>
                            <input type="text" class="form-control" name="price" placeholder="Enter price" value="<?php echo !empty($cmf_store_init['price'])?$cmf_store_init['price']:''; ?>">
                            <?php echo form_error('price','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="num">数量：</label>
                            <input type="text" class="form-control" name="num" placeholder="Enter num" value="<?php echo !empty($cmf_store_init['num'])?$cmf_store_init['num']:''; ?>">
                            <?php echo form_error('num','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="jine">金额：</label>
                            <input type="text" class="form-control" name="jine" placeholder="Enter jine" value="<?php echo !empty($cmf_store_init['jine'])?$cmf_store_init['jine']:''; ?>">
                            <?php echo form_error('jine','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="memo">备注：</label>
                            <textarea name="memo" cols="140" rows="10" style="resize: none;">
                                <?php echo !empty($cmf_store_init['memo'])?$cmf_store_init['memo']:''; ?>
                            </textarea>
                            <?php echo form_error('memo','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="flag">标识：</label>
                            <input type="radio" name="flag" value="1">保留
                            <input type="radio" name="flag" value="0">删除
                            <?php echo form_error('flag','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="prodname">产品名称：</label>
                            <input type="text" class="form-control" name="prodname" placeholder="Enter prodname" value="<?php echo !empty($cmf_store_init['prodname'])?$cmf_store_init['prodname']:''; ?>">
                            <?php echo form_error('prodname','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="guige">规格：</label>
                            <input type="text" class="form-control" name="guige" placeholder="Enter guige" value="<?php echo !empty($cmf_store_init['guige'])?$cmf_store_init['guige']:''; ?>">
                            <?php echo form_error('guige','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="xinghao">型号：</label>
                            <input type="text" class="form-control" name="xinghao" placeholder="Enter xinghao" value="<?php echo !empty($cmf_store_init['xinghao'])?$cmf_store_init['xinghao']:''; ?>">
                            <?php echo form_error('xinghao','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="danwei">单位：</label>
                            <input type="text" class="form-control" name="danwei" placeholder="Enter danwei" value="<?php echo !empty($cmf_store_init['danwei'])?$cmf_store_init['danwei']:''; ?>">
                            <?php echo form_error('danwei','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="typename">类型名称：</label>
                            <input type="text" class="form-control" name="typename" placeholder="Enter typename" value="<?php echo !empty($cmf_store_init['typename'])?$cmf_store_init['typename']:''; ?>">
                            <?php echo form_error('typename','<p class="help-block text-danger">','</p>'); ?>
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