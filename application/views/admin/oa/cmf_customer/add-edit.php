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
                <div class="panel-heading"><?php echo $action; ?> 客户 <a href="<?php echo site_url('/oa/CmfCustomer/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="supplyid">供应商ID：</label>
                            <input type="text" class="form-control" name="supplyid" placeholder="Enter supplyid" value="<?php echo !empty($cmf_customer['supplyid'])?$cmf_customer['supplyid']:''; ?>">
                            <?php echo form_error('supplyid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="supplyname">供应商名称：</label>
                            <input type="text" class="form-control" name="supplyname" placeholder="Enter supplyname" value="<?php echo !empty($cmf_customer['supplyname'])?$cmf_customer['supplyname']:''; ?>">
                            <?php echo form_error('supplyname','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="supplyshortname">供应商简称：</label>
                            <input type="text" class="form-control" name="supplyshortname" placeholder="Enter supplyshortname" value="<?php echo !empty($cmf_customer['supplyshortname'])?$cmf_customer['supplyshortname']:''; ?>">
                            <?php echo form_error('supplyshortname','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="enterstype">法人代表：</label>
                            <input type="text" class="form-control" name="enterstype" placeholder="Enter enterstype" value="<?php echo !empty($cmf_customer['enterstype'])?$cmf_customer['enterstype']:''; ?>">
                            <?php echo form_error('enterstype','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="calling">呼叫：</label>
                            <input type="text" class="form-control" name="calling" placeholder="Enter calling" value="<?php echo !empty($cmf_customer['calling'])?$cmf_customer['calling']:''; ?>">
                            <?php echo form_error('calling','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="state">状态：</label>
                            <input type="radio" name="state" value="1">良好
                            <input type="radio" name="state" value="0">一般
                            <?php echo form_error('state','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="membercard">会员卡：</label>
                            <input type="text" class="form-control" name="membercard" placeholder="Enter membercard" value="<?php echo !empty($cmf_customer['membercard'])?$cmf_customer['membercard']:''; ?>">
                            <?php echo form_error('membercard','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="chargesection">节：</label>
                            <input type="text" class="form-control" name="chargesection" placeholder="Enter chargesection" value="<?php echo !empty($cmf_customer['chargesection'])?$cmf_customer['chargesection']:''; ?>">
                            <?php echo form_error('chargesection','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="postalcode">邮政编码：</label>
                            <input type="text" class="form-control" name="postalcode" placeholder="Enter postalcode" value="<?php echo !empty($cmf_customer['postalcode'])?$cmf_customer['postalcode']:''; ?>">
                            <?php echo form_error('postalcode','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="phone">电话号码：</label>
                            <input type="text" class="form-control" name="phone" placeholder="Enter phone" value="<?php echo !empty($cmf_customer['phone'])?$cmf_customer['phone']:''; ?>">
                            <?php echo form_error('phone','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="fax">传真号码：</label>
                            <input type="text" class="form-control" name="fax" placeholder="Enter fax" value="<?php echo !empty($cmf_customer['fax'])?$cmf_customer['fax']:''; ?>">
                            <?php echo form_error('fax','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="contactaddress">联系地址：</label>
                            <textarea name="contactaddress" cols="50" rows="10" style="resize: none;">
                                <?php echo !empty($cmf_customer['contactaddress'])?$cmf_customer['contactaddress']:''; ?>
                            </textarea>
                            <?php echo form_error('contactaddress','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="email">电子邮件：</label>
                            <input type="text" class="form-control" name="email" placeholder="Enter email" value="<?php echo !empty($cmf_customer['email'])?$cmf_customer['email']:''; ?>">
                            <?php echo form_error('email','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="netword">网络用语：</label>
                            <textarea name="netword" cols="50" rows="10" style="resize: none;">
                                <?php echo !empty($cmf_customer['netword'])?$cmf_customer['netword']:''; ?>
                            </textarea>
                            <?php echo form_error('netword','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="bank">银行：</label>
                            <input type="text" class="form-control" name="bank" placeholder="Enter bank" value="<?php echo !empty($cmf_customer['bank'])?$cmf_customer['bank']:''; ?>">
                            <?php echo form_error('bank','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="accountnumber">帐号号码：</label>
                            <input type="text" class="form-control" name="accountnumber" placeholder="Enter accountnumber" value="<?php echo !empty($cmf_customer['accountnumber'])?$cmf_customer['accountnumber']:''; ?>">
                            <?php echo form_error('accountnumber','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="startdate">开始日期：</label>
                            <input readonly class="form-control" type="text" id="date-group1-4" placeholder="YYYY-MM-DD hh:mm" name="startdate">
                            <?php echo form_error('startdate','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="enddate">结束日期：</label>
                            <input readonly class="form-control" type="text" id="date-group1-2" placeholder="YYYY-MM-DD hh:mm" name="enddate">
                            <?php echo form_error('enddate','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="style">样式：</label>
                            <input type="text" class="form-control" name="style" placeholder="Enter style" value="<?php echo !empty($cmf_customer['style'])?$cmf_customer['style']:''; ?>">
                            <?php echo form_error('style','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="user_flag">用户标识：</label>
                            <input type="radio" name="user_flag" value=1>保留
                            <input type="radio" name="user_flag" value=0>删除
                            <?php echo form_error('user_flag','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="user_id">用户ID：</label>
                            <input type="text" class="form-control" name="user_id" placeholder="Enter user_id" value="<?php echo !empty($cmf_customer['user_id'])?$cmf_customer['user_id']:''; ?>">
                            <?php echo form_error('user_id','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="supplycn">供应商编号：</label>
                            <input type="text" class="form-control" name="supplycn" placeholder="Enter supplycn" value="<?php echo !empty($cmf_customer['supplycn'])?$cmf_customer['supplycn']:''; ?>">
                            <?php echo form_error('supplycn','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="sysuser">系统用户：</label>
                            <input type="text" class="form-control" name="sysuser" placeholder="Enter sysuser" value="<?php echo !empty($cmf_customer['sysuser'])?$cmf_customer['sysuser']:''; ?>">
                            <?php echo form_error('sysuser','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="explainStr">字符串：</label>
                            <textarea name="explainStr" cols="50" rows="10">
                                <?php echo !empty($cmf_customer['explainStr'])?$cmf_customer['explainStr']:''; ?>
                            </textarea>
                            <?php echo form_error('explainStr','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="briefStr">简串：</label>
                            <textarea name="briefStr" cols="50" rows="10">
                                <?php echo !empty($cmf_customer['briefStr'])?$cmf_customer['briefStr']:''; ?>
                            </textarea>
                            <?php echo form_error('briefStr','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="prodprice">产品报价：</label>
                            <input type="text" class="form-control" name="prodprice" placeholder="Enter prodprice" value="<?php echo !empty($cmf_customer['prodprice'])?$cmf_customer['prodprice']:''; ?>">
                            <?php echo form_error('prodprice','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="amtagio">amtagio：</label>
                            <input type="text" class="form-control" name="amtagio" placeholder="Enter amtagio" value="<?php echo !empty($cmf_customer['amtagio'])?$cmf_customer['amtagio']:''; ?>">
                            <?php echo form_error('amtagio','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="remark">备注：</label>
                            <textarea name="remark" cols="50" rows="10" style="resize: none;">
                                <?php echo !empty($cmf_customer['remark'])?$cmf_customer['remark']:''; ?>
                            </textarea>
                            <?php echo form_error('remark','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="recommand">推荐：</label>
                            <input type="text" class="form-control" name="recommand" placeholder="Enter recommand" value="<?php echo !empty($cmf_customer['recommand'])?$cmf_customer['recommand']:''; ?>">
                            <?php echo form_error('recommand','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="getaccount">获取帐户：</label>
                            <input type="text" class="form-control" name="getaccount" placeholder="Enter getaccount" value="<?php echo !empty($cmf_customer['getaccount'])?$cmf_customer['getaccount']:''; ?>">
                            <?php echo form_error('getaccount','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="yuchuzhi">预支出：</label>
                            <input type="text" class="form-control" name="yuchuzhi" placeholder="Enter yuchuzhi" value="<?php echo !empty($cmf_customer['yuchuzhi'])?$cmf_customer['yuchuzhi']:''; ?>">
                            <?php echo form_error('yuchuzhi','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="factgetmoney">实际获取金额：</label>
                            <input type="text" class="form-control" name="factgetmoney" placeholder="Enter factgetmoney" value="<?php echo !empty($cmf_customer['factgetmoney'])?$cmf_customer['factgetmoney']:''; ?>">
                            <?php echo form_error('factgetmoney','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="nogetmoney">未获取金额：</label>
                            <input type="text" class="form-control" name="nogetmoney" placeholder="Enter nogetmoney" value="<?php echo !empty($cmf_customer['nogetmoney'])?$cmf_customer['nogetmoney']:''; ?>">
                            <?php echo form_error('nogetmoney','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="origin">客户来源：</label>
                            <input type="radio" name="origin" value=1>内部推荐
                            <input type="radio" name="origin" value=2>网络选拔
                            <input type="radio" name="origin" value=3>行业推荐
                            <input type="radio" name="origin" value=0>其他
                            <?php echo form_error('origin','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="salemode">销售模式：</label>
                            <input type="radio" name="salemode" value=1>网上营销
                            <input type="radio" name="salemode" value=2>传统营销
                            <input type="radio" name="salemode" value=3>传统营销
                            <input type="radio" name="salemode" value=0>其他方式
                            <?php echo form_error('salemode','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="property">属性：</label>
                            <input type="radio" name="property" value=1>初等属性
                            <input type="radio" name="property" value=2>中等属性
                            <input type="radio" name="property" value=3>高等属性
                            <input type="radio" name="property" value=0>其他属性
                            <?php echo form_error('property','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="datascope">数据范围：</label>
                            <input type="text" class="form-control" name="datascope" placeholder="Enter datascope" value="<?php echo !empty($cmf_customer['datascope'])?$cmf_customer['datascope']:''; ?>">
                            <?php echo form_error('datascope','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="createdate">创建日期：</label>
                            <input readonly class="form-control" type="text" id="create_time" placeholder="YYYY-MM-DD hh:mm" name="createdate">
                            <?php echo form_error('createdate','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="integral">集成：</label>
                            <input type="text" class="form-control" name="integral" placeholder="Enter integral" value="<?php echo !empty($cmf_customer['integral'])?$cmf_customer['integral']:''; ?>">
                            <?php echo form_error('integral','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="lasttracetime">上次跟踪时间：</label>
                            <input readonly class="form-control" type="text" id="pay_time" placeholder="YYYY-MM-DD hh:mm" name="lasttracetime">
                            <?php echo form_error('lasttracetime','<p class="help-block text-danger">','</p>'); ?>
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