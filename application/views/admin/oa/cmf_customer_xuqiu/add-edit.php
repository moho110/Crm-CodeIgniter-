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
                <div class="panel-heading"><?php echo $action; ?> 客户需求 <a href="<?php echo site_url('/oa/CmfCustomerXuqiu/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="id">编号：</label>
                            <input type="text" class="form-control" name="id" placeholder="Enter id" value="<?php echo !empty($cmf_customer_xuqiu['id'])?$cmf_customer_xuqiu['id']:''; ?>">
                            <?php echo form_error('id','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="zhuti">主题：</label>
                            <input type="text" class="form-control" name="zhuti" placeholder="Enter zhuti" value="<?php echo !empty($cmf_customer_xuqiu['zhuti'])?$cmf_customer_xuqiu['zhuti']:''; ?>">
                            <?php echo form_error('zhuti','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="tigongren">提供人：</label>
                            <input type="text" class="form-control" name="tigongren" placeholder="Enter tigongren" value="<?php echo !empty($cmf_customer_xuqiu['tigongren'])?$cmf_customer_xuqiu['tigongren']:''; ?>">
                            <?php echo form_error('tigongren','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="customerid">客户ID：</label>
                            <input type="text" class="form-control" name="customerid" placeholder="Enter customerid" value="<?php echo !empty($cmf_customer_xuqiu['customerid'])?$cmf_customer_xuqiu['customerid']:''; ?>">
                            <?php echo form_error('customerid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="chanceid">机会ID：</label>
                            <input type="text" class="form-control" name="chanceid" placeholder="Enter chanceid" value="<?php echo !empty($cmf_customer_xuqiu['chanceid'])?$cmf_customer_xuqiu['chanceid']:''; ?>">
                            <?php echo form_error('chanceid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="import">输入：</label>
                            <input type="text" class="form-control" name="import" placeholder="Enter import" value="<?php echo !empty($cmf_customer_xuqiu['import'])?$cmf_customer_xuqiu['import']:''; ?>">
                            <?php echo form_error('import','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="content">内容：</label>
                            <textarea name="content" cols="140" rows="10" style="resize: none;">
                                <?php echo !empty($cmf_customer_xuqiu['content'])?$cmf_customer_xuqiu['content']:''; ?>
                            </textarea>
                            <?php echo form_error('content','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="createman">创建人：</label>
                            <input type="text" class="form-control" name="createman" placeholder="Enter createman" value="<?php echo !empty($cmf_customer_xuqiu['createman'])?$cmf_customer_xuqiu['createman']:''; ?>">
                            <?php echo form_error('createman','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="createtime">创建时间：</label>
                            <input readonly class="form-control" type="text" id="date-group1-4" placeholder="YYYY-MM-DD hh:mm" name="createtime">
                            <?php echo form_error('createtime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="fujian">附件：</label>
                            <input type="text" class="form-control" name="fujian" placeholder="Enter fujian" value="<?php echo !empty($cmf_customer_xuqiu['fujian'])?$cmf_customer_xuqiu['fujian']:''; ?>">
                            <?php echo form_error('fujian','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="fangan">方案：</label>
                            <textarea name="fangan" cols="140" rows="10" style="resize: none;">
                                <?php echo !empty($cmf_customer_xuqiu['fangan'])?$cmf_customer_xuqiu['fangan']:''; ?>
                            </textarea>
                            <?php echo form_error('fangan','<p class="help-block text-danger">','</p>'); ?>
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