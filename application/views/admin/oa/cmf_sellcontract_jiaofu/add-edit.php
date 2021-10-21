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
                <div class="panel-heading"><?php echo $action; ?> 销售合同交付 <a href="<?php echo site_url('/oa/CmfSellcontractJiaofu/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="id">编号：</label>
                            <input  readonly type="text" class="form-control" name="id" placeholder="Enter id" value="<?php echo !empty($cmf_sellcontract_jiaofu['id'])?$cmf_sellcontract_jiaofu['id']:''; ?>">
                            <?php echo form_error('id','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="customerid">客户ID：</label>
                            <input type="text" class="form-control" name="customerid" placeholder="Enter customerid" value="<?php echo !empty($cmf_sellcontract_jiaofu['customerid'])?$cmf_sellcontract_jiaofu['customerid']:''; ?>">
                            <?php echo form_error('customerid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="hetongid">合同ID：</label>
                            <input type="text" class="form-control" name="hetongid" placeholder="Enter hetongid" value="<?php echo !empty($cmf_sellcontract_jiaofu['hetongid'])?$cmf_sellcontract_jiaofu['hetongid']:''; ?>">
                            <?php echo form_error('hetongid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="productid">产品ID：</label>
                            <input type="text" class="form-control" name="productid" placeholder="Enter productid" value="<?php echo !empty($cmf_sellcontract_jiaofu['productid'])?$cmf_sellcontract_jiaofu['productid']:''; ?>">
                            <?php echo form_error('productid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="planid">计划ID：</label>
                            <input type="text" class="form-control" name="planid" placeholder="Enter planid" value="<?php echo !empty($cmf_sellcontract_jiaofu['planid'])?$cmf_sellcontract_jiaofu['planid']:''; ?>">
                            <?php echo form_error('planid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="num">数量：</label>
                            <input type="text" class="form-control" name="num" placeholder="Enter num" value="<?php echo !empty($cmf_sellcontract_jiaofu['num'])?$cmf_sellcontract_jiaofu['num']:''; ?>">
                            <?php echo form_error('num','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="price">价格：</label>
                            <input type="text" class="form-control" name="price" placeholder="Enter price" value="<?php echo !empty($cmf_sellcontract_jiaofu['price'])?$cmf_sellcontract_jiaofu['price']:''; ?>">
                            <?php echo form_error('price','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="jieshouren">接收人：</label>
                            <input type="text" class="form-control" name="jieshouren" placeholder="Enter jieshouren" value="<?php echo !empty($cmf_sellcontract_jiaofu['jieshouren'])?$cmf_sellcontract_jiaofu['jieshouren']:''; ?>">
                            <?php echo form_error('jieshouren','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="jiaofudate">交付日期：</label>
                            <input readonly class="form-control" type="text" id="date-group1-4" placeholder="YYYY-MM-DD hh:mm" name="jiaofudate">
                            <?php echo form_error('jiaofudate','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="beizhu">备注：</label>
                            <textarea name="beizhu" cols="140" rows="10" style="resize: none;">
                                <?php echo !empty($cmf_sellcontract_jiaofu['beizhu'])?$cmf_sellcontract_jiaofu['beizhu']:''; ?>
                            </textarea>
                            <?php echo form_error('beizhu','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="createman">创建人：</label>
                            <input type="text" class="form-control" name="createman" placeholder="Enter createman" value="<?php echo !empty($cmf_sellcontract_jiaofu['createman'])?$cmf_sellcontract_jiaofu['createman']:''; ?>">
                            <?php echo form_error('createman','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="createtime">创建时间：</label>
                            <input readonly class="form-control" type="text" id="date-group1-5" placeholder="YYYY-MM-DD hh:mm" name="createtime">
                            <?php echo form_error('createtime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="beiyong1">备用一：</label>
                            <input type="text" class="form-control" name="beiyong1" placeholder="Enter beiyong1" value="<?php echo !empty($cmf_sellcontract_jiaofu['beiyong1'])?$cmf_sellcontract_jiaofu['beiyong1']:''; ?>">
                            <?php echo form_error('beiyong1','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="beiyong2">备用二：</label>
                            <input type="text" class="form-control" name="beiyong2" placeholder="Enter beiyong2" value="<?php echo !empty($cmf_sellcontract_jiaofu['beiyong2'])?$cmf_sellcontract_jiaofu['beiyong2']:''; ?>">
                            <?php echo form_error('beiyong2','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="beiyong3">备用三：</label>
                            <input type="text" class="form-control" name="beiyong3" placeholder="Enter beiyong3" value="<?php echo !empty($cmf_sellcontract_jiaofu['beiyong3'])?$cmf_sellcontract_jiaofu['beiyong3']:''; ?>">
                            <?php echo form_error('beiyong3','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="jine">金额：</label>
                            <input type="text" class="form-control" name="jine" placeholder="Enter jine" value="<?php echo !empty($cmf_sellcontract_jiaofu['jine'])?$cmf_sellcontract_jiaofu['jine']:''; ?>">
                            <?php echo form_error('jine','<p class="help-block text-danger">','</p>'); ?>
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