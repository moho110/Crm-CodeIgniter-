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
                <div class="panel-heading"><?php echo $action; ?> 联系人 <a href="<?php echo site_url('/oa/CmfLinkman/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="ROWID">编号：</label>
                            <input readonly type="text" class="form-control" name="ROWID" placeholder="Enter ROWID" value="<?php echo !empty($cmf_linkman['ROWID'])?$cmf_linkman['ROWID']:''; ?>">
                            <?php echo form_error('ROWID','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="linkmanname">联系人名称：</label>
                            <input type="text" class="form-control" name="linkmanname" placeholder="Enter linkmanname" value="<?php echo !empty($cmf_linkman['linkmanname'])?$cmf_linkman['linkmanname']:''; ?>">
                            <?php echo form_error('linkmanname','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="linkmanpy">联系人PY：</label>
                            <input type="text" class="form-control" name="linkmanpy" placeholder="Enter linkmanpy" value="<?php echo !empty($cmf_linkman['linkmanpy'])?$cmf_linkman['linkmanpy']:''; ?>">
                            <?php echo form_error('linkmanpy','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="gender">性别：</label>
                            <input type="radio" name="gender" value="1">男
                            <input type="radio" name="gender" value="0">女
                            <?php echo form_error('gender','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="phone">电话号码：</label>
                            <input type="text" class="form-control" name="phone" placeholder="Enter phone" value="<?php echo !empty($cmf_linkman['phone'])?$cmf_linkman['phone']:''; ?>">
                            <?php echo form_error('phone','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="fax">传真号码：</label>
                            <input type="text" class="form-control" name="fax" placeholder="Enter fax" value="<?php echo !empty($cmf_linkman['fax'])?$cmf_linkman['fax']:''; ?>">
                            <?php echo form_error('fax','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="email">电子邮件：</label>
                            <input type="text" class="form-control" name="email" placeholder="Enter email" value="<?php echo !empty($cmf_linkman['email'])?$cmf_linkman['email']:''; ?>">
                            <?php echo form_error('email','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="postcode">邮政编码：</label>
                            <input type="text" class="form-control" name="postcode" placeholder="Enter postcode" value="<?php echo !empty($cmf_linkman['postcode'])?$cmf_linkman['postcode']:''; ?>">
                            <?php echo form_error('postcode','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="mark">备注：</label>
                            <textarea name="mark" cols="140" rows="10" style="resize: none;">
                                <?php echo !empty($cmf_linkman['mark'])?$cmf_linkman['mark']:''; ?>
                            </textarea>
                            <?php echo form_error('mark','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="business">业务：</label>
                            <input type="text" class="form-control" name="business" placeholder="Enter business" value="<?php echo !empty($cmf_linkman['business'])?$cmf_linkman['business']:''; ?>">
                            <?php echo form_error('business','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="businessexpian">业务expian：</label>
                            <input type="text" class="form-control" name="businessexpian" placeholder="Enter businessexpian" value="<?php echo !empty($cmf_linkman['businessexpian'])?$cmf_linkman['businessexpian']:''; ?>">
                            <?php echo form_error('businessexpian','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="address">地址：</label>
                            <input type="text" class="form-control" name="address" placeholder="Enter address" value="<?php echo !empty($cmf_linkman['address'])?$cmf_linkman['address']:''; ?>">
                            <?php echo form_error('address','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="user_flag">用户标识：</label>
                            <input type="radio" name="user_flag" value="1">保留
                            <input type="radio" name="user_flag" value="0">删除
                            <?php echo form_error('user_flag','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="user_id">用户ID：</label>
                            <input type="text" class="form-control" name="user_id" placeholder="Enter user_id" value="<?php echo !empty($cmf_linkman['user_id'])?$cmf_linkman['user_id']:''; ?>">
                            <?php echo form_error('user_id','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="supplycn">供应商编号：</label>
                            <input type="text" class="form-control" name="supplycn" placeholder="Enter supplycn" value="<?php echo !empty($cmf_linkman['supplycn'])?$cmf_linkman['supplycn']:''; ?>">
                            <?php echo form_error('supplycn','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="customerid">客户ID：</label>
                            <input type="text" class="form-control" name="customerid" placeholder="Enter customerid" value="<?php echo !empty($cmf_linkman['customerid'])?$cmf_linkman['customerid']:''; ?>">
                            <?php echo form_error('customerid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="mobile">移动电话：</label>
                            <input type="text" class="form-control" name="mobile" placeholder="Enter mobile" value="<?php echo !empty($cmf_linkman['mobile'])?$cmf_linkman['mobile']:''; ?>">
                            <?php echo form_error('mobile','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="birthday">出生年月日：</label>
                            <input readonly class="form-control" type="text" id="date-group1-4" placeholder="YYYY-MM-DD hh:mm" name="birthday">
                            <?php echo form_error('birthday','<p class="help-block text-danger">','</p>'); ?>
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