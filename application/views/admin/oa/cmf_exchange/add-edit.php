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
                <div class="panel-heading"><?php echo $action; ?> 积分兑换 <a href="<?php echo site_url('/oa/CmfExchange/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="ROWID">编号：</label>
                            <input  readonly type="text" class="form-control" name="ROWID" placeholder="Enter ROWID" value="<?php echo !empty($cmf_exchange['ROWID'])?$cmf_exchange['ROWID']:''; ?>">
                            <?php echo form_error('ROWID','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="customid">客户ID：</label>
                            <input type="text" class="form-control" name="customid" placeholder="Enter customid" value="<?php echo !empty($cmf_exchange['customid'])?$cmf_exchange['customid']:''; ?>">
                            <?php echo form_error('customid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="prodid">产品ID：</label>
                            <input type="text" class="form-control" name="prodid" placeholder="Enter prodid" value="<?php echo !empty($cmf_exchange['prodid'])?$cmf_exchange['prodid']:''; ?>">
                            <?php echo form_error('prodid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="xinghao">产品型号：</label>
                            <input type="text" class="form-control" name="xinghao" placeholder="Enter xinghao" value="<?php echo !empty($cmf_exchange['xinghao'])?$cmf_exchange['xinghao']:''; ?>">
                            <?php echo form_error('xinghao','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="guige">产品规格：</label>
                            <input type="text" class="form-control" name="guige" placeholder="Enter guige" value="<?php echo !empty($cmf_exchange['guige'])?$cmf_exchange['guige']:''; ?>">
                            <?php echo form_error('guige','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="integral">集合：</label>
                            <input type="text" class="form-control" name="integral" placeholder="Enter integral" value="<?php echo !empty($cmf_exchange['integral'])?$cmf_exchange['integral']:''; ?>">
                            <?php echo form_error('integral','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="createtime">创建时间：</label>
                            <input readonly class="form-control" type="text" id="date-group1-4" placeholder="YYYY-MM-DD hh:mm" name="createtime">
                            <?php echo form_error('createtime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="createman">创建人：</label>
                            <input type="text" class="form-control" name="createman" placeholder="Enter createman" value="<?php echo !empty($cmf_exchange['createman'])?$cmf_exchange['createman']:''; ?>">
                            <?php echo form_error('createman','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="prodname">产品名称：</label>
                            <input type="text" class="form-control" name="prodname" placeholder="Enter prodname" value="<?php echo !empty($cmf_exchange['prodname'])?$cmf_exchange['prodname']:''; ?>">
                            <?php echo form_error('prodname','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="exchangenum">积分数量：</label>
                            <input type="text" class="form-control" name="exchangenum" placeholder="Enter exchangenum" value="<?php echo !empty($cmf_exchange['exchangenum'])?$cmf_exchange['exchangenum']:''; ?>">
                            <?php echo form_error('exchangenum','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="stockid">库存ID：</label>
                            <input type="text" class="form-control" name="stockid" placeholder="Enter stockid" value="<?php echo !empty($cmf_exchange['stockid'])?$cmf_exchange['stockid']:''; ?>">
                            <?php echo form_error('stockid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="beizhu">备注：</label>
                            <textarea name="beizhu" cols="50" rows="10" style="resize: none;">
                                <?php echo !empty($cmf_exchange['beizhu'])?$cmf_exchange['beizhu']:''; ?>
                            </textarea>
                            <?php echo form_error('beizhu','<p class="help-block text-danger">','</p>'); ?>
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