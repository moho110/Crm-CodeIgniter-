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
                <div class="panel-heading"><?php echo $action; ?> 纪念日 <a href="<?php echo site_url('/oa/CmfCrmRemember/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="id">编号：</label>
                            <input type="text" class="form-control" name="id" placeholder="Enter id" value="<?php echo !empty($cmf_crm_remember['id'])?$cmf_crm_remember['id']:''; ?>">
                            <?php echo form_error('id','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="linkmanid">联系人：</label>
                            <select>
                                <option value="">请选联系人</option>
                                <?php foreach($CmfSupplylinkman as $CmfSupplylinkman) {?>
                                <option value="<?php echo $CmfSupplylinkman['ROWID'];?>"><?php echo $CmfSupplylinkman['supplyname'];?></option>
                                <?php }?>
                            </select>
                            <?php echo form_error('linkmanid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="mem_type">纪念日类型：</label>
                            <input type="text" class="form-control" name="mem_type" placeholder="Enter mem_type" value="<?php echo !empty($cmf_crm_remember['mem_type'])?$cmf_crm_remember['mem_type']:''; ?>">
                            <?php echo form_error('mem_type','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="customerid">客户ID：</label>
                            <input type="text" class="form-control" name="customerid" placeholder="Enter customerid" value="<?php echo !empty($cmf_crm_remember['customerid'])?$cmf_crm_remember['customerid']:''; ?>">
                            <?php echo form_error('customerid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="mem_date">纪念日日期：</label>
                            <input readonly class="form-control" type="text" id="date-group1-2" placeholder="YYYY-MM-DD" name="mem_date">
                            <?php echo form_error('mem_date','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="createtime">创建时间：</label>
                            <input readonly class="form-control" type="text" id="date-group1-4" placeholder="YYYY-MM-DD hh:mm" name="createtime">
                            <?php echo form_error('createtime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="operman">操作人：</label>
                            <input type="text" class="form-control" name="operman" placeholder="Enter operman" value="<?php echo !empty($cmf_crm_remember['operman'])?$cmf_crm_remember['operman']:''; ?>">
                            <?php echo form_error('operman','<p class="help-block text-danger">','</p>'); ?>
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