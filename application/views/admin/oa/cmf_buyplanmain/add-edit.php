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
                <div class="panel-heading"><?php echo $action; ?> 采购计划 <a href="<?php echo site_url('/oa/CmfBuyplanmain/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="billid">清单ID：</label>
                            <input type="text" class="form-control" name="billid" placeholder="Enter billid" value="<?php echo !empty($cmf_buyplanmain['billid'])?$cmf_buyplanmain['billid']:''; ?>">
                            <?php echo form_error('billid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="zhuti">主题：</label>
                            <input type="text" class="form-control" name="zhuti" placeholder="Enter zhuti" value="<?php echo !empty($cmf_buyplanmain['zhuti'])?$cmf_buyplanmain['zhuti']:''; ?>">
                            <?php echo form_error('zhuti','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="supplyid">供应商ID：</label>
                            <input type="text" class="form-control" name="supplyid" placeholder="Enter supplyid" value="<?php echo !empty($cmf_buyplanmain['supplyid'])?$cmf_buyplanmain['supplyid']:''; ?>">
                            <?php echo form_error('supplyid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="linkman">联系人：</label>
                            <input type="text" class="form-control" name="linkman" placeholder="Enter linkman" value="<?php echo !empty($cmf_buyplanmain['linkman'])?$cmf_buyplanmain['linkman']:''; ?>">
                            <?php echo form_error('linkman','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="caigoudate">采购日期：</label>
                            <input readonly class="form-control" type="text" id="date-group1-4" placeholder="YYYY-MM-DD hh:mm" name="caigoudate">
                            <?php echo form_error('caigoudate','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="storeid">库存ID：</label>
                            <input type="text" class="form-control" name="storeid" placeholder="Enter storeid" value="<?php echo !empty($cmf_buyplanmain['storeid'])?$cmf_buyplanmain['storeid']:''; ?>">
                            <?php echo form_error('storeid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="daohuodate">到货日期：</label>
                            <input readonly class="form-control" type="text" id="date-group1-3" placeholder="YYYY-MM-DD hh" name="daohuodate">
                            <?php echo form_error('daohuodate','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="danhao">单号：</label>
                            <input type="text" class="form-control" name="danhao" placeholder="Enter danhao" value="<?php echo !empty($cmf_buyplanmain['danhao'])?$cmf_buyplanmain['danhao']:''; ?>">
                            <?php echo form_error('danhao','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="createman">创建人：</label>
                            <input type="text" class="form-control" name="createman" placeholder="Enter createman" value="<?php echo !empty($cmf_buyplanmain['createman'])?$cmf_buyplanmain['createman']:''; ?>">
                            <?php echo form_error('createman','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="createtime">创建时间：</label>
                            <input readonly class="form-control" type="text" id="date-group1-2" placeholder="YYYY-MM-DD" name="createtime">
                            <?php echo form_error('createtime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="totalmoney">总金额：</label>
                            <input type="text" class="form-control" name="totalmoney" placeholder="Enter totalmoney" value="<?php echo !empty($cmf_buyplanmain['totalmoney'])?$cmf_buyplanmain['totalmoney']:''; ?>">
                            <?php echo form_error('totalmoney','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="guanliandingdan">关联订单：</label>
                            <input type="text" class="form-control" name="guanliandingdan" placeholder="Enter guanliandingdan" value="<?php echo !empty($cmf_buyplanmain['guanliandingdan'])?$cmf_buyplanmain['guanliandingdan']:''; ?>">
                            <?php echo form_error('guanliandingdan','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="guanliankehu">关联客户：</label>
                            <input type="text" class="form-control" name="guanliankehu" placeholder="Enter guanliankehu" value="<?php echo !empty($cmf_buyplanmain['guanliankehu'])?$cmf_buyplanmain['guanliankehu']:''; ?>">
                            <?php echo form_error('guanliankehu','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="beizhu">备注：</label>
                            <textarea name="beizhu" cols="50" rows="10" style="resize: none;"></textarea>
                            <?php echo form_error('beizhu','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="beiyong1">备用一：</label>
                            <textarea name="beiyong1" cols="50" rows="10" style="resize: none;"></textarea>
                            <?php echo form_error('beiyong1','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="beiyong2">备用二：</label>
                            <textarea name="beiyong2" cols="50" rows="10" style="resize: none;"></textarea>
                            <?php echo form_error('beiyong2','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="beiyong3">备用三：</label>
                            <textarea name="beiyong3" cols="50" rows="10" style="resize: none;"></textarea>
                            <?php echo form_error('beiyong3','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="paymoney">支付金额：</label>
                            <input type="text" class="form-control" name="paymoney" placeholder="Enter paymoney" value="<?php echo !empty($cmf_buyplanmain['paymoney'])?$cmf_buyplanmain['paymoney']:''; ?>">
                            <?php echo form_error('paymoney','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="state">状态：</label>
                            <input type="radio" name="state" value="1">稳定
                            <input type="radio" name="state" value="0">不稳定
                            <?php echo form_error('state','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="rukumoney">入库金额：</label>
                            <input type="text" class="form-control" name="rukumoney" placeholder="Enter rukumoney" value="<?php echo !empty($cmf_buyplanmain['rukumoney'])?$cmf_buyplanmain['rukumoney']:''; ?>">
                            <?php echo form_error('rukumoney','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="shoupiaomoney">收票金额：</label>
                            <input type="text" class="form-control" name="shoupiaomoney" placeholder="Enter shoupiaomoney" value="<?php echo !empty($cmf_buyplanmain['shoupiaomoney'])?$cmf_buyplanmain['shoupiaomoney']:''; ?>">
                            <?php echo form_error('shoupiaomoney','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="ifpay">是否支付</label>
                            <input type="radio" name="ifpay" value="1">支付
                            <input type="radio" name="ifpay" value="0">不支付
                            <?php echo form_error('ifpay','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="shoupiaostate">收票状态：</label>
                            <input type="radio" name="shoupiaostate" value="1">稳定
                            <input type="radio" name="shoupiaostate" value="0">不稳定
                            <?php echo form_error('shoupiaostate','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="oddment">零碎业务：</label>
                            <textarea name="oddment" cols="50" rows="10" class="form-control"></textarea>
                            <?php echo form_error('oddment','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="user_flag">用户标识：</label>
                            <input type="radio" name="user_flag" value="1">保留
                            <input type="radio" name="user_flag" value="0">删除
                            <?php echo form_error('user_flag','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="accountid">帐户ID：</label>
                            <input type="text" class="form-control" name="accountid" placeholder="Enter accountid" value="<?php echo !empty($cmf_buyplanmain['accountid'])?$cmf_buyplanmain['accountid']:''; ?>">
                            <?php echo form_error('accountid','<p class="help-block text-danger">','</p>'); ?>
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