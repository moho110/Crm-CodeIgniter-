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
                <div class="panel-heading"><?php echo $action; ?> 采购计划 <a href="<?php echo site_url('/oa/CmfSellplanmain/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="zhuti">主题：</label>
                            <input type="text" class="form-control" name="zhuti" placeholder="Enter zhuti" value="<?php echo !empty($cmf_sellplanmain['zhuti'])?$cmf_sellplanmain['zhuti']:''; ?>">
                            <?php echo form_error('zhuti','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="user_id">用户ID：</label>
                            <input type="text" class="form-control" name="user_id" placeholder="Enter user_id" value="<?php echo !empty($cmf_sellplanmain['user_id'])?$cmf_sellplanmain['user_id']:''; ?>">
                            <?php echo form_error('user_id','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="supplyid">供应商ID：</label>
                            <input type="text" class="form-control" name="supplyid" placeholder="Enter supplyid" value="<?php echo !empty($cmf_sellplanmain['supplyid'])?$cmf_sellplanmain['supplyid']:''; ?>">
                            <?php echo form_error('supplyid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="chanceid">机会ID：</label>
                            <input type="text" class="form-control" name="chanceid" placeholder="Enter chanceid" value="<?php echo !empty($cmf_sellplanmain['chanceid'])?$cmf_sellplanmain['chanceid']:''; ?>">
                            <?php echo form_error('chanceid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="sellplanno">采购计划编号：</label>
                            <input type="text" class="form-control" name="sellplanno" placeholder="Enter sellplanno" value="<?php echo !empty($cmf_sellplanmain['sellplanno'])?$cmf_sellplanmain['sellplanno']:''; ?>">
                            <?php echo form_error('sellplanno','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="totalmoney">总金额：</label>
                            <input type="text" class="form-control" name="totalmoney" placeholder="Enter totalmoney" value="<?php echo !empty($cmf_sellplanmain['totalmoney'])?$cmf_sellplanmain['totalmoney']:''; ?>">
                            <?php echo form_error('totalmoney','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="paytype">支付类型：</label>
                            <input type="radio" name="paytype" value="1">微信支付
                            <input type="radio" name="paytype" value="2">支付宝
                            <input type="radio" name="paytype" value="3">现金支付
                            <input type="radio" name="paytype" value="4">信用卡
                            <input type="radio" name="paytype" value="5">借记卡
                            <input type="radio" name="paytype" value="6">线下支付
                            <?php echo form_error('paytype','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="huikuanjine">汇款金额：</label>
                            <input type="text" class="form-control" name="huikuanjine" placeholder="Enter huikuanjine" value="<?php echo !empty($cmf_sellplanmain['huikuanjine'])?$cmf_sellplanmain['huikuanjine']:''; ?>">
                            <?php echo form_error('huikuanjine','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="fahuojine">发货金额：</label>
                            <input type="text" class="form-control" name="fahuojine" placeholder="Enter fahuojine" value="<?php echo !empty($cmf_sellplanmain['fahuojine'])?$cmf_sellplanmain['fahuojine']:''; ?>">
                            <?php echo form_error('fahuojine','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="kaipiaojine">开票金额：</label>
                            <input type="text" class="form-control" name="kaipiaojine" placeholder="Enter kaipiaojine" value="<?php echo !empty($cmf_sellplanmain['kaipiaojine'])?$cmf_sellplanmain['kaipiaojine']:''; ?>">
                            <?php echo form_error('kaipiaojine','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="plandate">计划日期：</label>
                            <input readonly class="form-control" type="text" id="date-group1-3" placeholder="YYYY-MM-DD hh:mm" name="plandate">
                            <?php echo form_error('plandate','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="zuiwanfahuodate">最晚发货日期：</label>
                            <input readonly class="form-control" type="text" id="date-group1-2" placeholder="YYYY-MM-DD hh:mm" name="zuiwanfahuodate">
                            <?php echo form_error('zuiwanfahuodate','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="qianyueren">签约人：</label>
                            <input type="text" class="form-control" name="qianyueren" placeholder="Enter qianyueren" value="<?php echo !empty($cmf_sellplanmain['qianyueren'])?$cmf_sellplanmain['qianyueren']:''; ?>">
                            <?php echo form_error('qianyueren','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="user_flag">用户标识：</label>
                            <input type="radio" name="user_flag" value="1">保留
                            <input type="radio" name="user_flag" value="0">删除
                            <?php echo form_error('user_flag','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="beizhu">备注：</label>
                            <textarea name="beizhu" cols="50" rows="10" style="resize: none;">
                                <?php echo !empty($cmf_sellplanmain['beizhu'])?$cmf_sellplanmain['beizhu']:''; ?>
                            </textarea>
                            <?php echo form_error('beizhu','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="fileaddress">文件地址：</label>
                            <input type="text" class="form-control" name="fileaddress" placeholder="Enter fileaddress" value="<?php echo !empty($cmf_sellplanmain['fileaddress'])?$cmf_sellplanmain['fileaddress']:''; ?>">
                            <?php echo form_error('fileaddress','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="gaiyao">概要：</label>
                            <textarea name="gaiyao" cols="50" rows="10" style="resize: none;">
                                <?php echo !empty($cmf_sellplanmain['gaiyao'])?$cmf_sellplanmain['gaiyao']:''; ?>
                            </textarea>
                            <?php echo form_error('gaiyao','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="storeid">库存ID：</label>
                            <input type="text" class="form-control" name="storeid" placeholder="Enter storeid" value="<?php echo !empty($cmf_sellplanmain['storeid'])?$cmf_sellplanmain['storeid']:''; ?>">
                            <?php echo form_error('storeid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="linkman">联系人：</label>
                            <input type="text" class="form-control" name="linkman" placeholder="Enter linkman" value="<?php echo !empty($cmf_sellplanmain['linkman'])?$cmf_sellplanmain['linkman']:''; ?>">
                            <?php echo form_error('linkman','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="address">地址：</label>
                            <input type="text" class="form-control" name="address" placeholder="Enter address" value="<?php echo !empty($cmf_sellplanmain['address'])?$cmf_sellplanmain['address']:''; ?>">
                            <?php echo form_error('address','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="mobile">移动电话：</label>
                            <input type="text" class="form-control" name="mobile" placeholder="Enter mobile" value="<?php echo !empty($cmf_sellplanmain['mobile'])?$cmf_sellplanmain['mobile']:''; ?>">
                            <?php echo form_error('mobile','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="createtime">创建时间：</label>
                            <input readonly class="form-control" type="text" id="date-group1-4" placeholder="YYYY-MM-DD hh:mm" name="createtime">
                            <?php echo form_error('createtime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="billtype">清单类型：</label>
                            <input type="radio" name="billtype" value="1">保留
                            <input type="radio" name="billtype" value="0">删除
                            <?php echo form_error('billtype','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="ifpay">是否支付：</label>
                            <input type="radio" name="ifpay" value="1">已支付
                            <input type="radio" name="ifpay" value="0">未支付
                            <?php echo form_error('ifpay','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="beiyong">备用：</label>
                            <textarea name="beiyong" cols="50" rows="10" style="resize: none;">
                                <?php echo !empty($cmf_sellplanmain['beiyong'])?$cmf_sellplanmain['beiyong']:''; ?>
                            </textarea>
                            <?php echo form_error('beiyong','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="kaipiaostate">开票状态：</label>
                            <input type="radio" name="kaipiaostate" value="1">已开票
                            <input type="radio" name="kaipiaostate" value="0">未开票
                            <?php echo form_error('kaipiaostate','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="fapiaoneirong">发票内容：</label>
                            <textarea name="fapiaoneirong" cols="50" rows="10" style="resize: none;">
                                <?php echo !empty($cmf_sellplanmain['fapiaoneirong'])?$cmf_sellplanmain['fapiaoneirong']:''; ?>
                            </textarea>
                            <?php echo form_error('fapiaoneirong','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="fapiaotype">发票类型：</label>
                            <input type="radio" name="fapiaotype" value="1">保留
                            <input type="radio" name="fapiaotype" value="0">删除
                            <?php echo form_error('fapiaotype','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="fapiaono">发票编号：</label>
                            <input type="text" class="form-control" name="fapiaono" placeholder="Enter fapiaono" value="<?php echo !empty($cmf_sellplanmain['fapiaono'])?$cmf_sellplanmain['fapiaono']:''; ?>">
                            <?php echo form_error('fapiaono','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="fahuotype">发货类型：</label>
                            <input type="radio" name="fahuotype" value="1">保留
                            <input type="radio" name="fahuotype" value="0">删除
                            <?php echo form_error('fahuotype','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="fahuodan">发货单：</label>
                            <input type="text" class="form-control" name="fahuodan" placeholder="Enter fahuodan" value="<?php echo !empty($cmf_sellplanmain['fahuodan'])?$cmf_sellplanmain['fahuodan']:''; ?>">
                            <?php echo form_error('fahuodan','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="fahuoyunfei">发货运费：</label>
                            <input type="text" class="form-control" name="fahuoyunfei" placeholder="Enter fahuoyunfei" value="<?php echo !empty($cmf_sellplanmain['fahuoyunfei'])?$cmf_sellplanmain['fahuoyunfei']:''; ?>">
                            <?php echo form_error('fahuoyunfei','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="yunfeitype">运费类型：</label>
                            <input type="radio" name="yunfeitype" value="1">保留
                            <input type="radio" name="yunfeitype" value="0">删除
                            <?php echo form_error('yunfeitype','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="oddment">零碎业务：</label>
                            <input type="text" class="form-control" name="oddment" placeholder="Enter oddment" value="<?php echo !empty($cmf_sellplanmain['oddment'])?$cmf_sellplanmain['oddment']:''; ?>">
                            <?php echo form_error('oddment','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="integral">集合：</label>
                            <input type="text" class="form-control" name="integral" placeholder="Enter integral" value="<?php echo !empty($cmf_sellplanmain['integral'])?$cmf_sellplanmain['integral']:''; ?>">
                            <?php echo form_error('integral','<p class="help-block text-danger">','</p>'); ?>
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