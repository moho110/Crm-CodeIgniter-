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
                <div class="panel-heading"><?php echo $action; ?> 申请报备 <a href="<?php echo site_url('/oa/CmfCrmShenqingbaobei/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="id">编号：</label>
                            <input type="text" class="form-control" name="id" placeholder="Enter id" value="<?php echo !empty($cmf_crm_shenqingbaobei['id'])?$cmf_crm_shenqingbaobei['id']:''; ?>">
                            <?php echo form_error('id','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="customerid">客户ID：</label>
                            <input type="text" class="form-control" name="customerid" placeholder="Enter customerid" value="<?php echo !empty($cmf_crm_shenqingbaobei['customerid'])?$cmf_crm_shenqingbaobei['customerid']:''; ?>">
                            <?php echo form_error('customerid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="linkmanid">联系人ID：</label>
                            <input type="text" class="form-control" name="linkmanid" placeholder="Enter linkmanid" value="<?php echo !empty($cmf_crm_shenqingbaobei['linkmanid'])?$cmf_crm_shenqingbaobei['linkmanid']:''; ?>">
                            <?php echo form_error('linkmanid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="chanceid">机会ID：</label>
                            <input type="text" class="form-control" name="chanceid" placeholder="Enter chanceid" value="<?php echo !empty($cmf_crm_shenqingbaobei['chanceid'])?$cmf_crm_shenqingbaobei['chanceid']:''; ?>">
                            <?php echo form_error('chanceid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="introduce">介绍：</label>
                            <input type="text" class="form-control" name="introduce" placeholder="Enter introduce" value="<?php echo !empty($cmf_crm_shenqingbaobei['introduce'])?$cmf_crm_shenqingbaobei['introduce']:''; ?>">
                            <?php echo form_error('introduce','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="zhichi">支持：</label>
                            <input type="text" class="form-control" name="zhichi" placeholder="Enter zhichi" value="<?php echo !empty($cmf_crm_shenqingbaobei['zhichi'])?$cmf_crm_shenqingbaobei['zhichi']:''; ?>">
                            <?php echo form_error('zhichi','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="fujian">附件：</label>
                            <input type="text" class="form-control" name="fujian" placeholder="Enter fujian" value="<?php echo !empty($cmf_crm_shenqingbaobei['fujian'])?$cmf_crm_shenqingbaobei['fujian']:''; ?>">
                            <?php echo form_error('fujian','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="createman">创建人：</label>
                            <input type="text" class="form-control" name="createman" placeholder="Enter createman" value="<?php echo !empty($cmf_crm_shenqingbaobei['createman'])?$cmf_crm_shenqingbaobei['createman']:''; ?>">
                            <?php echo form_error('createman','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="createtime">创建时间：</label>
                            <input type="text" class="form-control" name="createtime" placeholder="Enter createtime" value="<?php echo !empty($cmf_crm_shenqingbaobei['createtime'])?$cmf_crm_shenqingbaobei['createtime']:''; ?>">
                            <?php echo form_error('createtime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="state">状态：</label>
                            <input type="text" class="form-control" name="state" placeholder="Enter state" value="<?php echo !empty($cmf_crm_shenqingbaobei['state'])?$cmf_crm_shenqingbaobei['state']:''; ?>">
                            <?php echo form_error('state','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="piyu">批阅：</label>
                            <input type="text" class="form-control" name="piyu" placeholder="Enter piyu" value="<?php echo !empty($cmf_crm_shenqingbaobei['piyu'])?$cmf_crm_shenqingbaobei['piyu']:''; ?>">
                            <?php echo form_error('piyu','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="shenheman">审核人：</label>
                            <input type="text" class="form-control" name="shenheman" placeholder="Enter shenheman" value="<?php echo !empty($cmf_crm_shenqingbaobei['shenheman'])?$cmf_crm_shenqingbaobei['shenheman']:''; ?>">
                            <?php echo form_error('shenheman','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="shenhetime">审核时间：</label>
                            <input type="text" class="form-control" name="shenhetime" placeholder="Enter shenhetime" value="<?php echo !empty($cmf_crm_shenqingbaobei['shenhetime'])?$cmf_crm_shenqingbaobei['shenhetime']:''; ?>">
                            <?php echo form_error('shenhetime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="zhuti">主题：</label>
                            <input type="text" class="form-control" name="zhuti" placeholder="Enter zhuti" value="<?php echo !empty($cmf_crm_shenqingbaobei['zhuti'])?$cmf_crm_shenqingbaobei['zhuti']:''; ?>">
                            <?php echo form_error('zhuti','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="tixingren">提醒人：</label>
                            <input type="text" class="form-control" name="tixingren" placeholder="Enter tixingren" value="<?php echo !empty($cmf_crm_shenqingbaobei['tixingren'])?$cmf_crm_shenqingbaobei['tixingren']:''; ?>">
                            <?php echo form_error('tixingren','<p class="help-block text-danger">','</p>'); ?>
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