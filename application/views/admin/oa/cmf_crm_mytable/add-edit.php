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
                <div class="panel-heading"><?php echo $action; ?> 我的表 <a href="<?php echo site_url('/oa/CmfCrmMytable/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="moduleId">模块ID：</label>
                            <input type="text" class="form-control" name="moduleId" placeholder="Enter moduleId" value="<?php echo !empty($cmf_crm_mytable['moduleId'])?$cmf_crm_mytable['moduleId']:''; ?>">
                            <?php echo form_error('moduleId','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="moduleName">模块名称：</label>
                            <input type="text" class="form-control" name="moduleName" placeholder="Enter moduleName" value="<?php echo !empty($cmf_crm_mytable['moduleName'])?$cmf_crm_mytable['moduleName']:''; ?>">
                            <?php echo form_error('moduleName','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="modulePosition">模块位置：</label>
                            <input type="text" class="form-control" name="modulePosition" placeholder="Enter modulePosition" value="<?php echo !empty($cmf_crm_mytable['modulePosition'])?$cmf_crm_mytable['modulePosition']:''; ?>">
                            <?php echo form_error('modulePosition','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="moduleAttr">模块属性：</label>
                            <input type="text" class="form-control" name="moduleAttr" placeholder="Enter moduleAttr" value="<?php echo !empty($cmf_crm_mytable['moduleAttr'])?$cmf_crm_mytable['moduleAttr']:''; ?>">
                            <?php echo form_error('moduleAttr','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="displayLineNumber">显示行号：</label>
                            <input type="text" class="form-control" name="displayLineNumber" placeholder="Enter displayLineNumber" value="<?php echo !empty($cmf_crm_mytable['displayLineNumber'])?$cmf_crm_mytable['displayLineNumber']:''; ?>">
                            <?php echo form_error('displayLineNumber','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="scrollDisplay">滚动显示：</label>
                            <input type="text" class="form-control" name="scrollDisplay" placeholder="Enter scrollDisplay" value="<?php echo !empty($cmf_crm_mytable['scrollDisplay'])?$cmf_crm_mytable['scrollDisplay']:''; ?>">
                            <?php echo form_error('scrollDisplay','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="creator">创建者：</label>
                            <input type="text" class="form-control" name="creator" placeholder="Enter creator" value="<?php echo !empty($cmf_crm_mytable['creator'])?$cmf_crm_mytable['creator']:''; ?>">
                            <?php echo form_error('creator','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="createTime">创建时间：</label>
                            <input readonly class="form-control" type="text" id="date-group1-4" placeholder="YYYY-MM-DD hh:mm" name="createTime">
                            <?php echo form_error('createTime','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="memo">备注：</label>
                            <textarea name="memo" cols="50" rows="10" style="resize: none;"><?php echo !empty($cmf_crm_mytable['memo'])?$cmf_crm_mytable['memo']:''; ?></textarea>
                            <?php echo form_error('memo','<p class="help-block text-danger">','</p>'); ?>
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