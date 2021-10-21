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
                <div class="panel-heading"><?php echo $action; ?> 产品组装 <a href="<?php echo site_url('/oa/CmfProductzuzhuang/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="billid">清单ID：</label>
                            <input type="text" class="form-control" name="billid" placeholder="Enter billid" value="<?php echo !empty($cmf_productzuzhuang['billid'])?$cmf_productzuzhuang['billid']:''; ?>">
                            <?php echo form_error('billid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="zhuti">主题：</label>
                            <input type="text" class="form-control" name="zhuti" placeholder="Enter zhuti" value="<?php echo !empty($cmf_productzuzhuang['zhuti'])?$cmf_productzuzhuang['zhuti']:''; ?>">
                            <?php echo form_error('zhuti','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="outstoreid">出库库存ID：</label>
                            <input type="text" class="form-control" name="outstoreid" placeholder="Enter outstoreid" value="<?php echo !empty($cmf_productzuzhuang['outstoreid'])?$cmf_productzuzhuang['outstoreid']:''; ?>">
                            <?php echo form_error('outstoreid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="instoreid">入库库存ID：</label>
                            <input type="text" class="form-control" name="instoreid" placeholder="Enter instoreid" value="<?php echo !empty($cmf_productzuzhuang['instoreid'])?$cmf_productzuzhuang['instoreid']:''; ?>">
                            <?php echo form_error('instoreid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="createman">创建人：</label>
                            <input type="text" class="form-control" name="createman" placeholder="Enter createman" value="<?php echo !empty($cmf_productzuzhuang['createman'])?$cmf_productzuzhuang['createman']:''; ?>">
                            <?php echo form_error('createman','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="createtime">创建时间：</label>
                            <input readonly class="form-control" type="text" id="date-group1-4" placeholder="YYYY-MM-DD hh:mm" name="createtime">
                            <?php echo form_error('createtime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="totalmoney">总金额：</label>
                            <input type="text" class="form-control" name="totalmoney" placeholder="Enter totalmoney" value="<?php echo !empty($cmf_productzuzhuang['totalmoney'])?$cmf_productzuzhuang['totalmoney']:''; ?>">
                            <?php echo form_error('totalmoney','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="state">状态：</label>
                            <input type="radio" name="state" value="1">良好
                            <input type="radio" name="state" value="0">一般
                            <?php echo form_error('state','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="outstoreshenhe">出库仓库审核：</label>
                            <input type="radio" name="outstoreshenhe" value="1">已审核
                            <input type="radio" name="outstoreshenhe" value="0">未审核
                            <?php echo form_error('outstoreshenhe','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="instoreshenhe">入库仓库审核：</label>
                            <input type="radio" name="instoreshenhe" value="1">已审核
                            <input type="radio" name="instoreshenhe" value="0">未审核
                            <?php echo form_error('instoreshenhe','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="outshenhetime">出库审核时间：</label>
                            <input readonly class="form-control" type="text" id="date-group1-5" placeholder="YYYY-MM-DD hh:mm" name="outshenhetime">
                            <?php echo form_error('outshenhetime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="inshenhetime">入库审核时间：</label>
                            <input readonly class="form-control" type="text" id="pay_time" placeholder="YYYY-MM-DD hh:mm" name="inshenhetime">
                            <?php echo form_error('inshenhetime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="memo">备注：</label>
                            <textarea name="memo" cols="140" rows="10" style="resize: none;">
                                <?php echo !empty($cmf_productzuzhuang['memo'])?$cmf_productzuzhuang['memo']:''; ?>
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