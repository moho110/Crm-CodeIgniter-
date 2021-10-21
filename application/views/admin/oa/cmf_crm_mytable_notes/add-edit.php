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
                <div class="panel-heading"><?php echo $action; ?> 我的表便签 <a href="<?php echo site_url('/oa/CmfCrmMytableNotes/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="Id">编号：</label>
                            <input type="text" class="form-control" name="Id" placeholder="Enter Id" value="<?php echo !empty($cmf_crm_mytable_notes['Id'])?$cmf_crm_mytable_notes['Id']:''; ?>">
                            <?php echo form_error('Id','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="noteContent">便签内容：</label>
                            <input type="text" class="form-control" name="noteContent" placeholder="Enter noteContent" value="<?php echo !empty($cmf_crm_mytable_notes['noteContent'])?$cmf_crm_mytable_notes['noteContent']:''; ?>">
                            <?php echo form_error('noteContent','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="createId">创建ID：</label>
                            <input type="text" class="form-control" name="createId" placeholder="Enter createId" value="<?php echo !empty($cmf_crm_mytable_notes['createId'])?$cmf_crm_mytable_notes['createId']:''; ?>">
                            <?php echo form_error('createId','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="createTime">创建时间：</label>
                            <input readonly class="form-control" type="text" id="date-group1-4" placeholder="YYYY-MM-DD hh:mm" name="createTime">
                            <?php echo form_error('createTime','<p class="help-block text-danger">','</p>'); ?>
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