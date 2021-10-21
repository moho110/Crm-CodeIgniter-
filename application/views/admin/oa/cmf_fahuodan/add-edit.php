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
                <div class="panel-heading"><?php echo $action; ?> 发货单 <a href="<?php echo site_url('/oa/CmfFahuodan/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="billid">清单编号：</label>
                            <input type="text" class="form-control" name="billid" placeholder="Enter billid" value="<?php echo !empty($cmf_fahuodan['billid'])?$cmf_fahuodan['billid']:''; ?>">
                            <?php echo form_error('billid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="customerid">客户ID：</label>
                            <input type="text" class="form-control" name="customerid" placeholder="Enter customerid" value="<?php echo !empty($cmf_fahuodan['customerid'])?$cmf_fahuodan['customerid']:''; ?>">
                            <?php echo form_error('customerid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="dingdanbillid">订单清单ID：</label>
                            <input type="text" class="form-control" name="dingdanbillid" placeholder="Enter dingdanbillid" value="<?php echo !empty($cmf_fahuodan['dingdanbillid'])?$cmf_fahuodan['dingdanbillid']:''; ?>">
                            <?php echo form_error('dingdanbillid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="fahuodan">发货单：</label>
                            <input type="text" class="form-control" name="fahuodan" placeholder="Enter fahuodan" value="<?php echo !empty($cmf_fahuodan['fahuodan'])?$cmf_fahuodan['fahuodan']:''; ?>">
                            <?php echo form_error('fahuodan','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="fahuoren">发货人：</label>
                            <input type="text" class="form-control" name="fahuoren" placeholder="Enter fahuoren" value="<?php echo !empty($cmf_fahuodan['fahuoren'])?$cmf_fahuodan['fahuoren']:''; ?>">
                            <?php echo form_error('fahuoren','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="fahuodate">发货日期：</label>
                            <input readonly class="form-control" type="text" id="date-group1-4" placeholder="YYYY-MM-DD hh:mm" name="fahuodate">
                            <?php echo form_error('fahuodate','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="shouhuoren">收货人：</label>
                            <input type="text" class="form-control" name="shouhuoren" placeholder="Enter shouhuoren" value="<?php echo !empty($cmf_fahuodan['shouhuoren'])?$cmf_fahuodan['shouhuoren']:''; ?>">
                            <?php echo form_error('shouhuoren','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="tel">电话号码：</label>
                            <input type="text" class="form-control" name="tel" placeholder="Enter tel" value="<?php echo !empty($cmf_fahuodan['tel'])?$cmf_fahuodan['tel']:''; ?>">
                            <?php echo form_error('tel','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="address">地址：</label>
                            <input type="text" class="form-control" name="address" placeholder="Enter address" value="<?php echo !empty($cmf_fahuodan['address'])?$cmf_fahuodan['address']:''; ?>">
                            <?php echo form_error('address','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="mailcode">邮政编码：</label>
                            <input type="text" class="form-control" name="mailcode" placeholder="Enter mailcode" value="<?php echo !empty($cmf_fahuodan['mailcode'])?$cmf_fahuodan['mailcode']:''; ?>">
                            <?php echo form_error('mailcode','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="fahuotype">发货类型：</label>
                            <input type="text" class="form-control" name="fahuotype" placeholder="Enter fahuotype" value="<?php echo !empty($cmf_fahuodan['fahuotype'])?$cmf_fahuodan['fahuotype']:''; ?>">
                            <?php echo form_error('fahuotype','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="state">状态：</label>
                            <input type="radio" name="state" value="1">良好
                            <input type="radio" name="state" value="0">一般
                            <?php echo form_error('state','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="package">包裹：</label>
                            <input type="text" class="form-control" name="package" placeholder="Enter package" value="<?php echo !empty($cmf_fahuodan['package'])?$cmf_fahuodan['package']:''; ?>">
                            <?php echo form_error('package','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="weight">重量：</label>
                            <input type="text" class="form-control" name="weight" placeholder="Enter weight" value="<?php echo !empty($cmf_fahuodan['weight'])?$cmf_fahuodan['weight']:''; ?>">
                            <?php echo form_error('weight','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="yunfei">运费：</label>
                            <input type="text" class="form-control" name="yunfei" placeholder="Enter yunfei" value="<?php echo !empty($cmf_fahuodan['yunfei'])?$cmf_fahuodan['yunfei']:''; ?>">
                            <?php echo form_error('yunfei','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="jiesuantype">结算类型：</label>
                            <input type="text" class="form-control" name="jiesuantype" placeholder="Enter jiesuantype" value="<?php echo !empty($cmf_fahuodan['jiesuantype'])?$cmf_fahuodan['jiesuantype']:''; ?>">
                            <?php echo form_error('jiesuantype','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="beizhu">备注：</label>
                            <textarea name="beizhu" cols="140" rows="10" style="resize: none;">
                                <?php echo !empty($cmf_fahuodan['beizhu'])?$cmf_fahuodan['beizhu']:''; ?>
                            </textarea>
                            <?php echo form_error('beizhu','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="totalnum">总数：</label>
                            <input type="text" class="form-control" name="totalnum" placeholder="Enter totalnum" value="<?php echo !empty($cmf_fahuodan['totalnum'])?$cmf_fahuodan['totalnum']:''; ?>">
                            <?php echo form_error('totalnum','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="totalmoney">总额：</label>
                            <input type="text" class="form-control" name="totalmoney" placeholder="Enter totalmoney" value="<?php echo !empty($cmf_fahuodan['totalmoney'])?$cmf_fahuodan['totalmoney']:''; ?>">
                            <?php echo form_error('totalmoney','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="outtype">出库类型：</label>
                            <input type="text" class="form-control" name="outtype" placeholder="Enter outtype" value="<?php echo !empty($cmf_fahuodan['outtype'])?$cmf_fahuodan['outtype']:''; ?>">
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