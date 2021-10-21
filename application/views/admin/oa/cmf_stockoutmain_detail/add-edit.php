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
                <div class="panel-heading"><?php echo $action; ?> 出库明细 <a href="<?php echo site_url('/oa/CmfStockoutmainDetail/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="id">编号：</label>
                            <input readonly type="text" class="form-control" name="id" placeholder="Enter id" value="<?php echo !empty($cmf_stockoutmain_detail['id'])?$cmf_stockoutmain_detail['id']:''; ?>">
                            <?php echo form_error('id','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="prodid">产品ID：</label>
                            <input type="text" class="form-control" name="prodid" placeholder="Enter prodid" value="<?php echo !empty($cmf_stockoutmain_detail['prodid'])?$cmf_stockoutmain_detail['prodid']:''; ?>">
                            <?php echo form_error('prodid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="prodname">产品名称：</label>
                            <input type="text" class="form-control" name="prodname" placeholder="Enter prodname" value="<?php echo !empty($cmf_stockoutmain_detail['prodname'])?$cmf_stockoutmain_detail['prodname']:''; ?>">
                            <?php echo form_error('prodname','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="prodguige">产品规格：</label>
                            <input type="text" class="form-control" name="prodguige" placeholder="Enter prodguige" value="<?php echo !empty($cmf_stockoutmain_detail['prodguige'])?$cmf_stockoutmain_detail['prodguige']:''; ?>">
                            <?php echo form_error('prodguige','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="prodxinghao">产品型号：</label>
                            <input type="text" class="form-control" name="prodxinghao" placeholder="Enter prodxinghao" value="<?php echo !empty($cmf_stockoutmain_detail['prodxinghao'])?$cmf_stockoutmain_detail['prodxinghao']:''; ?>">
                            <?php echo form_error('prodxinghao','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="proddanwei">产品单位：</label>
                            <input type="text" class="form-control" name="proddanwei" placeholder="Enter proddanwei" value="<?php echo !empty($cmf_stockoutmain_detail['proddanwei'])?$cmf_stockoutmain_detail['proddanwei']:''; ?>">
                            <?php echo form_error('proddanwei','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="price">产品价格：</label>
                            <input type="text" class="form-control" name="price" placeholder="Enter price" value="<?php echo !empty($cmf_stockoutmain_detail['price'])?$cmf_stockoutmain_detail['price']:''; ?>">
                            <?php echo form_error('price','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="zhekou">产品折扣：</label>
                            <input type="text" class="form-control" name="zhekou" placeholder="Enter zhekou" value="<?php echo !empty($cmf_stockoutmain_detail['zhekou'])?$cmf_stockoutmain_detail['zhekou']:''; ?>">
                            <?php echo form_error('zhekou','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="num">产品数量：</label>
                            <input type="text" class="form-control" name="num" placeholder="Enter num" value="<?php echo !empty($cmf_stockoutmain_detail['num'])?$cmf_stockoutmain_detail['num']:''; ?>">
                            <?php echo form_error('num','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="beizhu">产品备注：</label>
                            <textarea name="beizhu" cols="140" rows="10" style="resize: none;">
                                <?php echo !empty($cmf_stockoutmain_detail['beizhu'])?$cmf_stockoutmain_detail['beizhu']:''; ?>
                            </textarea>
                            <?php echo form_error('beizhu','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="mainrowid">产品主ID：</label>
                            <input type="text" class="form-control" name="mainrowid" placeholder="Enter mainrowid" value="<?php echo !empty($cmf_stockoutmain_detail['mainrowid'])?$cmf_stockoutmain_detail['mainrowid']:''; ?>">
                            <?php echo form_error('mainrowid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="jine">产品金额：</label>
                            <input type="text" class="form-control" name="jine" placeholder="Enter jine" value="<?php echo !empty($cmf_stockoutmain_detail['jine'])?$cmf_stockoutmain_detail['jine']:''; ?>">
                            <?php echo form_error('jine','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="avgprice">产品平均价格：</label>
                            <input type="text" class="form-control" name="avgprice" placeholder="Enter avgprice" value="<?php echo !empty($cmf_stockoutmain_detail['avgprice'])?$cmf_stockoutmain_detail['avgprice']:''; ?>">
                            <?php echo form_error('avgprice','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="lirun">产品利润：</label>
                            <input type="text" class="form-control" name="lirun" placeholder="Enter lirun" value="<?php echo !empty($cmf_stockoutmain_detail['lirun'])?$cmf_stockoutmain_detail['lirun']:''; ?>">
                            <?php echo form_error('lirun','<p class="help-block text-danger">','</p>'); ?>
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