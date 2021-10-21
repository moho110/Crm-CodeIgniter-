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
                <div class="panel-heading"><?php echo $action; ?> 出库 <a href="<?php echo site_url('/oa/CmfStockoutmain/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="billid">清单ID：</label>
                            <input type="text" class="form-control" name="billid" placeholder="Enter billid" value="<?php echo !empty($cmf_stockoutmain['billid'])?$cmf_stockoutmain['billid']:''; ?>">
                            <?php echo form_error('billid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="zhuti">主题：</label>
                            <input type="text" class="form-control" name="zhuti" placeholder="Enter zhuti" value="<?php echo !empty($cmf_stockoutmain['zhuti'])?$cmf_stockoutmain['zhuti']:''; ?>">
                            <?php echo form_error('zhuti','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="storeid">仓库ID：</label>
                            <input type="text" class="form-control" name="storeid" placeholder="Enter storeid" value="<?php echo !empty($cmf_stockoutmain['storeid'])?$cmf_stockoutmain['storeid']:''; ?>">
                            <?php echo form_error('storeid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="createman">创建人：</label>
                            <input type="text" class="form-control" name="createman" placeholder="Enter createman" value="<?php echo !empty($cmf_stockoutmain['createman'])?$cmf_stockoutmain['createman']:''; ?>">
                            <?php echo form_error('createman','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="createtime">创建时间：</label>
                            <input readonly class="form-control" type="text" id="date-group1-4" placeholder="YYYY-MM-DD hh:mm" name="createtime">
                            <?php echo form_error('createtime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="state">状态：</label>
                            <input type="radio" name="state" value="1">良好
                            <input type="radio" name="state" value="0">一般
                            <?php echo form_error('state','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="totalnum">总数量：</label>
                            <input type="text" class="form-control" name="totalnum" placeholder="Enter totalnum" value="<?php echo !empty($cmf_stockoutmain['totalnum'])?$cmf_stockoutmain['totalnum']:''; ?>">
                            <?php echo form_error('totalnum','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="totalmoney">总金额：</label>
                            <input type="text" class="form-control" name="totalmoney" placeholder="Enter totalmoney" value="<?php echo !empty($cmf_stockoutmain['totalmoney'])?$cmf_stockoutmain['totalmoney']:''; ?>">
                            <?php echo form_error('totalmoney','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="dingdanbillid">订单清单ID：</label>
                            <input type="text" class="form-control" name="dingdanbillid" placeholder="Enter dingdanbillid" value="<?php echo !empty($cmf_stockoutmain['dingdanbillid'])?$cmf_stockoutmain['dingdanbillid']:''; ?>">
                            <?php echo form_error('dingdanbillid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="outdate">出库日期：</label>
                            <input readonly class="form-control" type="text" id="date-group1-5" placeholder="YYYY-MM-DD hh:mm" name="outdate">
                            <?php echo form_error('outdate','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="outstoreshenhe">出库仓库审核：</label>
                            <input type="radio" name="outstoreshenhe" value="1">已审核
                            <input type="radio" name="outstoreshenhe" value="0">未审核
                            <?php echo form_error('outstoreshenhe','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="memo">备注：</label>
                            <textarea name="memo" cols="140" rows="10" style="resize: none;">
                                <?php echo !empty($cmf_stockoutmain['memo'])?$cmf_stockoutmain['memo']:''; ?>
                            </textarea>
                            <?php echo form_error('memo','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="outtype">出库类型：</label>
                            <input type="text" class="form-control" name="outtype" placeholder="Enter outtype" value="<?php echo !empty($cmf_stockoutmain['outtype'])?$cmf_stockoutmain['outtype']:''; ?>">
                            <?php echo form_error('outtype','<p class="help-block text-danger">','</p>'); ?>
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