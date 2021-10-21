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
                <div class="panel-heading"><?php echo $action; ?> 供应商 <a href="<?php echo site_url('/oa/CmfSupply/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="supplyid">供应商ID：</label>
                            <input type="text" class="form-control" name="supplyid" placeholder="Enter supplyid" value="<?php echo !empty($cmf_supply['supplyid'])?$cmf_supply['supplyid']:''; ?>">
                            <?php echo form_error('supplyid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="supplyname">供应商名称：</label>
                            <input type="text" class="form-control" name="supplyname" placeholder="Enter supplyname" value="<?php echo !empty($cmf_supply['supplyname'])?$cmf_supply['supplyname']:''; ?>">
                            <?php echo form_error('supplyname','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="supplyshortname">供应商简称：</label>
                            <input type="text" class="form-control" name="supplyshortname" placeholder="Enter supplyshortname" value="<?php echo !empty($cmf_supply['supplyshortname'])?$cmf_supply['supplyshortname']:''; ?>">
                            <?php echo form_error('supplyshortname','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="enterstype">输入类型：</label>
                            <input type="text" class="form-control" name="enterstype" placeholder="Enter enterstype" value="<?php echo !empty($cmf_supply['enterstype'])?$cmf_supply['enterstype']:''; ?>">
                            <?php echo form_error('enterstype','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="calling">职业：</label>
                            <input type="text" class="form-control" name="calling" placeholder="Enter calling" value="<?php echo !empty($cmf_supply['calling'])?$cmf_supply['calling']:''; ?>">
                            <?php echo form_error('calling','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="linkman">联系人：</label>
                            <input type="text" class="form-control" name="linkman" placeholder="Enter linkman" value="<?php echo !empty($cmf_supply['linkman'])?$cmf_supply['linkman']:''; ?>">
                            <?php echo form_error('linkman','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="artificialperson">法人代表：</label>
                            <input type="text" class="form-control" name="artificialperson" placeholder="Enter artificialperson" value="<?php echo !empty($cmf_supply['artificialperson'])?$cmf_supply['artificialperson']:''; ?>">
                            <?php echo form_error('artificialperson','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="chargesection">收费：</label>
                            <input type="text" class="form-control" name="chargesection" placeholder="Enter chargesection" value="<?php echo !empty($cmf_supply['chargesection'])?$cmf_supply['chargesection']:''; ?>">
                            <?php echo form_error('chargesection','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="postalcode">邮政编码：</label>
                            <input type="text" class="form-control" name="postalcode" placeholder="Enter postalcode" value="<?php echo !empty($cmf_supply['postalcode'])?$cmf_supply['postalcode']:''; ?>">
                            <?php echo form_error('postalcode','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="phone">电话号码：</label>
                            <input type="text" class="form-control" name="phone" placeholder="Enter phone" value="<?php echo !empty($cmf_supply['phone'])?$cmf_supply['phone']:''; ?>">
                            <?php echo form_error('phone','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="fax">传真号码：</label>
                            <input type="text" class="form-control" name="fax" placeholder="Enter fax" value="<?php echo !empty($cmf_supply['fax'])?$cmf_supply['fax']:''; ?>">
                            <?php echo form_error('fax','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="contactaddress">联系地址：</label>
                            <input type="text" class="form-control" name="contactaddress" placeholder="Enter contactaddress" value="<?php echo !empty($cmf_supply['contactaddress'])?$cmf_supply['contactaddress']:''; ?>">
                            <?php echo form_error('contactaddress','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="email">电子邮件：</label>
                            <input type="text" class="form-control" name="email" placeholder="Enter email" value="<?php echo !empty($cmf_supply['email'])?$cmf_supply['email']:''; ?>">
                            <?php echo form_error('email','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="netword">网络用语：</label>
                            <input type="text" class="form-control" name="netword" placeholder="Enter netword" value="<?php echo !empty($cmf_supply['netword'])?$cmf_supply['netword']:''; ?>">
                            <?php echo form_error('netword','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="bank">银行：</label>
                            <input type="text" class="form-control" name="bank" placeholder="Enter bank" value="<?php echo !empty($cmf_supply['bank'])?$cmf_supply['bank']:''; ?>">
                            <?php echo form_error('bank','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="accountnumber">银行帐号：</label>
                            <input type="text" class="form-control" name="accountnumber" placeholder="Enter accountnumber" value="<?php echo !empty($cmf_supply['accountnumber'])?$cmf_supply['accountnumber']:''; ?>">
                            <?php echo form_error('accountnumber','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="startdate">开始日期：</label>
                            <input readonly class="form-control" type="text" id="date-group1-4" placeholder="YYYY-MM-DD hh:mm" name="startdate">
                            <?php echo form_error('startdate','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="enddate">结束日期：</label>
                            <input readonly class="form-control" type="text" id="date-group1-5" placeholder="YYYY-MM-DD hh:mm" name="enddate">
                            <?php echo form_error('enddate','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="style">类型：</label>
                            <input type="text" class="form-control" name="style" placeholder="Enter style" value="<?php echo !empty($cmf_supply['style'])?$cmf_supply['style']:''; ?>">
                            <?php echo form_error('style','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="user_flag">用户标识：</label>
                            <input type="radio" name="user_flag" value="1">保留
                            <input type="radio" name="user_flag" value="0">删除
                            <?php echo form_error('user_flag','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="user_id">用户ID：</label>
                            <input type="text" class="form-control" name="user_id" placeholder="Enter user_id" value="<?php echo !empty($cmf_supply['user_id'])?$cmf_supply['user_id']:''; ?>">
                            <?php echo form_error('user_id','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="supplycn">供应商编号：</label>
                            <input type="text" class="form-control" name="supplycn" placeholder="Enter supplycn" value="<?php echo !empty($cmf_supply['supplycn'])?$cmf_supply['supplycn']:''; ?>">
                            <?php echo form_error('supplycn','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="sysuser">系统用户：</label>
                            <input type="text" class="form-control" name="sysuser" placeholder="Enter sysuser" value="<?php echo !empty($cmf_supply['sysuser'])?$cmf_supply['sysuser']:''; ?>">
                            <?php echo form_error('sysuser','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="prodtype">产品类型：</label>
                            <input type="text" class="form-control" name="prodtype" placeholder="Enter prodtype" value="<?php echo !empty($cmf_supply['prodtype'])?$cmf_supply['prodtype']:''; ?>">
                            <?php echo form_error('prodtype','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="amtagio">Amtagio：</label>
                            <input type="text" class="form-control" name="amtagio" placeholder="Enter amtagio" value="<?php echo !empty($cmf_supply['amtagio'])?$cmf_supply['amtagio']:''; ?>">
                            <?php echo form_error('amtagio','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="remark">备注：</label>
                            <textarea name="remark" cols="140" rows="10" style="resize: none;">
                                <?php echo !empty($cmf_supply['remark'])?$cmf_supply['remark']:''; ?>
                            </textarea>
                            <?php echo form_error('remark','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="recommand">推荐：</label>
                            <input type="text" class="form-control" name="recommand" placeholder="Enter recommand" value="<?php echo !empty($cmf_supply['recommand'])?$cmf_supply['recommand']:''; ?>">
                            <?php echo form_error('recommand','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="payaccount">支付帐户：</label>
                            <input type="text" class="form-control" name="payaccount" placeholder="Enter payaccount" value="<?php echo !empty($cmf_supply['payaccount'])?$cmf_supply['payaccount']:''; ?>">
                            <?php echo form_error('payaccount','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="paymoney">支付金额：</label>
                            <input type="text" class="form-control" name="paymoney" placeholder="Enter paymoney" value="<?php echo !empty($cmf_supply['paymoney'])?$cmf_supply['paymoney']:''; ?>">
                            <?php echo form_error('paymoney','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="factpaymoney">实际支付金额：</label>
                            <input type="text" class="form-control" name="factpaymoney" placeholder="Enter factpaymoney" value="<?php echo !empty($cmf_supply['factpaymoney'])?$cmf_supply['factpaymoney']:''; ?>">
                            <?php echo form_error('factpaymoney','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="nopaymoney">未支付金额：</label>
                            <input type="text" class="form-control" name="nopaymoney" placeholder="Enter nopaymoney" value="<?php echo !empty($cmf_supply['nopaymoney'])?$cmf_supply['nopaymoney']:''; ?>">
                            <?php echo form_error('nopaymoney','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="datascope">数据范围：</label>
                            <input type="text" class="form-control" name="datascope" placeholder="Enter datascope" value="<?php echo !empty($cmf_supply['datascope'])?$cmf_supply['datascope']:''; ?>">
                            <?php echo form_error('datascope','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="yufukuan">预付款：</label>
                            <input type="text" class="form-control" name="yufukuan" placeholder="Enter yufukuan" value="<?php echo !empty($cmf_supply['yufukuan'])?$cmf_supply['yufukuan']:''; ?>">
                            <?php echo form_error('yufukuan','<p class="help-block text-danger">','</p>'); ?>
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