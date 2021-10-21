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
                <div class="panel-heading"><?php echo $action; ?> 客户方案 <a href="<?php echo site_url('/oa/CmfCustomerFangan/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="id">编号：</label>
                            <input type="text" class="form-control" name="id" placeholder="Enter id" value="<?php echo !empty($cmf_customer_fangan['id'])?$cmf_customer_fangan['id']:''; ?>">
                            <?php echo form_error('id','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="zhuti">主题：</label>
                            <input type="text" class="form-control" name="zhuti" placeholder="Enter zhuti" value="<?php echo !empty($cmf_customer_fangan['zhuti'])?$cmf_customer_fangan['zhuti']:''; ?>">
                            <?php echo form_error('zhuti','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="customerid">客户ID：</label>
                            <input type="text" class="form-control" name="customerid" placeholder="Enter customerid" value="<?php echo !empty($cmf_customer_fangan['customerid'])?$cmf_customer_fangan['customerid']:''; ?>">
                            <?php echo form_error('customerid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="chanceid">机会ID：</label>
                            <input type="text" class="form-control" name="chanceid" placeholder="Enter chanceid" value="<?php echo !empty($cmf_customer_fangan['chanceid'])?$cmf_customer_fangan['chanceid']:''; ?>">
                            <?php echo form_error('chanceid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="content">内容：</label>
                            <textarea name="content" cols="50" rows="10"></textarea>
                            <?php echo form_error('content','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="fankui">反馈：</label>
                            <textarea name="content" cols="50" rows="10"></textarea>
                            <?php echo form_error('fankui','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="createman">创建人：</label>
                            <input type="text" class="form-control" name="createman" placeholder="Enter createman" value="<?php echo !empty($cmf_customer_fangan['createman'])?$cmf_customer_fangan['createman']:''; ?>">
                            <?php echo form_error('createman','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="createtime">创建时间：</label>
                            <input type="text" class="form-control" name="createtime" placeholder="Enter createtime" value="<?php echo !empty($cmf_customer_fangan['createtime'])?$cmf_customer_fangan['createtime']:''; ?>">
                            <?php echo form_error('createtime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="fujian">附件：</label>
                            <input type="text" class="form-control" name="fujian" placeholder="Enter fujian" value="<?php echo !empty($cmf_customer_fangan['fujian'])?$cmf_customer_fangan['fujian']:''; ?>">
                            <?php echo form_error('fujian','<p class="help-block text-danger">','</p>'); ?>
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